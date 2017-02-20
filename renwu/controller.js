var module = angular.module('kexun.renwu', [
    'ngRoute'
]);
module.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/renwu/:page', {
        templateUrl: 'renwu/view.html',
        controller: 'renwuController'
    });
}]);
module.controller('renwuController',["$scope","$http",'$routeParams','$route',function ($scope,$http,$routeParams,$route) {
    $scope.subjects = [];
    var count = 10;
    var page = parseInt($routeParams.page);
    var start = (page - 1) * count;
    //当前是第几页
    $scope.currentPage = page;
    console.log(page)
    //总页数
    $scope.totalPage = 0;
    $http.get("http://localhost/05PHP/kexun/route03.php?type=2")
        .success(function (data) {
            $scope.items = data;
            var page = parseInt($routeParams.page);
            var dataArr = [];
            var du = 0;
            changePage(page);
            function changePage(page) {
                if (page < 2){
                    du = (page + 1) * 10
                }else {
                    du = data.length;
                }
                for (var i = page * 10;i < du;i++){
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
        }
    )
}]);