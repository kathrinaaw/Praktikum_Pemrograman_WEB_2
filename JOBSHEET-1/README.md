# JOBSHEET 1: Implementasi Prinsip OOP dalam PHP
## 1. Class & Object
```
class Mahasiswa
```
Class digunakan untuk mendefinisikan blueprint/template untuk objek. Contohnya disini adalah objek Mahasiswa yang di dalamnya terdapat properti (variabel) dan metode (fungsi).
```
public $nama;
public $nim;
public $jurusan;
```
Properti dalam pemrograman berorientasi objek (OOP) adalah variabel yang didefinisikan di dalam sebuah kelas untuk menyimpan data atau informasi terkait objek yang dibuat dari kelas tersebut. Properti mewakili karakteristik atau atribut dari sebuah objek. 
```
  class Mahasiswa {
    public $nama1;
    protected $nama2;
    private $nama3;
}
```
Properti bisa memiliki tingkat akses tertentu, seperti public, protected, atau private, yang menentukan siapa yang bisa mengakses atau memodifikasi properti tersebut.
public: Properti bisa diakses dari mana saja, termasuk dari luar kelas.
protected: Properti hanya bisa diakses dari dalam kelas itu sendiri atau kelas yang mewarisi (subclass).
private: Properti hanya bisa diakses dari dalam kelas itu sendiri.
```
public function __construct
```
- __construct() adalah metode khusus dalam pemrograman berorientasi objek (OOP) di PHP, yang disebut sebagai constructor. Metode ini digunakan untuk menginisialisasi objek saat dibuat (diinstansiasi) dari suatu kelas. Constructor dipanggil secara otomatis ketika objek baru dibuat menggunakan kata kunci new.
```
($nama, $nim, $jurusan)
```
- $nama, $nim, dan $jurusan adalah parameter yang digunakan untuk mengisi properti $nama, $nim, dan $jurusan pada saat objek dibuat.
```
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
```
- $this->nama = $nama: Dengan menggunakan $this, kita mengacu pada objek yang sedang dibuat, dan kita menetapkan nilai properti $nama ke dalam properti kelas $this->nama.
```
public function tampilkanData() {
    return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
}
```
tampilkanData(): Ini adalah metode yang digunakan untuk mengembalikan data mahasiswa dalam bentuk string. Metode ini menggabungkan properti $nama, $nim, dan $jurusan menjadi satu string untuk ditampilkan.
```
$mahasiswa1 = new Mahasiswa("Katrina Devianti", "230102037", "Komputer dan Bisnis");
```
- new Mahasiswa("Katrina Devianti", "230102037", "Komputer dan Bisnis"): Di sini, objek $mahasiswa1 dibuat dari kelas Mahasiswa dengan parameter nama, nim, dan jurusan yang diisi dengan data "Katrina Devianti", "230102037", dan "Komputer dan Bisnis".
- Constructor __construct() akan secara otomatis dipanggil, dan nilai-nilai tersebut akan diisi ke dalam properti $nama, $nim, dan $jurusan.
```
echo $mahasiswa1->tampilkanData();
```
- $mahasiswa1->tampilkanData(): Ini memanggil metode tampilkanData() dari objek $mahasiswa1, yang akan mengembalikan string berisi informasi tentang mahasiswa: nama, nim, dan jurusan.
- echo: Menampilkan hasil dari metode tampilkanData() ke layar.

### OUTPUT CLASS & OBJECT
```
Nama: Katrina Devianti, NIM: 230102037, Jurusan: Komputer dan Bisnis
```
## 2. ENCAPSULATION
```
class Mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;
```
- Kelas Mahasiswa memiliki tiga properti yang bersifat private: $nama, $nim, dan $jurusan.
- Ini berarti properti tersebut hanya bisa diakses dan diubah melalui metode getter dan setter yang disediakan dalam kelas.
```
public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
}
```
__construct() adalah metode khusus yang otomatis dipanggil saat objek dibuat. Di sini, constructor digunakan untuk mengisi nilai awal dari $nama, $nim, dan $jurusan ketika objek diinstansiasi.
- Getter Methods (getNama(), getNim(), getJurusan())
Getter adalah metode yang digunakan untuk mengambil nilai properti private dari objek. getNama(), getNim(), dan getJurusan() akan mengembalikan nilai $nama, $nim, dan $jurusan masing-masing.
- Setter Methods (setNama(), setNim(), setJurusan())
Setter digunakan untuk mengubah nilai properti private. Metode setNama(), setNim(), dan setJurusan() memungkinkan kita mengubah nilai $nama, $nim, dan $jurusan setelah objek dibuat.
```
$mahasiswa1 = new Mahasiswa("Katrina Devianti", "230102037", "Komputer dan Bisnis");
echo $mahasiswa1->getNama().'<br>';
echo $mahasiswa1->getNim().'<br>';
echo $mahasiswa1->getJurusan().'<br><br>';
```
- Objek $mahasiswa1 dibuat dengan nilai "Katrina Devianti"** untuk **nama**, **"230102037"** untuk **nim**, dan **"Komputer dan Bisnis"` untuk jurusan.
- Nilai-nilai ini ditampilkan dengan menggunakan metode getter.
```
$mahasiswa1->setNama("Noni");
$mahasiswa1->setNim("123456789");
$mahasiswa1->setJurusan("KOMBIS");
```
Di sini, nilai $nama, $nim, dan $jurusan dari objek $mahasiswa1 diubah menggunakan metode setter.
```
echo $mahasiswa1->getNama().'<br>';
echo $mahasiswa1->getNim().'<br>';
echo $mahasiswa1->getJurusan().'<br>';
```
Setelah diubah, nilai baru ditampilkan menggunakan metode getter.
### Output Encapsulation
```
Katrina Devianti
230102037
Komputer dan Bisnis

Noni
123456789
KOMBIS
```
## 3. INHERITANCE
```
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}
```
- class Pengguna mendefinisikan kelas induk dengan properti $nama yang bersifat protected.
- __construct($nama) adalah constructor yang menginisialisasi properti $nama saat objek dibuat.
- getNama() digunakan untuk mengembalikan nilai $nama.
```
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
```
- class Dosen extends Pengguna berarti kelas Dosen mewarisi semua properti dan metode dari kelas Pengguna.
- $mataKuliah adalah properti baru yang hanya dimiliki oleh kelas Dosen, bersifat private.
- Constructor __construct($nama, $mataKuliah) memanggil constructor dari kelas induk Pengguna dengan parent::__construct($nama), kemudian menginisialisasi $mataKuliah.
- getMatakuliah() digunakan untuk mengembalikan nilai $mataKuliah
```
$pengguna1 = new Dosen("Pak Abda'u", "Pemrograman Web II");
```
Objek $pengguna1 dibuat dari kelas Dosen, mengisi $nama dengan "Pak Abda'u" dan $mataKuliah dengan "Pemrograman Web II".
```
echo $pengguna1->getNama().'<br>';
echo $pengguna1->getMatakuliah();
```
- getNama() memanggil metode dari kelas Pengguna untuk menampilkan nama.
- getMatakuliah() memanggil metode dari kelas Dosen untuk menampilkan mata kuliah.
### Output Inheritance
```
Pak Abda'u
Pemrograman Web II
```
## 4. POLYMORPHISM
Polymorphism adalah kemampuan objek untuk menggunakan metode yang sama dengan cara yang berbeda, tergantung pada kelasnya. Dalam konteks ini, beberapa kelas (seperti Mahasiswa dan Dosen) dapat memiliki metode dengan nama yang sama (aksesFitur()), tetapi implementasinya berbeda tergantung pada kelas yang memanggil metode tersebut.
```
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
```
Pengguna adalah kelas induk dengan properti $nama (protected) dan dua metode: setNama() untuk mengatur nama, getNama() untuk mengambil nama, dan aksesFitur() yang menampilkan teks "fitur pengguna".
```
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Fitur Mahasiswa";
    }
}

class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Fitur Dosen";
    }
}
```
- Kelas Mahasiswa dan Dosen mewarisi semua properti dan metode dari kelas Pengguna (konsep inheritance).
- Keduanya meng-override metode aksesFitur() dari kelas Pengguna untuk menampilkan teks yang berbeda:
Mahasiswa: "Fitur Mahasiswa"
Dosen: "Fitur Dosen"
```
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->aksesFitur();
```
- Objek $mahasiswa1 dibuat dari kelas Mahasiswa.
- Ketika $mahasiswa1->aksesFitur() dipanggil, metode yang sudah di-override di kelas Mahasiswa dieksekusi, dan output-nya adalah "Fitur Mahasiswa".
### Output Polymorphism
```
Fitur Mahasiswa
```
## 5. ABSTRACTION
Abstraction (abstraksi) dalam pemrograman berorientasi objek adalah konsep yang memungkinkan kita untuk menyembunyikan detail implementasi dari sebuah objek dan hanya menampilkan fitur-fitur penting atau relevan kepada pengguna.
- Abstraksi memisahkan apa yang dilakukan sebuah objek dari bagaimana cara kerjanya.
- Dengan abstraksi, kita fokus pada fungsi penting tanpa harus tahu detail teknis yang berada di baliknya.
```
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
```
- abstract class Pengguna adalah kelas induk yang tidak dapat diinstansiasi langsung.
- Kelas ini memiliki properti $nama dan metode getNama() untuk mengakses nama.
- abstract public function aksesFitur() adalah metode abstrak yang harus diimplementasikan di kelas turunannya.
```
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
```
- Kedua kelas ini mewarisi kelas Pengguna dan wajib mengimplementasikan metode aksesFitur().
- Dosen: Menampilkan nama dosen diikuti dengan "Akses fitur dosen".
Mahasiswa: Menampilkan nama mahasiswa diikuti dengan "Akses fitur mahasiswa".
```
$dosen1 = new Dosen("Bapak Andesita ");
$mahasiswa1 = new Mahasiswa("Katrina ");
```
- Objek $dosen1 dibuat dari kelas Dosen dengan nama "Bapak Andesita".
- Objek $mahasiswa1 dibuat dari kelas Mahasiswa dengan nama "Katrina".
```
$dosen1->aksesFitur();
$mahasiswa1->aksesFitur();
```
Metode aksesFitur() dipanggil oleh masing-masing objek dan menampilkan pesan sesuai dengan kelasnya.
### Output Abstraction
```
Bapak Andesita Akses fitur dosen.
Katrina Akses fitur mahasiswa.
```
