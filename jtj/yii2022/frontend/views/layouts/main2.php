<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use common\models\Developer;
use common\models\User;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>流浪_NKの互联网数据库团队网页设计</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="newmain/css/bootstrap.min.css">
    <link rel="stylesheet" href="newmain/css/font-awesome.min.css">
    <link rel="stylesheet" href="newmain/css/line-icons.css">
    <link rel="stylesheet" href="newmain/css/owl.carousel.css">
    <link rel="stylesheet" href="newmain/css/owl.theme.css">
    <link rel="stylesheet" href="newmain/css/nivo-lightbox.css">
    <link rel="stylesheet" href="newmain/css/magnific-popup.css">
    <link rel="stylesheet" href="newmain/css/slicknav.css">
    <link rel="stylesheet" href="newmain/css/animate.css">
    <link rel="stylesheet" href="newmain/css/main.css">    
    <link rel="stylesheet" href="newmain/css/responsive.css">

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5" style="background: url(newmain/img/webpic/battlefield11.jpg);background-size: cover;">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="index.php" class="navbar-brand"><img class="img-fulid" src="newmain/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Analysis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <?php 
                if(Yii::$app->user->isGuest)
                  echo '<a class="nav-link page-scroll" href="index.php?r=site%2Flogin">Login</a>';
                else{
                  echo '<a class="nav-link page-scroll" href="">';
                  echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                  . Html::submitButton(
                      'Logout (' . Yii::$app->user->identity->username . ')',
                      ['class' => 'btn btn-link logout text-decoration-none']
                  )
                  . Html::endForm();
                  echo '</a>';
                }
                ?>
              </li>
              <li class="nav-item">
                <?php 
                if(!Yii::$app->user->isGuest)
                {
                  $user=User::find()->where(['username'=>Yii::$app->user->identity->username])->one();
                  if($user->admin==1)
                  {
                    echo '<a class="nav-link page-scroll" href="/project/jtj/yii2022/backend/web/index.php">Backend</a>';
                  }
                }
                ?>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#hero-area">Home</a>
            </li>
            <li>
              <a class="page-scroll" href="#services">Services</a>
            </li>
            <li>
              <a class="page-scroll" href="#features">Features</a>
            </li>
            <li>
              <a class="page-scroll" href="#portfolios">Analysis</a>
            </li>
            <li>
              <a class="page-scroll" href="#pricing">Pricing</a>
            </li>
            <li>
              <a class="page-scroll" href="#team">Team</a>
            </li>
            <li >
              <a class="page-scroll" href="#blog">Blog</a>
            </li>
            <li>
              <a class="page-scroll" href="#contact">Contact</a>
            </li>
            <li>
              <a class="page-scroll" href="#login">Login</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">俄乌战局势</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">网页设计由 流浪_NK 全体成员</p>
              <a href="#services" class="btn btn-common wow fadeInUp nav-link page-scroll" data-wow-duration="1000ms" data-wow-delay="400ms">Here we Go</a>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our Services</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lnr lnr-pencil"></i>
              </div>
              <h4>Content Writing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lnr lnr-code"></i>
              </div>
              <h4>Web Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lnr lnr-mustache"></i>
              </div>
              <h4>Business Consultancy</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section" data-stellar-background-ratio="0.2" style="background: url(newmain/img/webpic/battlefield13.jpg);background-size: cover;">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Some Features</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="container">
              <div class="row">
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-rocket"></i>
                    </span>
                    <div class="text">
                      <h4>Bootstrap 4 Based</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-laptop-phone"></i>
                    </span>
                    <div class="text">
                      <h4>Fully Responsive</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-layers"></i>
                    </span>
                    <div class="text">
                      <h4>Parallax Background</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-cog"></i>
                    </span>
                    <div class="text">
                      <h4>Easy to Customize</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
            
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End -->    

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">数据分析</h2>
          <hr class="lines">
          <p class="section-subtitle">俄乌战使得世界市场局势受到较大影响 <br> 数据分析针对能源市场和外贸交易进行调研</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                全部 
              </a>
              <a class="filter btn btn-common" data-filter=".design">
                油气市场调研 
              </a>
              <a class="filter btn btn-common" data-filter=".development">
                外贸运营分析
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row">

          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="newmain/img/webpic/petrol.jpg" alt="" />  
                  <a class="overlay lightbox" href="index.php?r=sjfx%2Fprice">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="newmain/img/webpic/gas.jpg" alt="" />  
                  <a class="overlay lightbox" href="index.php?r=sjfx%2Fprice">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="newmain/img/webpic/russia1.jpg" alt="" />  
                  <a class="overlay lightbox" href="index.php?r=sjfx%2Fport">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="newmain/img/webpic/ukrainian1.jpg" alt="" />  
                  <a class="overlay lightbox" href="index.php?r=sjfx%2Fport">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>

            
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

    <!-- Start Video promo Section -->
    <section class="video-promo section" style="background: url(newmain/img/webpic/battlefield14.jpg);background-size: cover;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">了解俄乌战争历程</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">亚洲特快：回顾一下迄今为止的俄乌战况</p>
                <a href="https://www.bilibili.com/video/BV1Dd4y1p7Q7" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Start Pricing Table Section -->
    <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Pricing Table</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>

        <div class="row pricing-tables">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Free</h2>
                <span>$00</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Get Plan</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Popular</h2>
                <span>$3.99</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Premium</h2>
                <span>$9.50</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Buy Now</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End Pricing Table Section -->

    <!-- Counter Section Start -->
    <div class="counters section" data-stellar-background-ratio="0.5" style="background: url(newmain/img/webpic/battlefield15.jpg);background-size: cover;">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">   
              <div class="icon">
                <i class="lnr">战</i>
              </div>  
              <div class="fact-count">
                <h3><span class="counter" id="day"></span></h3>
                <h4>天</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">   
              <div class="icon">
                <i class="lnr">争</i>
              </div>            
              <div class="fact-count">
                <h3><span class="counter" id="hour"></span></h3>
                <h4>时</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item"> 
              <div class="icon">
                <i class="lnr">持</i>
              </div>              
              <div class="fact-count">
                <h3><span class="counter" id="minuet"></span></h3>
                <h4>分</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item"> 
              <div class="icon">
                <i class="lnr">续</i>
              </div>              
              <div class="fact-count">
                <h3><span class="counter" id="second"></span></h3>
                <h4>秒</h4>
              </div>
            </div>
          </div>
          <script>
            var t = setTimeout(time, 0); /*開始运行*/
            function time(){
              clearTimeout(t); /*清除定时器*/
              var date_start = new Date(2022,1,24).getTime();
              var date_now = new Date().getTime();
              var long = Math.floor((date_now-date_start)/1000);
              var day=Math.floor(long/86400);
              var hour=Math.floor((long%86400)/3600);
              var minuet=Math.floor((long%3600)/60);
              var second=(long%60);
              document.getElementById("day").innerHTML =day;
              document.getElementById("hour").innerHTML =hour;
              document.getElementById("minuet").innerHTML =minuet;
              document.getElementById("second").innerHTML =second;
              t = setTimeout(time, 1000);
            }
            
          </script>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">我们的团队</h2>
          <hr class="lines">
          <p class="section-subtitle">团队由四位小伙伴组成 <br> 他们共同合作完成了本次网页设计</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="newmain/img/team/jtj.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">姜天嘉</h4>
                  <p>Team Leader</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="newmain/img/team/yzh.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">闫钊辉</h4>
                  <p>Developer</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="newmain/img/team/wtp.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">                  
                  <h4 class="team-title">王天鹏</h4>
                  <p>Developer</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img class="img-fulid" src="newmain/img/team/zjs.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">张继盛</h4>
                  <p>Developer</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team section End -->

    <!-- testimonial Section Start -->
    <div id="testimonial" class="section" data-stellar-background-ratio="0.1" style="background: url(newmain/img/webpic/battlefield18.jpg);background-size: cover;">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme">
              <div class="testimonial-item">
                <img src="newmain/img/team/jtj.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p><?php 
                      $t = Developer::find()->where(['id'=>1])->one();
                      echo $t->text;
                  ?></p>
                  <h3>姜天嘉</h3>
                  <span>Team Leader</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="newmain/img/team/yzh.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p><?php 
                      $t = Developer::find()->where(['id'=>4])->one();
                      echo $t->text;
                  ?></p>
                  <h3>闫钊辉</h3>
                  <span>Developer</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="newmain/img/team/wtp.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p><?php 
                      $t = Developer::find()->where(['id'=>3])->one();
                      echo $t->text;
                  ?></p>
                  <h3>王天鹏</h3>
                  <span>Developer</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="newmain/img/team/zjs.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p><?php 
                      $t = Developer::find()->where(['id'=>2])->one();
                      echo $t->text;
                  ?></p>
                  <h3>张继盛</h3>
                  <span>Developer</span>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
    <!-- testimonial Section Start -->

    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Recent Blog</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="newmain/img/blog/img1.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <div class="meta-tags">
                  <span class="date"><i class="lnr  lnr-clock"></i>2 Days Ago</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div>
                <h3>
                  <a href="single-post.html">How often should you tweet?</a>
                </h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... 
                </p>
                <a href="single-post.html" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="newmain/img/blog/img2.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <div class="meta-tags">
                  <span class="date"><i class="lnr  lnr-clock"></i>2 Days Ago</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div>
                <h3>
                  <a href="single-post.html">Content is still king</a>
                </h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... 
                </p>
                <a href="single-post.html" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="newmain/img/blog/img3.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <div class="meta-tags">
                  <span class="date"><i class="lnr  lnr-clock"></i>2 Days Ago</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div> 
                <h3>
                  <a href="single-post.html">Social media at work</a>
                </h3>
                <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... 
                </p>
                <a href="single-post.html" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3>Contact With us</h3>
                <div class="contact-address">
                  <p>Centerville Road, DE 19808, US </p>
                  <p class="phone">Phone: <span>(+94 123 456 789)</span></p>
                  <p class="email">E-mail: <span>(contact@mate.com)</span></p>
                </div>
                <div class="social-icons">
                  <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
              <li>
                <a href="#">Homepage</a>
              </li>
              <li>
                <a href="#">Services</a>
              </li>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>All copyrights reserved &copy; 2018 - by <a target="_blank" href="http://www.mobanwang.com/" title="网页模板">网页模板</a></p>
            </div>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="newmain/js/jquery-min.js"></script>
    <script src="newmain/js/popper.min.js"></script>
    <script src="newmain/js/bootstrap.min.js"></script>
    <script src="newmain/js/jquery.mixitup.js"></script>
    <script src="newmain/js/nivo-lightbox.js"></script>
    <script src="newmain/js/owl.carousel.js"></script>    
    <script src="newmain/js/jquery.stellar.min.js"></script>    
    <script src="newmain/js/jquery.nav.js"></script>    
    <script src="newmain/js/scrolling-nav.js"></script>    
    <script src="newmain/js/jquery.easing.min.js"></script>    
    <script src="newmain/js/smoothscroll.js"></script>    
    <script src="newmain/js/jquery.slicknav.js"></script>     
    <script src="newmain/js/wow.js"></script>   
    <script src="newmain/js/jquery.vide.js"></script>
    <script src="newmain/js/jquery.counterup.min.js"></script>    
    <script src="newmain/js/jquery.magnific-popup.min.js"></script>    
    <script src="newmain/js/waypoints.min.js"></script>    
    <script src="newmain/js/form-validator.min.js"></script>
    <script src="newmain/js/contact-form-script.js"></script>   
    <script src="newmain/js/main.js"></script>

  </body>
</html>