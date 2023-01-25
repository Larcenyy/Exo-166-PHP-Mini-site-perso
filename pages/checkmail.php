<?php
if (file_exists("./data/last_message.json")){
    $contents = file_get_contents("./data/last_message.json");
    echo $contents;
}
else{
    echo "Il semblerait que ce fichier n'existe pas..";
}
?>

<body>
    <div>
        <h2>Voici les derniers mails envoyé</h2>
    </div>
</body>
