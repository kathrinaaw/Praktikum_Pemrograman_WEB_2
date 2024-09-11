<?php
// Kelas abstrak Course
abstract class Course {
    protected $courseName;
    protected $instructor;

    public function __construct($courseName, $instructor) {
        $this->courseName = $courseName;
        $this->instructor = $instructor;
    }

    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    private $platform;

    public function __construct($courseName, $instructor, $platform) {
        parent::__construct($courseName, $instructor);
        $this->platform = $platform;
    }

    // Implementasi metode getCourseDetails()
    public function getCourseDetails() {
        return "Online Course: {$this->courseName}, Instructor: {$this->instructor}, Platform: {$this->platform}";
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    private $location;

    public function __construct($courseName, $instructor, $location) {
        parent::__construct($courseName, $instructor);
        $this->location = $location;
    }

    // Implementasi metode getCourseDetails()
    public function getCourseDetails() {
        return "Offline Course: {$this->courseName}, Instructor: {$this->instructor}, Location: {$this->location}";
    }
}

// Contoh penggunaan
$onlineCourse = new OnlineCourse("Web Development", "Pi Cheolin", "ZOOM");
$offlineCourse = new OfflineCourse("Data Science", "Hawa", "Harvard University");

// Menampilkan detail kursus
echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails() . "<br>";
?>
