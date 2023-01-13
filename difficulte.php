<?php
    require_once 'User.php';
    require_once 'Card.php';
    require_once 'Game.php';
    require_once '_include/session.php';

    

    $a = 1;

    if(isset($_POST['easy'])) {
        $a = 3;
    }else if(isset($_POST['medium'])) {
        $a = 6;
    }else if(isset($_POST['hard'])) {
        $a = 9;
    }

    $nb_pairs = 3;

    $cards = array();
    for($i = 0;$i < $nb_pairs * 2; $i++) {
        $card = new Card();
        $card
            ->setIdCard($i)
            ->setDisplayFront("img". $i % $nb_pairs + 1 .".jpg")
            ->setDisplayBack("img/backcard.jpg")
            ->setState(FALSE);
            $cards[] = $card;  
    }
    
    var_dump($cards);
    
    // shuffle($cards);
    // $_SESSION['list'] = $cards;
  
    
?>
<form action="" method="POST">
    <button class="button" type="submit" name="easy" value="3">Facile</button>
    <button class="button" type="submit" name="medium" value="6">Intermédiaire</button>
    <button class="button" type="submit" name="hard" value="9">Difficile</button>
</form>