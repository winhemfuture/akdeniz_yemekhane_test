<?php 
@require( 'kontrol.php' ); 
if( !isset( $_SESSION['login'] ) ) 
{
	header('Location:index.php');
	
}
?>
<html>
<head> 
	<meta charset="utf-8" >
	<title> Akdeniz Yemekhane</title>
	<link rel="stylesheet" href="grafik.css">
</head>
<body>
<h1>Akdeniz Üniversitesi Yemek Sepeti</h1>
<nav id="ana_menu" > <p>You are WELCOME <?php echo $_SESSION['mekanadi'] ?></p>
<ul> 
	<li><a href="index.php">ANASAYFA</a></li>
	<li><a href="panel.php">URUNLER</a></li>
	<li><a href="profil.php">PROFİL</a></li>
	<li><a href="cikis.php">ÇIKIŞ</a></li>
</ul>
</nav>
<div>
<p>Ürün Kayıt</p>
<form action="urun_kayit.php" method="POST">
	<table cellspadding="6" cellspacing="6">
		<tr>
		 <td><label for="ürün1">Ürün Adı:</label>  </td>
		 <td><input type="text" name="urun_1" value= '<?php echo $_SESSION['urun1'] ?>' /></td>
		 <td><label for="fiyat1">Fiyat:</label> </td>
		 <td><input type="text" name="fiyat_1" value= '<?php echo $_SESSION['fiyat1'] ?>' /> </td>
		</tr>
		<tr>
		 <td><label for="ürün2">Ürün Adı:</label> </td>
		 <td><input type="text" name="urun_2" value= '<?php echo $_SESSION['urun2'] ?>' /> </td>
		 <td><label for="fiyat2">Fiyat:</label> </td>
		 <td><input type="text" name="fiyat_2" value= '<?php echo $_SESSION['fiyat2'] ?>' /> </td>
		</tr>
		<tr>
		 <td><label for="ürün3">Ürün Adı:</label> </td>
		 <td><input type="text" name="urun_3" value= '<?php echo $_SESSION['urun3'] ?>' /> </td>
		 <td><label for="fiyat3">Fiyat:</label> </td>
		 <td><input type="text" name="fiyat_3" value= '<?php echo $_SESSION['fiyat3'] ?>' /> </td>
		</tr>
		<tr>
		 <td><label for="ürün4">Ürün Adı:</label> </td>
		 <td><input type="text" name="urun_4" value= '<?php echo $_SESSION['urun4'] ?>' /> </td>
		 <td><label for="fiyat4">Fiyat:</label> </td>
		 <td><input type="text" name="fiyat_4" value= '<?php echo $_SESSION['fiyat4'] ?>' /> </td>
		</tr>
		<tr>
		 <td><label for="ürün5">Ürün Adı:</label> </td>
		 <td><input type="text" name="urun_5" value= '<?php echo $_SESSION['urun5'] ?>'/> </td>
		 <td><label for="fiyat5">Fiyat:</label> </td>
		 <td><input type="text" name="fiyat_5" value= '<?php echo $_SESSION['fiyat5'] ?>' /> </td>
		</tr>
		<tr>
		 <td><label for="ürün6">Ürün Adı:</label> </td>
		 <td><input type="text" name="urun_6" value= '<?php echo $_SESSION['urun6'] ?>' /> </td>
		 <td><label for="fiyat6">Fiyat:</label> </td>
		 <td><input type="text" name="fiyat_6" value= '<?php echo $_SESSION['fiyat6'] ?>' /> </td>
		</tr>
		<tr>
		 <td><label for="ürün7">Ürün Adı:</label> </td>
		 <td><input type="text" name="urun_7" value= '<?php echo $_SESSION['urun7'] ?>'/> </td>
		 <td><label for="fiyat7">Fiyat:</label> </td>
		 <td><input type="text" name="fiyat_7" value= '<?php echo $_SESSION['fiyat7'] ?>' /> </td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		 <td></td>
		 <td><input type="submit" value="Güncelle"/> </td>
		</tr>
	</table>
	</form>
</div>
</body>
</html>
