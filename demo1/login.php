<?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');
//inisialisasi session
session_start();
 
$error = '';
$validate = '';
 
//mengecek apakah sesssion nama tersedia atau tidak jika tersedia maka akan diredirect ke halaman index
if( isset($_SESSION['nama']) ) header('Location: index.php');
 
//mengecek apakah form disubmit atau tidak
if( isset($_POST['submit']) ){
         
        // menghilangkan backshlases
        $nama = stripslashes($_POST['nama']);
        //cara sederhana mengamankan dari sql injection
        $nama = mysqli_real_escape_string($connect, $nama);
         // menghilangkan backshlases
        $password = stripslashes($_POST['password']);
         //cara sederhana mengamankan dari sql injection
        $password = mysqli_real_escape_string($connect, $password);
        
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($nama)) && !empty(trim($password))){
 
            //select data berdasarkan nama dari database
            $query      = "SELECT * FROM user WHERE nama = '$nama'";
            $result     = mysqli_query($connect, $query);
            $rows       = mysqli_num_rows($result);
 
            if ($rows != 0) {
                $hash   = mysqli_fetch_assoc($result)['password'];
                if(password_verify($password, $hash)){
                    $_SESSION['nama'] = $nama;
                
                    header('Location: index.php');
                }
                             
            //jika gagal maka akan menampilkan pesan error
            } else {
                $error =  'Register User Gagal !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
 
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
<!-- costum css -->
<link rel="stylesheet" href="style.css">
</head>
<body>
        <section class="container-fluid mb-4">
            <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-4 my-5">
                    <form class="form-container" action="login.php" method="POST">
                        <h4 class="text-center font-weight-bold"> Sign-In </h4>
                        <?php if($error != ''){ ?>
                            <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                        <?php } ?>

                        <div class="form-group">
                            <label for="Inputnama">Nama</label>
                            <input type="text" class="form-control" id="Inputnama" name="nama" placeholder="Nama">
                            <?php if($validate != '') {?>
                                <p class="text-danger"><?= $validate; ?></p>
                            <?php }?>
                        </div>

                        <div class="form-group">
                            <label for="InputEmail">Email</label>
                            <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Email">
                            <?php if($validate != '') {?>
                                <p class="text-danger"><?= $validate; ?></p>
                            <?php }?>
                        </div>

                        <div class="form-group">
                            <label for="InputPassword">Password</label>
                            <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                            <?php if($validate != '') {?>
                                <p class="text-danger"><?= $validate; ?></p>
                            <?php }?>
                        </div>
                    
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                        <div class="form-footer mt-2">
                            <p> Belum punya account? <a href="daftar.php">Register</a></p>
                        </div>
                    </form>
                </section>
            <img src="../assets/img/undraw_tasks_re_v2v4.png" class="welcome my-5" alt="welcome" style="width: 28rem; height:28rem; ">

            </section>
        </section>
 
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>