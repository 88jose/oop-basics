<?php

    require_once("Wine.php");

    class Bottle extends Wine{
        private string $strCaption;
        private string $strDescription;
        private float $fltPice;
        private string $strType;

        function __construct($title, $country, $denomination, $caption, $price, $type){
            parent:: __construct($title, $country, $denomination);
            $this->strCaption = $caption;
            $this->fltPrice = $price;
            $this->strType = $type;
        }

        public function getTitle(){
            return $this->strTitle;
        }

        public function getCountry():string{
            return $this->strCountry;
        }
        
        public function getDenomination():string{
            return $this->strDenomination;
        }
        
        public function getCaption():string{
            return $this->strCaption;
        }

        public function setDescription($description){
            $this->strDescription = $description;
        }

        public function getDescription():string{
            return $this->strDescription;
        }

        public function getPrice():float{
            return $this->fltPrice;
        }

        public function getType():string{
            return $this->strType;
        }

    }

?>