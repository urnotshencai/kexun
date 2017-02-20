var module = angular.module('zhike.cp', [
    'ngRoute'
]);
module.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/zhike/cp/:page', {
        templateUrl: 'zhike/cp/ceping.html',
        controller: 'alController'
    });
}]);
module.controller('alController',["$scope","$http","$routeParams","$route",function ($scope,$http,$routeParams,$route) {
    $http.get('http://localhost/05PHP/kexun/zhike/cp/select.php')
        .success(function(data){
            $scope.items = data;
            var page = parseInt($routeParams.page);
            var dataArr = [];
            var du = 0;
            changePage(page);
            function changePage(page) {
                if (page < 2){
                    du = (page + 1) * 5
                }else {
                    du = data.length;
                }
                for (var i = page * 5;i < du;i++){
                    dataArr.push(data[i]);
                }
                $scope.items = dataArr;
                $scope.currentPage = page;
                $scope.onePage = false;
            }
            $scope.go = function (page) {
                switch (page){
                    case 0:
                        console.log($scope.onePage);
                        if ($scope.onePage){
                            console.log("aa");
                            changePage(page);
                            $route.updateParams({page:page});
                            break;
                        }
                    case 1:
                        changePage(page);
                        $route.updateParams({page:page});
                        break;
                    case 2:
                        changePage(page);
                        $route.updateParams({page:page});
                        break;
                    default:
                        break;
                }
            };
            $scope.nextPage = function (page) {
                if (page >= 0 && page <= 2){
                    $route.updateParams({page:page});
                }
            }
        })
}]);