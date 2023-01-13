<?php

    class Game extends Card {

        private $id;
        public $id_game;
        public $nb_pairs;
        
        public function __construct() {
        }

        public function board() {

            $nb_pairs = 3;
            $count = 1;
            
            for($i = 0;$i < $nb_pairs * 2; $i++) {
                $card = new Card();
                $card
                    ->setIdCard($count++)
                    ->setDisplayFront("img/img". $count % $nb_pairs + 1 .".jpg")
                    ->setDisplayBack("img/backcard.jpg")
                    ->setState(FALSE);
                $cards[] = $card;
                
                
            }
            return $cards;
        }

        public function difficulty() {
            
            if(isset($_POST['easy'])) {
                $nb_pairs = 3;
            }else if(isset($_POST['medium'])) {
                $nb_pairs = 6;
            }else if(isset($_POST['hard'])) {
                $nb_pairs = 9;
            }
            return $nb_pairs;
        }
        

        public function cardFlipped() {
            if(isset($_GET['id'])) {
                $this->setState(TRUE);
            }
        }

        public function cardReturn() {
            // if(isset($_GET['id'])) {
            //     //$_SESSION['cardflip'][] = $_GET['id'];
            //     var_dump($_SESSION['cardflip']);
            //     if(count($_SESSION['cardflip']) > 1) {
            //         unset($_SESSION['cardflip']);
            //     }

            //}
        }

        public function compare() {
            foreach($_SESSION['cards'] as $key => $card) {
                if($_GET['id'] == $card->getIdCard() ) {
                    $card->setState(TRUE);
                    $_SESSION['compare'][] = $card;
                }
        
                if(count($_SESSION['compare']) == 2) {
                    if($_SESSION[0]->getDisplayFront() == $_SESSION[0]->getDisplayFront()) {
                        echo "bravo vou avez trouvé une paire";
                    }
                    
                    unset($_SESSION['compare']);
                }
                
            }
        }
    }
?>