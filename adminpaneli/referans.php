<?php  
  include 'sidebar.php';
  include 'baglan.php';
?>
  
  <div class="container mt-3">
    <h2>Referanslar <span class="input-button badge badge-info float-right" style="cursor: pointer;">+</span></h2>
    <div class="input-div row align-items-center" style="display:none;">
      <div class="col-md-8">
        <input type="text" class="form-control refName" placeholder="Referans Adı">
      </div>
      <div class="col-md-4">
        <button class=" btn btn-primary" onclick="referansKaydet()">Kaydet</button>
      </div>
    </div>
    <ul class="list-group mt-3">


    <?php 
      $sorgu = $db->query("SELECT * FROM referanslar ORDER BY id DESC", PDO::FETCH_ASSOC);
      if($sorgu->rowCount()){
        foreach($sorgu as $row):
    ?>
          <li class="list-group-item"> <span class="input-item"><?=$row['referansbaslik']?></span> <a class="float-right badge badge-danger text-white" style="cursor:pointer;" onclick="referansSil( <?=$row['id']?>)">Sil</a></li>
    <?php
        endforeach;
      }
    ?>
    </ul>
  </div>

  <script type="text/javascript">
    var addButton = document.querySelector('.input-button');
    addButton.addEventListener('click', function(e){
      $('.input-div').toggle();
    })
    function referansKaydet(){
      var refName = $('.refName').val();
      $.ajax({
            type: "POST",
            url: 'islem.php',
            data: {type:'referansEkleme', refName:refName},
            success: function (data)
            {
              if(data){
                alert('Başarıyla Eklendi')
                location.reload()
              }else{
                alert('Referans Eklenirken Bir Hata Oluştu')
              }
            }
      });
    }
    function referansSil(id){
      $.ajax({
            type: "POST",
            url: 'islem.php',
            data: {type:'referansSil', id:id},
            success: function (data)
            {
              if(data){
                alert('Başarıyla Silindi')
                location.reload()
              }else{
                alert('Silinirken Bir Hata Oluştu')
              }
            }
      });
    }
  </script>
  

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