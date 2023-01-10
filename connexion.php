<?php
    include 'User.php';

    if(!empty($_POST)) {
        extract($_POST);

        if(isset($_POST['connexion'])) {
            $login = htmlspecialchars(trim($login));
            $mdp = htmlspecialchars(trim($mdp));
            $user->connect($login, $mdp);
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '_include/head.php'; ?>
    <title>Connexion</title>
</head>
<body>
    <article class="bg-connexion">
        <header>
            <?php require_once '_include/header.php'; ?>
        </header>
        <main>
            <form class="flex-connexion" action="" method="POST">
                <?php echo $user->getErrorLogin(); ?>
                <?php echo $user->getErrorPassword() ?>
                <label class="text" for="login">Login :</label>
                <input class="space" type="text" name="login" id="login">

                
                <label class="text" for="mdp">Mot de passe :</label>
                <input class="space" type="password" name="mdp" id="mdp">

                <input class="button space" type="submit" name="connexion" value="Se connecter"></br>
            </form>
        </main>
        <footer>
            <?php require_once '_include/footer.php'; ?>
        </footer>
    </article>
</body>
</html>