<html>
    <head>
        <title>perpustakaan</title>
        <link rel="stylesheet" href="style.css" >
        
    </head>
    <body>
        <h1>Data Buku</h1>
        <a href="form_buku.php">Tambah Buku</a><br>
        <a href="anggota/view_anggota.php">Data Anggota</a><br>
        <table border="1" width="100%">
            <tr>
                <th>kode buku</th>
                <th>isbn</th>
                <th>judul</th>
                <th>pengarang</th>
                <th>penerbit</th>
                <th>tahun terbit</th>
                <th>jumlah</th>
                <th colspan="2">edit</th>
            </tr>
            <?php
            include "koneksi.php";
            $sql = $pdo->prepare("SELECT * FROM tbl_buku");
            $sql->execute();
            while($data = $sql->fetch()){
                echo "<tr>";
                echo "<td>". $data['kode_buku']. "</td>";
                echo "<td>". $data['isbn']. "</td>";
                echo "<td>". $data['judul']. "</td>";
                echo "<td>". $data['pengarang']. "</td>";
                echo "<td>". $data['penerbit']. "</td>";
                echo "<td>". $data['tahun_terbit']. "</td>";
                echo "<td>". $data['jumlah']. "</td>";
                echo "<td><a href='form_edit.php?kode_buku=". $data['kode_buku']. "'>Ubah</a></td>";
                echo "<td><a href='delete.php?kode_buku=". $data['kode_buku']. "'>Hapus</a></td>";
                echo "<tr>";
            }
            ?>
        </table>
    </body>
</html>