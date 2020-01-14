<?php include 'req_log.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio - Inscription</title>
    </head>
    <!--Corp du HTML-->
    <body>
        <?php include 'config.php';?>
        <!--header-->
        <?php include 'header.php';?>
        <section>
        <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Créer un compte membre</div>
            <div class="card-body">
            <form method="post" action="inscription.php">
                <?php include('errors.php'); ?>
                <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                    <label for="exampleInputName">Pseudo</label>
                    <input class="form-control" id="exampleInputName" type="text"   name="pseudo" value="<?php echo $pseudo; ?>" >
                    </div>
                </div>
                </div>
                <div class="form-group">
                <div class="form-row">
                <div class="col-md-12">
                <label for="exampleInputEmail1">Adresse email</label>
                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" value="<?php echo $email; ?>" >
                </div>
                </div>
                </div>
                <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                    <label for="exampleInputName">Prénom</label>
                    <input class="form-control" id="exampleInputName" type="text"   name="username" value="<?php echo $username; ?>" >
                    </div>
                </div>
                </div>
                <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                    <label for="exampleInputName">Nom</label>
                    <input class="form-control" id="exampleInputName" type="text"   name="name" value="<?php echo $name; ?>" >
                    </div>
                </div>
                </div>
                <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input class="form-control" id="exampleInputPassword1" type="password" name="password_1" >
                    </div>
                    <div class="col-md-6">
                    <label for="exampleInputPassword1">Confirmer le mot de passe</label>
                    <input class="form-control" id="exampleInputPassword2" type="password" name="password_2" >
                    </div>
                </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="reg_user">S'inscrire</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="login.php">Page de connexion</a>
            <!--- <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
            </div>
            </div>
        </div>
        </div>
        </section>
    </body>
    <!--footer-->
    <?php include 'footer.php';?>
</html>
