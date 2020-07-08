<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
   

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sfixed-top">
    <div class="container">
                <a class="navbar-brand" href="#"><h3>TO-DO LIST</h3></a>
                
                
            </div>

  
    </nav><br><br>

    <div class="container" >
<div class="main" ng-app="app1"  ng-controller="ctrl">

<nav class="navbar navbar-expand-lg bg-primary navbar-dark" style="width:100%;">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    
  </button>
<a class="navbar-brand">Task Manager</a>
<div class="collapse navbar-collapse" id="navbarNav">
 


    <button style=" margin-left:200px;font-size:10px;height:30px;width:100px;background-color:#f12121;color:white;">
  <i class="fas fa-plus fa-xs"></i> Add New Task
</button>

<div style=" margin-left:140px;">
  <form class="form-inline" >
    <input class="form-control mr-sm-2" type="search" placeholder="Filter Task" aria-label="Search">
   </form>
</div>
  
</div>
</nav>
    <div class="additem" >
    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" ng-model="addItem">
  <div class="input-group-append">
    <button  class="btn btn-outline-secondary" type="button" ng-click="pushItem()"><i class="fa fa-plus" ></i>Add New Task</button>
  </div>
</div>
        
        </div>
        <ul>
            <li ng-repeat="i in items"> 
            {{i}}    
           
                <span class="fa fa-trash fa-xs" ng-click="delete($index)"></span>
            </li> 
        </ul>
    </div>
    </div>
</div>
<script src="app/controllers/newController.js"></script> 
</body>
</html>