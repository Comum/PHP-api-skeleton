<?php
    class App {
        protected $controller = 'hello';
        protected $method = 'index';
        protected $params = [];

        public function __construct() {
            header("Access-Control-Allow-Orgin: *");
            header("Access-Control-Allow-Methods: *");
            header("Content-Type: application/json");

            $url = $this->parseUrl();

            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            } else {
                $this->controller = 'routeNotFound';
            }

            require_once '../app/controllers/' . $this->controller . '.php';

            $this->controller = new $this->controller;

            if (isset($url[1])) {
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            $this->params = $url ? array_values($url) : [];

            call_user_func_array([$this->controller, $this->method], $this->params);
        }

        public function parseUrl() {
            if (isset($_GET['url'])) {
                return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            }
        }
    }
?>