<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "jkb";
    protected $koneksi;

    public function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->koneksi) {
            die("Koneksi database MySQL dan PHP Gagal: " . mysqli_connect_error());
        }
    }

    protected function query($query) {
        $result = mysqli_query($this->koneksi, $query);
        if (!$result) {
            die("Query Error: " . mysqli_error($this->koneksi));
        }
        return $result;
    }
}

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
?>
