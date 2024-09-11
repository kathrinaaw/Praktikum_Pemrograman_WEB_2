<?php
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }

    public function getName() {
        return "Student Name: " . $this->name;
    }
}

class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name); //Memanggil constructor kelas induk(person)
        $this->teacherID = $teacherID;
    }

    public function getTeacherID() {
        return "Teacher ID: " . $this->teacherID;
    }

    //Override metode getName() untuk Teacher
    public function getName() {
        return "Teacher Name: " . $this->name;
    }
}

//Membuat objek student dan teacher
$student = new Student("Katrina Devianti", "KD0406");
$teacher = new Teacher("Massayu Dinar", "MD1234");

//Menampilkan informasi student dan teacher
echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br><br>";

echo $teacher->getName() . "<br>";
echo $teacher->getTeacherID();

?>