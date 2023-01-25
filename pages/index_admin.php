<?php

$password = "test123";


if (isset($_POST["password"]) && $_POST["password"] == $password) {
    $_SESSION["authentified"] = true;
    if (isset($_POST['username']) && $_POST['password']){
        $sessionTime = 60 * 60 * 24;
        $name = $_POST['username'];
        $_SESSION["username"] = $_POST["username"];
        echo "Bonjour, vous êtes connectée sous le nom :  $name";
        if (isset($_POST['check'])){
            session_set_cookie_params($sessionTime);
        }
    }

}
else{
    if(isset($_GET['page']) && $_GET['page'] == "index_admin"){
        $_GET['page'] = "none";
        echo "Erreur de connexion..";
    }
    $_SESSION["authentified"] = false;
}