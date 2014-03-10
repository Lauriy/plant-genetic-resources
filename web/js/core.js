(function () {
    "use strict";
    /*global angular */
    /*global $ */
    /*global document */
    $(document).ready(function () {
        $("#search-box-tooltip").tooltip();
        $("#collection-date-from").datepicker({dateFormat: "yy-mm-dd"});
        $("#collection-date-to").datepicker({dateFormat: "yy-mm-dd"});
        $("#recording-date-from").datepicker({dateFormat: "yy-mm-dd"});
        $("#recording-date-to").datepicker({dateFormat: "yy-mm-dd"});
    });
    angular.module("AccessionsApp", [], function ($interpolateProvider) {
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
            $scope.accession_listing_fields = ["id", "name", "taxon", "plantingSeason", "populationType", "status", "country", "collectionSite", "collectionCode", "conservationInstitute", "collectionDate", "recordingDate", "herbariumStatus", "conservationStatus", "habitat", "sampleArea", "irrigation", "threshingStatus", "breeder", "pedigree"];
            $scope.params = {};
            $scope.params.filters = {};
            $scope.params.paging = {};
            $scope.params.paging.page_size = 30;
            $scope.params.paging.page = 1;
            $scope.accession_listing_fields_selection = ["id", "name", "collectionDate"];
            $scope.show_listing_selections = false;

            $scope.fetch = function () {
                $http.get("app_dev.php/api/accessions", {"params": $scope.params}).success(function (response) {
                    $scope.accessions = response;
                });
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

            $scope.fetch();
        });
}());