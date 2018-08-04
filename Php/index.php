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
  <h2 class="display-6">Yapılacaklar</h2>
	<ul class="list-group">


	<?php  
		include "baglanti.php";
		$select = $conn->prepare("SELECT * FROM yapilacaklar_listesi");
		$select->execute();
		$results = $select->fetchAll();

		foreach ($results as $key => $value) {
			$id = $value["id"];
			$baslik = $value["baslik"];
			$yapildi = $value["yapildi"];
			$tarih = $value["tarih"];

			$li = '<li class="list-group-item '.($yapildi == 0 ? "" : "disabled my-disabled").'">'.$baslik.' 
			<span class="badge badge-'.($tarih == null ? "danger": "success").'"> '.($tarih == null ? "Tarih yok": $tarih).' </span>
		<div class="pull-right btn-group" role="group" aria-label="Basic example">
			<a href="detay.php?id='.$id.'" class="btn btn-info">Detay</a>
			<a href="yapildi.php?id='.$id.'" class="btn btn-success">Yapıldı</a>
			<a href="sil.php?id='.$id.'&benim=3" class="btn btn-danger">Sil</a>
		</div>
	  </li>';
	  		echo $li;

		}

	 ?>


	</ul>
	</div>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>