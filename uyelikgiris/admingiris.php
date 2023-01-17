<?php
require 'baglanti.php';

session_start();
ob_start();

if(isset($_POST['admingiris']))
{
    $username=$_POST['username'];
    $password=$_POST['passwordd'];

    if(!$username)
    {
        echo "yanlış kullanıcı adı";
    }
    elseif(!$password)
    {
        echo "yanlış şifre";
    }
    else
    {
        $kullanicisorgu=$db->prepare("SELECT * FROM admin_tablo WHERE kullanici_adi=? || kullanici_sifre=?");
        $kullanicisorgu->execute([$username,$password]);

        $say=$kullanicisorgu->rowCount();
        if($say==1)
        {
          $_SESSION['username']=$username;
          echo '<div class="alert alert-success" role="alert">
          Giriş Başarılı Yönlendiriliyorsunuz.
        </div>';  
          header('Refresh:2; adminkontrol.php');
        }
        else{
          echo '<div class="alert alert-danger" role="alert">
          Giriş Başarısız.
        </div>';  
        }
    }
}





?>


<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Giriş Sistemi</title>
  </head>
  <body>

    <div class="container p-5">

                <a href="http://localhost/internet-programming-butunleme/ks_sport_(kisporlari)/" class="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                </svg> Anasayfa</a>



            <div class="card p-5">

                <H3>Admin Giriş Sistemi</H3><br>


                    <form action="admingiris.php" method="POST">


                        <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Şifre</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="passwordd">
                        </div>

                        <button type="submit"  name="admingiris">Giriş</button>
                        
                    </form>

            </div>
    </div>



    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>