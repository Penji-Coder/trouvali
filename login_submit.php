<?php include 'db_connect.php'; ?>

<?php



if (isset($_POST['mail']) &&  isset($_POST['mdp'])) {
    foreach ($profils as $profil) {
        if (
            $profil['mail'] === $_POST['mail'] &&
            $profil['mdp'] === $_POST['mdp']
        ) { echo "Je suis là";
            $_SESSION["nom"] = $profil['nom'];
            $_SESSION["prenom"] = $profil['prenom'];
            $_SESSION["mail"] = $profil['mail'];



 



            $loggedUser = [
                'mail' => $profil['mail'],
            ];



}
}
}


header('location: home.php');

?>