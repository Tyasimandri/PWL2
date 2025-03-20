<?php

    /**
     * Model mahasiswa berfungsi untuk menjalankan query
     * Sebelum menggunakan query, load dulu library database
     */

    namespace Models;
    use Libraries\Database;

    class Model_mhs
    {
        public function __construct()
        {
            $db = new Database();
            $this->dbh = $db->getInstance();
        }

        function simpanData($nim, $nama)
        {
            $query = "INSERT INTO mahasiswa (nim, nama, created_at, deleted_at) VALUES (?, ?, NOW(), NULL)";
            $rs = $this->dbh->prepare($query);
            return $rs->execute([$nim, $nama]);
        }

        function lihatData()
        {
            $query = "SELECT * FROM mahasiswa WHERE deleted_at IS NULL";
            $rs = $this->dbh->query($query);
            return $rs->fetchAll();
        }

        function lihatDataDetail($id)
        {
            $query = "SELECT * FROM mahasiswa WHERE id = ?";
            $rs = $this->dbh->prepare($query);
            $rs->execute([$id]);
            return $rs->fetch(); // Mengambil satu data saja
        }

        function hapusData($id)
        {
            $deleted_at = date('Y-m-d H:i:s');

            $query = "UPDATE mahasiswa SET deleted_at = ? WHERE id = ?";
            $rs = $this->dbh->prepare($query);
            return $rs->execute([$deleted_at, $id]);
        }
    }