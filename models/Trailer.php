<?php
    class Trailer {
        public $id;
        public $name_vi;
        public $name_en;
        public $link;
        public $image;
        public $year;
        public $director;
        public $country;
        public $date;
        public $desc;
        public $views;

        public function __construct($id, $name_vi, $name_en, $link, $image, $year, $director, $country, $date, $desc, $views)
        {
            $this->id = $id;
            $this->name_vi = $name_vi;
            $this->name_en = $name_en;
            $this->link = $link;
            $this->image = $image;
            $this->year = $year;
            $this->director = $director;
            $this->country = $country;
            $this->date = $date;
            $this->desc = $desc;
            $this->views = $views;
        }

        public static function getTrailer($limit = '') {
            if (!empty($limit))
                $sql = "select * from trailer limit $limit";
            else
                $sql = "select * from trailer";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Trailer($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['year'], $item['director'], $item['country'], $item['date'], $item['description'], $item['views']);
            }
            return $list;
        }

        public static function getTrailerById($id) {
            $sql = "select * from trailer where id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $item = $stm->fetch(PDO::FETCH_ASSOC);
            if ($item) {
                return new Trailer($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['year'], $item['director'], $item['country'], $item['date'], $item['description'], $item['views']);
            }
            else
                return null;
        }

        public static function getRelatedTrailer($id) {
            $sql = "select * from trailer where id not like :id limit 4";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Trailer($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['year'], $item['director'], $item['country'], $item['date'], $item['description'], $item['views']);
            }

            return $list;
        }

        public static function getList($start, $n) {
            $sql = "select * from trailer limit $start, $n";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Trailer($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['year'], $item['director'], $item['country'], $item['date'], $item['description'], $item['views']);
            }
            return $list;
        }
    }
?>