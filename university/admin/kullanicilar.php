
<?php include "header.php";?> 

<?php include "../baglan.php";?>
<?php include "sidebar.php"; ?>
<?php $cek=mysqli_query($conn,"SELECT *FROM kullanicilar");
?>
<!-- Index Göbek -->
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        
                        <h1 class="page-subhead-line">Kullanıcılar</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            KULLANICILAR
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>IDNumber</th>
                                            <th>Telephone</th>
                                            <th>Ulke</th>
                                            <th>E-Mail</th>
                                            <th>Sifre</th>
                                        </tr>
                                    </thead>
                                    <?php if(mysqli_num_rows($cek)>0){
                                    	while($row=mysqli_fetch_assoc($cek)){
                                    		echo '<tbody>
                                        <tr>
                                            <td>'.$row["kullanici_id"].'</td>
                                            <td>'.$row["kullanici_ad"].'</td>
                                            <td>'.$row["kullanici_soyad"].'</td>
                                            <td>'.$row["kullanici_idnum"].'</td>
                                            <td>'.$row["kullanici_telefon"].'</td>
                                            <td>'.$row["kullanici_ulke"].'</td>
                                            <td>'.$row["kullanici_email"].'</td>
                                            <td>'.$row["kullanici_sifre"].'</td>
                                            <td></td>

                                        </tr>
                                        
                                       

                                    </tbody>';
                                    	}
                                    } ?>
                                    
                                    
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
</div>
<?php include "footer.php"; ?>