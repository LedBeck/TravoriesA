var home = angular.module('home', []);
home.controller('homeController', function() {
	this.lang = 'es';
	this.setLang = function(lang) {
		this.lang = lang || 'es';
	}
	this.language = language[0];

});
home.controller('menuController',function(){
	this.menuActive = 1;
});

var language = [{
	lang: 'español',
	labels: {
		title: 'TravelTale'

	}
}];