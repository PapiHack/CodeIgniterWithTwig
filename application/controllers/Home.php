<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //$this->load->view('home', ['titre'=>'test', 'msg'=>'First msg']);
        echo $this->twig->render('home', ['titre'=>'test', 'msg'=>'First msg']);
    }
}