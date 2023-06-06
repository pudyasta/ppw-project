<?php
class Dashboard extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        if (!isset($_SESSION['user'])) {
            header("Location:" . BASE_URL . "/user/signin");
        }
        if ($_SESSION['user']['status'] != 'complete') {
            header("Location:" . BASE_URL . "/user/insertpayment");
        }
        $this->view('header');
        $this->view('dashboard/index');
    }
    public function items()
    {
        if (!isset($_SESSION['user'])) {
            header("Location:" . BASE_URL . "/user/signin");
        }
        if ($_SESSION['user']['status'] != 'complete') {
            header("Location:" . BASE_URL . "/user/insertpayment");
        }
        $this->view('header');
        $this->view('dashboard/items');
    }
}
