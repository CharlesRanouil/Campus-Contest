<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Campus Contest</title>
        <link rel="stylesheet" type="text/css" href="index_style.css">
    </head>
    <!--Corp du HTML-->
    <body>
    <?php include 'bdd.php';?>
    <!--header-->
    <header>
        <!-- menu -->
        <nav>
            <!-- liste à puces -->
            <ul class="niv_1">
                <li>
                    <a href="#" class="btn btn-outline-dark btn-lg" title="Acceuil">Accueil</a>
                </li>
                <li>
                    <a href="#" class="btn btn-outline-dark btn-lg" title="Catégories">Moi</a>
                </li>
                <li>
                    <a href="#" class="btn btn-outline-dark btn-lg" title="Catégories">Projet</a>
                </li>
                <li>
                    <a href="#" class="btn btn-outline-dark btn-lg" title="Contact">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- réseaux sociaux -->
    
    <section class="header_title">
        <h1>Campus Contest</h1>
    </section>
    </header> 
    <!-- bloc de 1 -->
    <section>
    <div class="txt_intro">
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi velit voluptates modi assumenda totam. Voluptate, facilis quos quasi quae illo reprehenderit aperiam tempora quibusdam, consequuntur recusandae nisi nesciunt pariatur voluptatibus.   
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero in, esse vel accusantium quod eum veniam, officia magnam ullam error, ipsum dignissimos quia sunt doloremque! Voluptates veniam quisquam obcaecati sit.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis in necessitatibus nobis distinctio veniam, enim nam animi error magni maxime! Modi fugit explicabo ratione at voluptatibus, fuga voluptates cupiditate voluptas.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique magnam consequuntur quaerat saepe in ipsa tempora deserunt, laudantium sunt quos ratione! Voluptate dolorum eos dolorem repellat, dicta corrupti facilis dolor.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ipsum sed unde voluptatibus itaque dolorum repudiandae culpa commodi asperiores sapiente inventore molestiae rerum sunt eveniet nostrum quisquam, corporis, alias illo!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quod sint aliquid in dolorem eius quo, laboriosam aspernatur blanditiis reiciendis porro ea labore optio fugit dicta tenetur nesciunt! Odit, quidem?
            
        </p>

        <form method="post" action="update.php">
            <button type="submit" name="passed" id="passed" class="btn btn-primary">Jerem<i class="fa fa-check"></i></button>
            <button type="submit" name="insufficient" id="insufficient" class="btn btn-primary">Charles<i class="fa fa-times"></i></button>
        </form></br>
    </div>  
    <div class="txt_intro">
    <?php
        $mysqli->real_query("SELECT nom, prenom, utiliser FROM users ORDER BY id ASC");
        $res = $mysqli->use_result();

        while ($row = $res->fetch_assoc()) {
            echo '<div class="test">';
            echo " Nom = " . $row['nom'] . "\n<br>";
            echo " Prénom = " . $row['prenom'] . "\n<br>";
            echo " Utiliser = " . $row['utiliser'] . "\n<br>";
            echo "<br></div>";
        }
    ?>
    <!-- <?php  
        $mysqli->real_query("SELECT URL, description FROM image WHERE description='Logo'");
        $res = $mysqli->use_result();

        while ($row = $res->fetch_assoc()) {
            echo '<img src="' . $row["URL"] . '" alt="' . $row["description"] . '">';
        }
    ?> -->
    </div>
    </body>
 <!--footer-->
 <footer>
     <!-- gauche  -->
    <div class="text-footer">
        &copy; 2019 - 
            
        <?php
        $mysqli->real_query("SELECT nom, prenom, utiliser FROM users WHERE utiliser = 1");
        $res = $mysqli->use_result();

        while ($row = $res->fetch_assoc()) {
            echo '<a target="_blank" href="#" title="';
            echo $row['nom']."\n";
            echo $row['prenom'];
            echo '">';
            echo $row['nom']."\n";
            echo $row['prenom'];
            echo "</a>";
        }
    ?>

        </a>
    </div>
    <!-- droite -->
    <div class="right">
        <ul class="footer_links">
            <li>
                <a href="#" title="Mentions légales">Mentions légales</a>
            </li>
        </ul>
    </div>
 </footer>
</html>

<script>
function FnBookmark(id,mode){

$.ajax({
                    url:'update.php',
                    data:{mode:mode,id:id},
                    dataType:'json',
                    success:function(data){
                          if(mode == "on")
                          {
                              $("#1").attr("class", "offbutton");
                              $("#1").attr("onClick","FnBookmark('1','off')");
                          }
                          else
                          {
                              $("#1").attr("class", "onbutton");
                              $("#1").attr("onClick","FnBookmark('1','on')");

                          }
                    }
      });
</script>