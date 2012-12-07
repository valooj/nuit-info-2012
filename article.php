<div id="content">
    <?php
    try {
        // On se connecte à  MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=ndi2012', 'root', '');
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrÃªte tout
        die('Erreur : ' . $e->getMessage());
    }
    // Si tout va bien, on peut continuer
    // On rÃ©cupÃ¨re le derbier article de la table news
    // On affiche chaque entrée une à  une
    $reponse = $bdd->query('SELECT * FROM `article`');

    while ($data = mysql_fetch_assoc($req)) {
        if (isset($_GET["ID"])==$bdd[id]) {
            echo 'Région: $bdd[region]<br/>Description: $bdd[description]<br/> Thème: $bdd[theme]<br/> ';
        }
    }
    ?>
</div>