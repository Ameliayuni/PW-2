<<<<<<< HEAD
<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model  ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan() {
        $buku = new Buku($_POST ('judul'), $_POST ('pengarang'), $_POST ('penerbit'), $_POST ('tahun'));

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        $id = $_POST('id_hapus');

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('location: http://localhost/index.php');
        exit;
    }
=======
<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model  ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan() {
        $buku = new Buku($_POST ('judul'), $_POST ('pengarang'), $_POST ('penerbit'), $_POST ('tahun'));

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        $id = $_POST('id_hapus');

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('location: http://localhost/index.php');
        exit;
    }
>>>>>>> 5b3e1d65e1c965116d8a4ab413ad3c0d26f7f217
}