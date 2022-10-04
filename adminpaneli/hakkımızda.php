  <?php 
  include 'sidebar.php';
include '../adminpaneli/baglan.php';

$ayarsor=$db->prepare("SELECT * FROM ayar WHERE ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>

  <div class="container" >
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <br><br>
             <?php
            if (@$_GET['durum']=='ok') {?>
              <b style="color:green;">GÜNCELLEME BAŞARILI !</b>

              <?php  } elseif (@$_GET['durum']=='no') {?>
                <b style="color: red;">GÜNCELLEME BAŞARISIZ !</b>
              <?php } ?>
              <br><br>
              <div align="center">    
                      <h2>Hakkımızda Düzenle </h2>
            <hr>
            <br><br>
           </div>

            <ul class="nav navbar-right panel_toolbox">
              


            </ul>
            <div class="clearfix"></div>

          </div>
        
            <div class="x_content"></div>

            <form action="../adminpaneli/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İnstagram<span class="required">*</span>
                </label>
                <input  type="text" id="first-name" required="required" name="ayar_instagram" value="<?php echo $ayarcek['ayar_instagram']; ?>" class="form-control col-md-12 col-xs-12">
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cep Telefonu<span class="required">*</span>
                </label>
                <input type="text" id="first-name" required="required" name="ayar_tel1" value="<?php echo $ayarcek['ayar_tel1']; ?>" class="form-control col-md-12 col-xs-12">
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İş Telefonu<span class="required">*</span>
                </label>
                <input type="text" id="first-name" required="required" name="ayar_tel2" value="<?php echo $ayarcek['ayar_tel2']; ?>" class="form-control col-md-12 col-xs-12">
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail Adresi<span class="required">*</span>
                </label>
                <input type="text" id="first-name" required="required" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']; ?>" class="form-control col-md-12 col-xs-12">
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Map Konum Linki<span class="required">*</span>
                </label>
                <input type="text" id="first-name" required="required" name="ayar_konum" value="<?php echo $ayarcek['ayar_konum']; ?>" class="form-control col-md-12 col-xs-12">
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda Açıklaması<span class="required">*</span>
                </label>
                <input type="text" id="first-name" required="required" name="ayar_yazi" value="<?php echo $ayarcek['ayar_yazi']; ?>" class="form-control col-md-12 col-xs-12">
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İş Anlayışımız Düzenle<span class="required">*</span>
                </label>
                <input type="text" id="first-name" required="required" name="ayar_isler" value="<?php echo $ayarcek['ayar_isler']; ?>" class="form-control col-md-12 col-xs-12">
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Üst Derecede Güvenlik Düzenle<span class="required">*</span>
                </label>
                <input type="text" id="first-name" required="required" name="ayar_guvenlik" value="<?php echo $ayarcek['ayar_guvenlik']; ?>" class="form-control col-md-12 col-xs-12">
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bitirdiğimiz Projeler Düzenle<span class="required">*</span>
                </label>
                <input type="text" id="first-name" required="required" name="ayar_proje" value="<?php echo $ayarcek['ayar_proje']; ?>" class="form-control col-md-12 col-xs-12">
              </div>

              </div>






              <br>
              <div align="right" class="col-md-7 col-sm-7 col-xs-12 col-md-offset-3">
                <button type="submit" name="hakkımızdagüncelle" class="btn btn-success">GÜNCELLE</button>
              </div>
          </form>



        </div>
      </div>
    </div>
  </div>

    </div>     




                
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>