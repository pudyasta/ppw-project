<?php
class App
{
    private $controller = 'home';
    private $method = 'index';
    private $params = [];
    public function __construct()
    {
        $url = Helper::parseURL();
        if (file_exists('src/controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
            if (!isset($_COOKIE["user_cookie"])) {
                setcookie("user_cookie", uniqid(md5(random_bytes(16)), true), time() + (10 * 365 * 24 * 60 * 60), "/");
            }
        }
        require_once 'src/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller();

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        if (!empty($url)) {
            $this->params = array_values($url);
        }
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
