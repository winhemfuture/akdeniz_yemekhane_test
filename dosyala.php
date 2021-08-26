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
$i="1";
$say = @mysql_query("select * from uyeler");
	$toplamveri = mysql_num_rows($say);
// xml kısım

$xml = new DOMDocument('1.0', 'UTF-8'); // Versiyon ve Karakter Kodlama
$xml_mekanlar = $xml->createElement("mekanlar");
for($i;$i<$toplamveri+1;$i++){
	$verial = mysql_query("SELECT * from uyeler WHERE uye_id='$i'");
	$duzenle = mysql_fetch_array($verial);
$xml_mekan = $xml->createElement("mekan");
$xml_mekanadi = $xml->createElement("mekanadi");
//$xml_uyeid = $xml->createElement("id");
$xml_urun1 = $xml->createElement("urun1");
$xml_urun2 = $xml->createElement("urun2");
$xml_urun3 = $xml->createElement("urun3");
$xml_urun4 = $xml->createElement("urun4");
$xml_urun5 = $xml->createElement("urun5");
$xml_urun6 = $xml->createElement("urun6");
$xml_urun7 = $xml->createElement("urun7");
$xml_fiyat1 = $xml->createElement("fiyat1");
$xml_fiyat2 = $xml->createElement("fiyat2");
$xml_fiyat3 = $xml->createElement("fiyat3");
$xml_fiyat4 = $xml->createElement("fiyat4");
$xml_fiyat5 = $xml->createElement("fiyat5");
$xml_fiyat6 = $xml->createElement("fiyat6");
$xml_fiyat7 = $xml->createElement("fiyat7");
$xml_mekanadi->nodeValue = $duzenle["mekanadi"];
//$xml_uyeid->nodeValue = $duzenle["uye_id"];
$xml_urun1->nodeValue = $duzenle["urun1"];
$xml_fiyat1->nodeValue = $duzenle["fiyat1"];
$xml_urun2->nodeValue = $duzenle["urun2"];
$xml_urun3->nodeValue = $duzenle["urun3"];
$xml_urun4->nodeValue = $duzenle["urun4"];
$xml_urun5->nodeValue = $duzenle["urun5"];
$xml_urun6->nodeValue = $duzenle["urun6"];
$xml_urun7->nodeValue = $duzenle["urun7"];

$xml_fiyat2->nodeValue = $duzenle["fiyat2"];
$xml_fiyat3->nodeValue = $duzenle["fiyat3"];
$xml_fiyat4->nodeValue = $duzenle["fiyat4"];
$xml_fiyat5->nodeValue = $duzenle["fiyat5"];
$xml_fiyat6->nodeValue = $duzenle["fiyat6"];
$xml_fiyat7->nodeValue = $duzenle["fiyat7"];
$xml_mekanlar->appendChild( $xml_mekan );
$xml_mekan->appendChild( $xml_mekanadi );
//$xml_mekan->appendChild( $xml_uyeid );
//$xml_mekan->appendChild( $xml_uyeid );
$xml_mekan->appendChild( $xml_urun1 );
$xml_mekan->appendChild( $xml_fiyat1 );
$xml_mekan->appendChild( $xml_urun2 );$xml_mekan->appendChild( $xml_fiyat2 );
$xml_mekan->appendChild( $xml_urun3 );$xml_mekan->appendChild( $xml_fiyat3 );
$xml_mekan->appendChild( $xml_urun4 );$xml_mekan->appendChild( $xml_fiyat4 );
$xml_mekan->appendChild( $xml_urun5 );$xml_mekan->appendChild( $xml_fiyat5 );
$xml_mekan->appendChild( $xml_urun6 );$xml_mekan->appendChild( $xml_fiyat6 );
$xml_mekan->appendChild( $xml_urun7 );$xml_mekan->appendChild( $xml_fiyat7 );


}

$xml->appendChild( $xml_mekanlar );

$xml->save("test.xml");

header("Location: panel.php");

?>
