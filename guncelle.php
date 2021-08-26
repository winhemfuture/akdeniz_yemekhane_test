<?php 
	@require( 'kontrol.php' );
	echo '<html>
<head> 
	<title> Akdeniz Yemekhane</title>
	<meta charset="utf-8" >
</head>
<body>
</body>
</html>';
	$mekan = $_SESSION['mekanadi'];
	//echo $mekan;
	$i="1";
	$paraf="";
	$anametin="";
	$say = @mysql_query("select * from uyeler");
	$toplamveri = mysql_num_rows($say);
	echo "{$toplamveri}</br>";
	$bul = @mysql_query("select * from uyeler WHERE mekanadi='$mekan' ");
if($bul)
{
	//echo " tamam </br>";
	$goster = mysql_fetch_array($bul);
	if($goster)
	{
	//echo "goster basarili</br>";
	//echo "	<strong>{$goster["uye_id"]} </strong></br> ";
	//echo "	<strong>{$goster["mekanadi"]} </strong></br> ";
	//echo "	{$goster["urun1"]} </br> ";
	//echo "	<strong>{$goster["fiyat1"]} </strong></br> ";
	$_SESSION['uye_id'] = $goster["uye_id"];
	$_SESSION['urun1'] = $goster["urun1"];
	$_SESSION['urun2'] = $goster["urun2"];
	$_SESSION['urun3'] = $goster["urun3"];
	$_SESSION['urun4'] = $goster["urun4"];
	$_SESSION['urun5'] = $goster["urun5"];
	$_SESSION['urun6'] = $goster["urun6"];
	$_SESSION['urun7'] = $goster["urun7"];
	$_SESSION['fiyat1'] = $goster["fiyat1"];
	$_SESSION['fiyat2'] = $goster["fiyat2"];
	$_SESSION['fiyat3'] = $goster["fiyat3"];
	$_SESSION['fiyat4'] = $goster["fiyat4"];
	$_SESSION['fiyat5'] = $goster["fiyat5"];
	$_SESSION['fiyat6'] = $goster["fiyat6"];
	$_SESSION['fiyat7'] = $goster["fiyat7"]; 
	

	header("Location: dosyala.php");
	}
	else{echo 'basarisiz	';}
	}
	?>