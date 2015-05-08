var home = angular.module('home', []);
home.controller('homeController', function($scope) {
	this.lang = 'es';
	this.setLang = function(lang) {
		this.lang = lang || 'es';
	}
	this.language = language[0];
	$scope.nacionalidades = nacionalidades;
	$scope.nacionalidad = undefined;
});


home.controller('loginController',function(){

});
home.controller('registerController',function($scope,$http){
	this.lang = 'es';
	this.setLang = function(lang) {
		this.lang = lang || 'es';
	}
	this.language = language[0];
	$scope.nacionalidades = nacionalidades;
	$scope.nacionalidad = undefined;
	$scope.register = {};
});

home.controller('DatepickerDemoCtrl', function ($scope) {
  $scope.today = function() {
    $scope.dt = new Date();
  };
  $scope.today();

  $scope.clear = function () {
    $scope.dt = null;
  };

  // Disable weekend selection
  $scope.disabled = function(date, mode) {
    return ( mode === 'day' && ( date.getDay() === 0 || date.getDay() === 6 ) );
  };

  $scope.toggleMin = function() {
    $scope.minDate = $scope.minDate ? null : new Date();
  };
  $scope.toggleMin();

  $scope.open = function($event) {
    $event.preventDefault();
    $event.stopPropagation();

    $scope.opened = true;
  };

  $scope.dateOptions = {
    formatYear: 'yy',
    startingDay: 1
  };

  $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
  $scope.format = $scope.formats[0];

  var tomorrow = new Date();
  tomorrow.setDate(tomorrow.getDate() + 1);
  var afterTomorrow = new Date();
  afterTomorrow.setDate(tomorrow.getDate() + 2);
  $scope.events =
    [
      {
        date: tomorrow,
        status: 'full'
      },
      {
        date: afterTomorrow,
        status: 'partially'
      }
    ];

  $scope.getDayClass = function(date, mode) {
    if (mode === 'day') {
      var dayToCheck = new Date(date).setHours(0,0,0,0);

      for (var i=0;i<$scope.events.length;i++){
        var currentDay = new Date($scope.events[i].date).setHours(0,0,0,0);

        if (dayToCheck === currentDay) {
          return $scope.events[i].status;
        }
      }
    }

    return '';
  };
});

home.controller('menuController',function(){
	this.menuActive = 1;
})
var language = [{
	lang: 'español',
	labels: {
		title: 'TravelTale',
		session:'Escriba usuario y Contraseña',
		user:'Usuario',
		passoword:'Contraseña',
		login:'Log In',
		remember:'¿Olvido su contraseña?',
		register:'Nuevo usuario, registrese',
		email:'Email',
		rePassword:'Vuelva a escribir su password',
		nombreCompleto:'Nombre Completo',
		nacionalidad:'Nacionalidad',
		nacimiento:'Fecha de Nacimiento',
		registerL : 'Registrarse'
	}
}];
var nacionalidades = [
'Afgano',
'Alemán',
'Árabe',
'Argentino',
'Australiano',
'Inglés',
'Belga',
'Boliviano',
'Brasilero',
'Portugués',
'Camboyano',
'Canadiense',
'Inglés',
'Chileno',
'Chino',
'Chino',
'Colombiano',
'Español',
'Coreano',
'Costarricense',
'Cubano',
'Danés',
'Ecuatoriano',
'Egipcio',
'Salvadoreño',
'Estadounidense',
'Estonio',
'Etiope',
'Amárico',
'Filipino',
'Tagalo',
'Finlandés',
'Francés',
'Galés',
'Griego',
'Guatemalteco',
'Haitiano',
'Holandés',
'Hondureño',
'Indonesio',
'Iraquí',
'Iraní',
'Persa',
'Irlandés',
'Israelí',
'Italiano',
'Japonés',
'Jordano',
'Laosiano',
'Letón',
'Lituano',
'Malayo',
'Marroquí',
'Mexicano',
'Nicaragüense',
'Noruego',
'Neozelandés',
'Panameño',
'Paraguayo',
'Peruano',
'Polaco',
'Portugués',
'Puertorriqueño',
'Dominicano',
'Rumano',
'Ruso',
'Sueco',
'Suizo',
'Tailandés',
'Taiwanes',
'Chino',
'Turco',
'Ucraniano',
'Uruguayo',
'Venezolano',
'Vietnamita'
];