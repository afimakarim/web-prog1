<?php
$data = array(
    "nama" => "afi",
    "usia" => " 20",
    "jomblo" => true,
    0.1 => 5 
);

echo "NAMA : " . $data["nama"] . "<br>";
echo "USIA : " . $data["usia"] . "<br>";
echo "STATUS JOMBLO : " . $data["jomblo"] . "<br>";
echo "data lain : " . $data[0.1];
?>