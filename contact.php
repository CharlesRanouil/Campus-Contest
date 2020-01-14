<?php include 'req_log.php';?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio</title>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <script src="assets/js/slider.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Meie+Script&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3Aregular%2C300%7COpen%20Sans%3A700%2C400&amp;subset=">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://lipis.github.io/bootstrap-social/bootstrap-social.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link href="assets/css/contact-bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <!--Corp du HTML-->
    <body>
        <?php include 'config.php';?>
        <!--header-->
        <?php include 'header.php';?>
        <section>
        <div class="container contact-form">
                    <div class="contact-image">
                        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
                    </div>
                    <form name="contact" method="post" action="contact.php">
                        <h3>Contactez-nous</h3>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="txtName" class="form-control" placeholder="Votre Nom *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtEmail" class="form-control" placeholder="Votre Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtPhone" class="form-control" placeholder="Votre numéro de téléphone *" value="" />
                                </div>
                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Votre Message *" style="width: 100%; height: 150px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="valider" class="btnContact" value="Envoyer" />
                                </div>
                                
                            </div>
                        </div>
                    </form>
                    </div>
        </section>
     <?php
        if (isset ($_POST['valider'])){
            //On récupère les valeurs entrées par l'utilisateur :
            $nom=$_POST['txtName'];
            $email=$_POST['txtEmail'];
            $tel=$_POST['txtPhone'];
            $msg=$_POST['txtMsg'];
 
            //On prépare la commande sql d'insertion
            $sql = "INSERT INTO commentaire (nom, email, tel, message) VALUES('$nom','$email','$tel','$msg')"; 
 
            //on lance la commande (mysqli_query)
            mysqli_query($mysqli,$sql);
 
            // on ferme la connexion
            mysqli_close($mysqli);
        }
        ?>
    </body>
    <!--footer-->
    <?php include 'footer.php';?>
</html>

