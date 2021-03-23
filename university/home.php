<?php 
ob_start();
session_start();
	include "header.php";

	if (!isset($_SESSION['kullanici_email'])) {

		header('Location:../university/index.php');
	}
?>
<section class="site-hero overlay"  style="background-image: url(&quot;img/toros.jpg&quot;); background-size:cover;">
    
    </section>
<?php 
	include "footer.php";
?>