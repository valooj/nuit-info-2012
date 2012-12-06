<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" media="all" href="style.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-6">
        <title>Nom du site יי</title>
    </head>
    <body>
        <?php
        include("header.php");
        $page = isSet($_GET['page']) ? $_GET['page'] : NULL;

        if ($page == null) {
            include("news.php");
        } else {

            switch ($page) {

                case 'news':
                    include("news.php");
                    break;
               case 'creationArticle':
                   include ("creationArticle.php");
                   break;
               case 'rechercheClient':
                   include ("rechercheClient.php");
                   break;
               case 'resultatrecherche':
                   include ("resultatRecherche.php");
                   break;
                default:
                    include("erreurs.php");
                    break;
            }
        }
        include("footer.php");
        ?>



    </body>
</html>
