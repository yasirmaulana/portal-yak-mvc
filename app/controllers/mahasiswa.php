<?php

class Mahasiswa extends Controller {

    public function index() 
    {
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        
        $this->view('templates/header');
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) 
    {
        $data['judul'] = 'Detail User';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        
        $this->view('templates/header');
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // $cek = $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST);
        // var_dump($cek);
        // exit();

        if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit();
        }
    }
}