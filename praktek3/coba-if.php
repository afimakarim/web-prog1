<form method="get" action="coba-if.php">
    KELAS : <input type="text" name="kelas"><br>
    <input type="submit" value="proses">
</form>

<?php
if(array_key_exists("kelas", $_GET)) {
    switch($_GET["kelas"]) {
        case "4c" :
            echo 'kami dikelas 4c kan. ';
            break;
        case "4b" :
            echo "kamu adalah mahasiswa terbaik";
            break;
        default :
            echo "kamu bukan mahasiswa semester 4 ";
    }
} 
?>