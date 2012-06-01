function facture_controller($scope) {
  $scope.qty = 1;
  $scope.cost = 19.95;

  $scope.sous_total = function(){
    return $scope.qty * $scope.cost;
  }

  $scope.calculer_tps = function(){
    var tps = 0.05;
    return ($scope.qty * $scope.cost) * tps;
  }

  $scope.calculer_tvq = function(){
    var tvq = 0.095;

    return ($scope.sous_total() + $scope.calculer_tps()) * tvq; 
  }

  $scope.calculer_total = function(){
    return $scope.sous_total() + $scope.calculer_tps() + $scope.calculer_tvq();
  }
}