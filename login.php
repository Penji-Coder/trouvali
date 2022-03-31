<?php include 'db_connect.php'; ?>


<?php if(!isset($loggedUser)): ?>
<form action="login_submit.php" method="post">
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo($errorMessage); ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="mail" class="form-label">mail</label>
        <input type="mail" class="form-control" id="mail" name="mail" aria-describedby="mail-help" placeholder="you@exemple.com">
        <div id="mail-help" class="form-text">Le mail utilisé lors de la création de compte.</div>
    </div>
    <div class="mb-3">
        <label for="mdp" class="form-label">Mot de passe</label>
        <input type="mdp" class="form-control" id="mdp" name="mdp">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo($loggedUser['mail']); ?> !
    </div>
<?php endif; ?>
