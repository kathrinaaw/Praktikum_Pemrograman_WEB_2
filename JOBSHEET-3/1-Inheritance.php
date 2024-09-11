<?php

//Kelas Person
class Person {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}
//Kelas student yang mewarisi dari person
class Student extends Person {
    private $studentID;

    public function __construct($nama, $studentID) {
        parent::__construct($nama); // memanggil constructor kelas induk(person)
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }
}

$student = new Student("Katrina Devianti", "KD0406");
echo $student->getNama() . " Has ID: " . $student->getStudentID();
?>