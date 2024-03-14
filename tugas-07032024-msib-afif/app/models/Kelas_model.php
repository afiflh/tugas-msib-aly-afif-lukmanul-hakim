<?php

class Kelas_model {
    private $table = 'kelas';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllKelas() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSiswaByKelas($id_kelas) {
        $this->db->query("SELECT * FROM siswa WHERE id_kelas = :id_kelas");
        $this->db->bind(':id_kelas', $id_kelas);
        return $this->db->resultSet();
    }

    public function getNamaKelasById($id_kelas) {
        $this->db->query("SELECT nama_kelas FROM kelas WHERE id_kelas = :id_kelas");
        $this->db->bind(':id_kelas', $id_kelas);
        $result = $this->db->resultSingle();
        return $result['nama_kelas'];
    }
}