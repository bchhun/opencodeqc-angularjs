<?php include 'inc/header.php' ?>

<section ng-app>
    <h2>Simple démonstration du binding automatique</h2>
    <input type="text" ng-model="prenom" placeholder="Entre ton prénom içi">
    <input type="text" ng-model="verbe" placeholder="et un verbe...">
    <input type="text" ng-model="whatever" placeholder="pis n'importe quoi">
    <hr>
    <h1>{{prenom}} {{verbe}} {{whatever}} !!</h1>  
</section>

<a href="formulaire-simple.php">Suivant >> Un simple formulaire</a>

<?php include 'inc/footer.php' ?>