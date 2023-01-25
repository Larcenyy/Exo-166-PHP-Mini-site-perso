<?php

//$jsonMessage = file_put_contents(dirname(__DIR__, 1)."../data/last_message.json", $_POST);
//json_encode($jsonMessage);
//
//header('Location: admin.php'); EXERCISE DAVANT !!!


if (isset($_POST['name']) && isset($_POST['mail'])) {
    $recever = $_POST['mail'];
    $name = $_POST['name'];
    $fisrtname = $_POST['firstname'];
    $object = $_POST['object'];
    $content = '
        <body>
            <h1>Mail de rémyCoproration</h1> 
            <p>Bien le bonjour merci de lire ce mail</p>
            <div>
                <p>Veuillez accepter nos salutations, rémy</p>
            </div>
        </body>
    ';

    $header = array(
        'Reply-To' => $recever,
        'X-Mailer' => 'PHP/' . phpversion(),
        'Mime-Version' => '1.0',
        'Content-type' => 'text/html; charset=utf-8'
    );

    mail($recever, $object, $content);
    $jsonMessage = file_put_contents(dirname(__DIR__, 1)."../data/last_message.json", $_POST);
    json_encode($jsonMessage);
    header('Location: admin.php');
}
else{
    echo "Il manque quelque chose dans le formulaire..";
}