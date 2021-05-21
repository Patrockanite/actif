<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <p>
        Bonjour <?php echo htmlspecialchars( $_POST['prenom']); ?> !
    </p>
    


    
    <!--?php
        echo('Prénom : '.$_POST["prenom"].'<br>');
        echo('Nom : '.$_POST["name"].'<br>');
        echo('Email : '.$_POST["email"].'<br>'); 
        echo ('Téléphone : '.$_POST["telephone"].'<br>');
        echo('Objet : '.$_POST["subject"].'<br>');
        echo('Message : '.$_POST["message"]);
                         
    ?-->

     <?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $objet = htmlspecialchars($_POST["subject"]);

        $contenu = '<h1>Message envoyé par la page Contact du site Actif</h1>
        <p><b>Prénom : </b>'. htmlspecialchars($_POST['prenom']) .'<br>
        <b>Nom : </b>' . htmlspecialchars($_POST['name']) . '<br>
        <b>Nom : </b>' . htmlspecialchars($_POST['telephone']) . '<br>
        <b>Email : </b>' . htmlspecialchars($_POST['email']) . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('patrickannoot@orange.fr',$objet , $contenu, $entete);

        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
        else{
            echo '<p>Désolé, nous avons rencontré un problème<br>
            Vous pouvez appeler le <a href="tel:0606060606">0606060606</a></p>';
        }
    }
    ?>
    <p><a href="index.html">Retour à l'accueil</a></p>
</body>
</html>