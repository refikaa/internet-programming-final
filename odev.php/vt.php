<?php
try{
    $vt = new PDO('mysql:host=localhost;dbname=kutuphane1;charset=utf8','root','');
} catch(Exception $hata){
    echo'hata oluştu';
    echo $hata->getMessage();
}
?>