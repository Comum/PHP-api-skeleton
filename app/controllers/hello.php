<?php
    class Hello extends Controller {
        public function index($name = '') {
            $post_data = json_encode(array('hello' => $name), JSON_FORCE_OBJECT);

            echo $post_data;
        }
    }
?>