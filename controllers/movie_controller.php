<?php
    require_once('controllers/base_controller.php');
    require_once('models/Type.php');
    require_once('models/Category.php');
    require_once('models/Country.php');
    require_once('models/Comment.php');
    class MovieController extends BaseController {
        public function __construct()
        {
            $this->name = 'movie';
        }

        function detail() {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            if (is_numeric($id))
                $film = Movie::getMovieById($id);
            $cat = Category::getCatById($film->category);
            $type = Type::getTypeById($film->type);
            $related = Movie::getRelated($id, $film->type);
            $country = Country::getCountryById($film->country);
            $this->render('detail', array('film' => $film, 'cat' => $cat, 'type' => $type, 'country' => $country->country, 'related' => $related));
        }

        function trailer() {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            if (is_numeric($id))
                $trailer = Trailer::getTrailerById($id);
            $country = Country::getCountryById($trailer->country);
            $related_t = Trailer::getRelatedTrailer($id);
            $this->render('trailer', array('trailer' => $trailer, 'country' => $country->country, 'related_t' => $related_t));
        }

        function view() {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            if (is_numeric($id)) {
                $f = Movie::getMovieById($id);
                $kind = Type::getTypeById($f->type);
                $cat = Category::getCatById($f->category);
                $cmt = Comment::loadComment($id);
            }
            $this->render('view', array('fi' => $f, 'kind' => $kind, 'cat' => $cat, 'cmt' => $cmt), 'template_02');
        }
    }

?>