<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Campus Contest</title>
        <link rel="stylesheet" type="text/css" href="index_style.css">
        <link href="https://fonts.googleapis.com/css?family=Meie+Script&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3Aregular%2C300%7COpen%20Sans%3A700%2C400&amp;subset=">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://lipis.github.io/bootstrap-social/bootstrap-social.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    </head>
    <!--Corp du HTML-->
    <body>
    <?php include 'bdd.php';?>
    <!--header-->
    <header>
        <!-- menu -->
        <div class="navbar" id='nav'>
            <!-- liste à puces -->
            <ul class="name_left">
                <h2>
                    <!-- <a href="index.php" class="title_name" title="Accueil"> -->
                    <?php
                        $mysqli->real_query("SELECT nom, prenom, utiliser FROM users WHERE utiliser = 1");
                        $res = $mysqli->use_result();

                        while ($row = $res->fetch_assoc()) {
                            echo $row['nom']." ";
                            echo $row['prenom'];
                        }
                    ?>
                <!-- </a> -->
            </h2>
            </ul>
            <ul class="niv_1">
                <li>
                    <a href="#" class="button" title="Acceuil">Accueil</a>
                </li>
                <li>
                    <a href="#nav1" class="button" title="Catégories">Moi</a>
                </li>
                <li>
                    <a href="#nav2" class="button" title="Catégories">Projet</a>
                </li>
                <li>
                    <a href="#nav3" class="button" title="Contact">Contact</a>
                </li>
            </ul>
                    </div>
        <!-- réseaux sociaux -->
    
    <section class="header_title">
        <h1>Portofolio</h1>
    </section>
    </header> 
    <!-- bloc de 1 -->
    <section>
    <div class="txt_intro" id="nav1">
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi velit voluptates modi assumenda totam. Voluptate, facilis quos quasi quae illo reprehenderit aperiam tempora quibusdam, consequuntur recusandae nisi nesciunt pariatur voluptatibus.   
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero in, esse vel accusantium quod eum veniam, officia magnam ullam error, ipsum dignissimos quia sunt doloremque! Voluptates veniam quisquam obcaecati sit.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis in necessitatibus nobis distinctio veniam, enim nam animi error magni maxime! Modi fugit explicabo ratione at voluptatibus, fuga voluptates cupiditate voluptas.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique magnam consequuntur quaerat saepe in ipsa tempora deserunt, laudantium sunt quos ratione! Voluptate dolorum eos dolorem repellat, dicta corrupti facilis dolor.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ipsum sed unde voluptatibus itaque dolorum repudiandae culpa commodi asperiores sapiente inventore molestiae rerum sunt eveniet nostrum quisquam, corporis, alias illo!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quod sint aliquid in dolorem eius quo, laboriosam aspernatur blanditiis reiciendis porro ea labore optio fugit dicta tenetur nesciunt! Odit, quidem?
            
        </p>
      
    <?php
        $mysqli->real_query("SELECT nom, prenom, utiliser FROM users ORDER BY id ASC");
        $res = $mysqli->use_result();

        while ($row = $res->fetch_assoc()) {
            echo " Nom = " . $row['nom'] . "\n<br>";
            echo " Prénom = " . $row['prenom'] . "\n<br>";
            echo " Utiliser = " . $row['utiliser'] . "\n<br>";
            echo "<br>";
        }
    ?>
    </div>
    <div class="block_blue" id="nav2">
        <div class="column_container">
            <h2>Titre</h2>
            <h3>Titre 2</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi velit voluptates modi assumenda totam. Voluptate, facilis quos quasi quae illo reprehenderit aperiam tempora quibusdam, consequuntur recusandae nisi nesciunt pariatur voluptatibus.   
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero in, esse vel accusantium quod eum veniam, officia magnam ullam error, ipsum dignissimos quia sunt doloremque! Voluptates veniam quisquam obcaecati sit.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis in necessitatibus nobis distinctio veniam, enim nam animi error magni maxime! Modi fugit explicabo ratione at voluptatibus, fuga voluptates cupiditate voluptas.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique magnam consequuntur quaerat saepe in ipsa tempora deserunt, laudantium sunt quos ratione! Voluptate dolorum eos dolorem repellat, dicta corrupti facilis dolor.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ipsum sed unde voluptatibus itaque dolorum repudiandae culpa commodi asperiores sapiente inventore molestiae rerum sunt eveniet nostrum quisquam, corporis, alias illo!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quod sint aliquid in dolorem eius quo, laboriosam aspernatur blanditiis reiciendis porro ea labore optio fugit dicta tenetur nesciunt! Odit, quidem? 
            </p>
        </div>
        <div class="column_container">
            <h3>Titre</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi velit voluptates modi assumenda totam. Voluptate, facilis quos quasi quae illo reprehenderit aperiam tempora quibusdam, consequuntur recusandae nisi nesciunt pariatur voluptatibus.   
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero in, esse vel accusantium quod eum veniam, officia magnam ullam error, ipsum dignissimos quia sunt doloremque! Voluptates veniam quisquam obcaecati sit.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis in necessitatibus nobis distinctio veniam, enim nam animi error magni maxime! Modi fugit explicabo ratione at voluptatibus, fuga voluptates cupiditate voluptas.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique magnam consequuntur quaerat saepe in ipsa tempora deserunt, laudantium sunt quos ratione! Voluptate dolorum eos dolorem repellat, dicta corrupti facilis dolor.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ipsum sed unde voluptatibus itaque dolorum repudiandae culpa commodi asperiores sapiente inventore molestiae rerum sunt eveniet nostrum quisquam, corporis, alias illo!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quod sint aliquid in dolorem eius quo, laboriosam aspernatur blanditiis reiciendis porro ea labore optio fugit dicta tenetur nesciunt! Odit, quidem? 
            </p>
        </div>
    </div>
    <!-- <?php  
        $mysqli->real_query("SELECT URL, description FROM image WHERE description='Logo'");
        $res = $mysqli->use_result();

        while ($row = $res->fetch_assoc()) {
            echo '<img src="' . $row["URL"] . '" alt="' . $row["description"] . '">';
        }
    ?> -->
    </body>
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
    <div class="right">
        <ul class="footer_links">
                <a href="#" title="Mentions légales">Mentions légales</a>
        </ul>
    </div>
 </footer>
<div class="sub_footer">
    <div class="text-footer">
        <form method="post" action="update.php">
            <button type="submit" name="jeremy" id="jeremy" class="btn btn-primary">Jeremy</button>
            <button type="submit" name="charles" id="charles" class="btn btn-primary">Charles</button>
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
<script type="text/javascript">
   	
       var  nav = document.getElementById('nav');
     
     window.onscroll = function(){

         if (window.pageYOffset >1000) {

             nav.style.background = "#FFF";
             nav.style.height = "50px";
             nav.style.boxShadow = "0px 1px 11px rgba(0,0,0,0.4)";
             nav.style.color = "#000";
         }
         else{
             nav.style.background = "transparent";
             nav.style.boxShadow = "none";
         }
     }



  </script>