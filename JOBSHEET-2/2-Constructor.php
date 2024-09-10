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
}

// Instansiasi objek
$mahasiswa1 = new Mahasiswa("Katrina Devianti", "230102037", "Teknik Informatika");

// Tampilkan data
echo $mahasiswa1->tampilkanData();

?>