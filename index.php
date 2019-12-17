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
                    <a href="#" title="Acceuil">Accueil</a>
                </li>
                <li>
                    <a href="#" title="Catégories">Moi</a>
                </li>
                <li>
                    <a href="#" title="Catégories">Projet</a>
                </li>
                <li>
                    <a href="#" title="Contact">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- réseaux sociaux -->
    </header> 
    <section class="header_title">
        <h1>Campus Contest</h1>
    </section>
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
    </div>  
    <div class="txt_intro">
    <!-- <?php
        $mysqli->real_query("SELECT nom, prenom FROM users ORDER BY id ASC");
        $res = $mysqli->use_result();

        while ($row = $res->fetch_assoc()) {
            echo '<div class="test">';
            echo " Nom = " . $row['nom'] . "\n<br>";
            echo " Prénom = " . $row['prenom'] . "\n<br>";
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
 <!--footer-->
 <footer>
     <!-- gauche  -->
    <div>
        &copy; 2019 - <a target="_blank" href="#" title="Charles RANOUIL">RANOUIL Charles</a>
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
 </body>
</html>