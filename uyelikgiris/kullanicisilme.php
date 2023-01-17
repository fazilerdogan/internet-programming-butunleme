<?php
    include 'baglanti.php';

    $sill=$db->prepare("DELETE FROM kullanicilar_tablo WHERE id=:id");
    $kontrol=$sill->execute(array(
        "id" =>$_GET["id"] 
    ));
if($kontrol)
{
    header("location:adminkullanicikontrol.php");
    exit;
}
else
{
    echo "hata";
}
?>