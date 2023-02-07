<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id=$id");
        // $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa (`nama`, `NIS`, `email`, `jurusan`) Values (:nama, :NIS, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('NIS', $data['NIS']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        var_dump($data['nama']);

        var_dump($data['jurusan']);
        die;

        $this->db->execute();

        return $this->db->rowCount();
    }
}
