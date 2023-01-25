<ul>
    <li><a href="../public/index.php?page=bio">Bio</a></li>
    <li><a href="../public/index.php?page=contact">Contact</a></li>
    <li><a href="../public/index.php">Accueil</a></li>

    <li>
        <div>
            <a href="../public/index.php?page=admin">Administration</a>
        </div>
        <div>
            <?php
                if (isset($_SESSION["authentified"]) && $_SESSION["authentified"] === true) {
                    echo '<a href="../public/index.php?page=logout">Déconnexion</a>';
                    echo '<div>
                            <a href="../public/index.php?page=checkmail">Mails</a>
                        </div>';
                }
            ?>
        </div>
    </li>
    <li style="color: red">
        <?php
            if (isset($_SESSION["authentified"]) && $_SESSION["authentified"] === true){
                echo "Bonjour " . $_SESSION["username"];
            }
            else if (isset($_SESSION["authentified"]) && $_SESSION["authentified"] === false){
                echo "";
            }
        ?>
    </li>
</ul>