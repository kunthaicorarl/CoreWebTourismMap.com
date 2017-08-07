var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);
app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'app/templates/home.html',
                controller: 'AdminController'
            }).
            when('/items', {
                templateUrl: 'app/templates/province.html',
                controller: 'ItemController'
            });
}]);