<?php @include(kontrol.php); ?>
<html>
<head> 
	<meta charset="utf-8" >
	<title> Akdeniz Yemekhane</title>
	<link rel="stylesheet" href="grafik.css">
</head>
<body>
<h1>Akdeniz Üniversitesi Yemek Sepeti</h1>
<nav id="ana_menu" > 
<ul> 
	<li><a href="index.php">ANASAYFA</a></li>
	<li><a href="giris.php">GİRİŞ</a></li>
	<li><a href="kayit.php">KAYIT</a></li>
	<li><a href="kafeler.php">KAFELER VE YEMEKHANE</a></li>
	<li><a href="hakkimizda.php">HAKKIMIZDA</a></li>
</ul>
</nav>
<div>
	<form action="uye_kontrol.php" method="POST">
	<table cellspadding="3" cellspacing="3">
		<tr>
		 <td><label for="mekan_adi">Mekan Adı:</label> </td>
		 <td><input type="text" name="mekan_adi" /> </td>
		</tr>
		<tr>
		 <td><label for="sifre">Şifre:</label> </td>
		 <td><input type="password" name="sifre"/> </td>
		</tr>
		<tr>
		 <td></td>
		 <td><input type="submit" value="Giriş"/> </td>
		</tr>
	</table>
	</form>
</div>
</body>
</html>