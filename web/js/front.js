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
    angular.module("AccessionsApp", ["ui.bootstrap"], function ($interpolateProvider) {
        $interpolateProvider.startSymbol("¤");
        $interpolateProvider.endSymbol("¤");
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
            $scope.accession_listing_fields = ["id", "name", "taxon", "plantingSeason", "populationType", "status", "country", "collectionSite", "collectionCode", "conservationInstitute", "collectionDate", "recordingDate", "herbariumStatus", "conservationStatus", "habitat", "sampleArea", "irrigation", "threshingStatus", "breeder", "pedigree", "parentRock", "slope"];
            $scope.params = {};
            $scope.params.filters = {};
            $scope.params.paging = {};
            $scope.params.paging.page_size = 30;
            $scope.params.paging.page = 1;
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

            $scope.add_crop_name_filter = function () {
                if ($scope.params.filters.crop_name === undefined) {
                    $scope.params.filters.crop_name = [];
                }
                $scope.params.filters.crop_name.push({type: $scope.string_filtering_choices[0].type, name: undefined});
            };

            $scope.remove_crop_name_filter = function (filter) {
                var idx = $scope.params.filters.crop_name.indexOf(filter);
                if (idx > -1) {
                    $scope.params.filters.crop_name.splice(idx, 1);
                }
            };

            $scope.add_taxon_filter = function () {
                if ($scope.params.filters.taxon === undefined) {
                    $scope.params.filters.taxon = [];
                }
                $scope.params.filters.taxon.push({id: undefined, name: undefined});
            };

            $scope.remove_taxon_filter = function (filter) {
                var idx = $scope.params.filters.taxon.indexOf(filter);
                if (idx > -1) {
                    $scope.params.filters.taxon.splice(idx, 1);
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
                $scope.params.paging = {};
                $scope.params.paging.page_size = 30;
                $scope.params.paging.page = 1;
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

            $scope.toggle_selection = function toggle_selection(field) {
                var idx = $scope.accession_listing_fields_selection.indexOf(field);
                if (idx > -1) {
                    $scope.accession_listing_fields_selection.splice(idx, 1);
                } else {
                    $scope.accession_listing_fields_selection.push(field);
                }
            };

            $scope.get_typeahead_taxa = function (val) {
                return $http.get("/app_dev.php/" + locale + "/typeahead_taxa", { params: { input: val }}).then(function (res) {
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

            $scope.fetch();
        });
}());