<?php

if (isset($_SESSION["authentified"]) === true){
    $_SESSION["authentified"] = false;

    $_SESSION = array();
    $params = session_get_cookie_params();
    session_destroy();
}
else{
    echo "Vous n'êtes pas connecter.. à une session";
}
