<?php
    require_once('controllers/base_controller.php');
    require_once('models/Movie.php');
    require_once('models/Category.php');
    require_once('models/Type.php');
    class ListController extends BaseController {
        public function __construct()
        {
            $this->name = 'list';
        }

        function category() {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
            if (!isset($page)) {
                $page = 1;
            }
            if (is_numeric($id) && is_numeric($page)) {
                $cat = Movie::getListOnPerPage($id, ($page - 1) * 4, 12);
                $name_cat = Category::getCatById($id);
            }

            $this->render('category', array('cat' => $cat, 'id' => $id, 'page' => $page, 'name' => $name_cat), 'template_02');
        }

        function kind() {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
            $total_page = 0;
            if (!isset($page)) {
                $page = 1;
                $total_page = round(Movie::totalPage($id) / 12);
            }
            if (is_numeric($id) && is_numeric($page)) {
                $kind = Movie::getListByKind($id, ($page - 1) * 4, 12);
                $name_kind = Type::getTypeById($id);
            }

            $this->render('kind', array('kind' => $kind, 'id' => $id, 'page' => $page , 'totalPage' => $total_page, 'name' => $name_kind), 'template_02');
        }

        function trailer() {
            $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
            if (!isset($page))
                $page = 1;
            if (is_numeric($page)) {
                $trailer = Trailer::getList(($page - 1) * 4, 12);
            }

            $this->render('trailer', array('trailer' => $trailer, 'page' => $page), 'template_02');
        }
    }
?>