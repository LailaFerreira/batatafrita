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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

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
        <h2>Free Download at <?php echo $row['conf_title']; ?>!</h2>
        <a class="btn btn-default btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
      </div>
    </div>

    <section id="contact">
     

  <style>
    #partners{
    background-color: #ffffff;
      padding-bottom: 80px;
      width: 100%;
      text-align: center;
      padding-top: 30px;
      padding-bottom: 30px;
    background: url(./img/mao-contact-bg.jpg) no-repeat 50% 50% fixed;
  }
  
  .partners-container{
    margin-bottom: 80px;
    margin-top: 80px; }

  .partners-header{
    font-size: 35px;
    color: black;
    text-transform: uppercase; 
    margin-top: 50px;
    margin-bottom:50px; 
  }

  .partners-desc{
    font-size: 25px;
    color: #696969;
  }
  
  .partners-icon{
    font-size: 35px;
      background-color: #00aae6;
      height: 40px;
      width: 41px;
      margin: 0 auto;
      border-radius: 50%;

  }
  #contact-header{
    width: 100%;
    background: url('./img/contact-background.jpg') no-repeat center center;
    margin-bottom: 100px;
    color: #fff;
    height: 206px;
      background-size: cover;

  }

  .contact-info{
    float: left;
    width: 33%;
    margin-left: 15%;
    margin-bottom: 150px;
  }

  .contact-form {
    float: right;
    width: 33%;
    margin-right: 15%;

  }

  .contact-form textarea,
  .contact-form input{
    width: 100%;
    height: 40px;
    border: 1px solid #cacaca;
    border-radius: 5px;
    padding-left: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }

  .contact-form textarea{
    height: 102px;
    resize: none;
  }

  .contact-row h4{
    float: left;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 15px;
    width: 140px;
    line-height: 30px;

  } 

  .contact-row > span{
    float: left;
    display: block;
    margin-left: 20px;
    line-height: 19px;

  }

  .contact-row{
    margin-bottom: 20px;
  }

  .contact-row .label{
    float: left;
    line-height: 25px;
    height: 25px;

  }
   
  .contact-row .icon{
    font-size: 25px;
    font-family: 'ionicons';
    text-align: center;
    height: 25px;
    line-height: 25px;
    color: #f28500;
    float: left;
    margin-right: 10px;
  }
  
  .contact-form .btn{
    margin-top: 20px;
  }

  .contact-form #returnMessage{
    width: 100%;
    text-align: center;
    opacity: 0;
    transition: all .3s ease 0s;
    margin-top: 20px;
  }

  .contact-form #returnMessage.active{
    opacity: 1;
  }

.footer {
    background: url(./img/footer-bck.jpg) repeat;
    width: 100%;
    height: 200px;

  }

  .footer img{
    margin-top: 20px;
    margin: 0 auto;
    
  }
  .info-footer{
    width: 100%;
    text-align: center;
    margin-top: 40px;
    color: #ddd;
    line-height: 30px;
  }
  
  .icon-social{
    font-size: 26px;
    color: #fff;
    height: 40px;
    width: 41px;
    margin-top: 70px;
    margin-left: 1px;
    border-radius: 50%;
    background: #cacaca;
    line-height: 40px;
    text-align: center;
    margin-bottom: 20px;
    margin-left: 15px;
    float: left;
    transition: all .3s ease 0s;

  }
  
  #icon-social{
    width: 359px;
  }
  
  #icon-facebook:hover{
  background-color: #3b5998;

  }

  #icon-instagram:hover{
  background-color: #ffc838;

  }

  #icon-twitter:hover{
  background-color: #1dcaff;
  }

  #icon-youtube:hover{
  background-color: #cd201f;
  }

  .manda-msg {
  width: 100%;
  text-align: center;
  font-size: 35px;
  text-transform: uppercase;
  padding: 80px 0 40px 0;
  box-sizing: border-box;
}

  </style>


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
          <div class="contact-row">
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
            <a href="#"><div class="icon-social fa fa-500px" id="icon-twitter"></div></a>
            <a href="#"><div class="icon-social fa fa-linkedin" id="icon-youtube"></div></a>
            <a href="#"><div class="icon-social fa fa-github-alt" id="icon-youtube"></div></a>
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
          <label for="footer"> Copyright © 2017 | <a href="https://github.com/LailaFerreira">Laila Ferreira Opressora</a></label>
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
