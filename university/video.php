<?php 
ob_start();
session_start();
	include "header.php";
	include "baglan.php";

	if (!isset($_SESSION['kullanici_email'])) {

		header('Location:../university/index.php');
	}
?>
<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	$ids=$_REQUEST['id'];
	 $kullanicisor=mysqli_query($conn,"SELECT * FROM dersvideolari where VideoAltKategoriid=$ids");  
 foreach($kullanicisor as $row) {
      $current_dep_name = $row["VideoYuklenenYol"];
    } 
    }
?>
<section class="site-hero overlay" >
	<center>
	<video width="900" autoplay="controls">
  <source src="./videos/<?php echo $current_dep_name; ?>" type="video/mp4">  
</video>
 </center>
    </section>

<?php 
	include "footer.php";
?>