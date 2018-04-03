<h2>Aplikasi Data Mahasiswa</h2>
<hr>
<a href="input.php">Tambah Data</a>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JURUSAN<th>
    
    <tr>

    <?php
    include "koneksi.php";

    $konkesiObj = new Koneksi();
    $koneksi = $konkesiObj->getKoneksi();
        
        
    if($koneksi->connect_error) {
       echo "<tr><td>";
       echo "Gagal Koneksi : " . $koneksi->connect_error;
       echo "</td></tr>";
    } //else {
//        echo "<tr><td>";
//        echo "Sambungan basis data Berhasil";
//        echo "</td></tr>";
//    }
$query = "select * from mahasiswa";
$data = $koneksi->query($query);
if($data->num_rows <=0){
    echo "<tr><td>";
    echo "DATA NIHIL";
    echo "</td></td>";
} else {
    while($row = $data->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nim"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["jurusan"] . "</td>";
        echo '<td><a href="edit.php?nim=' .
            $row["nim"]. '">Edit</a></td>';
            echo '<td><a href="hapus.php?nim=' .
            $row["nim"]. '">Hapus</a></td>';
        echo "</tr>";
    }
}
    ?>
    
</table>