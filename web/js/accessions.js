var AccessionsApp = angular.module("AccessionsApp", [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('¤');
    $interpolateProvider.endSymbol('¤');
})

.controller('SearchController', function($scope, $http) {
    $scope.accessions = {};
    $scope.accession_listing_fields = accession_listing_fields;
    $http.get("app_dev.php/api/accessions", {params: {"page": 1}}).success(function(response) {
        $scope.accessions = response;
    });
});