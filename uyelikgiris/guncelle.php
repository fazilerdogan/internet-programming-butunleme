<?php

include "baglanti.php";

if(isset($_POST['guncelle'])){

    $sql="UPDATE `kullanicilar_tablo` SET `kullanici_adi` = ?, `e_mail` = ?, `kullanici_sifre` = ? WHERE `kullanicilar_tablo`.`id` = ?";

    $dizi=[
        $_POST['ad'],
        $_POST['email'],
        $_POST['sifre'],
        $_POST['id']
    ];

    $sorgu=$db->prepare($sql);
    $sorgu->execute($dizi);

    header("location:veripaneli.php");
}








$sql="SELECT * FROM kullanicilar_tablo WHERE id=?";
$sorgu=$db->prepare($sql);
$sorgu->execute(
    [$_GET['id']]
);

$satir=$sorgu->fetch(PDO::FETCH_ASSOC); 

?>




<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Paneli</title>
  </head>
  <body>

    <div class="container p-5">

                <a href="http://localhost/internet-programing-final/ks_sport_(kisporlari)/" class="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                </svg> Anasayfa</a>



            <div class="card p-5">
<div>
<a href="adminkontrol.php"><H3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-right-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 3.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z"/>
</svg> Mesajları Görüntüle</H3></a>

<a href="adminkullanicikontrol.php"><H3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-right-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 3.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z"/>
</svg> Kullanıcıları Görüntüle</H3></a>

<a href="veripaneli.php"><H3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-right-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 3.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z"/>
</svg> Veri Paneli Görüntüle</H3></a> 

</div>



                    <form action="" method="POST">
                    <H3>Veri Paneli:</H3><br>
                        
                 

</form>


<header>
    <div>
        <div class="row">
            <div class="col">
                <div class="btn group">
                    <a href="veripaneli.php" class="btn btn-outline-primary">Tüm Kullanıcılar</a>
                    <a href="ekle.php" class="btn btn-outline-primary">Kullanıcı Ekle</a>
                </div>
            </div>
        </div>
    </div>
</header>



<div class="container">
        <form action="" method="post" class="row mt-4 g-3">
            <input type="hidden" name="id"  value="<?=$satir['id']?>">
                <div class="col-6">
                    <label for="ad" class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control" name="ad" value="<?=$satir['kullanici_adi']?>">
                </div>
                <div class="col-6">
                    <label for="sifre" class="form-label">Şifre</label>
                    <input type="text" class="form-control" name="sifre" value="<?=$satir['kullanici_sifre']?>">
                </div>
                <div class="col-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" name="email" value="<?=$satir['e_mail']?>">
                </div>
                <button type="submit" name="guncelle" class="btn btn-primary">Güncelle</button>
        </form>
    </div>





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

