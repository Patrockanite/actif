<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courrier</title>
</head>
<body>
    <p>
        Bonjour <?php echo $_POST['prenom']; ?> !
    </p>
    <p><a href="index.html">Retour à l'accueil</a></p>


    
    <?php
        echo('Prénom : '.$_POST["prenom"].'<br>');
        echo('Nom : '.$_POST["name"].'<br>');
        echo('Email : '.$_POST["email"].'<br>'); 
        echo ('Téléphone : '.$_POST["telephone"].'<br>');
        echo('Objet : '.$_POST["subject"].'<br>');
        echo('Message : '.$_POST["message"]);
                                
    ?>
</body>
</html>