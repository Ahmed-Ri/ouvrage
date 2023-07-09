<?php


include("db.php");

$errors = [
    'nomError' => '',
    'prenomError' => '',
    'emailError' => '',
    'mdpError' => '',
];


if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $sql = "INSERT INTO utilisateur(Nom,Prenom,email,mdp) VALUE ('$nom','$prenom','$email','$mdp') ";

    if (empty($nom)) {
        $errors['nomError'] = 'Entrez votre nom!';
    } else if (empty($prenom)) {
        $errors['prenomError'] = 'Entrez votre prénom!';
    } else if (empty($email)) {
        $errors['emailError'] = 'Entrez votre e_mail!';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'Entrez votre e_mail!';
    } else if (empty($mdp)) {
        $errors['mdpError'] = 'Entrez votre mot de passe!';
    } else {
        if (mysqli_query($conn, $sql)) {
            header('Location:connexion.php');
        } else {
            echo 'ERREUR: ' . mysqli_error($conn);
        }
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
        <h1>inscription</h1>
        <form action="inscription.php" method="POST">
            <label for="">nom</label>
            <input type="text" name="nom" />
            <div class="error"><?php echo $errors['nomError'] ?></div>
            <label for="">prénom</label>
            <input type="text" name="prenom" />
            <div class="error"><?php echo $errors['prenomError'] ?></div>
            <label for="email">Adresse Mail</label>
            <input type="email" name="email" />
            <div class="error"><?php echo $errors['emailError'] ?></div>
            <label for="">password</label>
            <input type="password" name="mdp" />
            <div class="error"><?php echo $errors['mdpError'] ?></div>
            <input type="submit" name="submit" value="valider" />
        </form>
        <p>Vous avez déja un compte? <a href="connexion.php">Cliquez ici</a> </p>
    </section>
</body>

</html>