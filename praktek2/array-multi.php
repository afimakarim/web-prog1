<?php
$data = array(
    "web-prog" => array(
        "Afi" => 7,
        "Aldi" => 8,
        "Eko" => 6
    ),
    "kalkulus" => array(
        "Eko" => 9,
        "Aldi" => 8,
        "Afi" => 5
    )
);

echo "Nilai web-prog untuk Aldi : "
    .$data["web-prog"]["Aldi"] . "<br>";
echo "Nilai Kalkulus untuk Afi : "
    .$data["kalkulus"]["Afi"] . "<br>";
?>