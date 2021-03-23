
<?php include "header.php";?> 
<?php include "../baglan.php";?>
<?php include "sidebar.php"; ?>

<!-- Index Göbek -->
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">                        
                        <h1 class="page-subhead-line">Ders / Konu Ekle</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <form action="../islem.php" method="POST">
                <div class="form-group col-md-8">
                    <label>Üst Ders Seçin</label>
                        <select class="form-control" name="ustid">
                            <option value="0">Duruma göre üst ders</option>
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
                    <label>Ders Konusu</label>
                    <input class="form-control" type="text" name="dersadi" required=""><br>
                </div>
                <div class="form-group col-md-8">
                    <input class="btn btn-success" type="submit" name="ekle" value="Ekle">
                </div>
                </form>


            </div>
        </div>

<?php include "footer.php"; ?>