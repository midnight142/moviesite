<?php
    class User {
        public $id;
        public $username;
        public $password;
        public $email;

        public function __construct($id, $username, $password, $email)
        {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
        }

        public static function login($user, $pass) {
            $sql = "select * from taikhoan where username = :user";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('user' => $user));
            $item = $stm->fetch(PDO::FETCH_ASSOC);
            if ($item) {
                $hashed = md5($pass);
                if ($hashed == $item['password']) {
                    return new User($item['id'], $item['username'], $item['password'], $item['email']);
                }
                else
                    return null;
            }
            else
                return null;
        }
    }
?>