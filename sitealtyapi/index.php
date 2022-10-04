<?php  
      include 'header.php';
      
include '../adminpaneli/baglan.php';

$ayarsor=$db->prepare("SELECT * FROM ayar WHERE ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>

      <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <h2 class="tm-hero-title"><strong>ERDEM CONCEPT</strong></h2>
            <p class="tm-hero-subtitle">
              <b>Mobilya San. ve Tic.LTD.ŞTİ.</b>
              <br> <b>Mimari Projeler</b>
              <br><b>Mobilya & Dekorasyon</b>
            </p>
        </div>        
      </div>

      <div class="tm-next tm-intro-next">
        <a href="#whatwedo" class="text-center tm-down-arrow-link">
          <i class="fas fa-2x fa-arrow-down tm-down-arrow"></i>
        </a>
      </div>      
    </section>

    <section id="whatwedo" class="tm-section-pad-top">
      
      <div class="container">

            <div class="row tm-content-box"><!-- first row -->
                <div class="col-lg-12 col-xl-12">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4 tm-section-title"></h2>
                        <p class="mb-4 tm-intro-text">
                          
                    </div>
                </div>

            </div><!-- first row -->
            
            

            </div><!-- third row -->

        </div>
      
    </section>
    
    <section id="testimonials" class="tm-section-pad-top tm-parallax-2">      
      <div class="container tm-testimonials-content">
        <div class="row">
          <div class="col-lg-12 tm-content-box">
            <h2 class="text-white text-center mb-4 tm-section-title"><b><br>Referanslarımız</b></h2>
            <p class="mx-auto tm-section-desc text-center">
                <strong>Yaptığımız işlerden bazıları ...
                  <br>Takip edebilirsiniz ; </strong> 
              </p>
            <div class="mx-auto tm-gallery-container tm-gallery-container-2">
              <div class="tm-testimonials-carousel">
                <figure class="tm-testimonial-item">
                  <img src="img/kilis.jpg" alt="Image" class="img-fluid mx-auto" width="260px">
                  <blockquote></blockquote>
                  <figcaption><b>Kilis Devlet Hastanesi</b></figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/akkent.jpg" alt="Image" class="img-fluid mx-auto" width="300px">
                  <blockquote></blockquote>
                  <figcaption><b>Akkent Kongre ve Kültür Merkezi</b></figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/üniversite.jpg" alt="Image" class="img-fluid mx-auto" width="300px">
                  <blockquote></blockquote>
                  <figcaption><b>Kilis 7 Aralık Üniversitesi</b></figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/lise.jpg" alt="Image" class="img-fluid mx-auto" width="300px">
                  <blockquote></blockquote>
                  <figcaption><b>Şahinbey Anadolu Lisesi</b></figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/yamactepe.jpg" alt="Image" class="img-fluid mx-auto" width="300px">
                  <blockquote></blockquote>
                  <figcaption><b>Yamaçtepe Sosyal Tesisleri</b></figcaption>
                </figure>

              </div>

            </div>
                  <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-3" align="right">
                    <div align="right"><p>Daha Fazlası İçin</p>
                    </div>
                    <br>
                    <a href="referanslar.php">
                <button type="url" name="referanslar" class="btn btn-primary">Buraya Tıklayınız</button>
              </a>
              </div>

          </div>
        </div>
      </div>
      <div class="tm-bg-overlay"></div>
    </section>
    
    <section id="gallery" class="tm-section-pad-top">
      <div class="container tm-container-gallery">
        <div class="row">
          <div class="text-center col-12">
              <h2 class="tm-text-primary tm-section-title mb-4"><b><br>Ürünler</b></h2>
              <p class="mx-auto tm-section-desc">
                <strong>Başarıyla tamamladığımız ürünlerden sadece bazıları :</strong>
              </p>
          </div>            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mx-auto tm-gallery-container">
                    <div class="grid tm-gallery">
                      <a href="img/1.jpeg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/1.jpeg" alt="Image 1" class="img-fluid">
                          <figcaption>
                            <h2><i> Ahşap Atölyesi <span>Projemiz!</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/4.jpeg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/4.jpeg" alt="Image 2" class="img-fluid">
                          <figcaption>
                            <h2><i>Proje Sınıfı <span>Ahşap Atölyesi</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/5.jpeg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/5.jpeg" alt="Image 3" class="img-fluid">
                          <figcaption>
                            <h2><i><span>Sanat</span> Merkezi</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/23.jpeg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/23.jpeg" alt="Image 4" class="img-fluid">
                          <figcaption>
                            <h2><i>Oyun Odası <span>Ahşap Atölye</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/22.jpeg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/22.jpeg" alt="Image 5" class="img-fluid">
                          <figcaption>
                            <h2><i><span>Müzik</span><br>Odası</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/20.jpeg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/20.jpeg" alt="Image 6" class="img-fluid">
                          <figcaption>
                            <h2><i>Müzik Ders<span><br>Sınıfı</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/3.jpeg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/3.jpeg" alt="Image 7" class="img-fluid">
                          <figcaption>
                            <h2><i>Enstrüman <span><br>Bölümü</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/21.jpeg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/21.jpeg" alt="Image 8" class="img-fluid">
                          <figcaption>
                            <h2><i>Satranç <span><br>Sınıfı</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                </div>                
            </div>        
          </div>
          <div class="row text-center">
            <div class="col-md-12">Daha Fazlası için</div>

            <div class="col-md-12"> <a href="/sitealtyapi/urun.php"  class="text-white btn btn-primary" type="url" name="referanslar" >Buraya Tıklayınız</a>
</div>
          </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
    
      <div class="container tm-container-contact">
        
        <div class="row">
            
            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4"><b><br>Hakkımızda</b></h2>
                <br>
                <p class="mb-5">
                  <div class="row tm-content-box"><!-- second row -->
            <div class="col-lg-1">
                    <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">İş Anlayışımız</h2>
                        <p class="mb-4 tm-intro-text">
                          <?php echo $ayarcek['ayar_isler']; ?></p>
                    </div>
                </div>
                
                <div class="col-lg-1">
                    <i class="far fa-3x fa-comment-alt text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">Hızlı Destek</h2>
                        <p class="mb-4 tm-intro-text">
                          Herhangi bir sorun bildirmek için <a rel="nofollow" href="https://www.gmail.com" target="_blank"><br>E-Posta'mızdan</a><br>yararlanabilirsiniz.</p>
                    </div>
                </div>

            </div><!-- second row -->
            
            <div class="row tm-content-box"><!-- third row -->
            <div class="col-lg-1">
                    <i class="fas fa-3x fa-fingerprint text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">Üst Derecede Güvenlik</h2>
                        <p class="mb-4 tm-intro-text">
                      <?php echo $ayarcek['ayar_guvenlik']; ?><br> 
                          
                          <div class="tm-continue">
                            <a href="#testimonials" class="tm-intro-text tm-btn-primary">Referanslarımız</a>

                        </div>
                    </div>
                </div>
                
                <div class="col-lg-1">
                    <i class="fas fa-3x fa-users text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                      <h2 class="tm-text-primary mb-4">Bitirdiğimiz Projeler</h2>
                        <p class="mb-4 tm-intro-text">
                          <p><?php echo $ayarcek['ayar_proje']; ?></p>
                          <div class="tm-continue">
                            <a href="projeler.php" class="tm-intro-text tm-btn-primary">Detaylar</a>
                        </div>
                    </div>
                    <br><br><br><br><br><br>
                </div>
                
                  <strong><?php echo $ayarcek['ayar_yazi']; ?></strong>
                </p><br>
            </div>
            
            
            
            <div class="col-sm-12 col-md-8">

              
                <div class="contact-item">
                  <br><br><br>
                  <a href="<?php echo $ayarcek['ayar_instagram']; ?>" class="item-link" target="_blank">
                      <i class=" fa-2x fab fa-instagram mr-4"></i>
                      <span class="mb-0"><b>İnstagram</b></span>
                  </a>              
                </div>
                
                
                
                <div class="contact-item">
                  <a rel="nofollow" href="tel:0533 633 2246" class="item-link" target="_blank">
                      <i class="fas fa-2x fa-phone-square mr-4"></i>
                      <span class="mb-0"><b><?php echo $ayarcek['ayar_tel1']; ?> <br> Recep ERDEM / Cep Telefonu</b></span>
                  </a>              
                </div>

                <div class="contact-item">
                  <a rel="nofollow" href="tel:0342 225 5884" class="item-link" target="_blank">
                      <i class="fas fa-2x fa-phone-square mr-4"></i>
                      <span class="mb-0"><b><?php echo $ayarcek['ayar_tel2']; ?> <br> Erdem Concept / İş Telefonu</b></span>
                  </a>              
                </div>
                
                  <div class="contact-item">
                  <a href="https://mail.google.com/mail/" class="item-link" target="_blank">
                      <i class="fas fa-envelope mr-4"></i>
                      <span class="mb-0"><b><?php echo $ayarcek['ayar_mail']; ?></b></span>
                  </a>              
                </div>

                <!-- Konum -->

                <div class="konum">
                
                  <a href="<?php echo $ayarcek['ayar_konum']; ?>" class="item-link" target="_blank">
                      <i class=" fa-2x fa fa-map-marker mr-4"></i>
                      <span class="mb-0"><b>Konum</b></span>
                  </a>              
                </div>
            
                 
            
        </div><!-- row ending -->
        
      </div>
<br><br><br><br>
      	<?php 
                include 'footer.php';
        ?>

    </section>
    
    <script src="js/jquery-1.9.1.min.js"></script>     
    <script src="slick/slick.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
    <script>

      function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
          _offset = 400;
        } 
        if(windowHeight > 680) {
          _offset = 300
        }
        if(windowHeight > 830) {
          _offset = 210;
        }

        return _offset;
      }

      function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
          bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
      }

      // Parallax function
      // Adapted based on https://codepen.io/roborich/pen/wpAsm        
      var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
          setParallaxPosition($doc, multiplier, $object);
        } else {
          $(window).scroll(function(){          
            setParallaxPosition($doc, multiplier, $object);
          });
        }
      };

      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});
        
        $(window).scroll(function(){
          if($(window).width() > 768) {
            var firstTop = $object.offset().top,
                pos = $(window).scrollTop(),
                yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

            var bg_css = 'center ' + yPos + 'px';

            $object.css({"background-position" : bg_css });
          } else {
            $object.css({"background-position" : "center" });
          }
        });
      };
      
      $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);   
        background_image_parallax_2($("#testimonials"), 0.80);   
        
        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){          
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });
        
        // Close mobile menu after click 
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show'); 
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav({
          'easing': 'easeInOutExpo',
          'speed': 600
        });        
        
        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 600, 'easeInOutExpo', function(){
              window.location.hash = hash;
            });
          } // End if
        });

        // Pop up
        $('.tm-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: { enabled: true }
        });

        $('.tm-testimonials-carousel').slick({
          dots: true,
          prevArrow: false,
          nextArrow: false,
          infinite: false,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2
              }
            }, 
            {
              breakpoint: 480,
              settings: {
                  slidesToShow: 1
              }                 
            }
          ]
        });

        // Gallery
        $('.tm-gallery').slick({
          dots: true,
          infinite: false,
          slidesToShow: 5,
          slidesToScroll: 2,
          responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
        });
      });
    </script>
  