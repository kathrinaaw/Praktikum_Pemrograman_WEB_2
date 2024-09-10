<?php

// Class Mahasiswa
class Mahasiswa {
    // Atribut mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode tampilkan data
    public function tampilkanData() {
        return 
        "Nama : {$this->nama} <br>
        NIM : {$this->nim} <br>
        Jurusan : {$this->jurusan} <br>";
    }

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
    }

    // Metode setter untuk mengubah NIM mahasiswa
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

// Instansiasi objek
$mahasiswa1 = new Mahasiswa("Katrina Devianti", "230102037", "Teknik Informatika <br>");

// Menampilkan data awal
echo $mahasiswa1->tampilkanData();

// Mengubah jurusan menggunakan metode updateJurusan()
$mahasiswa1->updateJurusan("Rekayasa Keamanan Siber <br>");
echo "Setelah perubahan jurusan: <br>";
echo $mahasiswa1->tampilkanData();

// Mengubah NIM menggunakan metode setNim()
$mahasiswa1->setNim("04062005");
echo "Setelah perubahan NIM: <br>";
echo $mahasiswa1->tampilkanData();

?>