<?php

class Home extends Controller {
    public function index()
    {
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header-signin');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    
}