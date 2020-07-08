var app=angular.module("app1",[]);
app.controller("ctrl",function($scope){

$scope.items=["Shopping","Movie"];

$scope.addItem="";
$scope.pushItem= function()
{
if($scope.addItem!="")
{
    $scope.items.push($scope.addItem);
    $scope.addItem="";


}
}
$scope.delete=function(index)
{
    $scope.items.splice(index,1);

}

});