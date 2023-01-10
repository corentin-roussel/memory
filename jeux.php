<?php
    include 'User.php';
    include 'Card.php';


    $card = new Card(1);

    var_dump($card);

    if(isset($_POST['memory'])) {
        $flipCard = $_POST['memory'];
        if($flipCard) {
            echo $flipCard;
            $card->state = TRUE;
        }
        if($card->state == TRUE) {
            $card->getDisplay();
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
            <form id="form" name="memory" method="post"></form>

            <button form="form" name="memory"  value="<?php echo $card->getIdcard() ; ?>"><?php echo $card->displayBack; ?></button>
        </main>
        <footer>
            <?php require_once '_include/footer.php'; ?>
        </footer>
    </article>
</body>
</html>