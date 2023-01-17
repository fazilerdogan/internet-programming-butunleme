<?php

include 'baglanti.php';
    
    if($_GET){
        $id=$_GET['id'];

        if(!$id){
            echo "id boş";
        }
        else{
            $sorgu=$db->prepare("SELECT * FROM kullanicilar_tablo WHERE id=:id");
            $sorgu->execute(['id'=>$id]);

            if($sorgu->rowCount()){

                $row=$sorgu->fetch(PDO::FETCH_ASSOC);
                ?>

                <form action="" method="POST">

                <input type="text" name="baslik" value="<?php echo $row['baslik'];?>"/>
                <button type="submit">GÜNCELLE</button>

            </form>
                
                <?php

            }
            else{
                echo "bu id ye ait bir veri bulunmuyor";
            }
        }
    }



?>