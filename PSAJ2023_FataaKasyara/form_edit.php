<html>
    <head>
        <title>Perpustakaan</title>
    </head>
    <body>
        <h1>Ubah Data Buku</h1>
        <?php 
        include "koneksi.php";

        $kode_buku = $_GET['kode_buku'];

        $sql = $pdo->prepare("SELECT * FROM tbl_buku WHERE kode_buku=:kode_buku");
        $sql->bindParam(':kode_buku', $kode_buku);
        $sql->execute();
        $data = $sql->fetch();
        ?>

        <form method="post" action="update.php?kode_buku=<?php echo $kode_buku;?>">
            <table cellpadding="8">
                <tr>
                    <td>kode_buku</td>
                    <td><input type="text" name="kode_buku" value="<?php echo $data['kode_buku'];?>"></td>
                </tr>
                <tr>
                    <td>isbn</td>
                    <td><input type="text" name="isbn" value="<?php echo $data['isbn'];?>"></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="Judul" value="<?php echo $data['judul'];?>"></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td><input type="text" name="Pengarang" value="<?php echo $data['pengarang'];?>"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td><input type="text" name="Penerbit" value="<?php echo $data['penerbit'];?>"></td>
                </tr>
                <tr>
                    <td>tahun_terbit</td>
                    <td><input type="text" name="tahun_terbit" value="<?php echo $data['tahun_terbit'];?>"></td>
                </tr>
                <tr>
                    <td>jumlah</td>
                    <td><input type="text" name="jumlah" value="<?php echo $data['jumlah'];?>"></td>
                </tr>
                
            <hr>
            <input type="submit" value="Ubah">
            <a href="index.php"><input type="button" value="Batal"></a>
        </form>
    </body>
</html>