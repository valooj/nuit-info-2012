<div id="content"> <!-- code destin� au corps du site  -->

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




    <form method="post" action="traitement.php">
        <p>
            <p>
            <label for="pays">Choisissez votre destination </label><br />
            <select name="d�partement" id="d�partement">
                <?php
                while ($donnees = $reponse->fetch()) {
                    echo '<optgroup label="', $donnees['nom'], '">', $donnees2['nom'], '</option>';
                    $reponse2 = $bdd->query('SELECT * FROM `departement` ORDER BY `numero`');
                    while ($donnees2 = $reponse2->fetch()) {
                        echo '<option value="', $donnees2['nom'], '">', $donnees2['nom'], '</option>';
                    }
                }
                ?>
            </select>
            </p>
            <p>
                <label for="theme">Choisissez le(s) th�me(s) de votre recherche </label><br />
                <input type="radio" name="theme" id="Ev�nements" /> <label for="Ev�nements">Ev�nements</label><br />
                <input type="radio" name="theme" id="Gastronomie" /> <label for="Gastronomie">Gastronomie</label><br />
                <input type="radio" name="theme" id="Monuments" /> <label for="Monuments">Monuments</label><br />
                <input type="radio" name="theme" id="Mus�es" /> <label for="Mus�es">Mus�es</label><br />
                <input type="radio" name="theme" id="Lieux" /> <label for="Lieux">Lieux Publics</label><br />
                <input type="radio" name="theme" id="Activit�" /> <label for="Activit�">Activit�s Sportives</label><br />
                <input type="radio" name="theme" id="Autre" /> <label for="Autre">Autre</label><br />
                <input type="text" name="theme" />
            </p>
            <p>
                <label for="age">Choisissez la tranche d'�ge</label><br />
                <input type="radio" name="age" id="Enfants" /> <label for="Enfants">Enfants</label><br />
                <input type="radio" name="age" id="Ados" /> <label for="Ados">Ados</label><br />
                <input type="radio" name="age" id="Adultes" /> <label for="Adultes">Adultes</label><br />
                
            </p>
        <?php   $theme=$_POST['theme'];
                $age=$_POST['age'];
                $region=$_POST['region'];
                
                $reponse3=$bdd->query('SELECT * FROM ')
                
            ?>
        </p>
    </form>
</div>