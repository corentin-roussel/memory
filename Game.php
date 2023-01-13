<?php

    class Game extends Card {

        private $id;
        public $id_game;
        public $nb_pairs;
        //public $list = ['img/dk.jpg', 'img/mario.jpg', 'img/link.jpg', 'img/ness.jpg', 'img/wolf.jpg', 'img/kirby.jpg', 'img/pikachu.jpg'];
        
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
                $_SESSION['cards'] = $cards;
                
            }
            var_dump($_SESSION['cards']);
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

        public function cardReturn() {
            if(isset($_GET['id'])) {

                $_SESSION['cardflip'][] = $_GET['id'];
                var_dump($_SESSION['cardflip']);
                if(count($_SESSION['cardflip']) > 1) {
                    unset($_SESSION['cardflip']);
                }

            }
        }
    }
?>