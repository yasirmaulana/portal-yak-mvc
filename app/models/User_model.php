<?php

class User_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllUser() 
    {
        $this->db->query('SELECT * FROM portal_user');
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM portal_user WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getUserByLogin($data)
    {
        $email = $data['email'];
        $pass = $data['password'];

        $this->db->query('SELECT * FROM portal_user WHERE email=:email');
        $this->db->bind('email', $email);
        return $this->db->single();
    }

    public function tambahDataUser($data) 
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