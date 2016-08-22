<!DOCTYPE html>
<html ng-app="App">
<head>
	<title>Contacts List</title>
 	<script src="bower_components/angular/angular.js"></script>
	<script src="index.js"></script>
</head>
<body>
<div ng-controller="ContactsController">
	<h1>Contact form</h1><hr>
	<table border="1">
		<tr>
			<th>Contact name </th><td><input type="text" name="name" ng-model="contactname"></td>	
		</tr> 
		<tr>
			<th>Contact number</th><td><input type="number" name="name" ng-model="contactnumber"></td>
		</tr>
		<tr>
			<th></th><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="btnadd" ng-click="addbutton()" >Add</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="btnshow"  ng-click="showbutton()">Show</button></td>
		</tr>
	</table>
</div>
</body>
</html>

