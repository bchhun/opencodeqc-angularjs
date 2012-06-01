<?php include 'inc/header.php' ?>

<script type="text/javascript" src="js/formulaire-simple.js"></script>
<section ng-app>
    <h2>Un formulaire légèrement plus complexe !</h2>

    <div ng-controller="facture_controller">
        <table>
            <tr>
                <td>Quantité</td>
                <td>Prix à l'unité</td>
            </tr>
            <tr>
                <td>
                    <input type="integer" min="0" ng-model="qty" required >
                </td>
                <td>
                    <input type="number" ng-model="cost" required >
                </td>
            </tr>
        </table>
        <hr />
        <table>
            <tr>
                <td>Sous-total:</td>
                <td>{{ sous_total() | currency }}</td>
            </tr>
            <tr>
                <td>TPS:</td>
                <td>{{ calculer_tps() | currency }}</td>
            </tr>
            <tr>
                <td>TVQ:</td>
                <td>{{ calculer_tvq() | currency}}</td>
            </tr>
            <tr>
                <td>Total:</td>
                <td>{{ calculer_total() | currency}}</td>
            </tr>
        </table>
    </div>
</section>

<a href="#">Suivant >> ...</a>

<?php include 'inc/footer.php' ?>