app = angular.module( 'PHPCMV_App', ['ngMaterial'] ).config(
	function( $mdThemingProvider )
	{
		$mdThemingProvider.theme('default').primaryPalette('teal').accentPalette('orange');
	}
);

app.controller( 'MainCtrl', [ '$scope', '$http', '$location', '$window', '$mdSidenav', '$mdToast', function( $scope, $http, $location, $window, $mdSidenav, $mdToast ){
	
	$scope.error = new Array();
	
	$scope.angular_hello = 'And from angularjs too xD';
}]);