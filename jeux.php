<?php
    require_once 'User.php';
    require_once 'Card.php';
    require_once 'Game.php';
    require_once '_include/session.php';

    //var_dump($_SESSION['list']);



    $board = new Game();

    $cards = $board->cardReturn();
    $cards = $board->board();
    
    $_SESSION['cards'] = !isset($_SESSION['cards']) ? $cards : $_SESSION['cards'];


    foreach($_SESSION['cards'] as $key => $card) {
        if($_GET['id'] == $card->getIdCard() ) {
            $card->setState(TRUE);
            $_SESSION['compare'][] = $card;
        }
        if(count($_SESSION['compare']) > 1 ) {
            unset($_SESSION['compare']);
        }
    }
    if(isset($_GET)) { 
        if($_SESSION['compare'][0]->getDisplayFront() == $_SESSION['compare'][1]->getDisplayFront()) {
            echo "bravo";
        

        }else if($_SESSION['compare'][0]->getDisplayFront() != $_SESSION['compare'][1]->getDisplayFront()) {
            if(count($_SESSION['compare']) > 1) {

                unset($_SESSION['compare']);
            }
        }
        var_dump($_SESSION['compare']);
    }
    

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once '_include/head.php'; ?>
    <title>Memory</title>
</head>
<body>
    <article class="bg-memory">
        <header>
            <?php require_once '_include/header.php'; ?>
        </header>
        <main>



        <form method="GET">

        <?php foreach ($_SESSION['cards'] as $key => $card) : ?>
        <?php if ($card->getState() == TRUE) : ?>
                <a href="jeux.php?id=<?php echo $card->getIdCard() ?>"><img class="img" src="<?= $card->getDisplayFront() ;?>"></a>
            <?php else : ?>
                <a href="jeux.php?id=<?php echo $card->getIdCard() ?>"><img class="img" src="<?= $card->getDisplayBack();?>"></a>
        <?php endif; ?>
        <?php endforeach; ?>


        </form>

        </main>
        <footer>
            <?php require_once '_include/footer.php';?>
        </footer>
    </article>
</body>
</html>