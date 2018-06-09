<?php
    class Hello extends Controller {
        protected $route = 'hello';

        public function index($name = '') {
            $response = $this->generateResponse($name);
            $post_data = json_encode($response, JSON_FORCE_OBJECT);

            echo $post_data;
        }

        private function generateResponse($name) {
            if (!$name) {
                return $this->getErrorResponse($this->route);
            }

            return array('hello' => $name);
        }
    }
?>