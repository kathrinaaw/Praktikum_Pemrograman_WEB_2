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
- Atribut $name disetel melalui konstruktor.
- Metode getName() mengembalikan nama hewan.
```
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}
```










