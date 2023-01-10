<?php
    include 'User.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '_include/head.php'; ?>
    <title>Document</title>
</head>
<body>
    <article class="bg-img">
        <header>
            <?php require_once '_include/header.php'; ?>
        </header>
        <main>
            <div class="flex-main">
                <h1 class="title">Bienvenue sur le site du memory.</h1>
                <?php if(isset($_SESSION['login'])) {  ?>
                <a href="jeux.php"><button class="button">Jouer</button></a>
                <?php }else {?>
                <a href="connexion.php"><button class="button">Connexion</button></a>
                <?php } ?>
            </div>
        </main>
        <footer>
            <?php require_once '_include/footer.php'; ?>
        </footer>
    </article>
</body>
</html>