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
    <!-- Work Section Start -->
    <div class="section filter-grid-portfolio" id="section-work">
        <div class="container">
            <div class="row justify-content-center js-inview">
                <div class="col-12">
                  <div class="section__header js-inview_h tra20 delay01">
                        <div class="voffset-240"></div>
                        <h2 class="section__title">Awesome Portfolio — A minimal design is usually <br/>best for brands, projects and case studies  products.</h2>
                         <span>As a digital designer, a well-organized portfolio showing off your design skills, range, and<br/> interests will be a backbone in your search for clients.</span>
                         </div>
                        <div class="voffset-60"></div>
                    <ul class="js-filters filters">
                        <li data-filter="*" class="js-inview_h tra20 delay02 is-checked">Todos os trabalhos</li>
                        <?php require $this->checkTemplate("portifolio-categories");?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section grid-portfolio">
        <div class="container">
            <div class="row justify-content-center js-inview">
                <div class="col-12">
                    <div class="grid-gallery-container">
                        <div  id="gll" class="grid-gallery columns-4">
                            <div class="grid-item Institucional js-inview_h tra20 delay01"><img src="../res/site/images/demo/work/01.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Branding</div>
                                            <div class="titleinfo">Amable 18AM</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid-item digitaldesign js-inview_h tra20 delay02"><img src="../res/site/images/demo/work/02.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Digital Design</div>
                                            <div class="titleinfo">Mexico City</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid-item digitaldesign js-inview_h tra20 delay03"><img src="../res/site/images/demo/work/03.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Digital Design</div>
                                            <div class="titleinfo">Double E</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid-item branding js-inview_h tra20 delay04"><img src="../res/site/images/demo/work/04.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Branding</div>
                                            <div class="titleinfo">Triglav</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid-item webdesign js-inview_h tra20 delay05"><img src="../res/site/images/demo/work/05.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Web Design</div>
                                            <div class="titleinfo">Wood</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid-item branding js-inview_h tra20 delay06"><img src="../res/site/images/demo/work/06.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Branding</div>
                                            <div class="titleinfo">Carus</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid-item customprint js-inview_h tra20 delay07"><img src="../res/site/images/demo/work/01.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Custom Print</div>
                                            <div class="titleinfo">Red</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid-item branding js-inview_h tra20 delay08"><img src="../res/site/images/demo/work/02.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Branding</div>
                                            <div class="titleinfo">Rock Kit</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        <p class="loadmore"><span class="js-loadmore btn btn-primary">Mais Trabalhos</span></p>
                        <div class="js-more-items grid-gallery-more-items">
                            <div class="grid-item "><img src="../res/site/images/demo/work/10.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Custom Print</div>
                                            <div class="titleinfo">Paper Brand</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid-item "><img src="../res/site/images/demo/work/11.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Web Design</div>
                                            <div class="titleinfo">Type X</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid-item "><img src="../res/site/images/demo/work/12.jpg" alt="">
                                <div class="grid-item__rollover">
                                    <a href="single-project.html">
                                        <div class="containertext">
                                            <div class="tagsinfo">Web Design</div>
                                            <div class="titleinfo">Type X</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Work Section End -->
<!-- Real Section Start -->
    <section class="video parallax-section" data-parallax-image="../res/site/images/demo/video/viewreel.jpg">
        <div class="video-container js-inview"><a href="https://vimeo.com/187982499" class="overlay-video js-inview_h tra20 delay02" data-lity><span>Watch Our Reel</span></a></div>
    </section>
<!-- Real Section End -->
<!-- Clients Section Start -->
    <section class="brand">
        <div class="container">
            <div class="row js-inview">
                <div class="col-12">
                    <div class="voffset-40"></div>
                    <ul class="brand__list row justify-content-center">
                        <li class="col-2 brand__item js-inview_h tra20 delay01"><img src="../res/site/images/demo/brands/01.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay02"><img src="../res/site/images/demo/brands/02.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay03"><img src="../res/site/images/demo/brands/03.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay05"><img src="../res/site/images/demo/brands/05.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay06"><img src="../res/site/images/demo/brands/06.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay07"><img src="../res/site/images/demo/brands/07.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay08"><img src="../res/site/images/demo/brands/08.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay09"><img src="../res/site/images/demo/brands/09.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay10"><img src="../res/site/images/demo/brands/10.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay04"><img src="../res/site/images/demo/brands/04.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay11"><img src="../res/site/images/demo/brands/11.png" alt="brand"></li>
                        <li class="col-2 brand__item js-inview_h tra20 delay12"><img src="../res/site/images/demo/brands/12.png" alt="brand"></li>
                        
                    </ul>
                  <div class="voffset-120"></div>
                </div>
                  
            </div>
        </div>
    </section>
<!-- Clients Section End -->
