<?php
    include 'Card.php';
    include 'Game.php';


    $difficult = new Game();
    $difficult->difficulty();
  
?>
<form action="" method="POST">
    <input class="button" type="submit" name="easy" value="Facile">
    <input class="button" type="submit" name="medium" value="Intermédiaire">
    <input class="button" type="submit" name="hard" value="Difficile">
</form>