<html>
    <head>
        <title>Aplikasi CRUD dengan PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Data Siswa</h1>
        <a href="form_simpan.php">Tambah Data</a><br><br>
        <table border="1" width="100%">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
            include "koneksi.php";
            $sql = $pdo->prepare("SELECT * FROM siswa");
            $sql->execute();
            while($data = $sql->fetch()){
                echo "<tr>";
                echo "<td>". $data['nis']. "</td>";
                echo "<td>". $data['nama']. "</td>";
                echo "<td>". $data['jenis_kelamin']. "</td>";
                echo "<td>". $data['telp']. "</td>";
                echo "<td>". $data['alamat']. "</td>";
                echo "<td><a href='form_ubah.php?id=". $data['id']. "'>Ubah</a></td>";
                echo "<td><a href='proses_hapus.php?id=". $data['id']. "'>Hapus</a></td>";
                echo "<tr>";
            }
            ?>
        </table>
    </body>
</html>