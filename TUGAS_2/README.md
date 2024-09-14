# TUGAS 2: Create an OOP-based View, by retrieving data from the MySQL database
## 1. Koneksi
**Enkapsulasi** adalah prinsip di mana data (atribut) dan metode (fungsi) disembunyikan di dalam kelas dan hanya dapat diakses melalui metode yang disediakan oleh kelas tersebut. Ini melindungi data dari akses langsung yang tidak diinginkan.
```
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "jkb";
    protected $koneksi;
```
Membuat koneksi ke database
```
public function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->koneksi) {
            die("Koneksi database MySQL dan PHP Gagal: " . mysqli_connect_error());
        }
    }
```
1. Inisialisasi Koneksi Database:
```$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);``` Baris ini mencoba membuat koneksi ke database MySQL menggunakan informasi yang diberikan: host, username, password, dan database. Hasil koneksi disimpan dalam atribut $this->koneksi.
2. Pengecekan Koneksi:
```if (!$this->koneksi)``` Mengecek apakah koneksi berhasil atau tidak. Jika koneksi gagal ($this->koneksi adalah false), maka program akan menghentikan eksekusi dengan menggunakan die(), dan menampilkan pesan error yang dihasilkan oleh mysqli_connect_error().
Menjalankan query SQL
```
protected function query($query) {
        $result = mysqli_query($this->koneksi, $query);
        if (!$result) {
            die("Query Error: " . mysqli_error($this->koneksi));
        }
        return $result;
```
1. Menjalankan Query SQL:
```$result = mysqli_query($this->koneksi, $query);``` Baris ini menjalankan query SQL yang diberikan sebagai parameter $query terhadap koneksi database yang disimpan dalam $this->koneksi. Fungsi mysqli_query() mengembalikan hasil query atau false jika terjadi kesalahan.
2. Pengecekan Error:
```if (!$result)``` Mengecek apakah hasil dari mysqli_query() adalah false, yang menandakan bahwa query gagal dijalankan. Jika query gagal, eksekusi program dihentikan dengan die(), dan pesan error yang dihasilkan oleh mysqli_error($this->koneksi) ditampilkan. Ini membantu dalam debugging dengan memberikan informasi tentang apa yang salah dengan query yang dijalankan.
3. Mengembalikan Hasil:
```return $result;``` Jika query berhasil dijalankan, hasil dari query dikembalikan. Ini memungkinkan metode yang memanggil query() untuk menggunakan hasil tersebut, seperti mengambil data dari hasil query atau memeriksa jumlah baris yang terpengaruh.

**Inheritance** adalah prinsip di mana sebuah kelas (kelas anak) mewarisi atribut dan metode dari kelas lain (kelas induk). Ini memungkinkan penggunaan kembali kode dan pembentukan hierarki kelas.
```
class Courses extends Database {
    public function tampil_data($tanggal = null) {
        if ($tanggal) {
            $query = "SELECT * FROM courses WHERE DATE(created_at) = '$tanggal'";
        } else {
            $query = "SELECT * FROM courses";
        }
        $result = mysqli_query($this->koneksi, $query);
        $array = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
}

class CoursesClasses extends Database {
    public function tampil_data() {
        $query = "SELECT * FROM course_classes";
        $result = $this->query($query);
        $array = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
}
```
Kelas Courses dan CoursesClasses mewarisi dari kelas Database. Ini memungkinkan Courses dan CoursesClasses menggunakan metode query dan mengakses koneksi database yang dibuat oleh kelas Database.

**Polymorphism** adalah prinsip di mana metode yang sama dapat memiliki implementasi yang berbeda berdasarkan konteksnya. Dalam PHP, ini sering dicapai melalui overloading metode atau metode dengan parameter berbeda.
```
class Courses extends Database {
    public function tampil_data($tanggal = null) {
        if ($tanggal) {
            $query = "SELECT * FROM courses WHERE DATE(created_at) = '$tanggal'";
        } else {
            $query = "SELECT * FROM courses";
        }
        $result = mysqli_query($this->koneksi, $query);
        $array = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
}
```
Metode tampil_data dalam kelas Courses dapat dipanggil dengan atau tanpa parameter $tanggal. Jika parameter $tanggal diberikan, metode ini akan menampilkan data berdasarkan tanggal tersebut. Jika tidak ada parameter, metode ini menampilkan semua data. Ini menunjukkan bagaimana satu metode dapat berfungsi berbeda berdasarkan parameter yang diberikan.

### Tampilan Menu Utama
![image](https://github.com/user-attachments/assets/826bd70e-873d-46e5-8ea2-f05b3b210f47)
### Tampilan Menu "DATA COURSE"
![image](https://github.com/user-attachments/assets/7f84bdb5-ad8c-4e26-88b8-089147019dd7)
### Tampilan Menu "DATA COURSES CLASSES"
![image](https://github.com/user-attachments/assets/b65f91c1-aac5-4382-9fd9-b1dd0901cfce)
### Tampilan Menu "DATA COURSE - TANGGAL 13
![image](https://github.com/user-attachments/assets/bf5b68f8-d9d3-4a3e-9f2b-64a8f204c0c2)
