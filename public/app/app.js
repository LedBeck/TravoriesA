var app = angular.module("travelTale", ['home', 'ui.bootstrap', 'ui.router', 'ngRoute', 'ngAnimate']);

app.config(function($stateProvider) {
	$stateProvider
		.state('index', {
			url: "",
			views: {
				"general": {
					templateUrl: "public/app/componentes/home/homeView.html",
				}
			}
		})
		.state('login', {
			url: "/login",
			views: {
				"general": {
					templateUrl: "public/app/componentes/login/loginView.html",
				}
			}
		})
		.state('register', {
			url: '/register',
			views: {
				"general": {
					templateUrl: "public/app/componentes/login/registerView.html",
				}
			}
		})
		/*.state();*/
});