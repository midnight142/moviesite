<?php
    require_once('models/Movie.php');
    require_once('models/Trailer.php');
    class BaseController {
        protected $name;

        public function render($view, $data = array(), $template = 'main_template') {
            ob_start();
            extract($data);
            include_once("views/" . $this->name . "/" . $view . ".php");
            $content = ob_get_clean();
            $trailer = Trailer::getTrailer(10);
            require_once("views/layout/" . $template . ".php");
        }
    }
?>