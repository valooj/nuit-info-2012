
<form method="post"  action="erreur.php">
    <label for="region">Region: </label>
        <?php
        $base = mysql_connect ('localhost', 'root', '');
        mysql_select_db ('departement', $base) ;
        
        $sql1 = 'SELECT nom FROM departement ORDER BY numero';
        
        $req1 = mysql_query($sql1);
        
        while($data = mysql_fetch_assoc($req1)){
            echo '<optgroup label="$data">';
            $sql2 = "SELECT nom FROM region";
            $req2 = mysql_query($sql2);
            while($data=mysql_fetch_assoc($req2)){
                echo '<option value="$data">$data</option>';
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
            <input type="radio" name="age" value="Ados" id="ados" />
            <label for="ados">ados</label>
          <br />
          
    <label for="Description">Description</label> <textarea name="description" id="description"
                                                           rows="10" cols="50"></textarea>
    
    <input type="submit" name="valider" value="OK"/>
    
</form>

<?php

if (isset ($_POST['valider'])){
    //On r�cup�re les valeurs entr�es par l'utilisateur :
    $region = $_POST(['region']);
    $theme = $_POST(['theme']);
    $age = $_POST(['age']);
    $description = $_POST(['description']);

    //On se connecte
    $base = mysql_connect ('localhost', 'root', '');
    mysql_select_db ('departement', $base) ;

    //On pr�pare la commande sql d'insertion
    $sql = 'INSERT INTO Utilisateurs VALUES("","' . $region . '","' . $theme . '","' . $age . '","' . $description . '")';

    /* on lance la commande (mysql_query) et au cas o�, 
      on r�dige un petit message d'erreur si la requ�te ne passe pas (or die)
      (Message qui int�grera les causes d'erreur sql) */
    mysql_query($sql) or die('Erreur SQL !' . $sql . '<br />' . mysql_error());

    // on ferme la connexion
    mysql_close();
}

?>
