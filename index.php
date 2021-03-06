<?php include 'req_log.php';?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio</title>
    </head>
    <!--Corp du HTML-->
    <body>
        <?php include 'config.php';?>
        <!--header-->
        <?php include 'header.php';?>
        <section>
            <div class="txt_intro" id="nav1">
                <div class="picture">
                    <?php
                            $mysqli->real_query("SELECT users_infos.utiliser, presentation.img FROM users_infos INNER JOIN presentation ON users_infos.id = presentation.id_users WHERE users_infos.utiliser = 1 LIMIT 0,25");
                            $res = $mysqli->use_result();

                            while ($row = $res->fetch_assoc()) {
                                echo '<img src="';
                                echo $row['img'];
                                echo '"alt="image profil" width=315px >';
                            }
                        ?>
                </div>
                <div class="column_container_right">
                    <h2> <?php
                            $mysqli->real_query("SELECT nom, prenom, utiliser FROM users_infos WHERE utiliser = 1");
                            $res = $mysqli->use_result();

                            while ($row = $res->fetch_assoc()) {
                                echo $row['nom']. " ";
                                echo $row['prenom'];
                            }
                        ?></h2>
                    <h3>
                    <?php
                            $mysqli->real_query("SELECT users_infos.utiliser, presentation.age FROM users_infos INNER JOIN presentation ON users_infos.id = presentation.id_users WHERE users_infos.utiliser = 1 LIMIT 0,25");
                            $res = $mysqli->use_result();

                            while ($row = $res->fetch_assoc()) {
                                echo $row['age'];
                                echo " ans";
                            }
                        ?>
                    </h3>
                    <p>
                    <?php
                            $mysqli->real_query("SELECT users_infos.utiliser, presentation.description FROM users_infos INNER JOIN presentation ON users_infos.id = presentation.id_users WHERE users_infos.utiliser = 1 LIMIT 0,25");
                            $res = $mysqli->use_result();

                            while ($row = $res->fetch_assoc()) {
                                echo $row['description'];
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="block_blue" id="nav2">
                <div class="column_container">
                <li>Projets</li>
                    <h3>Nom projet 1</h3>
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
                    <h3>Nom projet 2</h3>
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
        </section>
        <div class="container">
            <h2>Recommandations</h2>
            <div id="slider">
                    <?php
                        $mysqli->real_query("SELECT * FROM recommandation");
                        $res = $mysqli->use_result();

                        while ($row = $res->fetch_assoc()) {
                            echo '<article>';
                            echo '<div>';
                            echo '<h1>';
                            echo  $row['nom']. ' '. $row['prenom'];
                            echo '</h1>';
                            echo '<p>';
                            echo $row['avis'];
                            echo '</p>';
                            echo '</div>';
                            echo '</article>';
                        }
                    ?>
            </div>
        </div>
        <script>
            var newSlider = new KiwwwiSlider(document.querySelectorAll('#slider')[0], 3000, 1);
        </script>
    </body>
    <!--footer-->
    <?php include 'footer.php';?>
</html>
