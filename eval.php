<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>        
        <?php
            echo 'Prénom : '.$GET["prenom"].'<br>';
            echo 'Nom : ' .$GET["nom"].'<br>';
            echo 'Ville : ' .$GET["ville"].'<br>';
            echo 'Téléphone : ' .$GET["telephone"].'<br>';
            echo 'Email : ' .$GET["Email"].'<br>';
        ?>
        <!-- j'imagine que ces lignes au dessus servent a faire la demande au serveur si c'est les bonnes choses à remplir, mais je ne comprend pas commetn ça marche --> 
        <form>
        Prénom: <input type="text" name="prenom" /><br />
        Nom: <input type="text" name="nom" /><br />
        Ville: <input type="text" name="ville"><br />
        Téléphone: <input type="text" name="telephone"><br />
        Email: <input type="text" name="email"><br />
        <input type="submit" value="OK" />
        <!-- ces lignes permettent de remplir le formulaire mais pour moi ils ne sont pas fonctionnels... --> 
    </form>
    </body>
</html>

<!-- Je sais pas faire de php, je n'étais pas la pendant ces cours, j'ai essayé de comprendre mais sans en faire c'est compliqué --> 