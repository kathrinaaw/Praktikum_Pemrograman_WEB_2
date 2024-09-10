# JOBSHEET-2: Menggunakan Konsep Kelas dan Objek dalam PHP

## 1. Class dan Object
Kelas (Class) adalah blueprint untuk membuat objek yang mendefinisikan **atribut** (variabel penyimpan data) dan **metode** (fungsi yang menentukan aksi objek). Atribut menyimpan data, sedangkan metode memungkinkan objek melakukan tindakan atau mengolah data tersebut. Kelas memungkinkan pembuatan banyak objek serupa dengan karakteristik dan perilaku yang sama.
```
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
}
```
**Kelas Mahasiswa**: Kelas ini memiliki tiga atribut, yaitu nama, nim, dan jurusan, yang mewakili data mahasiswa.
```
public function tampilkanData() {
        return 
        "Nama : $this->nama <br>
        NIM : $this->nim <br>
        Jurusan : $this->jurusan <br>";
}
```
**Metode tampilkanData()**: Metode ini digunakan untuk mengembalikan nilai atribut nama, nim, dan jurusan dalam bentuk string yang bisa ditampilkan di browser dengan tag HTML <br> sebagai pemisah baris.
```
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Katrina Devianti";
$mahasiswa1->nim = "230102037";
$mahasiswa1->jurusan = "Teknik Informatika";

echo $mahasiswa1->tampilkanData();
```
**Instansiasi Objek:** Objek mahasiswa1 dibuat dari kelas Mahasiswa. Setelah objek dibuat, atribut nama, nim, dan jurusan diisi secara manual.
### Output
```
Nama : Katrina Devianti
NIM : 230102037
Jurusan : Teknik Informatika
```
## 2. Implementasi Constructor
**Constructor** adalah metode khusus dalam sebuah kelas yang secara otomatis dipanggil ketika sebuah objek dari kelas tersebut dibuat (diinstansiasi). Fungsinya adalah untuk menginisialisasi atribut objek dengan nilai awal. Di PHP, constructor didefinisikan dengan nama metode __construct().
```
public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
}
```
Constructor ini menginisialisasi atribut `nama`, `nim`, dan `jurusan` dengan nilai yang diberikan saat objek dibuat.
- $nama, $nim, $jurusan: Parameter yang dikirim saat membuat objek.
- $this->nama = $nama: Menetapkan nilai parameter $nama ke atribut nama milik objek.
## 3. Membuat Metode Tambahan
Membuat metode tambahan baru menggunakan function
```
public function updateJurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
}
```
**Metode updateJurusan** mengganti nilai atribut jurusan dengan nilai baru yang diberikan sebagai parameter $jurusan_baru.
## 4. Penggunaan Atribut dan Metode
- **Atribut:** Menyimpan data objek.
- **Metode:** Melakukan operasi objek.
- **Aksesibilitas**
  - Public: Dapat diakses dari mana saja.
  - Private: Hanya dapat diakses dalam kelas itu sendiri.
  - Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.
### ATRIBUT
```
public $nama;
public $nim;
public $jurusan;
```
- public $nama;: Atribut untuk menyimpan nama mahasiswa.
- public $nim;: Atribut untuk menyimpan NIM mahasiswa.
- public $jurusan;: Atribut untuk menyimpan jurusan mahasiswa.
### METODE
1. constructor
```
public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
}
```
Menginisialisasi atribut nama, nim, dan jurusan saat objek dibuat.
2. tampilkanData() Metode
```
public function tampilkanData() {
    return 
    "Nama : {$this->nama} <br>
    NIM : {$this->nim} <br>
    Jurusan : {$this->jurusan} <br>";
}
```
Mengembalikan string yang menampilkan nilai dari atribut nama, nim, dan jurusan dalam format HTML.
3. updateJurusan Metode
```
public function updateJurusan($jurusan_baru) {
    $this->jurusan = $jurusan_baru;
}
```
Mengubah nilai atribut jurusan menjadi nilai baru yang diberikan melalui parameter $jurusan_baru.
4. setNim Metode
```
public function setNim($nimBaru) {
    $this->nim = $nimBaru;
}
```
Mengubah nilai atribut nim menjadi nilai baru yang diberikan melalui parameter $nimBaru.
### OUTPUT
```
Nama : Katrina Devianti
NIM : 230102037
Jurusan : Teknik Informatika

Setelah perubahan jurusan:
Nama : Katrina Devianti
NIM : 230102037
Jurusan : Rekayasa Keamanan Siber

Setelah perubahan NIM:
Nama : Katrina Devianti
NIM : 04062005
Jurusan : Rekayasa Keamanan Siber
```
