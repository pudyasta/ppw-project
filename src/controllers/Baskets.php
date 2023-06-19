<?php
class Baskets extends Controller
{
    public function __construct()
    {
    }

    public  function insertChart()
    {
        $data = $_POST['data'];

        $exc = $this->model("BasketsModel")->addBaskets($data);
        return $exc;
    }

    public function getBasket()
    {
        $data = $this->model("BasketsModel")->getBasketByCookie();
        var_dump($data);
        die;
    }
}
