<?php


    class Card {
        private $id;
        public int $id_card;
        public bool $state;
        public $displayBack;
        public $nb_pairs;

        //public $list = ['dk.jpg', 'mario.jpg', 'link.jpg', 'ness.jpg', 'wolf.jpg', 'kirby.jpg', 'pikachu.jpg'];

        public function __construct($id_card) {
            $this->id_card = $id_card;
            $this->state = FALSE;
            $this->displayBack = "B";
            $this->nb_pairs;
        }




        public function getIdcard() {
            return $this->id_card;
        }

        public function getDisplay() {

            if($this->state) {
                return $this->displayBack = "F";
            }else {
                return $this->displayBack;
            }
            
        }

    }
?>