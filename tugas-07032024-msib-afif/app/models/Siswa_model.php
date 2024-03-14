<?php

class Siswa_model {
    private $table = 'siswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllSiswa($limit, $start) {
        $this->db->query("SELECT siswa.*, kelas.nama_kelas FROM " . $this->table . " JOIN kelas ON siswa.id_kelas = kelas.id_kelas ORDER BY siswa.nama ASC LIMIT :start, :limit");
        $this->db->bind(':start', $start);
        $this->db->bind(':limit', $limit);
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

    public function updateDataSiswa($data) {
        $query = "UPDATE " . $this->table . " SET nama=:nama, id_kelas=:id_kelas, gender=:gender, alamat=:alamat, umur=:umur, id_sekolah=:id_sekolah WHERE nis=:nis";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('id_sekolah', $data['id_sekolah']);
        $this->db->bind('nis', $data['nis']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getSiswaByKelas($id_kelas) {
        $this->db->query("SELECT * FROM siswa WHERE id_kelas = :id_kelas ORDER BY nama ASC");
        $this->db->bind(':id_kelas', $id_kelas);
        return $this->db->resultSet();
    }

    public function getTotalSiswa() {
        $this->db->query("SELECT COUNT(*) as total FROM " . $this->table);
        return $this->db->resultSingle()['total'];
    }
    
}