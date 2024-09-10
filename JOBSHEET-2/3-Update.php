<?php

// Class Mahasiswa
class Mahasiswa {
    // atribut mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // metode tampilkan data()
    public function tampilkanData() {
        return 
        "Nama : {$this->nama} <br>
        NIM : {$this->nim} <br>
        Jurusan : {$this->jurusan} <br>";
    }

    // metode untuk mengupdate jurusan
    public function updateJurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
    }
}

// Instansiasi objek
$mahasiswa1 = new Mahasiswa("Katrina Devianti", "230102037", "Teknik Informatika <br>");
echo $mahasiswa1->tampilkanData();

// Mengubah jurusan menggunakan metode updateJurusan()
$mahasiswa1->updateJurusan("Rekayasa Keamanan Siber");
echo "Setelah perubahan jurusan: <br>";
echo $mahasiswa1->tampilkanData();

?>
