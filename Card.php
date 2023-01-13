<?php


    class Card {
        private ?int $id_card;
        private ?bool $state;
        private ?string $displayBack;
        private ?string $displayFront;


        public function __construct() {
            $this->id_card = NULL;
            $this->state = NULL;
            $this->displayBack = NULL;
            $this->displayFront = NULL;
        }


        public function setIdCard(?int $id_card): Card {
            $this->id_card = $id_card;

            return $this;
        }

        public function setState(?bool $state): Card {
            $this->state = $state;

            return $this;
        }

        public function setDisplayBack(?string $displayBack): Card {
            $this->displayBack = $displayBack;

            return $this;
        }

        public function setDisplayFront(?string $displayFront): Card {
            $this->displayFront = $displayFront;

            return $this;
        }

        public function getIdCard() {
            return $this->id_card;
        }


        public function getState() {
            return $this->state;
        }

        public function getDisplayBack() {
            return $this->displayBack;
        }

        public function getDisplayFront() {
            return $this->displayFront;
        }

    }
?>