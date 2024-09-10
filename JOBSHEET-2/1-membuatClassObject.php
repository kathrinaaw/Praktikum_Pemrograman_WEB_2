<?php
//1. Membuat Class dan Object

//Class
class Mahasiswa {
    //atribut mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // metode tampilkan data()
    public function tampilkanData() {
        return 
        "Nama : $this->nama <br>
        NIM : $this->nim <br>
        Jurusan : $this->jurusan <br>";
    }
}

// Instansiasi objek
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Katrina Devianti";
$mahasiswa1->nim = "230102037";
$mahasiswa1->jurusan = "Teknik Informatika";

// Tampilkan data
echo $mahasiswa1->tampilkanData();

?>
