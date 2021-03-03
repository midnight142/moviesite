<?php
    require_once('configs.php');
    require_once('functions.php');
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
    $nickname = filter_input(INPUT_POST, 'nickname', FILTER_SANITIZE_STRING);
    $fid = filter_input(INPUT_POST, 'fid', FILTER_SANITIZE_STRING);

    $db = DB::getDB();
    $sql = "insert into binhluan (FID, nickname, comment) values (:fid, :nickname, :comment)";
    $stm = $db->prepare($sql);
    $stm->execute(array('fid' => $fid, 'nickname' => $nickname, 'comment' => $comment));

    redirect('http://localhost/Assignment/?controller=movie&action=view&id=' . $fid . '#comments');
?>