var app=angular.module("app1",[]);
app.controller("ctrl",function($scope){

$scope.items=[];


$scope.pushItem= function()
{
if($scope.addItem!="")
{
   
    $scope.items.push({'taskMessage':$scope.addItem,'status':false});
   console.log($scope.items);
  $scope.addItem="";

                                                             
}
}
$scope.delete=function(index)
{
    $scope.items.splice(index,1);

}

});