<?php

class Sekolah_model {
    private $table = 'sekolah';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getSekolah($id_sekolah) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_sekolah=:id_sekolah');
        $this->db->bind(':id_sekolah', $id_sekolah);
        return $this->db->resultSingle();
    }
}