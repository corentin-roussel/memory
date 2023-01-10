<?php
    include 'User.php';

    if(!empty($_POST)) {
        extract($_POST);

        if(isset($_POST['modify'])) {
            $login = htmlspecialchars(trim($login));
            $newmdp = htmlspecialchars(trim($newmdp));
            $confmdp = htmlspecialchars(trim($confmdp));
            $oldmp = htmlspecialchars(trim($oldmdp));

            $user->update($login, $newmdp, $confmdp, $oldmdp);

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '_include/head.php'; ?>
    <title>Profil</title>
</head>
<body>
    <article class="bg-profil">
        <header>
            <?php require_once '_include/header.php'; ?>
        </header>
        <main>
            <section>
                <form class="flex-profil" action="" method="POST">
                    <?php echo $user->getErrorLogin(); ?>
                    <label class="text" for="login">Login :</label>
                    <input class="space" type="text" name="login" id="login" value="<?php echo $_SESSION['login'] ?>">

                    <?php echo $user->getErrorPassword(); ?>
                    <label class="text" for="newmdp">Nouveau mot de passe :</label>
                    <input class="space" type="password" name="newmdp" id="newmdp">

                    <label class="text" for="confmdp">Confirmation du mot de passe :</label>
                    <input class="space" type="password" name="confmdp" id="confmdp">

                    <label class="text" for="oldmdp">Vieux mot de passe :</label>
                    <input class="space" type="password" name="oldmdp" id="oldmdp">

                    <input class="button" type="submit" name="modify" value="Modifier">
                </form>
            </section>
            <section>

            </section>
        </main>
        <footer>
            <?php require_once '_include/footer.php'; ?>
        </footer>
    </article>
</body>
</html>