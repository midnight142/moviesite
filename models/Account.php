<?php
    class Account {
        public $id;
        public $username;
        public $password;
        public $email;

        public function __construct($id, $username, $password, $email)
        {
            $this->id = $id;
            $this->username = $username;
            $this->password;
            $this->email = $email;
        }

        public static function register($user, $pass, $email) {
            $sql = "insert into taikhoan (username, password, email) values (:user, :pass, :email)";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('user' => $user, 'pass' => $pass, 'email' => $email));
        }

    }
?>