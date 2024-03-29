<?php

class Mahasiswa_model {
    private $table = 'portal_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllMahasiswa() 
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data) 
    {
        // return $data['email'];
        // exit();

        $query = "INSERT INTO portal_user(nama, email) value (:nama, :email) ";

        $this->db-query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
    
        $this->db->execute();

        return $this->db->rowCount();
    }

}