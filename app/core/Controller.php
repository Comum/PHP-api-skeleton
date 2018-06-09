<?php
    class Controller {
        public function getErrorResponse($type, $params = []) {
            $response = '';

            switch($type) {
                case 'hello': $response = $this->getHelloError();
                    break;
                default: $response = $this->getDefaultError();

            }

            return $response;
        }

        private function getHelloError() {
            return array(
                'type' => 'error',
                'err' => 'Params needed',
                'params' => [
                    'name' => 'string'
                ]
            );
        }

        private function getDefaultError() {
            return array(
                'type' => 'error',
                'err' => 'Route not found'
            );
        }
    }
?>