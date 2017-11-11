<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="./js/test.js"></script>
	</head>
	<body>
		<div ng-app="lunch" ng-controller="lunchMenu">
			<table border="1">
				<tr ng-repeat="l in lunches | filter: {name: Manish}">
					<td>{{l.Name}}</td>
					<td>{{l.City}}</td>
					<td>{{l.Country}}</td>
				</tr>
			</table>
		</div>
	</body>
</html>
