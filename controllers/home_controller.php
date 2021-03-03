<?php
    require_once('controllers/base_controller.php');
    class HomeController extends BaseController {
        function __construct()
        {
            $this->name = 'home';
        }

        function index() {
            $film = Movie::getListByCat(1, 8);
            $film2 = Movie::getListByType(1, 8);
            $film3 = Movie::getListByCountry(4, 8);
            $this->render('index', array('film' => $film, 'film2' => $film2, 'film3' => $film3));
        }

        function search() {
            $q = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING);
            $data = Movie::search($q);
            foreach ($data as $d) {
                echo $d->name_vi . "</br>";
            }
        }

        function bookmark() {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            if (!isset($_SESSION['bookmark'])) {
                $arr = array();
                $_SESSION['bookmark'] = $arr;
            }

            if (!in_array($id, $_SESSION['bookmark']))
                array_push($_SESSION['bookmark'], $id);

            redirect('?controller=movie&action=detail&id=' . $id);

        }

        function unbookmark() {
            if (isset($_SESSION['bookmark'])) {
                unset($_SESSION['bookmark']);
            }
            redirect('?controller=home');
        }

        function error() {
            $this->render('error', array(), '404');
        }
    }
?>