<?php
ob_start();
session_start();
include "baglan.php";

if(isset($_POST["signup"])) {

	$signup="INSERT INTO kullanicilar(kullanici_ad,kullanici_soyad,kullanici_idnum,kullanici_telefon,kullanici_ulke,kullanici_email,kullanici_sifre) values ('".$_POST["kullanici_ad"]."','".$_POST["kullanici_soyad"]."','".$_POST["kullanici_idnum"]."','".$_POST["kullanici_telefon"]."','".$_POST["kullanici_ulke"]."','".$_POST["kullanici_email"]."','".$_POST["kullanici_sifre"]."')";
  
	if (mysqli_query($conn,$signup)){

		header("Location:../university/index.php?signup=ok");
	}
	else {

		header("Location:../university/index.php?signup=no");
	}
}
if(isset($_POST["signin"])) {

	$kullanici_email=$_POST['kullanici_email'];
	$kullanici_sifre=$_POST['kullanici_sifre'];

	if ($kullanici_email && $kullanici_sifre) {

		$sorgula=mysqli_query($conn,"SELECT * FROM kullanicilar WHERE kullanici_email='$kullanici_email' AND kullanici_sifre='$kullanici_sifre'");

		$verisay=mysqli_num_rows($sorgula);

		if ($verisay >0) {

			$_SESSION["kullanici_email"]=$kullanici_email;

			header('Location:../university/home.php');

		} 
	}
}
if(isset($_POST["signin"])) {

	$admin_kadi=$_POST['kullanici_email'];
	$admin_sifre=$_POST['kullanici_sifre'];

	if ($admin_kadi && $admin_sifre) {

		$sorgula=mysqli_query($conn,"SELECT * FROM admin WHERE admin_kadi='$kullanici_email' AND admin_sifre='$kullanici_sifre'");

		$verisay=mysqli_num_rows($sorgula);

		if ($verisay >0) {

			$_SESSION["kullanici_email"]=$admin_kadi;

			header('Location:../university/admin/index.php');

		} 
	}
}
if(isset($_POST["ekle"])){

	$dersadi=$_POST["dersadi"];
	$ustid=$_POST["ustid"];

	if(!isset($_POST["dersadi"])){
		echo "Boş Bırakma";
	}else{ 

$sorgu="INSERT INTO dersler(ders_adi,ders_kim) values( '".$dersadi."','".$ustid."')";
  
	if (mysqli_query($conn,$sorgu)){

		header("Location:./admin/ekle.php?signup=ok");

	}
	else {

		header("Location:./admin/ekle.php?signup=no");
	} 
 
	}
}
 

if(isset($_POST["change"])){

	$kullanici_email=$_SESSION["kullanici_email"];
	$kullanici_sifre=$_POST["kullanici_sifre"];
	$degistir="UPDATE kullanicilar set kullanici_sifre='$kullanici_sifre' where kullanici_email='$kullanici_email'";

if (mysqli_query($conn,$degistir)){ 
		header("Location:../university/settings.php?signup=ok");

	}else{
		header("Location:../university/settings.php?signup=no");

	}
}



?>