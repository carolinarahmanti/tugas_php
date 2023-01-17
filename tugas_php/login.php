<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand:wght@600&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="username" class="input-control">
            <input type="password" name="pass" placeholder="password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn">            
        </form>
        <?php 
            if(isset($_POST['submit'])){ //jika menekan tombol submit maka akan 
                session_start();
                include 'db.php';       //menjalankan perintah berikut

                $user = $_POST['user']; //menyimpan inputan ke dalam variabel user
                $pass = $_POST['pass']; //menyimpan inputan ke dalam variabel pass

                $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'"); //untuk mengecek apakah sudah terconnect dan benar
                if(mysqli_num_rows($cek) > 0){  //untuk mengecek apakah sandi/username yang diinputkan sudah benar
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status login'] = true; //menyimpan data dalam session
                    $_SESSION['a_global'] = $d;
                    $_SESSION['a_id'] = $d->admin_id;
                    echo '<script>window.location="form.php"</script>'; //apabila login berhasil, maka akan mengarah ke bagian dashboard
                } else {
                    echo '<script>alert("Username atau password Anda salah!")</script>'; //apabila sebaliknya, maka akan ada pemberitahuan sandi/usn salah
                }
            }
        ?>
    </div>
</body>
</html>