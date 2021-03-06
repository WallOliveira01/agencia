<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    
    <!-- Title  -->
    <title>Manson - Creative Agency Template</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    
    <!-- Style Css -->
    <link rel="stylesheet" href="../res/site/styles/vendor.css">
    <link rel="stylesheet" href="../res/site/revolution/css/revolution.all.css">
    <link rel="stylesheet" href="../res/site/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
   
   
    <!-- Modernizr -->
    <script src="scripts/vendor/modernizr.js"></script>
</head>

<body>
    <!--[if IE]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
    
     <!-- Start  Loading Mask-->
    <div id="mask">
        <div class="material-icon">
            <div class="spinner">
                <div class="right-side">
                    <div class="bar"></div>
                </div>
                <div class="left-side">
                    <div class="bar"></div>
                </div>
            </div>
            <div class="spinner color-2">
                <div class="right-side">
                    <div class="bar"></div>
                </div>
                <div class="left-side">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    </div>
     <!-- End Loading Mask-->

     <header class="container header js-header-fixsmall overlayer-fixed">
      <!-- Start Navbar-->
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <a class="navbar-brand" href="/"><img src="../res/site/images/demo/logos/logo-slider-black.png" alt=""></a>
                    </div>
                    <div class="col">
                        <ul class="navbar float-right">
                            <li><a class="nav-link" href="/">Home</a></li>
                            <li><a class="nav-link " href="/about">Sobre</a></li>
                            <li><a class="nav-link " href="/services">Serviços</a></li>
                            <li class="nav-item dropdown" ><a class="nav-link"  href="/portfolio" aria-haspopup="true" aria-expanded="false">Trabalhos</a>
                            </li>
                            <li><a class="nav-link" href="/team">Time</a></li>
                            <li class=" active"><a class="nav-link" href="/contact">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Navbar-->
         <!-- Start Navbar Mobile-->
        <nav class="navbarmob navbar-expand-lg">
            <div class="container">

              <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar">
                    <span class="menu-lines">
                        <span class="menu-line menu-line-1"></span>
                        <span class="menu-line menu-line-2"></span>
                        <span class="menu-line menu-line-3"></span>
                    </span>
                </span>
              </button>

              <!-- navbar links -->
              <div class="collapse navbarmob" id="navbarOppener">
                 <span class="icon-close"><img src="../res/site/images/close.png" alt="close"/></span>
                <ul class="navbar-nav ml-auto">
                 <li><a class="nav-link active" href="/">Home</a></li>
                    <li><a class="nav-link " href="/about">Sobre</a></li>
                    <li><a class="nav-link " href="/services">Serviços</a></li>
                    <li><a class="nav-link" href="/portfolio">Trabalhos</a></li>
                    <li><a class="nav-link" href="/team">Time</a></li>
                    <li><a class="nav-link" href="/contact">Contato</a></li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->
    </header>
<!-- Contact Section Start -->
<section id="section-contact" class="contact-us">
    <div class="container">
        <div class="row justify-content-center js-inview">
            <div class="col-12">
                <div class="voffset-120"></div>
                <div class="section__header">
                    <h2 class="section__title js-inview_h tra20 delay01">Entre em contato </h2>
                     <span>Como designer digital, um portfólio bem organizado mostrando suas habilidades de design, alcance e<br/>interesses serão uma espinha dorsal na sua pesquisa por clientes. </span>
                  
                </div>
                <div class="voffset-80"></div>
            </div>
        </div>
    </div>
    <div class="container contact-info">
        <div class="row js-inview">
             <div class="col-4">
             <div class="contact-address">
                    <div class="voffset-50"></div>
                    <h3 class="js-inview_h tra20 delay06">Head Quarter</h3>
                    <h4 class="js-inview_h tra20 delay06">Contact us:</h4>
                    <p class="js-inview_h tra20 delay07">121 Street, Melbourne Victoria - London
                        <br>Email: <a href="#">hello@mansonagency.com</a>
                        <br>Phone: +44 3 7890 - 123</p>
                         <div class="voffset-30"></div>
                        <h4 class="js-inview_h tra20 delay06">Follow us:</h4>
                         <ul>
                         <li class="nav-social">
                            <ul>
                                <li><a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="nav-link"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#" class="nav-link"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#" class="nav-link"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </li>
                         </ul>
                </div>
            </div>
            <div class="col-8">
                <div class="voffset-60"></div>
                <form action="mail.php" method="post" id="contactform" class="contact-form">
                    <div class="form-group">
                        <input name="firstname" type="text" class="form-control  js-inview_h tra20 delay01" id="input-name" placeholder="Primeiro Nome">
                    </div>
                    <div class="form-group">
                        <input name="lastname" type="text" class="form-control  js-inview_h tra20 delay02" id="input-lastname" placeholder="Último Nome">
                    </div>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control  js-inview_h tra20 delay03" id="input-email" placeholder="Seu Endereço de Email">
                    </div>
                     <div class="form-group">
                        <input name="phone" type="text" class="form-control  js-inview_h tra20 delay03" id="input-phone" placeholder="De onde você é?">
                    </div>
                    <div class="form-group js-inview_h tra20 delay04">
                        <textarea name="message" class="form-control" id="input-message" rows="1" placeholder="Sua Mensagem"></textarea>
                    </div>
                    <p>Todos sabemos o quão importante são as suas informações.
Eles estão sempre seguros conosco.</p>
                    <input type="submit" value="Enviar Mensagem" class="btn btn-primary js-inview_h tra20 delay05">
                </form>
                <div class="voffset-180"></div>
               
            </div>
        </div>
    </div>
    
</section>
<!-- Contact Section End -->