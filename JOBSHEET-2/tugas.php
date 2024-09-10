<?php
//Membuat Kelas Dosen
class Dosen{
    public $nama; //Atribut nama
    public $nip; //Atribut NIP
    public $mataKuliah; //Atribut MataKuliah

    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen() {
        return "Nama: $this->nama, NIP: $this->nip, Mata Kuliah: $this->mataKuliah";
    }
}

$dosen1 = new Dosen("Pak Abda'u", "123456789", "Praktikum WEB");
echo $dosen1->tampilkanDosen();
?>