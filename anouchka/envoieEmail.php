<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Envoie email</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1> Envoie email</h1>
        <form action="" method="post">
        <input type="text" name="prenom" placeholder="votre prénom" ><br><br>
        <input type="email" name="email" placeholder="votre email" ><br><br>
        <textarea name="message" cols="30" rows="10" placeholder="Tapez votre message"></textarea><br><br>
        <input type="submit" name="valider" value=" Envoyer "> &nbsp&nbsp&nbsp
        <input type="reset" value="Annuler">
        </form>  
        <?php
        $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
        $email = isset($_POST['email']) ? $_POST['email'] : NULL;
        $message = isset($_POST['message']) ? $_POST['message'] : NULL;

          $from = $email;
          $to = "clementino.france@gmail.com";
          $subject = "Nouveau mail";
          //$message = "PHP Mail fonctionne parfaitement";
          $headers = "De :" . $from;
          mail($to,$subject,$message, $headers);
          echo "L'email a été envoyé.";
        ?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>