<?php
include('db.php');
if (isset($_POST['email']) && isset($_POST['mdp'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $sql = "SELECT * FROM utilisateur WHERE email='$email' AND mdp='$mdp'";

    $req = mysqli_query($conn, $sql);

    $num_ligne = mysqli_num_rows($req);
    echo $num_ligne;
    if ($num_ligne > 0) {
        header("Location:bienvenue.php");
    } else {
        echo "Adresse mail ou mot de passe incorectes";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ouvrages</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h1>connexion</h1>
        <form action="" method="POST">
            <label>Adresse Mail</label>
            <input type="email" name="email" />
            <label for="">Mot de Passe</label>
            <input type="password" name="mdp" />
            <input type="submit" name="submit" value="valider" />
        </form>
        <p>S'inscrire <a href="inscription.php">Cliquez ici</a></p>
    </section>
</body>

</html>