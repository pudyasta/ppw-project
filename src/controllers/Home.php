<?php
class Home extends Controller
{
    public function index()
    {
        $this->view('header');
        $this->view('index');
    }
}
