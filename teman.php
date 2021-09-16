<!DOCTYPE html>
<html>
<body bgcolor="f9eac3">
  <h1>SCORPION SHOP</h1> 
<?php
//class/object
class DaftarHp {
 
//access modifier
//property untuk class DaftarHp
//$this adalah sebuah variabel khusus dalam OOP yang digunakan sebagai penunjuk kepada objek, ketika kita mengaksesnya dari dalam class
  public $name;
  public $stock;
 
//constuktor
//Constructor akan otomatis terpanggil saat membuat objek dari suatu kelas
  public function __construct($name, $stock) {
    $this->name = $name;
    $this->stock = $stock; 
  }
 
//destruktor
  function __destruct() {
echo "stock {$this->stock}."; 
    echo "<br>";
    echo "<hr>";
  }
 
  public function intro() {
    echo "Price List stock {$this->stock} paling laku dipasaran "; 
    echo "<br>";
    echo "<hr>";
  }
}
 
//inheritance
//warisan dari kelas DaftarHp, disini akan mewarisi property yang sudah dibuat diawal, namun dapat membuat property dan metode sendiri. Dan untuk memanggil kelas warisaannya diberi kata kunci extends
class Jenis extends DaftarHp {
  public function message() {
    echo "Brand Hp paling banyak dicari adalah Iphone"; 
    echo "<br>";
    echo "<hr>";
  }
}
 
//static method
// Untuk mengakses static property dan static method tidak menggunakan keyword $this 
class greeting {
  public static function welcome() {
    echo "Warna Hp yang menjadi favorit adalah warna hitam";
    echo "<br>";
    echo "<hr>";
  }
}
 
//static properties
class harga {
  public static $value = 11500000;
}
 
$Jenis = new Jenis("Iphone", "11 pro");
$Jenis->message();
$Jenis->intro();
 
greeting::welcome();
 
echo harga::$value;
 
//iretables
function getIterable():iterable {
  return [" adalah", " harga", " Satu buah"." Iphone 11 Pro"];
}
 
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}
//interface
interface TipeBaru {
  public function Kapasitas();
}
 
class Ip7 implements TipeBaru {
  public function Kapasitas() {
    echo "<hr>";
    echo " Ip 7 Memiliki kapasitas baterai 1960 mAh";
  }
}
 
class Ip11 implements TipeBaru {
  public function Kapasitas() {
    echo ", Ip 11 Memiliki kapasitas baterai 3110 mAh ";
  }
}
 
class Ip8 implements TipeBaru {
  public function Kapasitas() {
    echo ", Ip 8 Memiliki kapasitas baterai 1821 mAh";
    echo "<br>";
    echo "<hr>";
  }
}
 
$Ip7 = new Ip7();
$Ip11 = new Ip11();
$Ip8 = new Ip8();
$daftarhp = array($Ip7, $Ip11, $Ip8);
 
foreach($daftarhp as $Handphone) {
  $Handphone->Kapasitas();
}
?>
 
</body>
</html>
