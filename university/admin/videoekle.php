
<?php include "header.php";?> 
<?php include "../baglan.php";?>
<?php include "sidebar.php"; ?>
<?php 

if(isset($_POST["kaydet"])){

    $VideoAnaKategoriid=$_POST["VideoAnaKategoriid"];
    $VideoAltKategoriid=$_POST["VideoAltKategoriid"];
    $VideoBaslik=$_POST["VideoBaslik"]; 
    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];   
          move_uploaded_file( $path_tmp, '../videos/'.$path ); 

    $sql="INSERT INTO dersvideolari (VideoAnaKategoriid,VideoAltKategoriid,VideoBaslik,VideoYuklenenYol) values ('$VideoAnaKategoriid','$VideoAltKategoriid','$VideoBaslik','$path')";

    if(mysqli_query($conn,$sql)){
        header("Location:./admin/videoekle.php?signup=ok");

    } else {
        header("Location:./admin/videoekle.php?signup=no");
    }


} 
?>
 
<!-- Index Göbek -->
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">                        
                        <h1 class="page-subhead-line">Video Ekle</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
           <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-8">
                    <label>İlk Olarak Video Eklemek İstediğiniz Dersi Seçin</label> 
                        <select class="form-control" name="VideoAnaKategoriid">
                            <option value="0">İlk Olarak Video Eklemek İstediğiniz Dersi Seçin</option>
                            <option value="0" disabled="">....</option>
                            <?php 
                            $sorgu = mysqli_query($conn,"SELECT * FROM dersler where ders_kim='0'");
                            if(mysqli_num_rows($sorgu)<1){
                                echo '<option value="0">Önce Normal Ders Eklemelisiniz</option>';
                            }else{
                                while($row=mysqli_fetch_array($sorgu)){
                                    echo '<option value="'.$row["ders_id"].'">'.$row["ders_adi"].'</option>';
                                }
                            }    
                            ?>
                        </select>                        
                </div>
                   
                <div class="form-group col-md-8">
                    <label>Konusunu Seçin</label>
                        <select class="form-control" name="VideoAltKategoriid">
                            <option value="0">Dersin Konusunu Seçiniz</option>
                            <option value="0" disabled="">....</option>
                            <?php 
                            $sorgu = mysqli_query($conn,"SELECT * FROM dersler where ders_kim<>'0'");
                            if(mysqli_num_rows($sorgu)<1){
                                
                            }else{
                                while($row=mysqli_fetch_array($sorgu)){
                                    echo '<option value="'.$row["ders_id"].'">'.$row["ders_adi"].'</option>';
                                }
                            }    
                            ?>
                        </select>                        
                </div>
                
                <div class="form-group col-md-8">
                    <label>Video Başlık</label>
                    <input class="form-control" type="text" name="VideoBaslik" required=""><br>
                </div>
                <div class="form-group col-md-8">
                    <input class="form-control" type="file" name="photo"> 
                </div>

                <div class="form-group col-md-8">
                    <input class="btn btn-danger" type="submit" name="kaydet" value="Kaydet">
                </div>
                </form>


            </div>
        </div>

<?php include "footer.php"; ?>