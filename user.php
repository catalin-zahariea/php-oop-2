<?php
    class User {
        public $name;
        public $lastname;
        public $gender;
        public $country;
        public $distance;
        public $email;
        private $password;
        protected $products;
        // GET FUNCTIONS
        // 
        public function getInfoData() {
            return $infoDataArray = [
                'name' => $this->name,
                'lastname' => $this->lastname,
                'gender' => $this->gender,
            ];
        }
        public function getProducts() {
            return $this->products;
        }
        // ADD/REMOVE FUNCTIONS
        // 
        public function addProduct($product) {
            $this->products[] = $product; 
        }
        public function removeProduct($product) {
            unset($this->products[$product]); 
        }
        // CONSTRUCT FUNCTION
        //
        public function __construct($name, $lastname, $email, $password) {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->password = $password;
        }
    }
?>