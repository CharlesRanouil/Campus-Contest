<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Campus Contest</title>
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
        <?php include 'config.php';?>
    <!--footer-->
    <footer>
        <!-- gauche  -->
        <div class="footer_social">
            <?php
                    $mysqli->real_query("SELECT twitter FROM users WHERE utiliser = 1");
                    $res = $mysqli->use_result();

                    while ($row = $res->fetch_assoc()) {
                        echo '<a href="';
                        echo $row['twitter']." ";
                        echo '" class="btn btn-twitter">';
                    }
            ?>
            <span class = "fa fa-twitter"></span></a>
            <?php
                    $mysqli->real_query("SELECT facebook FROM users WHERE utiliser = 1");
                    $res = $mysqli->use_result();

                    while ($row = $res->fetch_assoc()) {
                        echo '<a href="';
                        echo $row['facebook']." ";
                        echo '" class="btn btn-facebook">';
                    }
            ?>
            <span class = "fa fa-facebook"></span></a>
            <?php
                    $mysqli->real_query("SELECT github FROM users WHERE utiliser = 1");
                    $res = $mysqli->use_result();

                    while ($row = $res->fetch_assoc()) {
                        echo '<a href="';
                        echo $row['github']." ";
                        echo '" class="btn btn-github">';
                    }
            ?>
            <span class = "fa fa-github"></span></a>
            <?php
                    $mysqli->real_query("SELECT instagram FROM users WHERE utiliser = 1");
                    $res = $mysqli->use_result();

                    while ($row = $res->fetch_assoc()) {
                        echo '<a href="';
                        echo $row['instagram']." ";
                        echo '" class="btn btn-instagram">';
                    }
            ?>
            <span class = "fa fa-instagram"></span></a>
            <?php
                    $mysqli->real_query("SELECT likedin FROM users WHERE utiliser = 1");
                    $res = $mysqli->use_result();

                    while ($row = $res->fetch_assoc()) {
                        echo '<a href="';
                        echo $row['likedin']." ";
                        echo '" class="btn btn-primary btn-linkedin">';
                    }
            ?>
            <span class = "fa fa-linkedin"></span></a>      
        </div>
        <!-- droite -->
        <div class="mention">
            <a href="#" title="Mentions légales">Mentions légales</a>
        </div>
    </footer>
        <div class="sub_footer">
            <div class="text-footer">
                Bouton test PHP (changement user) :
                <form method="post" action="update.php">
                    <button type="submit" name="switch" id="switch" class="btn btn-primary">Switch user</button>
                </form>
            </div>
            <div class="coppy-right">
            &copy; 2019 - 
                
                <?php
                    $mysqli->real_query("SELECT nom, prenom, utiliser FROM users WHERE utiliser = 1");
                    $res = $mysqli->use_result();
        
                    while ($row = $res->fetch_assoc()) {
                        echo '<a target="_blank" href="#" title="';
                        echo $row['nom']." ";
                        echo $row['prenom'];
                        echo '">';
                        echo $row['nom']."\n";
                        echo $row['prenom'];
                        echo "</a>";
                    }
                ?>
            </div>
        </div>
</html>
