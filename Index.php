<?php 

include "Mahasiswa.php"; 

// Objek 1
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');

// Objek 2
$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A11.2000.00002', 'Budi', 'Sistem Informasi');

// Objek 3
$mahasiswaMI = new Mahasiswa();
$mahasiswaMI->setData('A11.2000.00003', 'Siti', 'Manajemen Informatika');

// Tampilkan data
$mahasiswaTI->tampilData();
$mahasiswaSI->tampilData();
$mahasiswaMI->tampilData();

?>