<!DOCTYPE html>
<html>
<head>
	
	<title>Yapılacaklar Listesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/my-css.css">
</head>
<body>

<?php include "navbar.php" ?>

<div class="jumbotron">
  <h2 class="display-6">Yeni Ekle Formu</h2>

<form method="post" action="yeni-kayit.php" >

  <div class="form-group">
    <label for="baslik">Başlık</label>
    <input type="text" name="baslik" class="form-control" id="baslik" placeholder="Başlık">
  </div>
 
  <div class="form-group">
    <label for="aciklama">Açıklama</label>
    <textarea name="aciklama" class="form-control" id="aciklama" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="tarih">Tarih</label>
    <input type="datetime-local" name="tarih" class="form-control" id="tarih" placeholder="Tarih">
  </div>

  <button type="submit" class="btn btn-primary"> Ekle + </button>

</form>
</div>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>