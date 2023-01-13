<?php
    require_once 'User.php';
    require_once 'Card.php';
    require_once 'Game.php';

    //var_dump($_SESSION['list']);



    $board = new Game();

    $cards = $board->cardReturn();
    $cards = $board->board();

    

    
    // $nb_pairs = 3;

    // $cards = array();
    // for($i = 0;$i < $nb_pairs * 2; $i++) {
    //     $card = new Card();
    //     $card
    //         ->setIdCard($i)
    //         ->setDisplayFront("img/img". $i % $nb_pairs + 1 .".jpg")
    //         ->setDisplayBack("img/backcard.jpg")
    //         ->setState(FALSE);
    //         $cards[] = $card;  
    // }
    // var_dump($cards);
    

    




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
            <?php foreach($cards as $key => $card) : ?>

                <?php if(isset($_GET) && $card->getIdCard() == @$_GET['id']) :?>
                <?php $card->setState(true);?>
                    <a href="jeux.php?id=<?php echo $card->getIdCard(); ?>"><img class="img" src="<?= $card->getDisplayFront(); ?>"></a>

                <?php else : ?>

                    <a href="jeux.php?id=<?php echo $card->getIdCard(); ?>"><img class="img" src="<?= $card->getDisplayBack(); ?>"></a>
                        
                <?php endif; ?>

            <?php endforeach ;?>

            </form>

        </main>
        <footer>
            <?php require_once '_include/footer.php';?>
        </footer>
    </article>
</body>
</html>