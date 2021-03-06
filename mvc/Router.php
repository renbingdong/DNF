<?php
namespace mvc;

class Router {

    private static $_router = null;
    private $_config = null;

    private function __construct() {}
    private function clone() {}

    public static function getRouter() {
        if (!self::$_router) {
            self::$_router = new Router();
        }
        return self::$_router;
    }

    public function run() {
        $requestUri = $_SERVER['REQUEST_URI'];
        $markPos = strpos($requestUri, '?');
        if ($markPos !== false) {
            $requestUri = substr($requestUri, 0, $markPos);
        }
        $requestUri = \mvc\Rewrite::getUrl($requestUri);
        $requestUri = ltrim($requestUri, '/');
        $uriArray = explode('/', $requestUri);
        if (count($uriArray) < 2) {
            echo "request url error.";
            exit;
        }
        $controller = $uriArray[0];
        $action = $uriArray[1];
        $controller = '\mvc\controller\\' . ucfirst($controller) . 'Controller';
        if (!class_exists($controller)) {
            echo "request url error. controller not exist.";
            exit;
        }
        $controllerObj = new $controller();
        if (!method_exists($controllerObj, $action)) {
            echo "request url error. action not exist.";
            exit;
        }
        try {
            $result = $controllerObj->$action();
            if (is_array($result)) {
                echo json_encode($result);
            } elseif (is_string($result)) {
                $layout = false;
                if ($result != 'index/welcome') {
                    $layout = true;
                }
                $result = trim($result);
                $file = __DIR__ . '/view/' . $result . '.php';
                if (!is_file($file)) {
                    echo "view not exists.";
                } else {
                    $data = $controllerObj->data;
                    extract($data);
                    if ($layout) {
                        require __DIR__ . '/view/layout/default.php';
                    } else {
                        require "{$file}";
                    }
                }
            }
        } catch (\Exception $e) {
            error_log($e->getMessage());
            echo "request error. 500";
        } catch (\Throwable $e) {
            error_log($e->getMessage());
            echo "request error. 500";
        }
    }

    public function setConfig (array $config) {
        $this->_config = $config;
    }

    public function getConfig($key) {
        if (!$this->_config) {
            return null;
        }
        if (!isset($this->config[$key])) {
            return null;
        }
        return $this->config[$key];
    }
}
