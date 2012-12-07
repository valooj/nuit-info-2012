<div id="content"> <!-- code destin� au corps du site  -->

    <form method="post">

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
        $reponse = $bdd->query('SELECT * FROM `region`');
        ?>

        <label for="region">Region: </label>
        <?php
        while ($donnees = $reponse->fetch()) {
            echo '<optgroup label="', $donnees['nom'], '">', $donnees2['nom'], '</option>';
            $reponse2 = $bdd->query('SELECT * FROM `departement` ORDER BY `numero`');
            while ($donnees2 = $reponse2->fetch()) {
                echo '<option value="', $donnees2['nom'], '">', $donnees2['nom'], '</option>';
            }
        }
        ?>

        th�me:<br /> 
        <input type="radio" name="theme" value="evenement" id="evenement" />
        <label for="evenement">Ev�nement</label>
        <br />

        <br /> 
        <input type="radio" name="theme" value="gastronomie" id="gastronomie" />
        <label for="gastronomie">Gastronomie</label>
        <br />
        <br /> 
        <input type="radio" name="theme" value="monument" id="monument" />
        <label for="monument">Ev�nement</label>
        <br />
        <br /> 
        <input type="radio" name="theme" value="musee" id="musee" />
        <label for="musee">Mus�e</label>
        <br />
        <br /> 
        <input type="radio" name="theme" value="Lieux" id="Lieux" />
        <label for="Lieux">Lieux</label>
        <br />
        <br /> 
        <input type="radio" name="theme" value="act_sport" id="act_sport" />
        <label for="act_sport">Activit�s sportives</label>
        <br />

        th�me:<br /> 
        <input type="radio" name="age" value="enfant" id="enfant" />
        <label for="enfant">Enfant</label>
        <br />

        <br /> 
        <input type="radio" name="age" value="ados" id="gastronomie" />
        <label for="ados">Ados</label>
        <br />
        <br /> 
        <input type="radio" name="age" value="adultes" id="ados" />
        <label for="ados">adultes</label>
        <br />

        <label for="Description">Description</label> <textarea name="description" id="description"
                                                               rows="10" cols="50"></textarea>

        <input type="submit" name="valider" value="OK"/>

    </form>

<?php

if(isset($_POST['valider'])){
    //On r�cup�re les valeurs entr�es par l'utilisateur :
    $region = htmlspecialchars($_POST['region']);
    $theme = htmlspecialchars($_POST['theme']);
    $age = htmlspecialchars($_POST['age']);
    $description = htmlspecialchars($_POST['description']);

    //On pr�pare la commande sql d'insertion
    $sql = 'INSERT INTO article VALUES("","' . $region . '","' . $theme . '","' . $age . '","' . $description . '")';

    /* on lance la commande (mysql_query) et au cas o�, 
      on r�dige un petit message d'erreur si la requ�te ne passe pas (or die)
      (Message qui int�grera les causes d'erreur sql) */
    mysql_query($sql) or die('Erreur SQL !' . $sql . '<br />' . mysql_error());

    // on ferme la connexion
    mysql_close();
}

?>
</div>