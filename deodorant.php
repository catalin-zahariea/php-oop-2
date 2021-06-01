<?php
    require_once __DIR__ . '/product.php';

    class Deodorant extends Product {
        public $brand;
        public $scent;
        public $duration;
        // GET FUNCTION (OVERRIVDE)
        // 
        public function getInfoData() {
            $infoDataArray = parent::getInfoData();
            $infoDataArray['brand'] = $this->brand;
            $infoDataArray['scent'] = $this->scent;
            $infoDataArray['duration'] = $this->duration;
            return $infoDataArray;
        }
    }
?>