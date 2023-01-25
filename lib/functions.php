<?php

/* 
    vous ajouterez ici les fonctions qui vous sont utiles dans le site,
    je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
    la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
        include dirname(__DIR__, 1).'../pages/home.php';
	}
	else if(isset($_GET['page']) && $_GET['page'] == "bio") {
        include dirname(__DIR__, 1).'../pages/bio.php';
    }
	else if(isset($_GET['page']) && $_GET['page'] == "contact") {
        include dirname(__DIR__, 1).'../pages/contact.php';
    }
    else if(isset($_GET['page']) && $_GET['page'] == "admin") {
        include dirname(__DIR__, 1).'../pages/admin_index.php';
    }
    else if(isset($_GET['page']) && $_GET['page'] == "index_admin") {
        include dirname(__DIR__, 1).'../pages/index_admin.php';
    }
    else if(isset($_GET['page']) && $_GET['page'] == "logout") {
        include dirname(__DIR__, 1).'../pages/logout.php';
    }
    else if(isset($_GET['page']) && $_GET['page'] == "checkmail") {
        include dirname(__DIR__, 1).'../pages/checkmail.php';
    }
}

function getPart($name) {
    include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData(){
    $json = file_get_contents(__DIR__ . '/../data/user.json');
    // Transformer le JSON en un tableau PHP
    $data = json_decode($json, true);
    return $data;
}