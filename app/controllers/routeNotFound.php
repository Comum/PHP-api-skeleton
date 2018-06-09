<?php
    class RouteNotFound extends Controller {
        public function index() {
            $response = $this->generateResponse();
            $post_data = json_encode($response, JSON_FORCE_OBJECT);

            echo $post_data;
        }

        private function generateResponse() {
            return $this->getErrorResponse();
        }
    }
?>