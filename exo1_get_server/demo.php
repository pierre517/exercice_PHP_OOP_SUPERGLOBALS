<?php

// URL test : http://localhost/demo.php?nom=Pedri&age=22

echo "<h3>Contenu de \$_GET</h3>\n";
print_r($_GET);


echo "<h3>Infos serveur</h3>";
echo "Méthode : " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Script : " . $_SERVER['PHP_SELF'] . "<br>";
echo "IP : " . $_SERVER['REMOTE_ADDR'] . "<br>";
