<?php

    class Game extends Card {

        private $id;
        public $id_game;
        public $nb_pairs;
        public $list = ['img/dk.jpg', 'img/mario.jpg', 'img/link.jpg', 'img/ness.jpg', 'img/wolf.jpg', 'img/kirby.jpg', 'img/pikachu.jpg'];

        public function __construct() {

        }

        public function selectCard() {
            
            $cards = array();
            for($i = 1; $i <= 2; $i++) {
                for($j = 1;$j <= 3; $j++) {
                    
                    $card[] = $j;
                }
            }
            shuffle($list);
            $_SESSION['list'] = $list;
        }

        public function difficulty() {
            
            
        }
    }
?>