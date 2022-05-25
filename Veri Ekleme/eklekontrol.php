<?php
    include('dbaglanti.php');
    $cinsi=$_POST['cinsi']; // ekle.php de olan name'de yazan isimler'i php'de çektik
    $marka=$_POST['marka'];// ekle.php de olan name'de yazan isimler'i php'de çektik
    $beden=$_POST['beden'];// ekle.php de olan name'de yazan isimler'i php'de çektik
    $renk=$_POST['renk'];// ekle.php de olan name'de yazan isimler'i php'de çektik
    $fiyat=$_POST['fiyat'];// ekle.php de olan name'de yazan isimler'i php'de çektik
    $query=$conn->query("INSERT INTO ayak(cinsi,marka,beden,renk,fiyat) VALUES ('$cinsi','$marka','$beden','$renk','$fiyat')", PDO::FETCH_ASSOC); //Veri tabanına veri ekleme sorgusu
    if ($query) {
        echo 'Ekleme Başarılı Bir Şekilde Gerçekleşti';
    }
    else {
        echo 'Mallesef veri tabanına ekleme şuanda gerçekleşmiyor';
    }
?>