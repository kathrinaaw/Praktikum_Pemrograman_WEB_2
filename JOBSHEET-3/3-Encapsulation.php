<?php
class Person {
    private $name; // Mengubah atribut name menjadi private

    public function __construct($name) {
        $this->name = $name;
    }

    // Getter untuk name
    public function getName() {
        return $this->name;
    }

    // Setter untuk name
    public function setName($name) {
        $this->name = $name;
    }
}

// Kelas Student yang mewarisi dari Person
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil constructor kelas induk (Person)
        $this->studentID = $studentID;
    }

    // Getter untuk studentID
    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }

    // Setter untuk studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override metode getName() untuk menampilkan format yang berbeda
    public function getName() {
        return "Student Name: " . parent::getName();
    }
}

// Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name); // Memanggil constructor kelas induk (Person)
        $this->teacherID = $teacherID;
    }

    // Getter untuk teacherID
    public function getTeacherID() {
        return "Teacher ID: " . $this->teacherID;
    }

    // Override metode getName() untuk Teacher
    public function getName() {
        return "Teacher Name: " . parent::getName(); // Menggunakan parent::getName() karena name bersifat private
    }
}

// Membuat objek student
$student = new Student("Katrina Devianti", "KD0406");

// Menampilkan informasi awal
echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br>";

// Mengubah nama dan ID student
$student->setName("Katarina Blu");
$student->setStudentID("KB5678");

// Menampilkan informasi setelah diubah
echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br>";

// Membuat objek teacher
$teacher = new Teacher("Massayu Dinar", "MD1234");

// Menampilkan informasi student dan teacher
echo $teacher->getName() . "<br>";
echo $teacher->getTeacherID() . "<br>";
?>
