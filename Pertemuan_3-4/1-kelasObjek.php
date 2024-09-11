<?php
//definisi class
class Mobil{
    //atribut atau properties
    public $merk;
    public $warna;

    //constructor
    public function __construct($merk, $warna){
        $this->merk = $merk;
        $this->warna = $warna;
    }

    //Metode atau Function
    public function deskripsi(){
        return "Mobil ini adalah $this->merk berwarna $this->warna";
    }
}

//Instansiasi Objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();
?>