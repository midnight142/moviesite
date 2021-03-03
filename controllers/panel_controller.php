<?php
    require_once('controllers/base_controller.php');
    require_once('models/Movie.php');
    class PanelController extends BaseController {
        public function __construct()
        {
            $this->name = 'panel';
        }

        function home() {
            if (!isLoggin()) {
                redirect('?controller=account&action=login');
            }
            $film = Movie::getListByCat(1);
            $film2 = Movie::getListByKind1(1);
            $film3 = Movie::getListByKind1(2);
            $film4 = Movie::getListByCat(8);
            $film5 = Movie::getListByCountry(4);
            $this->render('home', array('film' => $film, 'film2' => $film2 , 'film3' => $film3, 'film4' => $film4, 'film5' => $film5), 'panel_template');
        }

        function update() {
            $fid = filter_input(INPUT_POST, 'm1-id', FILTER_SANITIZE_STRING);
            $fname = filter_input(INPUT_POST, 'm1-name', FILTER_SANITIZE_STRING);
            $fname_en = filter_input(INPUT_POST, 'm1-name_en', FILTER_SANITIZE_STRING);
            $link = filter_input(INPUT_POST, 'm1-link', FILTER_SANITIZE_STRING);
            $director = filter_input(INPUT_POST, 'm1-director', FILTER_SANITIZE_STRING);
            $time = filter_input(INPUT_POST, 'm1-time', FILTER_SANITIZE_STRING);
            $quality = filter_input(INPUT_POST, 'm1-quality', FILTER_SANITIZE_STRING);
            $category = filter_input(INPUT_POST, 'm1-category', FILTER_SANITIZE_STRING);
            $type = filter_input(INPUT_POST, 'm1-type', FILTER_SANITIZE_STRING);
            $year = filter_input(INPUT_POST, 'm1-year', FILTER_SANITIZE_STRING);
            $country = filter_input(INPUT_POST, 'm1-country', FILTER_SANITIZE_STRING);
            $desc = filter_input(INPUT_POST, 'm1-desc', FILTER_SANITIZE_STRING);

            Movie::update($fid, $fname, $fname_en, $link, $director, $year, $time, $quality, $category, $country, $type, $desc);
            redirect('?controller=panel&action=home');
        }

        function delete() {
            $fid = filter_input(INPUT_POST, 'fid', FILTER_SANITIZE_STRING);
            Movie::delete($fid);
            redirect('?controller=panel&action=home');
        }

    }

?>