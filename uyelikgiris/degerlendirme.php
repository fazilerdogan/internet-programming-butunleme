<?php

include 'baglanti.php';

if(isset($_POST['ilet']))
{
    
}

if(isset($_POST["isim"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    
    $mesajlar=$_POST["mesaj"];

    $add="INSERT INTO degerlendirme_tablo (kullanici_adisoyadi, kullanici_mesaj) VALUES ('".$adsoyad."','".$mesajlar."')";

    if($db->query($add)===TRUE)
    {
        echo "<script>alert('başarılı')</script>";
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="style.css">


</head>
<body>
<section id="menu">
        
        <div id="logo">KS Sport</div>
        
        <nav>
            <a href="../index.php" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house ikon" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg>Anasayfa</a>



<a href="degerlendirme.php" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg> Değerlendirmeler</a>


<a href="kayit.php" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
  </svg> Kayıt OL</a>

  <a href="giris.php" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-up" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</svg> Giriş</a>

        </nav>

    </section>

    <section id="ilet">
        

            <div class="container">

                <h3 id="h3iletisim">Değerlendirmeleriniz</h3>
                    <form action="index.php" method="POST">
                <div id="iletisimseffaf">

                    

                    <div id="formlar">
                        
                    <font color="white" size=5px>Görüş ve Önerilerinizi Önemsiyoruz.</font>

                    <?php

include 'baglanti.php';


    if(isset($_POST['tabloInsert'])){
        $stmt=$db->prepare("INSERT INTO degerlendirme_tablo SET kullanici_mesaj=? ");
        $sql=$stmt->execute([$_POST['kullanici_mesaj']]);
        
if($sql == TRUE){
            echo "Ekleme Başarılı";
        }else{
            echo "Ekleme Başarısız";
        }     
}
    ?>

<form method="POST">
    <label>Ad: </label>
    <input type="text" name="kullanici_mesaj">
    <input type="submit" name="tabloInsert" value="Ekle">
</form>

                    </div>
                    





                <footer>                            
          

                    <a href="#menu"><img src="resim/6997100.png" alt="" id="upresim" width="55px"></a>
                </footer>

                
            </div>
        
        
    </section>    
</body>
</html>