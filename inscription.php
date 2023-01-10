<?php
    include 'User.php';

    $err_password = "";

    if(!empty($_POST)) {
        extract($_POST);

        if(isset($_POST['inscription'])) {
            $login = htmlspecialchars(trim($login));
            $mdp = htmlspecialchars(trim($mdp));
            $confmdp = htmlspecialchars(trim($confmdp));
            
            
            if($mdp === $confmdp) { 
                if($user->checkpassword($mdp) === TRUE) {
                    $crypt_mdp = password_hash($mdp, PASSWORD_DEFAULT);

                    $user->register("$login", "$crypt_mdp");
                }else {
                    $err_password = "Le mot de passe doit contenir au moins 5 caractéres 1 majuscules, 1 minuscules et 1 carcatére spéciale.";
                }

            }else {
                $err_password = "Le mot de passe et la confirmation ne sont pas identiques";
            }
        }else {
            $err_password =  "Les champs doivent être remplis";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '_include/head.php'; ?>
    <title>Inscription</title>
</head>
<body>
    <article class="bg-connexion">
        <header>
            <?php require_once '_include/header.php'; ?>
        </header>
        <main>
            <form class="flex-inscription" action="" method="POST">
                <?php echo $user->getErrorLogin(); ?>
                <?php if(isset($err_password)) {echo $err_password;} ?>
                <label class="text" for="login">Login :</label>
                <input class="space" type="text" name="login" id="login">

                <?php echo $user->getErrorPassword(); ?>
                <label class="text" for="mdp">Mot de passe :</label>
                <input class="space" type="password" name="mdp" id="mdp">

                <label class="text" for="confmdp">Confirmation :</label>
                <input class="space" type="password" name="confmdp" id="confmdp">

                <input class="button" type="submit" name="inscription" value="S'inscrire">
            </form>
        </main>
        <footer>
            <?php require_once '_include/footer.php'; ?>
        </footer>
    </article>
</body>
</html>