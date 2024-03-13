<?php

class Siswa_model {
    private $table = 'siswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllSiswa() {
        $this->db->query('SELECT siswa.*, kelas.nama_kelas FROM ' . $this->table . ' JOIN kelas ON siswa.id_kelas = kelas.id_kelas');
        return $this->db->resultSet();
    }

    public function tambahDataSiswa($data) {
        $query = "INSERT INTO siswa (nis, nama, id_kelas, umur, gender, alamat, id_sekolah) 
                  VALUES (:nis, :nama, :id_kelas, :umur, :gender, :alamat, :id_sekolah)";
    
        $this->db->query($query);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id_sekolah', $data['id_sekolah']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }

    public function hapusDataSiswa($nis) {
        $query = "DELETE FROM siswa WHERE nis = :nis";
        $this->db->query($query);
        $this->db->bind('nis', $nis);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getSiswaByNis($nis) {
        $this->db->query('SELECT siswa.*, kelas.nama_kelas FROM ' . $this->table . ' 
                          JOIN kelas ON siswa.id_kelas = kelas.id_kelas 
                          WHERE nis=:nis');
        $this->db->bind('nis', $nis);
        return $this->db->resultSingle();
    }
    
}