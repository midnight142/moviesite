<?php
    define("HOST", "http://localhost/Assignment");
    class DB {
        private static $db;
        public static function getDB() {
            if (self::$db == null) {
                self::$db = new PDO("mysql:host=127.0.0.1;dbname=moviesite",'root', '');
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$db;
        }
    }
?>