<?php
    require_once 'User.php';
    require_once 'Card.php';
    require_once 'Game.php';
    require_once '_include/session.php';




    $board = new Game();

    $cards = $board->board();
    
    $_SESSION['cards'] = !isset($_SESSION['cards']) ? $cards : $_SESSION['cards'];


    $numberOfCardsTurned = 0;
    foreach($_SESSION['cards'] as $key => $card) { // boucle pour l'état : si get id == l'idée de la carte cliquée alors on passe à true
        $id = $_GET['id'] ?? null;
    
        if($_GET['id'] == $card->getIdCard()) { // si get id et la l'id de la carte correspondent
            if($numberOfCardsTurned < 2) { // si carte returned est inférieur à 2
                $card->setState(true); // alors on passe l'état de la carte à true
                $_SESSION['compare'][] = $card; //on stocke la carte dans une session compare
                $numberOfCardsTurned++; // on incrémente le compteur de carte
            }else{
                echo "Seules deux cartes peuvent être retournées simultanément";
            }
    
            if(isset($_SESSION['compare']) && count($_SESSION['compare']) > 1){ // si compare est isset et que son count est supérieur à 1
                if($_SESSION['compare'][0]->getDisplayFront() != $_SESSION['compare'][1]->getDisplayFront()){ // si l'index 0 de compare est différent de l'index 1
                    $_SESSION['compare'][0]->setState(false); //on repasse les états à false pour afficher le back
                    $_SESSION['compare'][1]->setState(false);
                }
                unset($_SESSION['compare']); // on vide la tableau
                $numberOfCardsTurned = 0;
            }
        }
    
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
                <img class="img" src="<?= $card->getDisplayFront() ;?>">
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