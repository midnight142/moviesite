<?php
    class Category {
        public $id;
        public $cat;

        public function __construct($id, $cat)
        {
            $this->id = $id;
            $this->cat = $cat;
        }

        public static function getCatById($id) {
            $sql = "select * from theloai where id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $item = $stm->fetch(PDO::FETCH_ASSOC);
            if ($item)
                return new Category($item['id'], $item['nameCategory']);
            else
                return null;
        }
    }
?>