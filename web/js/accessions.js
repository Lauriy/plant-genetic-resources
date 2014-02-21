angular.module("AccessionsApp", [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol("¤");
    $interpolateProvider.endSymbol("¤");
})

    .directive("jqdatepicker", function () {
        return {
            restrict: "A",
            require: "ngModel",
            link: function (scope, element, attrs, ngModelCtrl) {
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
        $scope.params = {};
        $scope.params.filters = {};
        $scope.params.paging = {};
        $scope.params.paging.page_size = 10;
        $scope.params.paging.page = 1;
        $scope.accession_listing_fields = ["id", "name", "conservationInstitute", "collectionDate"];
        $scope.accession_filtering_fields = ["collectionDate"];
        $scope.new_filter = {};

        $scope.fetch = function () {
            $http.get("app_dev.php/api/accessions", {"params": $scope.params}).success(function (response) {
                $scope.accessions = response;
                $("#collection_date_from").datepicker({dateFormat: "yy-mm-dd"});
                $("#collection_date_to").datepicker({dateFormat: "yy-mm-dd"});
            });
        };

        $scope.format_date = function (str) {
            if (isNaN(Date.parse(str))) {
                return "Unknown";
            } else {
                return str.split("T")[0];
            }
        };

        $scope.add_filter = function () {
            $scope.params.filters[$scope.new_filter.filter_type] = $scope.new_filter;
            $scope.new_filter = {};
            $scope.fetch();
        };

        $scope.fetch();
    });