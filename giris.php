<?php
$kullaniciadi=$_POST["emailadres"];
$sifre=$_POST["sifre"];
$kullaniciadim="b221210031@gmail.com";
$sifrem="b221210031";
if($kullaniciadi==$kullaniciadim && $sifre==$sifrem){
    echo("Hoşgeldiniz! B221210031");
    header("url=index.html");
}
else{
    echo("Hatalı giriş yaptınız. Giriş ekranına yönlendiriliyorsunuz.");
    header("url=giris.html")
}