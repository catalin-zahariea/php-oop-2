<?php 
    class Product {
        public $name;
        public $price;
        public $productWeight;
        public $shippingPrice;
        public $shippingTime;
        // GET FUNCTIONS
        // 
        public function getName() {
            return $this->name;
        }
        public function getPrice() {
            return $this->price;
        }
        public function getProductWeight() {
            return $this->productWeight;
        }
        public function getInfoData() {
            return $infoDataArray = [
                'name' => $this->name,
                'price' => $this->price,
                'productWeight' => $this->productWeight,
            ];
        }
        // SET FUNCTIONS
        // 
        public function setShippingPrice($distance) {
            $this->shippingPrice = 10;
            if($distance < 50 || $this->price > 80) {
                $this->shippingPrice = 0;
            }
            return $this->shippingPrice;
        }
        public function setShippingTime($distance) {
            $this->shippingTime = 3;
            if($distance > 50 || $distance < 100) {
                $this->shippingTime = 5;
            } else if($distance > 100) {
                $this->shippingTime = 7;
            }
            return $this->shippingTime;
        }
        // CONSTRUCT FUNCTION
        //
        public function __construct($name, $price, $productWeight) {
            $this->name = $name;
            $this->price = $price;
            $this->productWeight = $productWeight;
        }
    }
?>