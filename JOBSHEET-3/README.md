# Jobsheet 3: Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
## 1. Inheritance
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan menciptakan hubungan hierarkis antara kelas.
```
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}
```
Kelas Animal:
- Memiliki properti yang dilindungi (protected) bernama $name.
- Konstruktornya menerima parameter $name dan menginisialisasi properti $name.
- Fungsi getNama() digunakan untuk mengembalikan nilai dari properti $name.
```
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}
```
```
class Student extends Person {
    private $studentID;

    public function __construct($nama, $studentID) {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }
}
```
Kelas Student:
- Kelas ini mewarisi kelas Person (menggunakan extends).
- Memiliki properti privat $studentID.
- Konstruktor Student menerima dua parameter ($nama dan $studentID). Melalui parent::__construct($nama), ia memanggil konstruktor dari kelas Person untuk menginisialisasi $nama. Kemudian, properti $studentID diinisialisasi.
- Fungsi getStudentID() digunakan untuk mengambil nilai $studentID.
```
$student = new Student("Katrina Devianti", "KD0406");
echo $student->getNama() . " Has ID: " . $student->getStudentID();
```
- Sebuah objek Student dibuat dengan nama "Katrina Devianti" dan ID "KD0406".
- Fungsi getNama() dan getStudentID() dipanggil untuk mencetak informasi nama dan ID mahasiswa.
### Output
```
Katrina Devianti Has ID: KD0406
```
## 2. Polymorphism
```
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}
```
Kelas Person:
- Kelas ini merupakan kelas induk dengan properti yang dilindungi (protected) bernama $name.
- Terdapat constructor untuk menginisialisasi properti $name.
- Metode getName() untuk mendapatkan nama.
```
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil constructor Person
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }

    public function getName() {
        return "Student Name: " . $this->name;
    }
}
```
Kelas Student (Turunan Person) Mewarisi dari kelas Person, memiliki properti tambahan $studentID, metode getStudentID() untuk mendapatkan studentID, metode getName() di-override untuk menambahkan kata "Student Name".
```
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name); // Memanggil constructor Person
        $this->teacherID = $teacherID;
    }

    public function getTeacherID() {
        return "Teacher ID: " . $this->teacherID;
    }

    public function getName() {
        return "Teacher Name: " . $this->name;
    }
}
```
Class Teacher turunan dari (Person), memiliki properti tambahan yaitu teacherID, menambahkan metode getTeacherID untuk mendapatkan teacherID, metode getName di-override dari class person untuk menambahkan di teacher name.
```
$student = new Student("Katrina Devianti", "KD0406");
$teacher = new Teacher("Massayu Dinar", "MD1234");

echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br><br>";

echo $teacher->getName() . "<br>";
echo $teacher->getTeacherID();
```
Membuat objek **Student dan Teacher** dibuat objek $student dengan nama "Katrina Devianti" dan ID "KD0406" dan dibuat objek $teacher dengan nama "Massayu Dinar" dan ID "MD1234". Metode getName() dan getStudentID() untuk Student dan getName() serta getTeacherID() untuk Teacher dipanggil untuk mencetak hasilnya.
### Output
```
Student Name: Katrina Devianti
Student ID: KD0406

Teacher Name: Massayu Dinar
Teacher ID: MD1234
```
## Encapsulation
```
class Person {
    private $name;
```































