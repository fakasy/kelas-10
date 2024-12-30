<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berat Badan Seseorang</title>
</head>
<body>
    <form action="beratBadanIdeal.php" method="POST">
        <table>
            <tr>
                <td><label>Masukkan Berat Badan</label></td>
                <td><input type="number" name="berat" placeholder="0" min="0"></td>
            </tr>
            <tr>
                <td><label>Masukkan Tinggi Badan</label></td>
                <td><input type="number" name="tinggi" placeholder="0" min="0"></td>
            </tr>
            <tr>
                <td><label>Jenis Kelamin</label></td>
                <td><select name="jk">
                        <option value="-">Pilih Jenis Kelamin
                        <option name="lk" value="Laki-Laki">Laki-Laki
                        <option name="pr" value="Perempuan">Perempuan
                    </select></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Berat Ideal"></td>
            </tr>
        </table>
    </form>

    <?php
        if($_POST['submit'])
        {
            $berat = $_POST['berat'];
            $tinggi = $_POST['tinggi'];
        }

        //if ($jk == $lk)
        //{
            //$beratideal = ($tinggi-100)-(($tinggi-100) * 10/100);
        //}

        $beratideallk = ($tinggi-100)-(($tinggi-100) * 10/100);
        $beratidealpr = ($tinggi-100)-(($tinggi-100) * 15/100);
            

        echo "Berat Ideal Laki-Laki = $beratideallk </br>";
        echo "Berat Ideal Perempuan = $beratidealpr";
            
    ?>
</body>
</html>