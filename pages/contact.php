
<section>
    <h1>CONTACT</h1>
    <p>Nous contacter..</p>
</section>


<div>
    <form action="/public/save.php" method=post>
        <label>
            <input type="text" placeholder="Prénom " name="name" minlength="3" required>
        </label>
        <label>
            <input type="text" placeholder="Nom " name="firstname" minlength="3" required>
        </label>
        <label>
            <input type="email" placeholder="Votre e-mail" name="mail" minlength="2" required>
        </label>
        <label>
            <input type="text" placeholder="Objet du mail" name="object" minlength="3" required>
        </label>
        <label>
            <input type="text" placeholder="Descriptions du mail" name="content" minlength="10" required>
        </label>
        <input type="submit">
    </form>
</div>