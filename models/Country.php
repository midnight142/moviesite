<?php
    class Country {
        public $id;
        public $country;

        public function __construct($id, $country)
        {
            $this->id = $id;
            $this->country = $country;
        }

        public static function getCountryById($id) {
            $sql = "select * from quocgia where id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $item = $stm->fetch(PDO::FETCH_ASSOC);
            if ($item) {
                return new Country($item['id'], $item['country']);
            }
            else
                return null;
        }
    }

?>