<?php
session_start();

if (isset($_GET['page']) && $_GET['page'] == "admin") {
    echo "oui";
}
else{
    echo "nn";
}

$password = "pass11"; // Définir votre mot de passe ici

if (isset($_SESSION["authentified"]) && $_SESSION["authentified"] == true) {
    // Afficher le contenu protégé
    echo "Contenu protégé";
} else {
    // Afficher un message d'erreur
    echo "Mot de passe incorrect";
}

if ($_GET["admin"] && intval($_GET['admin']) == 1) {
    if (isset($_POST["password"]) && $_POST["password"] == $password) {
        $_SESSION["authentified"] = true;
    }
} else {
    echo "non";
}


