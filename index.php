<?php include 'inc/header.php' ?>

<section id="intro" class="slide">
    <h1>
        Backbone.js VS AngularJS
    </h1>
    <p class="attribution">Par Bernard Chhun</p>
</section>

<section >
    <header class="slide">
        <h2>Simple démonstration du binding automatique</h2>    
    </header>
    
    <section class="slide" ng-app>
        <input type="text" ng-model="prenom" placeholder="Entre ton prénom içi">
        <input type="text" ng-model="verbe" placeholder="et un verbe...">
        <input type="text" ng-model="whatever" placeholder="pis n'importe quoi">
        <hr>
        <h1>{{prenom}} {{verbe}} {{whatever}} !!</h1>      
    </section>
</section>

<?php include 'inc/footer.php' ?>