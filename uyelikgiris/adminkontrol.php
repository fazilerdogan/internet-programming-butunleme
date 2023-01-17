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

                <a href="http://localhost/internet-programming-butunleme/ks_sport_(kisporlari)/" class="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
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
                    <H3>Mesajlar:</H3><br>

                        <!--
                        <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı Ara:</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" name="kullaniciadi" aria-describedby="emailHelp">
                        </div>

                        <button type="submit"  name="gonder">Göster</button></br>
                        <button type="submit"  name="git" ><a href="sayfaduzenle.php">Sayfa Düzenle</a></button>-->





<?php
error_reporting(0);

$servername="localhost";
$username="root";
$password="";
$dbname="ks_sport";

$conn=new mysqli($servername,$username,$password,$dbname);
$new=mysqli_set_charset($conn,"utf8");

if($_POST){
    $aranan=$_POST["kullaniciadi"];
}

    
    $bul="SELECT * FROM kullanici_mesajlari_tablo /*WHERE kullanici_adisoyadi='$aranan'*/";
    $kayit=$conn->query($bul);
    
    if($kayit->num_rows>0)
    {
        while($satir=$kayit->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>"."Kullanıcı Ad:".$satir["kullanici_adisoyadi"]."  <a href=silmekrani.php?id=$satir[id]>Sil</a>"."</td>"."<br>";
            echo "<td>"."Kullanıcı Mesaj:".$satir["kullanici_mesaj"]."  <a href=silmekrani.php?id=$satir[id]>Sil</a>"."</td>"."<br>";
            echo "<td>"."Kullanıcı E-mail:".$satir["e_mail"]."  <a href=silmekrani.php?id=$satir[id]>Sil</a>"."</td>"."<br>";
            echo "</tr>"."<br>";
        }
    }


?>

  <!-- weather widget start -->
  <img src="https://w.bookcdn.com/weather/picture/3_37312_1_21_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=&domid=765&anc_id=78855" 
  alt="booked.net"/><!-- weather widget end -->



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