<?php
    include 'baglanti.php';

    $sil=$db->prepare("DELETE FROM kullanici_mesajlari_tablo WHERE id=:id");
    $kontrol=$sil->execute(array(
        "id" =>$_GET["id"] 
    ));
if($kontrol)
{
    header("location:adminkontrol.php");
    exit;
}
else
{
    echo "hata";
}
?>