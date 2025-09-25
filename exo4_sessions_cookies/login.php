<?php
session_start();
?>


<form method="Post">
    User Name <input type="text" name="name">
    <button type="submit">connexion</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['name'];
    $_SESSION['user'] = $_POST['name'];


    if (empty($nom)) {
        echo "vous devez rentrer votre nom d'utilisateur";
    } else {

        header("Location: exercice.php");
    }
}
