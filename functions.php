<?php
    function redirect($url, $message = '') {
        header("Location: $url");
    }

    function isLoggin() {
        if (isset($_SESSION['user'])) {
            return true;
        }
        else
            return false;
    }

    function getNameById($id) {
        $sql = "select name_vi from phim where id = :id";
        $db = DB::getDB();
        $stm = $db->prepare($sql);
        $stm->execute(array('id' => $id));
        $item = $stm->fetch(PDO::FETCH_ASSOC);
        return $item;
    }

?>