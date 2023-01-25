<?php
?>

<div class="admin_index">
    <form action="../public/index.php?admin=1" method="post" class="admin">
        <div>
            <div>
                <label for="username">Utilisateur</label>
                <input type="text" placeholder="Username" id="username" required maxlength="8" minlength="1">
            </div>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" placeholder="Mot de passe" id="password" required minlength="1">
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