<?php
    require_once __DIR__ . '/product.php';

    class Lotion extends Product {
        public $brand;
        public $mixture;
        public $bodyPart;
        // GET FUNCTION (OVERRIVDE)
        // 
        public function getInfoData() {
            $infoDataArray = parent::getInfoData();
            $infoDataArray['brand'] = $this->brand;
            $infoDataArray['mixture'] = $this->mixture;
            $infoDataArray['bodyPart'] = $this->bodyPart;
            return $infoDataArray;
        }
    }
?>