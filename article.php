<div id="content">
    <?php
    try {
        // On se connecte � MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=ndi2012', 'root', '');
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
    // Si tout va bien, on peut continuer
    // On récupère le derbier article de la table news
    // On affiche chaque entr�e une � une
    $reponse = $bdd->query('SELECT * FROM `article`');

    while ($data = mysql_fetch_assoc($req)) {
        if (isset($_GET["ID"])==$bdd[id]) {
            echo 'R�gion: $bdd[region]<br/>Description: $bdd[description]<br/> Th�me: $bdd[theme]<br/> ';
        }
    }
    ?>
</div>