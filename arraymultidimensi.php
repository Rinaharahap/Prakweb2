<?php 
$mahasiswa =
[["Rahmi","TI", "4"],
["Rina", "SI", "2"],
["Zahra", "BD", "6"]];

foreach ($mahasiswa as $mahasiswa) {
    echo "Nama : " .$mahasiswa[0] ."<br>";
    echo "Jurusan : " .$mahasiswa[1] ."<br>";
    echo "Semester : " .$mahasiswa[2] ."<br>";
    echo "<br>";
}