<html>
    <head>
        <title>Anggota</title>
    </head>
    <body>
        <h1>Edit Anggota</h1>
        <?php 
        include "connect.php";

        $kode_anggota = $_GET['kode_anggota'];

        $sql = $pdo->prepare("SELECT * FROM tbl_anggota WHERE kode_anggota=:kode_anggota");
        $sql->bindParam(':kode_anggota', $kode_anggota);
        $sql->execute();
        $data = $sql->fetch();
        ?>

        <form method="post" action="update_anggota.php?kode_anggota=<?php echo $kode_anggota;?>">
            <table cellpadding="8">
                <tr>
                    <td>kode_anggota</td>
                    <td><input type="text" name="kode_anggota" value="<?php echo $data['kode_anggota'];?>"></td>
                </tr>
                <tr>
                    <td>nama_anggota</td>
                    <td><input type="text" name="nama_anggota" value="<?php echo $data['nama_anggota'];?>"></td>
                </tr>
                <tr>
                    <td>jenis_kelamin</td>
                    <td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>"></td>
                </tr>
                <tr>
                    <td>kelas</td>
                    <td><input type="text" name="kelas" value="<?php echo $data['kelas'];?>"></td>
                </tr>
                <tr>
                    <td>telepon</td>
                    <td><input type="text" name="telpon" value="<?php echo $data['telpon'];?>"></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
                </tr>
                
            <hr>
            <input type="submit" value="Ubah">
            <a href="view_anggota.php"><input type="button" value="Batal"></a>
        </form>
    </body>
</html>