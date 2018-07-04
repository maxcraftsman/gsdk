var GSDK = angular.module("gsdk",[]);

GSDK.controller("gsdkctrl", function($scope){
	
});
			
GSDK.controller("searchctrl", function($scope){
	$scope.addbrend = function(item){	

		console.log(item);
		$scope.brendname =  $(angular.element(item)[0]).data('brend');
	}
}); 
