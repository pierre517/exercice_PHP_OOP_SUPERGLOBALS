<form method="post">
    Nom : <input type=" text" name="nom">
    Email : <input type=" text" name="email">
    age : <input type="number" name="age">

    <button type="submit">OK</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $age = $_POST['age'];

    if (empty($nom) || empty($email) || empty($age)) {
        echo "Erreur, vous devez remplir tout le formulaire";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "erreur, votre email ,'est pas valide";
    } elseif ($age <= 0) {
        echo "erreur, votre age n'est pas valide";
    } else {
        echo "Merci, votre formulaire a bien été remis ! ";
    }
}
