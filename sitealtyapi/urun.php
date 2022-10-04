<?php
include 'header.php';
  ?>
<!DOCTYPE html>
<html>
<head>

	    <style type="text/css">

      ul {
  text-align: center;
  display: inline;
  margin: 0;
  padding: 15px 4px 17px 0;
  list-style: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0);
}
ul li {
  font: bold 12px/18px sans-serif;
  display: inline-block;
  margin-right: 0px;
  position: relative;
  left: -100px;
  padding: 10px 15px;
  background: #3085a3;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
ul li:hover {
  background: #0099cc;
  color: greenyellow;
}
ul li ul {
  padding: 0;
  position: absolute;
  top: 54px;
  left: 100px;
  width: 150px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: 2px;
  display: none;
  opacity: 0;
  visibility: hidden;
  -webkit-transiton: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -ms-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  -transition: opacity 0.2s;
}
ul li ul li { 
  background: #555; 
  display: table-row-group; 
  color: #black;
  text-shadow: 0 -1px 0 #000;
}
ul li ul li:hover { 
  background: #666; }

ul li:hover ul {
  display: block;
  opacity: 1;
  visibility: visible;
}
.yazi{
  color: white;
  font-size: 14px;
}
.altyazi{
  color: white;
  font-size:auto;
}
    </style>

	<meta charset="utf-8">
	<title></title>
</head>
<body>

		 <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">              
        <div  class="container">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

           

            <ul class="navbar-nav ml-auto">            
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="index.php"><b class="yazi">Ana Sayfa</b></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link tm-nav-link" href="index.php#gallery"><b class="yazi">Ürünler</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link tm-nav-link" href="projeler.php"><b class="yazi">Projeler</b></a>
              </li>
              <li class="nav-item">

                <a class="nav-link tm-nav-link" href="projeler.php"><b class="yazi">Mimari Projeler</b></a>
                  <ul>
                    <li class="nav-item">
                      <a class="nav-link tm-nav-link" href="dekorasyon.php"><b class="altyazi">Dekorasyonlar</b></a>
                    </li>   
                    </ul>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="index.php#testimonials"><b class="yazi">Referanslar</b></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#"><b class="yazi">Hakkımızda</b></a>
                    <ul>
                    <li class="nav-item"><a class="nav-link tm-nav-link" href="#contact"><b class="altyazi">Biz<br>Kimiz ?</b></a></li>   
                    </ul>
                  
                </li>                   
            </ul>
          </div>
          </div>        
        </div>
      </nav>
        <div class="container" style="padding-top: 100px; font-weight: bold; text-transform: uppercase;" >
          <div>
          <?php 
            $urunler = $db->query('SELECT * FROM urunler', PDO::FETCH_ASSOC);
            if($urunler->rowCount()):
              foreach($urunler as $urun):
          ?>
          <h4><?=$urun['urunadi']?></h4>

          <div ID="ngy2p-<?=$urun['id']?>"  data-nanogallery2='{
              "itemsBaseURL": "../adminpaneli/urunImg/",
              "thumbnailWidth": "200",
              "thumbnailLabel": {
                "position": "overImageOnMiddle",
                "display": false
              },
              "thumbnailHoverEffect2": "imageScaleIn80|imageSepiaOff|labelAppear75",
              "thumbnailAlignment": "center",
              "thumbnailOpenImage": true
            }'>
            <?php
              $urunImages = json_decode($urun['resim']);
              foreach($urunImages as $img):
            ?>
            <a href="<?=$img?>" data-ngthumb="<?=$img?>" data-ngdesc=""></a>
          <?php endforeach; ?>
          </div>


          <?php
              endforeach;
            endif;
          ?>
        </div>
		    </div>
<script src="./dist/jquery.nanogallery2.core.min.js"></script>
<script src="./dist/jquery.nanogallery2.min.js"></script>
</body>
</html>