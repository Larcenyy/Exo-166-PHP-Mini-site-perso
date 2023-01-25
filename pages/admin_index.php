<?php

?>

<?php if (isset($_SESSION["authentified"]) && $_SESSION["authentified"] === true): ?>
    <div>
        <p>Vous êtes bien login, donc vous ne voyez plus le formulaire</p>
    </div>
<?php else: ?>
    <div class="admin_index">
        <form action="index.php?page=index_admin" method="post" class="admin">
            <div>
                <div>
                    <label for="username">Utilisateur</label>
                    <input type="text" placeholder="Username" id="username" name="username" required maxlength="8" minlength="1">
                </div>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" id="password"  name="password" minlength="1" required>
            </div>
            <div>
                <label for="check">Rester connectée</label>
                <input type="checkbox" name="check" id="check">
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    </div>
<?php endif; ?>
