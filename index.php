<?php

include("uyelikgiris/baglanti.php");

if(isset($_POST["isim"], $_POST["mail"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $email=$_POST["mail"];
    $mesajlar=$_POST["mesaj"];

    $add="INSERT INTO kullanici_mesajlari_tablo (kullanici_adisoyadi, kullanici_mesaj, e_mail) VALUES ('".$adsoyad."','".$mesajlar."','".$email."')";

    if($db->query($add)===TRUE)
    {
        echo "<script>alert('başarılı')</script>";
        
    }
}

?>



<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | KS Sport</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@300&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>   

</head>
<body>
    <section id="menu">
        
        <div id="logo">KS Sport</div>
        
        <nav>
            <a href="#menu" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house ikon" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg>Anasayfa</a>

            <a href="#hakkimizda" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle ikon" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>Hakkımızda</a>

            <!--<a href="#" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snow" viewBox="0 0 16 16">
  <path d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793V8.866l-3.4 1.963-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495L7 8 3.6 6.037l-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849L7.5 7.134V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 1 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v3.927l3.4-1.963.496-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l3.4 1.963 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-3.4-1.963v3.927l1.353 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z"/>
</svg>Kayak ile İlgili</a>

            <a href="#urun" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop ikon" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg>Ürünler</a>-->

            <a href="#iletisim" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone ikon" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>İletişim</a>

<a href="uyelikgiris/degersayfa.php" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg> Değerlendirmeler</a>


<a href="uyelikgiris/kayit.php" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
  </svg> Kayıt OL</a>

  <a href="uyelikgiris/giris.php" id="menuicerik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-up" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</svg> Giriş</a>

        </nav>

    </section>

    <section id="banner">
        <div id="blackpage">

        </div>

        <div id="contents">
            <h2>KS Sport</h2>
            <hr width=250 align=left>
            <p>Biz sportif, canlı ve sorumluluk sahibi bir takımız! Sporu her gün daha da eğlenceli kılmak için sevgi ve tutkuyla çalışırız.</p>
        </div>

    </section>

    <section id="hakkimizda">
        
        <h3>Hakkımızda</h3>
        
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">KS Sport olarak sporun yenilikçi yüzü olmayı seviyoruz!</h5>
            </div>

            <div id="sag">
                <p id="sagp">Spor yapmayı eğlenceli kılmayı seviyor; sporun keyfini ve 
                    yararlarını herkes için ulaşılabilir kılmak istiyoruz. İşte bu yüzden inovasyona 
                    büyük bir değer veriyoruz.</p>
            </div>

            <img src="resim/hakkimizdaresim.jpg" alt="" class="img-fluid mt100">

            <p id="plast">KS Sport’da mutlu takımın sırrı spor dolu çalışma ortamımız!</p>
        </div>

    </section>




    <section id="egitimler">
        <div class="container">
            <h3>Eğitimler</h3>
            
            <div>
                <div class="card">
                    <img src="resim/snowboardegitim.jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">Snowboard Eğitimi</h5>
                    <p class="cardp">Snowboard öğrenmesi zor geliştirmesi kolay bir kış sporudur.</p>
                </div>

                <div class="card">
                    <img src="resim/buzpateniegitim (1000 x 636).jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">Buz Pateni Eğitimi</h5>
                    <p class="cardp">Sonunda artistik buz pateninin nasıl yapılacağını öğreneceksin. Haydi!</p>
                </div>

                <div class="card">
                    <img src="resim/karmotoruegitim (1000 x 636).jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">Kar Motoru Eğitimi</h5>
                    <p class="cardp">Kar Motoru kullanımanın aksiyon, adranalin , tutku ve heyecanın tadına varın.</p>
                </div>

            </div>
        
        </div>
    </section>

    <!--<section id="urun">
        <div class="container">
            <h3>Ürünler</h3>
            
            <div>
                <div class="card">
                    <img src="resim/kask (1000 x 636).jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">Snowboard Kask</h5>
                    <p class="cardp">Kayak kaskları,düşme veya çarpmalara bağlı yaralanmaları önlemede kesinlikle kullanmak çok faydalıdır.
                    </p>
                </div>

                <div class="card">
                    <img src="resim/gozluk (1000 x 636).jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">Snowboard Gözlüğü</h5>
                    <p class="cardp">Hızlı hareket gerektiren kış sporları için üretilen birçok gözlükte, düşme anında kırılma riski azalır.
                    </p>
                </div>

                <div class="card">
                    <img src="resim/tahta (1000 x 636).jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">Snowboard Tahtası</h5>
                    <p class="cardp">Kilonuz ile doğru orantılı olarak seçeceğiniz tahta uzunluğu sizin daha rahat bir kayak yapmanızı sağlar.</p>
                </div>

            </div>
        
        </div>

    </section>-->





    <section id="iletisim">
        

            <div class="container">

                <h3 id="h3iletisim">İletişim</h3>
                    <form action="index.php" method="POST">
                <div id="iletisimseffaf">

                    

                    <div id="formlar">

                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        </div>


                        <div id="sagform">
                            <input type="email" name="mail" placeholder="E mail Adresi" required class="form-control">
                        </div>

                        <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesajınız" required class="form-control"></textarea>

                        <input type="submit" value="Gönder" onclick=this.form.submit();  this.form.reset();>

                    </div>
                    



                    <font color="white" size=10px>Adres</font>


                    <div id="iletisimbilgi">

                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6119.648553046527!2d32.851178049999994!3d39.9229485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34effd6b9930b%3A0x6fa79cbeeeec0bac!2zS8SxesSxbGF5LCAwNjQyMCDDh2Fua2F5YS9BbmthcmE!5e0!3m2!1str!2str!4v1672059446601!5m2!1str!2str" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                        <p class="adresp">Kızılay AVM Ankara Turkey</p>
                        <p class="adresp">Tel: 0215 123 29 19</p>
                        <p class="adresp">e-mail: ksport@gmail.com</p>
                    </div>

                </div>
                </form>


                <footer>                            
          
                <div id="copyright">2023 | Tüm Hakları Saklıdır</div>

                    <a href="#menu"><img src="resim/6997100.png" alt="" id="upresim" width="55px"></a>
                </footer>

                
            </div>
        
        
    </section>
    






</body>
</html>



