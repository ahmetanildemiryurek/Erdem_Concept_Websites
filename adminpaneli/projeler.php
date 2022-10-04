<?php  
  include 'sidebar.php';
  include 'baglan.php';
?>
  
  <div class="container mt-3">
    <h2>Projeler <span class="input-button badge badge-info float-right" style="cursor: pointer;">+</span></h2>
    <div class="input-div " style="display:none;">
      <form action="islem.php" class="row align-items-center" method="post" enctype="multipart/form-data">
      <div class="col-md-3">
        <input type="hidden" name="type" value="projeekleme">
        <input type="text" class="form-control" name="projeadi" placeholder="Proje Adı">
      </div>
      <div class="col-md-3">
                <label for="mimari">Mimari Bir Proje mi?</label>

        <select name="mimari" id="mimari" class="form-control">
          <option value="1">Evet</option>
          <option value="0">Hayır</option>
        </select>
      </div>
      <div class="col-md-3">
        <input type="file"  class="form-control" name="file[]" multiple>
      </div>
      <div class="col-md-3">
        <button class=" btn btn-primary" type="submit">Kaydet</button>
      </div>
    </form>
    </div>
    <ul class="list-group mt-3">


    <?php 
      $sorgu = $db->query("SELECT * FROM projeler ORDER BY id DESC", PDO::FETCH_ASSOC);
      if($sorgu->rowCount()){
        foreach($sorgu as $row):
    ?>
          <li class="list-group-item"> <span class="input-item"><?=$row['projeadi']?></span> <a class="float-right badge badge-danger text-white" style="cursor:pointer;" onclick="projeSil( <?=$row['id']?>)">Sil</a></li>
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
    function projeSil(id){
      $.ajax({
            type: "POST",
            url: 'islem.php',
            data: {type:'projeSil', id:id},
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