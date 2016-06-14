	// create the module and name it scotchApp
	var scotchApp = angular.module('scotchApp', ['ngRoute']);

	// configure our routes
	scotchApp.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'pages/hello.html',
				controller  : 'mainController'
			})
		
			.when('/webkamu', {
				templateUrl : 'pages/2-web-kamu.html',
				controller  : 'webkamuController'
			})

			// route for the about page
			.when('/try', {
				templateUrl : 'pages/try.html',
				controller  : 'tryController'
			})

			// route for the contact page
			.when('/contact', {
				templateUrl : 'pages/contact.html',
				controller  : 'contactController'
			});
	});

	// create the controller and inject Angular's $scope
	scotchApp.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.message = 'TEst!';
	});
