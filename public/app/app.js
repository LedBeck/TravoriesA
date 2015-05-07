var app = angular.module("travelTale", ['home','ui.bootstrap','ngRoute','ngAnimate']);

app.config(['$routeProvider',
	function($routeProvider) {
		$routeProvider.
		when('/login', {
			templateUrl: 'public/app/componentes/login/loginView.html'
/*			controller: 'AddOrderController'*/
		}).
		otherwise({
			redirectTo: '/'
		});
	}
]);