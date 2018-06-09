<?php
    class RouteNotFound extends Controller {
        public function index() {
            $response = $this->getErrorResponse();
            $post_data = json_encode($response, JSON_FORCE_OBJECT);

            echo $post_data;
        }
    }
?>