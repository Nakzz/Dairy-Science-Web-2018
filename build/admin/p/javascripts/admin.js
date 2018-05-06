var adminPanel = angular.module('AdminPanel', ['ui.bootstrap', 'ngResource']);

adminPanel.factory('DateRange', ['$resource', function ($resource) {
    return $resource('dateRange');
}]);

adminPanel.factory('Report', ['$resource', function ($resource) {
    return $resource('report', {}, {get: {method: 'get', isArray: false}});
}]);

adminPanel.controller('AdminPanelController', ['$scope', 'DateRange', 'Report', function ($scope, DateRange, Report) {
    DateRange.get([], function (dateRange) {
        $scope.startDatePicker = new DatePicker(dateRange);
        $scope.endDatePicker = new DatePicker(dateRange);
        $scope.isStartDateAfterEndDate = function () {
            return $scope.startDatePicker.date > $scope.endDatePicker.date;
        };
        $scope.getReport = function () {
            $scope.generatingReport = true;
            Report.get({
                startDate: $scope.startDatePicker.date.toISOString(),
                endDate: $scope.endDatePicker.date.toISOString(),
                detailed: $scope.detailed
            }, function (response) {
                $scope.generatingReport = false;
                $scope.analysisForm.$setPristine();
                if (response.error) {
                    $scope.errorGeneratingSpreadsheet = true;
                } else {
                    $scope.reportLink = response.reportLink;
                }
            });
        };
        $scope.isPeriodTooLong = function () {
            var diff = $scope.endDatePicker.date.getTime() - $scope.startDatePicker.date.getTime();
            var numDays = diff / (24 * 60 * 60 * 1000);
            return numDays > 31;
        };
    });
    $scope.detailed = false;
}]);

function DatePicker(dateRange) {
    this.minDate = new Date(dateRange.min);
    this.maxDate = new Date(dateRange.max);
    this.date = new Date(dateRange.max);
    this.opened = false;
    this.toggle = function ($event) {
        $event.preventDefault();
        $event.stopPropagation();
        this.opened = !this.opened;
    }
}
