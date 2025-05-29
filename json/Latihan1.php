<?php

// $mahasiswa = [
//     [
//         "nama" => "Rahmad Irfan",
//         "nim" => "2217020176",
//         "email" => "rahmadirfan313@gmail.com"
//     ],
//     [
//         "nama" => "Syahfar",
//         "nim" => "26170200125",
//         "email" => "syahfar1@gmail.com"
//     ],
//     [
//         "nama" => "M.Irfandi Atarza",
//         "nim" => "2917020050",
//         "email" => "IrfandiAtarza@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost; dbname=phpdasar', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>
