<html>
    <head>
        <title>anggota</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
    <div class="hero">

<video autoplay loop muted plays-inline class="back-video"> 
    <source src="mylivewallpapers.com-Cthulhu.mp4" type="video/mp4">
        <h1>Data Siswa</h1>
        <a href="form_anggota.php">Tambah Anggota</a><br><br>
        <table border="1" width="100%">
            <tr>
                <th>Kode Anggota</th>
                <th>Nama Anggota</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th colspan="2">Edit</th>
            </tr>
            <?php
            include "connect.php";
            $sql = $pdo->prepare("SELECT * FROM tbl_anggota");
            $sql->execute();
            while($data = $sql->fetch()){
                echo "<tr>";
                echo "<td>". $data['kode_anggota']. "</td>";
                echo "<td>". $data['nama_anggota']. "</td>";
                echo "<td>". $data['jenis_kelamin']. "</td>";
                echo "<td>". $data['kelas']. "</td>";
                echo "<td>". $data['telpon']. "</td>";
                echo "<td>". $data['alamat']. "</td>";
                echo "<td><a href='form_editanggota.php?kode_anggota=". $data['kode_anggota']. "'>Ubah</a></td>";
                echo "<td><a href='delete_anggota.php?kode_anggota=". $data['kode_anggota']. "'>Hapus</a></td>";
                echo "<tr>";
            }
            ?> 
        </table>
        </div>
    </body>
</html>