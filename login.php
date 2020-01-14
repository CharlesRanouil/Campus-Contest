<?php include 'req_log.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio - Connexion</title>
    </head>
    <!--Corp du HTML-->
    <body>
        <?php include 'config.php';?>
        <!--header-->
        <?php include 'header.php';?>
        <section>
            
            <div class="container">
            <div class="card card-login mx-auto mt-5">
            <div class="card-header">Connexion</div>
            <div class="card-body">
            <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="form-group">
                <label for="exampleInputEmail1">Pseudo</label>
                <input class="form-control"  type="text" name="pseudo">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input class="form-control"  type="password" name="password">
                </div>
                <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Restez connecter</label>
                </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="login_user">Connexion</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="inscription.php">Page d'inscription</a>
            <!-- <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
            </div>
            </div>
        </div>
        </div>        
        </section>
    </body>
    <!--footer-->
    <?php include 'footer.php';?>
</html>
