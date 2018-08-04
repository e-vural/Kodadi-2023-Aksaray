<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>echo "Hello Word";</p>
<?php
//Burada echo ile yazdırma var 
echo "<p>Hello Word</p>";

?>
<?php
$color = "mavi";


echo 'Benim arabımın '. 
$color 

.'dır<br>';

?>

<?php
$x = 5; // global scope
$y = 7;
 
function toplama($x,$y) {

    // using x inside this function will generate an error
    

    return $x + $y;
} 
$sonuc = toplama($x,$y);

echo $sonuc;
?>
<br>
<?php 
echo "<pre>"; 
$cars = array("Volvo","BMW","Toyota");
$cars2 = ["Mercedes","Fiat","Ferrari"];
print_r($cars);
print_r($cars[0]);
echo "<hr>";
print_r($cars2);
print_r($cars2[2]);
echo "<hr>";
$cars = array("Volvo"=> array("S40","S90"),
	"BMW"=>array("models" =>"3.20","5.20"));

	print_r($cars);

	print_r($cars["Volvo"][0]);
?>  

<?php
$x = '4';
$y = 4;

	echo $x + $y; 


	var_dump($x != $y);
	var_dump($x >= $y);
	var_dump($x < $y);
echo "orjinal y".$y;
echo "<br>";
$y++;
echo "1 arttırılmış y".$y;
echo "<br>";
$y--;
echo "1 eksilmis y".$y;

$text = "Merhaba ";
$text .= "Dünya";
echo $text;
	?>

<?php 
$x = 5;
$y = "5";
echo"<hr>";


if($x === $y){

echo "x ve y eşit tipleriyle beraber eşittir.";

}else if($x == $y){
echo "x ve y eşittir ama tipleri farklıdır";

}
else{

echo "x ve y eşit değil";
}




 ?>

 <?php
echo "<hr>";
$text = "Mehmet Emre";
 	switch ($text) {
 		case 'Mehmet':
 			echo "Evet Mehmet";
 			break;
 		case 'Mehmet Emre':
 			echo "Evet Mehmet Emre";
 			break;
 		
 		default:
 		echo "Hiç bişeyyok";
 			# code...
 			break;
 	}

 ?>

 <?php 
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $key => $value) {
    echo "$key => $value <br>";
}
?>
</body>
</html>

