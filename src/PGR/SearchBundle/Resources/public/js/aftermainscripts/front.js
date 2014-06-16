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

    angular.module("AccessionsApp", ["ui.bootstrap", "loadingService", "ngAnimate", "pasvaz.bindonce"], function ($interpolateProvider, $httpProvider) {
        var spinnerFunction = function (data) {
            $("#loading").addClass("la-animate");
            return data;
        };
        $interpolateProvider.startSymbol("¤");
        $interpolateProvider.endSymbol("¤");
        $httpProvider.responseInterceptors.push("myHttpInterceptor");
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

        .directive('ngEnter', function () {
            return function (scope, element, attrs) {
                element.bind("keydown keypress", function (event) {
                    if (event.which === 13) {
                        scope.$apply(function () {
                            scope.$eval(attrs.ngEnter, {'event': event});
                        });
                        event.preventDefault();
                    }
                });
            };
        })

        .controller("SearchController", function ($scope, $http, filterFilter) {
            $scope.accessions = {};
            $scope.accession_listing_fields = ["id", "altIdentifier", "altIdentifierType", "name", "taxon", "plantingSeason",
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
            $scope.accession_listing_fields_selection = ["id", "name", "altIdentifier", "altIdentifierType"];
            $scope.show_listing_selections = false;
            $scope.string_filtering_choices = [
                {type: "STARTSWITH", name: "begins with"},
                {type: "ENDSWITH", name: "ends with"},
                {type: "CONTAINS", name: "contains"}
            ];

            $scope.fetch = function () {
                $http.get("/api/accessions", {"params": $scope.params}).success(function (response) {
                    $scope.accessions = response;
                });
                $scope.load_holding_institutes();
            };

            $scope.add_filter = function (type) {
                if ($scope.params.filters[type] === undefined) {
                    $scope.params.filters[type] = [];
                }
                if (type === "holding_institute") {
                    $scope.load_holding_institutes();
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
                var i = 0;
                $scope.params = {};
                $scope.params.filters = {};
                $scope.params.paging = {};
                $scope.params.paging.page_size = 30;
                $scope.params.paging.page = 1;
                for (i; i < $scope.all_holding_institutes.length; i += 1) {
                    $scope.all_holding_institutes[i].selected = false;
                }
                $scope.fetch();
            };

            $scope.clear_selected_filter = function (name) {
                $scope.params.filters[name] = undefined;
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

            $scope.toggle_selection = function (field) {
                var idx = $scope.accession_listing_fields_selection.indexOf(field);
                if (idx > -1) {
                    $scope.accession_listing_fields_selection.splice(idx, 1);
                } else {
                    $scope.accession_listing_fields_selection.push(field);
                }
            };

            $scope.load_holding_institutes = function () {
                if ($scope.all_holding_institutes === undefined) {
                    $http.get("/api/cooperators", {}).success(function (response) {
                        $scope.all_holding_institutes = response;
                    });
                }
            };

            $scope.selectedHoldingInstitutes = function selectedHoldingInstitutes() {
                return filterFilter($scope.all_holding_institutes, { selected: true });
            };

            $scope.$watch('all_holding_institutes|filter:{selected:true}', function (nv) {
                if (nv) {
                    $scope.params.filters.holding_institute = nv.map(function (institute) {
                        return institute.id;
                    });
                }
            }, true);

            $scope.get_typeahead = function (val, entity) {
                return $http.get("/" + locale + "/typeahead_" + entity, { params: { input: val }}).then(function (res) {
                    var matches = [];
                    angular.forEach(res.data, function (item) {
                        matches.push({id: item.id, name: item.name});
                    });
                    return matches;
                });
            };

            $scope.export_results_xls = function () {
                window.location = "/" + locale + "/export_excel?fields=" + JSON.stringify($scope.accession_listing_fields_selection) + "&filters=" + JSON.stringify($scope.params.filters) + "&paging=" + JSON.stringify($scope.params.paging);
            };

            $scope.sort = function (column) {
                if ($scope.params.filters.orderBy === column) {
                    if ($scope.params.filters.order === "ASC") {
                        $scope.params.filters.order = "DESC";
                    } else {
                        $scope.params.filters.order = "ASC";
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