
<html>
    <head>
        <title>anggota</title>
    </head>
    <body>
        <h1>Tambah Data Anggota</h1>
        <form method="post" action="simpan_anggota.php">
            <table cellpadding="8">
                <tr>
                    <td>Kode Anggota</td>
                    <td><input type="text" name="kode_anggota"></td>
                </tr>
                <tr>
                    <td>Nama Anggota</td>
                    <td><input type="text" name="nama_anggota"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>   <select name=kelas>
                    <option name=kelas>X PPLG 1</option>
                    <option name=kelas>X PPLG 2</option>
                    <option name=kelas>X PPLG 3</option>
                    <option name=kelas>XI RPL 1</option>
                    <option name=kelas>XI RPL 2</option>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="text" name="telpon"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Simpan">
            <a href="view_anggota.php">
                <input type="button" value="Batal"></a>
        </form>
    </body>
</html>