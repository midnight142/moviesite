<?php
    class Type {
        public $id;
        public $name;

        public function __construct($id, $name)
        {
            $this->id = $id;
            $this->name = $name;
        }

        public static function getTypeById($id) {
            $sql = "select * from loaiphim where id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $item = $stm->fetch(PDO::FETCH_ASSOC);
            if ($item)
                return new Type($item['id'], $item['type']);
            else
                return "";
        }
    }
?>