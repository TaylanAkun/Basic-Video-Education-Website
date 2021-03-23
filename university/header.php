<?php 
ob_start(); 
include "baglan.php";
if (isset($_SESSION['kullanici_email'])) {
  $asadad=$_SESSION['kullanici_email']; 
 $kullanicisor=mysqli_query($conn,"SELECT * FROM kullanicilar where kullanici_email=$asadad");  

      $current_dep_name = "Toros";
    
}
else {
  header('Location:../university/index.php');
}

?> 
<!doctype html>
<html lang="en">
  <head>
    <title>Video Education Website for Foreign Students</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet"> 
  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>

 
<script type="text/javascript">
    $(document).ready(function () {

    $('.navbar .dropdown-item').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({"top": -999, "left": -999});
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

});
</script> 

  </head>
  <body> 
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a href="home.php"><img src="img/logo.png" style="width: 100px;"><b style="font-size: 30px; color: black;">TOROS UNIVERSITY</b></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           <?php 
function sinirsizkategori($ders_kim=0,$conn){
  $sorgu=mysqli_query($conn,"SELECT * FROM dersler where ders_kim='$ders_kim'");
  $verisay=mysqli_num_rows($sorgu); 
  if($verisay < 1){

}else{?>
    <ul>
     <?php while($row=mysqli_fetch_array($sorgu)){?>
          <li ><a href="video.php?id=<?php echo $row['ders_id']; ?>"><?php echo $row['ders_adi']; ?> <?php sinirsizkategori($row['ders_id'],$conn); ?></a></li>
     <?php } ?>
</ul> 
<?php }
} 
?>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="home.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1"> 
                   <?php sinirsizkategori(0,$conn) ?>
                </ul>
            </li>

              <li class="nav-item">
                <a class="nav-link active" href="settings.php">Settings</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="logout.php">Logout<img src="img/logout-icon.png"></a><br>
                Welcome <?php echo $asadad; ?>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
   