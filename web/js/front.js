(function () {
    "use strict";
    /*global angular */
    /*global $ */
    /*global document */
    /*global window */
    /*global locale */
    $(document).ready(function () {
        $("#search-box-tooltip").tooltip();
        $("#collection-date-from").datepicker({dateFormat: "yy-mm-dd"});
        $("#collection-date-to").datepicker({dateFormat: "yy-mm-dd"});
        $("#recording-date-from").datepicker({dateFormat: "yy-mm-dd"});
        $("#recording-date-to").datepicker({dateFormat: "yy-mm-dd"});
    });

    angular.module("loadingService", [],
        function ($provide) {
            $provide.factory("myHttpInterceptor", function ($q) {
                return function (promise) {
                    return promise.then(function (response) {
                        $("#loading").removeClass("la-animate");
                        return response;
                    }, function (response) {
                        $("#loading").removeClass("la-animate");
                        return $q.reject(response);
                    });
                };
            });
        });

    angular.module("AccessionsApp", ["ui.bootstrap", "loadingService"], function ($interpolateProvider, $httpProvider) {
        $interpolateProvider.startSymbol("¤");
        $interpolateProvider.endSymbol("¤");
        $httpProvider.responseInterceptors.push("myHttpInterceptor");
        var spinnerFunction = function (data) {
            $("#loading").addClass("la-animate");
            return data;
        };
        $httpProvider.defaults.transformRequest.push(spinnerFunction);
    })

        .directive("datepicker", function () {
            return {
                restrict: "A",
                require: "ngModel",
                link: function (scope, element) {
                    $(element).datepicker({
                        dateFormat: "YYYY-MM-dd",
                        onSelect: function (date) {
                            var ngModelName = this.attributes["data-ng-model"].value;
                            scope[ngModelName] = date;
                            scope.$apply();
                        }
                    });
                }
            };
        })

        .controller("SearchController", function ($scope, $http) {
            $scope.accessions = {};
            $scope.accession_listing_fields = ["id", "name", "taxon", "plantingSeason",
                "populationType", "status", "country", "collectionSite", "collectionCode",
                "conservationInstitute", "collectionDate", "recordingDate", "herbariumStatus",
                "conservationStatus", "habitat", "sampleArea", "irrigation", "threshingStatus",
                "breeder", "pedigree", "parentRock", "slope", "species", "family", "genus",
                "activeWeight", "activeSeedCount", "activeFromDate", "activeStorageLocation",
                "activeViability", "activeViabilityTestDate", "seedWeight100", "seedWeight1000",
                "activeStorageLocationAlt", "storageType", "moisture", "remarks"];
            $scope.params = {};
            $scope.params.filters = {};
            $scope.params.filters.orderBy = "id";
            $scope.params.filters.order = "ASC";
            $scope.params.paging = {};
            $scope.params.paging.page_size = 30;
            $scope.params.paging.page = 1;
            $scope.filter_categories = {};
            $scope.filter_categories.show_temporal = false;
            $scope.accession_listing_fields_selection = ["id", "name", "collectionDate"];
            $scope.show_listing_selections = false;
            $scope.string_filtering_choices = [
                {type: "STARTSWITH", name: "begins with"},
                {type: "ENDSWITH", name: "ends with"},
                {type: "CONTAINS", name: "contains"}
            ];

            $scope.fetch = function () {
                $http.get("/app_dev.php/api/accessions", {"params": $scope.params}).success(function (response) {
                    $scope.accessions = response;
                });
            };

            $scope.add_filter = function (type) {
                if ($scope.params.filters[type] === undefined) {
                    $scope.params.filters[type] = [];
                }
                $scope.params.filters[type].push({});
            };

            $scope.remove_filter = function (type, filter) {
                var idx = $scope.params.filters[type].indexOf(filter);
                if (idx > -1) {
                    $scope.params.filters[type].splice(idx, 1);
                }
            };

            $scope.discard_fts_and_fetch = function () {
                $scope.params.filters.fts = undefined;
                $scope.fetch();
            };

            $scope.toggle_listing = function () {
                $scope.show_listing_selections = !$scope.show_listing_selections;
            };

            $scope.clear_filters = function () {
                $scope.params = {};
                $scope.params.filters = {};
                $scope.params.paging = {};
                $scope.params.paging.page_size = 30;
                $scope.params.paging.page = 1;
                $scope.fetch();
            };

            $scope.clear_selected_filter = function (name) {
                $scope.params.filters[name] = undefined;
                $scope.fetch();
            };

            $scope.format_date = function (str) {
                if (isNaN(Date.parse(str))) {
                    return "Unknown";
                }
                return str.split("T")[0];
            };

            $scope.next_page = function () {
                $scope.params.paging.page += 1;
                $scope.fetch();
            };

            $scope.previous_page = function () {
                $scope.params.paging.page -= 1;
                $scope.fetch();
            };

            $scope.toggle_selection = function toggle_selection(field) {
                var idx = $scope.accession_listing_fields_selection.indexOf(field);
                if (idx > -1) {
                    $scope.accession_listing_fields_selection.splice(idx, 1);
                } else {
                    $scope.accession_listing_fields_selection.push(field);
                }
            };

            $scope.get_typeahead = function (val, entity) {
                return $http.get("/app_dev.php/" + locale + "/typeahead_" + entity, { params: { input: val }}).then(function (res) {
                    var matches = [];
                    angular.forEach(res.data, function (item) {
                        matches.push({id: item.id, name: item.name});
                    });
                    return matches;
                });
            };

            $scope.export_results_xls = function () {
                window.location = "/app_dev.php/" + locale + "/export_excel?fields=" + JSON.stringify($scope.accession_listing_fields_selection) + "&filters=" + JSON.stringify($scope.params.filters) + "&paging=" + JSON.stringify($scope.params.paging);
            };

            $scope.export_results_json = function () {
                window.open("/app_dev.php/api/accessions.json?" + JSON.stringify($scope.params));
            };

            $scope.export_results_xml = function () {
                window.open("/app_dev.php/api/accessions.xml?" + JSON.stringify($scope.params));
            };

            $scope.sort = function (column) {
                if ($scope.params.filters.orderBy === column) {
                    if ($scope.params.filters.order === "ASC") {
                        $scope.params.filters.order = "DESC";
                    }
                } else {
                    $scope.params.filters.order = "ASC";
                }
                $scope.params.filters.orderBy = column;
                $scope.fetch();
            };

            $scope.fetch();
        });
}());