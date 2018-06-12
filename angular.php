<!DOCTYPE html>
<html>
<head>
	<title>Angular JS </title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<!-- <div ng-app="">
	<input type="text" ng-model="name">
	<p ng-bind="name"></p>
</div> -->
<div ng-app="myapp" ng-controller="mycontroller">
{{fname + " " +lname}}
</div>

<script type="text/javascript">
	var app = angular.module("myapp", []);
	app.controller('mycontroller',function ($scope)
	{
		$scope.fname = "anuja";
		$scope.lname = "koshti";

	});
</script>



 

</body>
</html>