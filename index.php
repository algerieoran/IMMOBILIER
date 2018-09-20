<?php require_once 'connexion.php' ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Immobilier</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>La maison du Bonheur ! Location et vente dans toute la France</h1>

            <?php
                $sql = $pdoIMMO->prepare("SELECT * FROM agence ORDER BY nom ASC");
                $sql -> execute();

            ?>
        <p>1/ Afficher les noms des agences :  <code> SELECT * FROM agence </code></p>
        <p>1.bis / en les triant par nom : <code> SELECT * FROM agence ORDER BY nom ASC</code></p>

        
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
            </tr>
               
            <?php
                while ($ligne_agence = $sql->fetch()) {
                    echo '<tr><td>' . $ligne_agence['nom'] .'</td><td>' . $ligne_agence['adresse'] .'</td></tr>';
                }
            ?>
        </table>
        <br>
        <hr>
        
        <?php
                $sql = $pdoIMMO->prepare("SELECT idAgence, nom FROM agence WHERE nom = 'orpi' ");
                $sql -> execute();

            ?>
            <p>2/ Afficher le numéro ou lèidentifiant de l'agence Orpi : <code>
            SELECT idAgence FROM agence WHERE nom='Orpi'</code></p>
           
        
        <table border="1">
            <tr>
                <th>Numéro d'Agence</th>
                <th>Le nom d'Agence</th>
            </tr>
               
            <?php
                while ($ligne_agence = $sql->fetch()) {
                    echo '<tr><td>' . $ligne_agence['idAgence'] .'</td><td>' . $ligne_agence['nom'] .'</td></tr>';
                }
            ?>
        </table>
        <br>
        <hr>
        <?php
                $sql = $pdoIMMO->prepare("SELECT FROM logement ORDER BY idLogement,genre, ville, prix, superficie, categorie  DESC LIMIT 1");
                $sql -> execute();

            ?>
        <p>3/ Quel est le premier enregistrement de la table logement ?<code>br
        SELECT * FROM logement LIMIT 0,1  </code> si on veut les 2 premiers ex : <code>SELECT * FROM logement LIMIT 0,2; </code></p>

        <p><code>SELECT * FROM logement ORDER BY idLogement LIMIT 0,4; </code></p>


        
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
            </tr>
               
            <?php
                while ($ligne_logement = $sql->fetch()) {
                    echo '<tr><td>' . $ligne_logement['idlogement'] .'</td><td>' . $ligne_logement['genre'] .'</td></tr>';
                    echo '<tr><td>' . $ligne_logement['ville'] .'</td><td>' . $ligne_logement['prix'] .'</td></tr>';
                    echo '<tr><td>' . $ligne_logement['superficie'] .'</td><td>' . $ligne_logement['categorie'] .'</td></tr>';
                }
            ?>
        </table>
        <br>
        <hr>
    </body>
</html>