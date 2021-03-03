<?php
    class Comment {
        public $fid;
        public $nickname;
        public $comment;

        public function __construct($fid, $nickname, $comment) {
            $this->fid = $fid;
            $this->nickname = $nickname;
            $this->comment = $comment;
        }

        public static function loadComment($id) {
            $sql = "select * from binhluan where FID = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Comment($item['FID'], $item['nickname'], $item['comment']);
            }
            return $list;
        }
    }
?>