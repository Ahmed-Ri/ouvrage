<?php


include("db.php");


if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $sql = "INSERT INTO utilisateur(Nom,Prenom,email,mdp) VALUE ('$nom','$prenom','$email','$mdp') ";
    mysqli_query($conn, $sql);
    header('Location:connexion.php');
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
        <h1>inscription</h1>
        <form action="" method="POST">
            <label for="">nom</label>
            <input type="text" name="nom" />
            <label for="">prénom</label>
            <input type="text" name="prenom" />
            <label for="email">Adresse Mail</label>
            <input type="email" name="email" />
            <label for="">password</label>
            <input type="password" name="mdp" />
            <input type="submit" name="submit" value="valider" />
        </form>
        <p>Vous avez déja un compte? <a href="connexion.php">Cliquez ici</a> </p>
    </section>
</body>

</html>