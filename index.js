angular.module('App', [])
   .controller('ContactsController', function($scope,$http)
{
    $scope.contacts = [];
	$scope.addbutton = function()
	{
	$scope.contacts.push({ text:$scope.contactname},{ text:$scope.contactnumber});
	$http.post("insertcontact.php",{'contactname':$scope.contactname,'contactnumber':$scope.contactnumber})
		.success(function(data){
				alert("New record Inserted successfully");
				window.location = 'showcontact.php'
			   console.log("inserted successfully");
				console.log(data);
				});
	}
	$scope.showbutton =function()
	{

		$http.post("showcontact.php",{'contactname':$scope.contactname,'contactnumber':$scope.contactnumber})
			.success(function(data){
				window.location = 'showcontact.php'
				console.log("show");
				console.log(data);
			});
	}
	

});
