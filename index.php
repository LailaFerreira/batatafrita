<?php include './admin/connect.php';?>
<?php 
  $query = ('SELECT * FROM config');
  $return = mysql_query($query, $con);
  $row = mysql_fetch_array($return);

?>
<?php 
     $query1 = ('SELECT * FROM portfolio');
    
    $result1 = mysql_query($query1, $con);
    
    $portfolio = array();
    while($portfolio = mysql_fetch_array($result1)){
        $portfolios[] = $portfolio;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $row['conf_title']; ?></title>

    <!-- Bootstrap core CSS -->
    
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo $row['conf_title']; ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about"><?php echo $row['conf_menu1']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio"><?php echo $row['conf_menu2']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><?php echo $row['conf_menu3']; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead" style="background: url(./img/<?php echo $row['conf_background']; ?>) 100% 100% no-repeat">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading"><?php echo $row['conf_hello']; ?></h1>
          <hr>
          <p><?php echo $row['conf_desc']; ?></p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light">
            <p class="text-faded"><?php echo $row['conf_title']; ?> has everything you need to get your new website up and running in no time! All of the templates and themes on <?php echo $row['conf_title']; ?> are open source, free to download, and easy to use. No strings attached!</p>
            <a class="btn btn-default btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div> 
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
              <h3>Sturdy Templates</h3>
              <p class="text-muted">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
              <h3>Ready to Ship</h3>
              <p class="text-muted">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
              <h3>Up to Date</h3>
              <p class="text-muted">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
              <h3>Made with Love</h3>
              <p class="text-muted">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
        <div class="container-fluid">
              <div class="row no-gutter popup-gallery">

          <?php 
        
        
          foreach ($portfolios as $portfolio) {
                echo '

          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="'.$portfolio['img_arquivo'].'">
              <img class="img-fluid" src="'.$portfolio['img_arquivo'].'">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    '.$portfolio['img_title'].'
                  </div>
                  <div class="project-name">
                   
                  </div>
                </div>
              </div>
            </a>
          </div>

                ';
              }
               
           ?>   

          
          
      </div>
    </section>

    <div class="call-to-action bg-dark">
      <div class="container text-center">
        <h2>asdsdass <?php echo $row['conf_title']; ?>!</h2>
        <a class="btn btn-default btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
      </div>
    </div>

    <section id="contact">
     
  <section id="partners" style="margin-top: -99px !important;">
        <div class="partners-container">
        <div class="partners-icon fa fa-camera-retro"></div>
        <p class="partners-header">DAEUDHAEDHAE</p>
        <div>
        <p class="partners-desc">Olha só, <a href="https://wordpress.org/plugins/any-ipsum/">aqui</a> você pode fazer um gerador de texto personalizado.</p>
        <p class ="partners-desc">Faz um e manda pra gente (ou não rsrs) </p>
        </div>
        </div>
      </section>
     
      <!-- SECTION CONTACT -->

   <section id="contact" style="margin-top: -99px !important; margin-bottom: 9%;" >
       <div id="contact-header">
          <h2 class="manda-msg">Manda uma mensagem pra gente!</h2>
        </div>
        <div class="contact-info">
          
          <br/>
          <div class="contact-row">
            <h3>
              <span class="fa fa-envelope"></span>
              lorem@ipsum.com
              <br/>
            </h3>
          </div>
          <br/>
          <div class="contact-row" >
            <h3>
              <span class="fa fa-mobile"></span>
              (32) 9999-9999
              <br/>
            </h3>
           
          </div>
          <br/>
          <div id="icon-social">
            <a href="#"><div class="icon-social fa fa-facebook" id="icon-facebook"></div></a>
            <a href="#"><div class="icon-social fa fa-instagram" id="icon-instagram"></div></a>
            <a href="#"><div class="icon-social fa fa-500px" id="icon-500"></div></a>
            <a href="#"><div class="icon-social fa fa-github-alt" id="icon-git"></div></a>
            <a href="#"><div class="icon-social fa fa-linkedin" id="icon-linkedin"></div></a>
          </div>
          
        </div>
        <div class="contact-form">
          <form action="message.php" name="form_contato" method="post" >
            <input type="text" placeholder="Nome" id="input-name"/>
            <input type="text" id="input-email" placeholder="Email"/>
            <textarea id="input-message" cols="30" placeholder="Mensagem"></textarea>
            <button class="btn btn-primary btn-xl" style="margin-left: 143px; width: 174px;">Enviar</button>
            <div id="returnMessage">&nbsp;</div>
            <br/>
          </form>
        </div>
        <br/>
      </section>

      <!-- SECTION FOOTER -->
      <section id="footer">
        <div class="footer" style="margin-bottom: -200px">
          <img src="./img/logo-footer.png" alt="Logo Lipsum">
          <div class="info-footer">
          <label for="footer"> Copyright © 2017 | <a href="https://github.com/LailaFerreira">Laila Ferreira</a></label>
          </div>
        </div>
      </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.js"></script>
    <script src="js/contact-form.js"></script>

  </body>

</html>
