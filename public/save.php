<?php

$jsonMessage = file_put_contents(dirname(__DIR__, 1)."../data/last_message.json", $_POST);
json_encode($jsonMessage);

header('Location: admin.php');