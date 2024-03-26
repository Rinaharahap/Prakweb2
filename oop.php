<?php
// nuat kerangka (class rumah)
class Rumah{
    // properti
public $nama_pemilik ="kosong";
public $warna_rumah ="kosong";
public $merek_tv ="kosong";
    //methode
private function getRumah($nama_pemilik,$warna_rumah,$merek_tv){
echo "Rumah ini milik :" . $nama_pemilik;
echo "</br>";
echo "warna rumah ini adalah " . $warna_rumah;
echo "</br>";
echo"merek TV nya" . $merek_tv;
}
public function getDetail (){
    echo $this->getrumah("Bu Cuken","Hijau","Samsung");
}

}
// object1
$rumah1 = new Rumah();
$rumah1->nama_pemilik = "Rina";
$rumah1->warna_rumah = "Biru";
$rumah1->merek_tv = "Thosiba";
var_dump($rumah1);
echo "</br>";
echo "</br>";
// object2
$rumah2 = new Rumah();
$rumah2->getDetail();
echo "</br>";
echo "</br>";
var_dump($rumah2);