<?php
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function getMatakuliah() {
        return $this->mataKuliah;
    }
}

$pengguna1 = new Dosen ("Abda'u", "Pemrograman Web II");
echo $pengguna1->getNama().'<br>';
echo $pengguna1->getMatakuliah();
?>