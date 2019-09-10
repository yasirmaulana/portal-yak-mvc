<?php

class Menu_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    // $menuMaster = querySelect("SELECT * FROM V_PORTAL_MENU_USER WHERE user_id = $isID AND menu = 'parameter' AND deskripsi = 'menu' ORDER BY urutan");
// $menuIT = querySelect("SELECT * FROM V_PORTAL_MENU_USER WHERE user_id = $isID AND menu = 'it' AND deskripsi = 'menu' ORDER BY urutan");
// $menuFR = querySelect("SELECT * FROM V_PORTAL_MENU_USER WHERE user_id = $isID AND menu = 'fr' AND deskripsi = 'menu' ORDER BY urutan");
// $menuOta = querySelect("SELECT * FROM V_PORTAL_MENU_USER WHERE user_id = $isID AND menu = 'ota' AND deskripsi = 'menu' ORDER BY urutan");
// $menuCrm = querySelect("SELECT * FROM V_PORTAL_MENU_USER WHERE user_id = $isID AND menu = 'crm' AND deskripsi = 'menu' ORDER BY urutan");
// $menuFin = querySelect("SELECT * FROM V_PORTAL_MENU_USER WHERE user_id = $isID AND menu = 'keuangan' AND deskripsi = 'menu' ORDER BY urutan");

    public function getMenuMaster($id) 
    {
        $this->db->query("SELECT * FROM V_PORTAL_MENU_USER WHERE user_id = :id AND menu = 'parameter' AND deskripsi = 'menu' ORDER BY urutan");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }


}