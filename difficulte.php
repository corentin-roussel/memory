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

  
    
?>
<form action="" method="POST">
    <button class="button" type="submit" name="easy" value="3">Facile</button>
    <button class="button" type="submit" name="medium" value="6">Intermédiaire</button>
    <button class="button" type="submit" name="hard" value="9">Difficile</button>
</form>