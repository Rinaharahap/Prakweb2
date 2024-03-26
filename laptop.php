<?php
class laptop {
    // Properti
    public $pemilik = "kosong";
    public $merk = "kosong";
    public $ukuran = "kosong";
    public $warna = "kosong";

    // Method
    private function getlaptop($laptop, $merk, $ukuran, $warna) {
        echo "laptop ini adalah milik: " . $laptop . "<br>";
        echo "Merek dari laptop adalah: " . $merk . "<br>";
        echo "Ukurannya adalah: " . $ukuran . "<br>";
        echo "Warnanya adalah: " . $warna . "<br>";
    }

    public function getDetail() {
        $this->getlaptop("Rina Askandar","Thinkpad", "14 inch", "Hitam");
    }
}

// Objek laptop 1
$laptop1 = new laptop();
$laptop1->pemilik = "Cuken";
$laptop1->merk = "Hp";
$laptop1->ukuran = "13 inch";
$laptop1->warna = "Silver";
var_dump($laptop1);
echo "<br><br><hr>";

// Objek laptop 2
$laptop2 = new laptop();
$laptop2->getDetail();
echo "<br><br>";
var_dump($laptop2);
?>
