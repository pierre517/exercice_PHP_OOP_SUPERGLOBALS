<form method="post">
    Email : <input type="text" name="email">
    <button type="submit">OK</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    if (empty($email)) {
        echo "erreur, vous devez remplir l'emplacement email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Erreur : email invalide";
    } else {
        echo "Email valide : " . htmlspecialchars($email);
    }
}
