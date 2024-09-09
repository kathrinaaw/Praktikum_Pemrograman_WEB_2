<?php
abstract class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    abstract public function aksesFitur();
}

class Dosen extends Pengguna{
    public function aksesFitur() {
        echo $this->getNama()."Akses fitur dosen.<br>";
    }
}

class Mahasiswa extends Pengguna{
    public function aksesFitur() {
        echo $this->getNama()."Akses fitur mahasiswa.<br>";
    }
}

$dosen1 = new Dosen("Bapak Andesita ");
$mahasiswa1 = new Mahasiswa("Katrina ");

$dosen1->aksesFitur();
$mahasiswa1->aksesFitur();

?>