<?php

    require_once("Bottle.php");

    class Stock extends Bottle{
        static public int $intStock;

        function __construct($title, $country, $denomination, $caption, $price, $type, $stock){
            parent::__construct($title, $country, $denomination, $caption, $price, $type);
            $this->setStock($stock);
        }

        public function setStock($stock){
            self::$intStock = $stock;
        }

        public function getStock(){
            if(self::$intStock > 0){
                return "Available";
            }else{
                return "Out of stock";
            }
        }

        function __destruct(){
            echo "- DESTROYED : " . $this->strTitle . "<br>";
        }
    }



?>