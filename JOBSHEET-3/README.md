# Jobsheet 3: Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
## 1. Inheritance
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan menciptakan hubungan hierarkis antara kelas.
```
class Person {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}
```
Kelas Person memiliki properti nama yang bertipe protected, sehingga bisa diakses oleh kelas turunan (Student). Metode getNama() digunakan untuk mengembalikan nilai dari properti nama. Konstruktornya menerima satu parameter ($nama) yang digunakan untuk menginisialisasi properti nama.
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
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk, biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.
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
Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal tetap aman dari perubahan tak terduga.
```
class Person {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}
```
Membuat class person dengan atribut $name dengan akses private, sehingga hanya bisa diakses melalui getter dan setter. Fungsi getName() digunakan untuk mendapatkan nilai dari $name, sedangkan setName() digunakan untuk mengubah nilai $name.
```
    class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    public function getName() {
        return "Student Name: " . parent::getName();
    }
}
```
Kelas Student mewarisi kelas Person dan menambahkan properti baru yaitu $studentID. Getter dan setter digunakan untuk mengakses atau mengubah nilai dari $studentID. Metode getName() di-override untuk menampilkan format khusus, tetapi masih memanggil metode getName() dari kelas induk (Person) menggunakan parent::getName().
```
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getTeacherID() {
        return "Teacher ID: " . $this->teacherID;
    }

    public function getName() {
        return "Teacher Name: " . parent::getName();
    }
}
```
Kelas Teacher juga mewarisi Person dan menambahkan properti baru $teacherID. Override pada metode getName() menampilkan format berbeda, tetapi tetap menggunakan parent::getName() karena properti $name bersifat private di kelas Person.
```
$student = new Student("Katrina Devianti", "KD0406");
echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br>";

// Mengubah nama dan ID student
$student->setName("Katarina Blu");
$student->setStudentID("KB5678");
echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br>";

$teacher = new Teacher("Massayu Dinar", "MD1234");
echo $teacher->getName() . "<br>";
echo $teacher->getTeacherID() . "<br>";
```
Objek Student dibuat dengan nama "Katrina Devianti" dan ID "KD0406". Setelah itu, nama dan ID dari Student diubah menggunakan setter. Objek Teacher dibuat dengan nama "Massayu Dinar" dan ID "MD1234".
### Output
```
Student Name: Katrina Devianti
Student ID: KD0406
Student Name: Katarina Blu
Student ID: KB5678
Teacher Name: Massayu Dinar
Teacher ID: MD1234
```
Enkapsulasi diterapkan dengan mengubah properti menjadi private dan mengaksesnya melalui getter dan setter. Pewarisan dan overriding digunakan untuk menyesuaikan output berdasarkan tipe objek (Student atau Teacher) tanpa mengubah properti privat langsung dari kelas induk (Person).
## Abstraction
Abstraction adalah proses menyembunyikan detail implementasi internal dan hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai dengan menggunakan kelas abstrak atau antarmuka.
```
abstract class Course {
    protected $courseName;
    protected $instructor;

    public function __construct($courseName, $instructor) {
        $this->courseName = $courseName;
        $this->instructor = $instructor;
    }

    abstract public function getCourseDetails();
}
```
Course adalah kelas abstrak yang tidak dapat diinstansiasi secara langsung. Kelas ini hanya berfungsi sebagai blueprint untuk kelas turunannya. Kelas ini memiliki dua properti, yaitu $courseName (nama kursus) dan $instructor (pengajar). Metode abstrak getCourseDetails() dideklarasikan, yang harus diimplementasikan oleh setiap kelas turunan.
```
class OnlineCourse extends Course {
    private $platform;

    public function __construct($courseName, $instructor, $platform) {
        parent::__construct($courseName, $instructor);
        $this->platform = $platform;
    }

    public function getCourseDetails() {
        return "Online Course: {$this->courseName}, Instructor: {$this->instructor}, Platform: {$this->platform}";
    }
}
```
OnlineCourse adalah turunan dari Course yang merepresentasikan kursus online. Properti tambahan adalah $platform, yang menyimpan informasi tentang platform pembelajaran online (misalnya, ZOOM). Metode getCourseDetails() diimplementasikan untuk memberikan detail tentang kursus online.
```
class OfflineCourse extends Course {
    private $location;

    public function __construct($courseName, $instructor, $location) {
        parent::__construct($courseName, $instructor);
        $this->location = $location;
    }

    public function getCourseDetails() {
        return "Offline Course: {$this->courseName}, Instructor: {$this->instructor}, Location: {$this->location}";
    }
}
```
OfflineCourse adalah turunan dari Course yang merepresentasikan kursus offline. Properti tambahan adalah $location, yang menyimpan lokasi fisik kursus. Metode getCourseDetails() diimplementasikan untuk memberikan detail tentang kursus offline.
```
$onlineCourse = new OnlineCourse("Web Development", "Pi Cheolin", "ZOOM");
$offlineCourse = new OfflineCourse("Data Science", "Hawa", "Harvard University");

echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails() . "<br>";
```
Membuat dua objek: satu untuk kursus online (OnlineCourse) dan satu untuk kursus offline (OfflineCourse). Setelah objek dibuat, metode getCourseDetails() dipanggil untuk menampilkan informasi masing-masing kursus.
### Output
```
Online Course: Web Development, Instructor: Pi Cheolin, Platform: ZOOM
Offline Course: Data Science, Instructor: Hawa, Location: Harvard University
```
- Kelas abstrak digunakan untuk mendefinisikan kerangka umum bagi kelas-kelas yang berbeda (online dan offline).
- Polimorfisme ditunjukkan melalui implementasi metode getCourseDetails() yang berbeda pada setiap kelas turunan (OnlineCourse dan OfflineCourse).
## TUGAS
```
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getRole() {
        return "Person";
    }

    public function getName() {
        return $this->name;
    }
}
```
- Properti: 
    - protected $name yang menyimpan nama.
    - Konstruktor: Menerima parameter name untuk menginisialisasi properti name.
- Metode:
    - getName(): Mengembalikan nama.
    - getRole(): Mengembalikan string "Person", yang akan di-override oleh kelas turunan.
```
class Dosen extends Person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getRole() {
        return "Dosen";
    }

    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}
```
- Properti: private $nidn untuk menyimpan NIDN dosen.
- Konstruktor: Menerima parameter name dan nidn, memanggil konstruktor kelas induk dan menginisialisasi nidn.
- Metode:
    - getRole(): Mengembalikan string "Dosen" untuk polimorfisme.
    - Getter dan setter untuk nidn (enkapsulasi).
```
class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getRole() {
        return "Mahasiswa";
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
}
```
- Properti: private $nim untuk menyimpan NIM mahasiswa.
- konstruktor: Menerima parameter name dan nim, memanggil konstruktor kelas induk dan menginisialisasi nim.
- Metode:
  - getRole(): Mengembalikan string "Mahasiswa" untuk polimorfisme.
  - Getter dan setter untuk nim (enkapsulasi).
```
abstract class Jurnal {
    protected $title;

    public function __construct($title) {
        $this->title = $title;
    }

    abstract public function submitJurnal();
}
```
- Properti: protected $title untuk menyimpan judul jurnal.
- Konstruktor: Menerima parameter title untuk menginisialisasi properti title.
- Metode Abstrak: submitJurnal(), harus diimplementasikan oleh kelas turunan.
```
class JurnalDosen extends Jurnal {
    private $nidn;

    public function __construct($title, $nidn) {
        parent::__construct($title);
        $this->nidn = $nidn;
    }

    public function submitJurnal() {
        return "Jurnal dengan judul '$this->title' telah diterima oleh Dosen dengan NIDN $this->nidn.";
    }
}
```
- Properti: private $nidn untuk menyimpan NIDN dosen.
- Konstruktor: Menerima parameter title dan nidn, memanggil konstruktor kelas induk dan menginisialisasi nidn.
- Metode:
    - submitJurnal(): Mengembalikan string dengan detail jurnal untuk dosen.
```
class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function __construct($title, $nim) {
        parent::__construct($title);
        $this->nim = $nim;
    }

    public function submitJurnal() {
        return "Jurnal dengan judul '$this->title' telah diterima oleh Mahasiswa dengan NIM $this->nim.";
    }
}
```
- Properti: private $nim untuk menyimpan NIM mahasiswa.
- Konstruktor: Menerima parameter title dan nim, memanggil konstruktor kelas induk dan menginisialisasi nim.
- Metode:
    - submitJurnal(): Mengembalikan string dengan detail jurnal untuk mahasiswa.
```
$dosen = new Dosen("Bpk Wahyu", "20232029");
echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN " . $dosen->getNidn() . "<br>";

$mahasiswa = new Mahasiswa("Katrina", "230102037");
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM " . $mahasiswa->getNim() . "<br>";

$jurnalDosen = new JurnalDosen("Matematika Diskrit", $dosen->getNidn());
echo $jurnalDosen->submitJurnal() . "<br>";

$jurnalMahasiswa = new JurnalMahasiswa("Hukum Newton", $mahasiswa->getNim());
echo $jurnalMahasiswa->submitJurnal() . "<br>";
```
Membuat Objek: Objek Dosen dan Mahasiswa dibuat, serta objek JurnalDosen dan JurnalMahasiswa untuk menunjukkan penggunaan metode yang di-override.
### Output
```
Bpk Wahyu adalah seorang Dosen dengan NIDN 20232029
Katrina adalah seorang Mahasiswa dengan NIM 230102037
Jurnal dengan judul 'Matematika Diskrit' telah diterima oleh Dosen dengan NIDN 20232029.
Jurnal dengan judul 'Hukum Newton' telah diterima oleh Mahasiswa dengan NIM 230102037.
```
- Polimorfisme terlihat pada metode getRole() yang di-override oleh kelas Dosen dan Mahasiswa.
- Enkapsulasi terlihat pada penggunaan getter dan setter untuk nidn dan nim.
- Pewarisan memungkinkan Dosen dan Mahasiswa mewarisi properti dan metode dari Person, serta JurnalDosen dan JurnalMahasiswa mewarisi dari Jurnal.























