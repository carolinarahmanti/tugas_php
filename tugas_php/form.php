<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand:wght@600&display=swap"
        rel="stylesheet">
</head>

<body>
    <label>Formulir Pendaftaran</label>
    <form action="after.php" method="post">
    <table border="0" style="center; color:black;" class="tabel">
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="gender" id="gender1" value="Laki-laki"> <span onClick="radio_checked('gender1');">Laki-laki</span>
            <input type="radio" name="gender" id="gender2" value="Perempuan"> <span onClick="radio_checked('gender2');">Perempuan</span>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" cols="22" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>No. Handphone</td>
            <td>:</td>
            <td><input type="text" name="nohp"></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><select name="kota">
                    <option>*****SELECT KOTA*****</option>
                    <option>Bogor</option>
                    <option>Jakarta</option>
                    <option>Bekasi</option>
                    <option>Tangerang</option>
                    <option>Depok</option>
                    <option>Malang</option>
                    <option>Banten</option>
                </select></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit"/></td>
        </tr>
    </table>
    </form>
    <script>
        function radio_checked(x){
            $("#"+x).prop('checked', this.value=1);
        }
        $(document).ready(function(){
            $("#btn_submit").click(function(){
                var gender = $("input:radio[name='gender']:checked").size();
                var citizenship = $("input:radio[name='citizenship']:checked").size();
                if(gender==0 || citizenship==0){
                    return false;
                }
            });
        });
    </script>
</body>
</html>