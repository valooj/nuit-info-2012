<div id="content"> <!-- code destiné au corps du site  -->

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
    $reponse = $bdd->query('SELECT * FROM `region`');
    ?>




    <form method="post" action="traitement.php" id="form">
            <p class="first">
            <label for="pays">Choisissez votre destination </label><br />
            <select name="departement" id="departement">
                <?php
                while ($donnees = $reponse->fetch()) {
                    echo '<optgroup label="', $donnees['nom'], '">', $donnees['nom'], '</option>';
                    $reponse2 = $bdd->query('SELECT * FROM `departement` ORDER BY `numero`');
                    while ($donnees2 = $reponse2->fetch()) {
                        echo '<option value="', $donnees2['nom'], '">', $donnees2['nom'], '</option>';
                    }
                }
                ?>
            </select>
            </p>
            <p>
                <label for="theme">Choisissez le(s) thème(s) de votre recherche </label><br />
                <input type="radio" name="theme" id="Evènements" /> <label for="Evènements">Evènements</label><br />
                <input type="radio" name="theme" id="Gastronomie" /> <label for="Gastronomie">Gastronomie</label><br />
                <input type="radio" name="theme" id="Monuments" /> <label for="Monuments">Monuments</label><br />
                <input type="radio" name="theme" id="Musées" /> <label for="Musées">Musées</label><br />
                <input type="radio" name="theme" id="Lieux" /> <label for="Lieux">Lieux Publics</label><br />
                <input type="radio" name="theme" id="Activité" /> <label for="Activité">Activités Sportives</label><br />
                <input type="radio" name="theme" id="Autre" /> <label for="Autre">Autre</label>
                <input type="text" name="theme" />
            </p>
            <p>
                <label for="age">Choisissez la tranche d'âge</label><br />
                <input type="radio" name="age" id="Enfants" /> <label for="Enfants">Enfants</label><br />
                <input type="radio" name="age" id="Ados" /> <label for="Ados">Ados</label><br />
                <input type="radio" name="age" id="Adultes" /> <label for="Adultes">Adultes</label><br />
                
            </p>
            
            <p class="submit"><input type="submit" value="Rechercher" /></p>
        
    </form>
</div>

<?php
if (isset($_POST['valider'])) {

    $region = htmlspecialchars($_POST['region']);
    $theme = htmlspecialchars($_POST['theme']);
    $age = htmlspecialchars($_POST['age']);
    
    $sql = 'SELECT region,age,theme FROM article ORDER BY note';
    
    $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
    
    while($data = mysql_fetch_assoc($req))
    {
        if($sql['region']==$region){
            if($sql['theme']==$theme){
                if($sql['age']==$age){
                    echo ''
                }
            }
        }
    }

    mysql_close();
}
?>