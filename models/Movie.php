<?php
    class Movie {
        public $id;
        public $name_vi;
        public $name_en;
        public $link;
        public $image;
        public $director;
        public $year;
        public $time;
        public $quality;
        public $category;
        public $country;
        public $type;
        public $views;
        public $desc;

        public function __construct($id, $name_vi, $name_en, $link, $image, $director, $year, $time, $quality, $category, $country, $type, $views, $desc)
        {
            $this->id = $id;
            $this->name_vi = $name_vi;
            $this->name_en = $name_en;
            $this->link = $link;
            $this->image = $image;
            $this->director = $director;
            $this->year = $year;
            $this->time = $time;
            $this->quality = $quality;
            $this->category = $category;
            $this->country = $country;
            $this->type = $type;
            $this->views = $views;
            $this->desc = $desc;
        }

        public static function getMovieById($id) {
            $sql = "select * from phim where id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $item = $stm->fetch(PDO::FETCH_ASSOC);
            if ($item) {
                return new Movie($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['director'], $item['year'], $item['time'],
                    $item['quality'], $item['category'], $item['country'], $item['type'], $item['views'], $item['description']);
            }
            else
                return null;
        }

        public static function getListByType($id, $limit = '') {
            if (!empty($limit))
                $sql = "select * from phim where type = :type limit $limit";
            else
                $sql = "select * from phim where type = :type";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('type' => $id));
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Movie($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['director'], $item['year'], $item['time'],
                    $item['quality'], $item['category'], $item['country'], $item['type'], $item['views'], $item['description']);
            }
            return $list;
        }

        public static function getListByCat($id, $limit = '') {
            if (!empty($limit))
                $sql = "select * from phim where category = :id limit $limit";
            else
                $sql = "select * from phim where category = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Movie($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['director'], $item['year'], $item['time'],
                    $item['quality'], $item['category'], $item['country'], $item['type'], $item['views'], $item['description']);
            }
            return $list;
        }

        public static function getListByCountry($id, $limit = '') {
            if (!empty($limit))
                $sql = "select * from phim where country = :country limit $limit";
            else
                $sql = "select * from phim where country = :country";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('country' => $id));
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Movie($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['director'], $item['year'], $item['time'],
                    $item['quality'], $item['category'], $item['country'], $item['type'], $item['views'], $item['description']);
            }
            return $list;
        }

        public static function getListOnPerPage($id, $start, $n) {
            $sql = "select * from phim where category = :id limit $start, $n";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Movie($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['director'], $item['year'], $item['time'],
                    $item['quality'], $item['category'], $item['country'], $item['type'], $item['views'], $item['description']);
            }
            return $list;
        }

        public static function getListByKind($id, $start, $n) {
            $sql = "select * from phim where type = :id limit $start, $n";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Movie($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['director'], $item['year'], $item['time'],
                    $item['quality'], $item['category'], $item['country'], $item['type'], $item['views'], $item['description']);
            }
            return $list;
        }

        public static function getListByKind1($id) {
            $sql = "select * from phim where type = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Movie($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['director'], $item['year'], $item['time'],
                    $item['quality'], $item['category'], $item['country'], $item['type'], $item['views'], $item['description']);
            }
            return $list;
        }

        public static function getRelated($id, $type) {
            $sql = "select * from phim where id not like :id and type = :type order by views desc limit 4";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id, 'type' => $type));
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Movie($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['director'], $item['year'], $item['time'],
                    $item['quality'], $item['category'], $item['country'], $item['type'], $item['views'], $item['description']);
            }
            return $list;
        }

        public static function update($id, $name, $name_en, $link, $director, $year, $time, $quality, $category, $country, $type, $desc) {
            $sql = "update phim set id = :id, name_vi = :name, name_en = :name_en, link = :link, director = :director, year = :year, time = :time, quality = :quality, category = :category, country = :country,type = :type, description = :desc where id = $id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' =>$id, 'name' => $name, 'name_en' => $name_en, 'link' => $link, 'director' => $director, 'year' => $year, 'time' => $time, 'quality' => $quality, 'category' => $category, 'country' => $country, 'type' => $type, 'desc' => $desc));
        }


        public static function delete($id) {
            $sql = "delete from phim where id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
        }

        public static function search($q) {
            $sql = "select * from phim where name_vi like '%$q%' limit 10";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute();
            $list = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $list[] = new Movie($item['id'], $item['name_vi'], $item['name_en'], $item['link'],
                    $item['image'], $item['director'], $item['year'], $item['time'],
                    $item['quality'], $item['category'], $item['country'], $item['type'], $item['views'], $item['description']);
            }
            return $list;
        }

        public static function totalPage($id) {
            $sql = "select * from phim where category = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            return $stm->rowCount();
        }
    }
?>