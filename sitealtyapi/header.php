<?php 
include '../adminpaneli/baglan.php';

$ayarsor=$db->prepare("SELECT * FROM ayar WHERE ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

   
    <link rel="icon" type="image/x-icon" href="indir.png">
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/tooplate-infinite-loop.css" />
    <link rel="stylesheet" href="./dist/css/nanogallery2.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <style type="text/css">

      .navigation-bar {
  text-align: center;
  display: inline;
  margin: 0;
  padding: 15px 4px 17px 0;
  list-style: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0);
  width: %50;
}
.navigation-bar li {
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
  width: %50;
}
.navigation-bar li:hover {
  background: #0099cc;
  color: greenyellow;
  width: %50;
}
.navigation-bar li ul {
  padding: 0;
  position: absolute;
  top: 54px;
  left: 100px;
  width: %50;
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
.navigation-bar li ul li { 
  background: #555; 
  display: table-row-group; 
  color: #black;
  text-shadow: 0 -1px 0 #000;
  width: %50;

}
.navigation-bar li ul li:hover { 
  background: #666;
  width: %50;
   }

.navigation-bar li:hover ul {
  display: block;
  opacity: 1;
  visibility: visible;
  width: %50;

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


  </head>
  <body>    
    <!-- Hero section -->
    <section id="infinite" <?php $uri =explode('/',$_SERVER['REQUEST_URI']); if(end($uri) == 'projeler.php' || end($uri) == 'urun.php' || end($uri) == 'dekorasyon.php'  ): ?>style="
    background-attachment: fixed;
    background-size: cover;background-position: center; height: auto !important;     min-height: 100vh;"<?php endif;?> class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">              
        <div  class="container">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

           

            <ul class="navigation-bar navbar-nav ml-auto">            
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#infinite"><b class="yazi">Ana Sayfa</b></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link tm-nav-link" href="index.php#gallery"><b class="yazi">Ürünler</b></a>
              </li>

              <li class="nav-item">
                <a class="nav-link tm-nav-link linkegit"  href="http://localhost/sitealtyapi/projeler.php"><b class="yazi">Projeler</b></a>
              </li>
              <li class="nav-item">

                <a class="nav-link tm-nav-link linkegit" href="dekorasyon.php"><b class="yazi">Mimari Projeler</b></a>
                  <ul>
                    <li class="nav-item">
                      <a class="nav-link tm-nav-link" href="dekorasyon.php"><b class="altyazi">Dekorasyonlar</b></a>
                    </li>   
                    </ul>
              </li>
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
    <script type="text/javascript">
      
      let links =  document.querySelectorAll('.linkegit');
      links.forEach((item, index) =>{
        item.addEventListener('click', function(event){
          window.location.href = item.href;
        })
      })  
    </script>
