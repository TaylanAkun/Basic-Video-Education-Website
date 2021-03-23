<?php 
ob_start();
session_start();
include "baglan.php";
include "header.php"; ?>
    
    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(&quot;img/toros.jpg&quot;); background-size:cover;">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <br><br>
              <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-4">Change Your Password</h2> 
              <form action="islem.php" method="POST">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="name">Your Old Password</label>
                    <input type="password" id="oldpass" class="form-control py-2">
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-12 form-group">
                    <label for="name">New Password</label>
                    <input type="password" name="kullanici_sifre" id="password" class="form-control py-2">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-4 form-group">
                    <input type="submit" name="change" value="Change" class="btn btn-primary px-4 py-2">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <?php 
      include "footer.php";
    ?>
