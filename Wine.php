<?php

    require_once("zone.php");

    abstract class Wine implements Zone{
        public string $strTitle;
        public string $strCountry;
        public string $strDenomination;


        function __construct($title, $country, $denomination){
            $this->strTitle = $title;
            $this->strCountry = $country;
            $this->strDenomination = $denomination;
        }

        abstract public function getCountry():string;

        abstract public function getDenomination():string;


    }

?>

