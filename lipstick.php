<?php
    require_once __DIR__ . '/product.php';

    class Lipstick extends Product {
        public $brand;
        public $color;
        // GET FUNCTION (OVERRIVDE)
        // 
        public function getInfoData() {
            $infoDataArray = parent::getInfoData();
            $infoDataArray['brand'] = $this->brand;
            $infoDataArray['color'] = $this->color;
            return $infoDataArray;
        }
    }
?>