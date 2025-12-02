<?php
include "form.php";
include "database.php";

$db = new Database();

// PROSES HAPUS DATA
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $db->delete("mahasiswa", "WHERE id='$id'");
    echo "<p style='color:red;'>Data berhasil dihapus!</p>";
}

// PROSES SIMPAN DATA BARU
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $simpan = $db->insert("mahasiswa", [
        "nim"    => $nim,
        "nama"   => $nama,
        "alamat" => $alamat
    ]);

    if ($simpan) {
        echo "<p style='color:green;'>Data berhasil disimpan!</p>";
    } else {
        echo "<p style='color:red;'>Gagal menyimpan data!</p>";
    }
}

// FORM INPUT
echo "<h2>Input Data Mahasiswa</h2>";
$form = new Form("index.php", "Simpan Data");
$form->addField("nim", "NIM");
$form->addField("nama", "Nama");
$form->addField("alamat", "Alamat");
$form->displayForm();

echo "<hr>";
echo "<h2>Data Mahasiswa</h2>";

// AKSES DATABASE
$data = $db->query("SELECT * FROM mahasiswa");

echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>";

$no = 1;
while ($row = $data->fetch_assoc()) {
    echo "<tr>
            <td>".$no++."</td>
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['alamat']."</td>
            <td><a href='index.php?hapus=".$row['id']."' onclick=\"return confirm('Hapus data ini?');\">Hapus</a></td>
          </tr>";
}

echo "</table>";
?>
