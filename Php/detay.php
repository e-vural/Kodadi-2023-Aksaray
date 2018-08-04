<!DOCTYPE html>
<html>
<head>
	
	<title>Yapılacaklar Detay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/my-css.css">
</head>
<body>

<?php include "navbar.php" ?>

<div class="jumbotron">
  <h2 class="display-6">Yapılacaklar Detay</h2>
	<?php 
		include "baglanti.php";

		$id = $_GET["id"];
		$select = $conn->prepare("SELECT * FROM yapilacaklar_listesi WHERE id=$id");
		$select->execute();
		$result = $select->fetch();

		$baslik = $result["baslik"];
		$aciklama = $result["aciklama"];
		$yapildi = $result["yapildi"];
		$tarih = $result["tarih"];
		$olusturma_tarihi = $result["olusturma_tarihi"];
		$guncelleme_tarihi = $result["guncelleme_tarihi"];

	 ?>
<form action="guncelle.php" method="post">
	 <table class="table">

	 	<tr>
	 		<th>
	 			Başlık
	 		</th>
	 		<td>
	 			<?php echo "<input class='form-control' name='baslik' value='$baslik'>"; ?>
	 		</td>
	 	</tr>

		<tr>
	 		<th>
	 			Açıklama
	 		</th>
	 		<td>
	 			<?php echo '<textarea name="aciklama" class="form-control" id="aciklama" rows="3">'.$aciklama.'</textarea>'; ?>
	 		</td>
	 	</tr>

	 	<tr>
	 		<th>
	 			Tarih
	 		</th>
	 		<td>
	 			<?php echo ' <input type="datetime-local" name="tarih" class="form-control" id="tarih" value="'.$tarih.'" placeholder="Tarih">' ?>
	 		</td>
	 	</tr>

	 	<tr>
	 		<th>
	 			Oluşturma Tarihi
	 		</th>
	 		<td>
	 			<?php echo $olusturma_tarihi; ?>
	 		</td>
	 	</tr>

	 	<tr>
	 		<th>
	 			Güncelleme Tarihi
	 		</th>
	 		<td>
	 			<?php echo $guncelleme_tarihi; ?>
	 		</td>
	 	</tr>
	 </table>
</form>
<?php 

echo '<div class="pull-right btn-group" role="group" aria-label="Basic example">
			<a href="yapildi.php?id='.$id.'" class="btn btn-success">Yapıldı</a>
			<a href="sil.php?id='.$id.'&benim=3" class="btn btn-danger">Sil</a>
		</div>';
 ?>

</div>



















<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>