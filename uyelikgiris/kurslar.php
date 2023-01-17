<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurslar</title>
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




        </nav>

    </section>



    <section id="egitim">

<?php

try {
    include("baglanti.php");


} catch (PDOException $ex) {
    echo $ex->getMessage();
}

$sayfa = @intval($_GET['sayfa']); if(!$sayfa) $sayfa=1;
$say = $db->query("SELECT * FROM egitimler_tablosu");
$toplamveri = $say->rowCount();
$limit = 1;
$sayfa_sayisi = ceil($toplamveri/$limit);

if($sayfa > $sayfa_sayisi){$sayfa = 1;}

$goster = $sayfa * $limit - $limit;
$gorunen_sayfa = 3;
$egitimler = $db->query("SELECT * FROM egitimler_tablosu ORDER BY id  limit $goster,$limit");
$egitim1 = $egitimler->fetchAll(PDO::FETCH_ASSOC);


?>


</div>



    <div class="container">
<div>
    <div ><h2>Snowboard Eğitimi</h2>
    <?php foreach($egitim1 as $egitims){?>
    
        <h4><?=$egitims["s_egitim"]?></h4>

</div>
<?php }?>

<div ><h2>Buz Pateni Eğitimi</h2>
    <?php foreach($egitim1 as $egitims){?>
    
        <h4><?=$egitims["b_egitim"]?></h4>

</div>
<?php }?>

<div><h2>Kar Motoru Eğitimi</h2>
    <?php foreach($egitim1 as $egitims){?>
    
        <h4><?=$egitims["k_egitim"]?></h4>

</div>
<?php }?>

    </div>
            </div>
    <?php
        for($i= $sayfa - $gorunen_sayfa; $i < $sayfa + $gorunen_sayfa + 1 ; $i++){
            if ($i>0 and $i<=$sayfa_sayisi) {
                if ($i == $sayfa) {
                    echo '<span>'.$i.'</span>'; 
                }else{
                    echo '<a href="kurslar.php?sayfa='.$i.'">'.$i.'</a>';
                }
            }
        }
    ?>
</div>
   <!-- <a href="">1</a> <a href="">2</a> <a href="">3</a>-->
</section>






<section id="egitimler">

<!--<?php

        include("baglanti.php");

$sorgu = $db -> query("SELECT * FROM egitimler_tablosu");

if($sorgu -> rowcount()){
    foreach($sorgu as $db_gelen){

        $s = $db_gelen['s_egitim'];
        $b = $db_gelen['b_egitim'];
        $k = $db_gelen['k_egitim'];
        
        /*echo $s;
        echo $b;
        echo $k;
        echo nl2br("\n");*/

    }
}

?>-->




</div>












        <div class="container">
            <h2>Eğitimler</h2>
            
            <div>
                <div class="card">
                    <img src="../resim/snowboardegitim.jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">Snowboard Eğitimi</h5>
                    <p class="cardp">Snowboard öğrenmesi zor geliştirmesi kolay bir kış sporudur.</p>
                </div>

                <div class="card">
                    <img src="../resim/buzpateniegitim (1000 x 636).jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">Buz Pateni Eğitimi</h5>
                    <p class="cardp">Sonunda artistik buz pateninin nasıl yapılacağını öğreneceksin. Haydi!</p>
                </div>

                <div class="card">
                    <img src="../resim/karmotoruegitim (1000 x 636).jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">Kar Motoru Eğitimi</h5>
                    <p class="cardp">Kar Motoru kullanımanın aksiyon, adranalin , tutku ve heyecanın tadına varın.</p>
                </div>
                
                

            </div>
            

    </section>
      
   
   
     

</body>
</html>