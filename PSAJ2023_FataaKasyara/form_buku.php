<html>
    <head>
        <title>Perpustakaan</title>
    </head>
    <body>
        <h1>Tambah Data Buku</h1>
        <form method="post" action="simpan.php">
            <table cellpadding="8">
                <tr>
                    <td>kode_buku</td>
                    <td><input type="text" name="kode_buku"></td>
                </tr>
                <tr>
                    <td>isbn</td>
                    <td><input type="text" name="isbn"></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="Judul"></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td><input type="text" name="Pengarang"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td><input type="text" name="Penerbit"></td>
                </tr>
                <tr>
                    <td>tahun_terbit</td>
                    <td><input type="text" name="tahun_terbit"></td>
                </tr>
                <tr>
                    <td>jumlah</td>
                    <td><input type="text" name="jumlah"></td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Simpan">
            <a href="index.php"><input type="button" value="Batal"></a>
        </form>
    </body>
</html>