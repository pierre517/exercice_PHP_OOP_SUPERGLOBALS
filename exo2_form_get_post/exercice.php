<!-- GET -->

<form method="get">
    Nom: <input type="text" name="nom">
    <button type="submit">Envoyer</button>
</form>

<?php

if (!empty($_GET['nom'])) {

    echo "Bonjour " . htmlspecialchars($_GET['nom']);
}
?>

<!-- POST -->

<form method="post">
    Email : <input type="email" name="email">
    <button type="submit">Envoyer</button>
</form>

<?php
if (!empty($_POST['email'])) {

    echo "Ton email est : " . htmlspecialchars($_POST['email']);
}


// la version get affiche les infos dans l'URL et pas la version POST