<?php
session_start();
$pseudo = "";
$username    = "";
$name    = "";
$email    = "";
$errors = array();
// Connexion à la BDD
$db = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

// INSCRIPTION USER
if (isset($_POST['reg_user'])) {
    // Valeurs reçus du post
    $pseudo = mysqli_real_escape_string($db, $_POST['pseudo']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    // On verifie si c'est pas vide
    if (empty($pseudo)) { array_push($errors, "Pseudo requis"); }
    if (empty($username)) { array_push($errors, "Prénom requis"); }
    if (empty($pseudo)) { array_push($errors, "Nom requis"); }
    if (empty($email)) { array_push($errors, "Email requis"); }
    if (empty($password_1)) { array_push($errors, "Mot de passe requis"); }
    if ($password_1 != $password_2) { array_push($errors, "Les mots de passe ne correspondent pas"); }
    // On verifie que l'email et le pseudo n'est pas déjà present dans la DB
    $user_check_query = "SELECT * FROM users WHERE username='$pseudo' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user)  {// si le user existe
    if ($user['username'] === $pseudo) {
    array_push($errors, "Le pseudo est déjà pris");
    }
    if ($user['email'] === $email) {
    array_push($errors, "Email déjà pris");
    }
    }
    // S'il n'y a pas d'erreur en insert dans la DB
    if (count($errors) == 0) {
    $password = md5($password_1); //encryptage du MDP dans la DB
    echo $password ;
    $sql = "INSERT INTO users (username, email, password) VALUES('$pseudo', '$email', '$password')";
    //on lance la commande (mysqli_query)
    mysqli_query($db,$sql);
    // on recupère la dernière clef étrangère
    $user_id = mysqli_insert_id($db);
    mysqli_free_result($result);
    $sql = "INSERT INTO users_infos (user_id, nom, prenom) VALUES ($user_id, '$name', '$username')";
    $result = mysqli_query($db,$sql);
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['success'] = "Vous êtes maintenant connecter";
    header('location: login.php');
    }
    }

// CONNEXION USER
if (isset($_POST['login_user'])) {
    $pseudo = mysqli_real_escape_string($db, $_POST['pseudo']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($pseudo)) {
    array_push($errors, "pseudo is required");
    }
    if (empty($password)) {
    array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$pseudo' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
    // $admin_check_query = "SELECT * FROM users_infos WHERE user_id = (SELECT id FROM users WHERE username = '$pseudo') and rang = 1";
    // $sql1 = "UPDATE users_infos SET utiliser = 0";
    // $results = mysqli_query($db, $sql1);
    // $sql2 = "UPDATE users_infos SET utiliser = 1 WHERE user_id = (SELECT id FROM users WHERE username = '$pseudo')";
    // $results = mysqli_query($db, $sql2);
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
    } else {
    array_push($errors, "Wrong pseudo/password combination");
    }
    }
    }?>