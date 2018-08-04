<?php 

include "baglanti.php";


$id = $_GET["id"];
$benim = $_GET["benim"];

// sql to delete a record
$sql = "DELETE FROM yapilacaklar_listesi WHERE id=$id";

// use exec() because no results are returned
$conn->exec($sql);

header("Refresh:2; url=index.php");
echo "Kayıt başarıyla silindi. Ana sayfaya yönlendiriliyorsunuz.";

?>