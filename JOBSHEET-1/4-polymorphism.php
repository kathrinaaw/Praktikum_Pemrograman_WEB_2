<?php
class Pengguna {
    protected $nama;

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function getNama() {
        return $this->nama;
    }
    public function aksesFitur() {
        echo "fitur pengguna";
    }
}

class Mahasiswa extends Pengguna{

    public function aksesFitur() {
        echo "Fitur Mahasiswa";
    }
}

class Dosen extends Pengguna{

    public function aksesFitur() {
        echo "Fitur Dosen";
    }
} 


$mahasiswa1 = new Mahasiswa();
$mahasiswa1->aksesFitur();
?>