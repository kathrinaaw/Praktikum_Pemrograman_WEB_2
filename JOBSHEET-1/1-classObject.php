<?php
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;


    public function getNama() {
        return "Nama: $this->nama";
    }

    public function getNIM() {
        return "NIM: $this->nim";
    }

    public function getJurusan() {
        return "Jurusan: $this->jurusan";
    }

    public function tampilkanData() {
        echo $this->getNama() . "<br>";
        echo $this->getNIM() . "<br>";
        echo $this->getJurusan() . "<br>";
    }
}

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Katrina Devianti";
$mahasiswa1->nim = "230102037";
$mahasiswa1->jurusan = "JKB";

$mahasiswa1->tampilkanData();
?>
