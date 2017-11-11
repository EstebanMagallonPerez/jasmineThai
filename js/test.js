var app = angular.module('lunch', []);
app.controller('lunchMenu', function($scope) {
	$scope.lunches =[
		{
			"Name" : "Max Joe",
			"City" : "Lulea",
			"Country" : "Sweden"
		},
		{
			"Name" : "Manish",
			"City" : "Delhi",
			"Country" : "India"
		},
		{
			"Name" : "Koniglich",
			"City" : "Barcelona",
			"Country" : "Spain"
		},
		{
			"Name" : "Wolski",
			"City" : "Arhus",
			"Country" : "Denmark"
		}
	];

});
