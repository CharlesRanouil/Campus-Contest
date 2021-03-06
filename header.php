<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Campus Contest</title>
        <link rel="stylesheet" type="text/css" href="admin/img_styles.php">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/slider.css" />
        <script src="assets/js/slider.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Meie+Script&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3Aregular%2C300%7COpen%20Sans%3A700%2C400&amp;subset=">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://lipis.github.io/bootstrap-social/bootstrap-social.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    </head>
    <!--Corp du HTML-->
    <body>
        <?php include 'config.php';
        $utiliser = $mysqli->query("SELECT url FROM edit_img WHERE nom = 'Logo'");
        $logo = $utiliser->fetch_assoc();
        ?>

        <!--header-->
        <header>
            <!-- menu -->
            <div class="navbar" id="nav">
                <!-- liste à puces -->
                <div class="name" id="name"><a href="#" class="button" title="Acceuil">
                <?php
                            $mysqli->real_query("SELECT nom, prenom, utiliser FROM users_infos WHERE utiliser = 1");
                            $res = $mysqli->use_result();

                            while ($row = $res->fetch_assoc()) {
                                echo $row['nom']. " ";
                                echo $row['prenom'];
                            }
                        ?>
                </a></div>
                <ul class="niv_1" id="nav_active">
                    <li>
                        <a href="index.php" class="button" title="Acceuil">Accueil</a>
                    </li>
                    <li>
                        <a href="index.php#nav1" class="button" title="Présention">Présentation</a>
                    </li>
                    <li>
                        <a href="index.php#nav2" class="button" title="Projets">Projets</a>
                    </li>
                    <li>
                        <a href="index.php#slider" class="button" title="Recommandations">Recommandations</a>
                    </li>
                    <li>
                        <a href="contact.php" class="button" title="Contact">Contact</a>
                    </li>
                    <li>
                        <!-- Bouton d'accès a l'administration -->
                    <!-- <?php
                        $mysqli->real_query("SELECT rang, utiliser FROM users_infos WHERE utiliser = 1");
                        if($mysqli) {
                            $val = mysqli_fetch_assoc($mysqli->use_result());
                            
                            $privilege = $val['rang'];
                            
                                if($privilege==1) { // si = 1 donc c'est un admin
                                    echo '<a href="admin/accueil.php" class="button" title="Administration">Administration</a>';
                                }
                        }
                    ?> -->
                   <?php 
                    if (empty($_SESSION['pseudo'])) {
                        
                    } else {
                        if($_SESSION['pseudo']) {
                            $session_user = $_SESSION['pseudo'];
                            $admin_check_query = "SELECT * FROM users_infos WHERE user_id = (SELECT id FROM users WHERE username = '$session_user') and rang = 1";
                            $result = mysqli_query($db, $admin_check_query);
                            $admin = mysqli_fetch_assoc($result);
                            if ($admin) {
                                echo '<a href="admin/accueil.php" class="button" title="Administration">Administration</a>';
                            } else {
                                echo '<a href="membre/accueil.php" class="button" title="Membre">Panel</a>';
                            }
                        }
                    }
                    ?>
                    </li>
                </ul>
            </div>
            <!-- réseaux sociaux -->
        <section class="header_title">
            <div class="logo"></div>
            <h1>Portfolio<br>
            <ul class="name_left">
                        <!-- <a href="index.php" class="title_name" title="Accueil"> -->
                        <?php
                            $mysqli->real_query("SELECT nom, prenom, utiliser FROM users_infos WHERE utiliser = 1");
                            $res = $mysqli->use_result();

                            while ($row = $res->fetch_assoc()) {
                                echo $row['nom']. " ";
                                echo $row['prenom'];
                            }
                        ?>
                </ul>
            </h1>
        </section>
        </header> 
    </body>
        <script type="text/javascript">
    
            var nav = document.getElementById('nav');
            var nav_active = document.getElementById('nav_active');
            var div = document.getElementById ('name');
            
            window.onload = function() {
                div.style.display = "none";
            }

            window.onscroll = function(){

            if (window.pageYOffset >100) {

                nav.style.background = "#011735";
                nav.style.height = "50px";
                nav.style.boxShadow = "0px 1px 11px rgba(0,0,0,0.4)";
                nav_active.classList.add("navbar_active");
                div.style.display = "block";
                }
            else {
                nav.style.background = "transparent";
                nav.style.boxShadow = "none";
                nav_active.classList.remove("navbar_active");
                div.style.display = "none";
                }
            }
        </script>
</html>
