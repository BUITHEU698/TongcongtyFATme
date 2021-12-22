<?php
include'../connect/connect.php';


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./img/logo/logo-main.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/lightslider.css" />
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/lightslider.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/app.css" />
    <!-- <link rel="stylesheet" href="./css/TESST.CSS" /> -->
    <link rel="stylesheet" href="./css/app.scss.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>FATMe - Món ăn</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
  </head>

  <body>
    <div class="totop">
      <a href="#" class="goto-top"></a>
    </div>
    <header class="header">
      <div class="navigation">
        <img class="header-logo" srcset="./img/logo/logo.png 2x" />
        <input type="checkbox" name="" id="toggle-check" class="toggle-check" />
        <ul class="menu">
          <div class="menu-item toggle-close">
            <label for="toggle-check"><img src="./img/logo/menu-close.png" alt="Close" /></label>
          </div>
          <li class="menu-item"><a class="menu-link" href="../main-page/index.php">Trang chủ</a></li>
          <?php if (!empty($_SESSION['email'])){ ?>
                <li class="menu-item">
                    <a class="menu-link" href="../Home_main_page/index.php">Quản lí trang bán hàng</a>
                </li>
            <?php }?>
          <li class="menu-item"><a class="menu-link link-active" href="index.php">Món ăn</a></li>

          <li class="menu-item"><a class="menu-link" href="../blog/index.php">Blog</a></li>
          <li class="menu-item"><a class="menu-link" href="/service/service.html">Dịch vụ</a></li>
          <li class="menu-item"><a class="menu-link" href="../contact/index.html">Liên hệ</a></li>
          <?php if (empty($_SESSION['email'])){ ?>
                <li class="auth">
                    <a class="button button--secondary auth-login" href="../login/index.php">Đăng nhập</a>
                    <a class="button button--primary auth-signup" href="../register/index.php">Đăng ký</a>
                </li>
            <?php } else {?>
                <li class="auth">
                    <button class="button button--primary auth-signup">Account</button>

                </li>
            <?php }?>
        </ul>
        <label for="toggle-check" class="toggle"
          ><img src="./img/logo/menu.png" alt="Menu"
        /></label>
        <label for="toggle-check" class="menu-overlay"></label>
      </div>

    </header>




    <section id="section0" style="height: 550px" class="slider-area ">
      <div class="main-slider owl-theme owl-carousel">
        <div
          class="single-slide item"
          style="
            background-image: url(./img/slider/gifslide.gif);
            background-size: cover;
            background-repeat: no-repeat;
          "
        >
          <div class="slider-content-area">
            <div class="row">
              <div class="slide-content-wrapper text-center">
                <div class="slide-content">
                  <img class="classic" src="img/logo/cemrebakerylogo.png" />
                  <h3>BAKERY MAKES</h3>
                  <h2>A Taste Of The Good Life</h2>
                  <p></p>

                  <a class="default-btn" href="about.html">Learn more</a>
                  <img class="classic" src="img/new/icon.png" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="single-slide item"
          style="
            background-image: url(img/slider/1900x1000.png);
            background-size: cover;
            background-repeat: no-repeat;
          "
        >
          <div class="slider-content-area">
            <div class="row">
              <div class="slide-content-wrapper text-center">
                <div class="slide-content">
                  <img class="classic" src="img/logo/cemrebakerylogo.png" />

                  <h3>BAKERY MAKES</h3>
                  <h2>A Taste Of The Good Life</h2>
                  <p></p>
                  <a class="default-btn" href="about.html">Learn more</a>
                  <img class="classic" src="img/new/icon.png" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="single-slide item"
          style="
            background-image: url(img/slider/1900x1000.png);
            background-size: cover;
            background-repeat: no-repeat;
          "
        >
          <div class="slider-content-area">
            <div class="row">
              <div class="slide-content-wrapper text-center">
                <div class="slide-content">
                  <img class="classic" src="img/logo/cemrebakerylogo.png" />

                  <h3>BAKERY MAKES</h3>
                  <h2>A Taste Of The Good Life</h2>
                  <p></p>
                  <a class="default-btn" href="about.html">Learn more</a>
                  <img class="classic" src="img/new/icon.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="topOff">
      <div class="container">
        <div class="other">
          <span></span>
          <a>Xem tất Cả <i class="fas fa-chevron-right"></i></a>
        </div>
        <br />
      </div>
      <div class="container">
        <div class="row">

          <a href="#" class="col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
              <div
                style="background-image: url(./img/slider/menu/menu2.jpg); background-size: cover"
                class="panel-body colorfullPanel text-center"
              >
                <p><br /></p>
                <h2><span>Bít Tết</span></h2>
              </div>
            </div>
            <br />
            <br />
          </a>
          <a href="#" class="col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
              <div
                style="background-image: url(./img/slider/menu/menu3.png); background-size: cover"
                class="panel-body colorfullPanel text-center"
              >
                <p><br /></p>
                <h2><span>Ăn Trưa</span></h2>
              </div>
            </div>
            <br />
            <br />
          </a>
          <a href="#" class="col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
              <div
                style="background-image: url(./img/slider/menu/menu4.png); background-size: cover"
                class="panel-body colorfullPanel text-center"
              >
                <p><br /></p>
                <h2><span>Ăn Sáng</span></h2>
              </div>
            </div>
            <br />
            <br />
          </a>
          <a href="#" class="col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
              <div
                style="background-image: url(./img/slider/menu/menu5.png); background-size: cover"
                class="panel-body colorfullPanel text-center"
              >
                <p><br /></p>
                <h2><span>Ăn Tối</span></h2>
              </div>
            </div>
            <br />
            <br />
          </a>
          <a href="#" class="col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
              <div
                style="background-image: url(./img/slider/menu/menu6.png); background-size: cover"
                class="panel-body colorfullPanel text-center"
              >
                <p><br /></p>
                <h2><span>Ăn Vặt</span></h2>
              </div>
            </div>
            <br />
            <br />
          </a>
          <a href="#" class="col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
              <div
                style="background-image: url(./img/slider/menu/menu7.png); background-size: cover"
                class="panel-body colorfullPanel text-center"
              >
                <p><br /></p>
                <h2><span>Bánh Canh</span></h2>
              </div>
            </div>
            <br />
            <br />
          </a>
          <a href="#" class="col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
              <div
                style="background-image: url(./img/slider/menu/menu8.png); background-size: cover"
                class="panel-body colorfullPanel text-center"
              >
                <p><br /></p>
                <h2><span>Bánh Mì Việt</span></h2>
              </div>
            </div>
            <br />
            <br />
          </a>
          <a href="#" class="col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
              <div
                style="background-image: url(./img/slider/menu/menu9.png); background-size: cover"
                class="panel-body colorfullPanel text-center"
              >
                <p><br /></p>
                <h2><span>Bánh Ngọt</span></h2>
              </div>
            </div>
            <br />
            <br />
          </a>

          <a class="col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
              <div
                style="background-image: url(./img/slider/menu/menu12.jpg); background-size: cover"
                class="panel-body colorfullPanel text-center"
              >
                <p><br /></p>
                <h2><span>Sinh Tố</span></h2>
              </div>
            </div>
            <br />
            <br />
          </a>
        </div>
      </div>
    </section>


    <section id="section1" class="show-on-scroll">
      <div class="container">
        <div class="other">
          <span>Bộ sưu tập</span>
          <a href="#">Xem tất Cả <i class="fas fa-chevron-right"></i></a>
        </div>
        <ul id="autoWidth" class="cs-hidden">
          <li class="item-a">
            <div class="box">
              <div class="slide-img">
                <img src="./img/danhmuc/dm1.1.jpg" alt="" />
                <div class="overlay">
                  <a href="#" class="buy-btn">Khám Phá</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="#">Vui cùng Noel giảm 30k</a>
                  <span>Ưu đãi 13 - 25/12 Nhập mã NOEL30 để được giảm 30k</span>
                </div>
              </div>
            </div>
          </li>
          <li class="item-b">
            <div class="box">
              <div class="slide-img">
                <img src="./img/danhmuc/dm1.2.png" alt="" />
                <div class="overlay">
                  <a href="#" class="buy-btn">Khám Phá</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="#">Thứ 6 khao vạn món 0Đ</a>
                  <span>Món ngon deal 0Đ ngập tràn lại còn Freeship</span>
                </div>
              </div>
            </div>
          </li>
          <li class="item-c">
            <div class="box">
              <div class="slide-img">
                <img src="./img/danhmuc/dm1.3.jpeg" alt="" />
                <div class="overlay">
                  <a href="#" class="buy-btn">Khám Phá</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="#">Thịt, Hải Sản Giảm 20k</a>
                  <span>Nhập mã TUOINGON20 để được giảm 20k</span>
                </div>
              </div>
            </div>
          </li>
          <li class="item-d">
            <div class="box">
              <div class="slide-img">
                <img src="./img/danhmuc/dm1.4.jpeg" alt="" />
                <div class="overlay">
                  <a href="#" class="buy-btn">Khám Phá</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="#">Giáng Sinh rinh freeship</a>
                  <span>Từ 14-20/12, nhập mã CON1TUAN để được giảm 19k phí vận chuyển.</span>
                </div>
              </div>
            </div>
          </li>
          <li class="item-e">
            <div class="box">
              <div class="slide-img">
                <img src="./img/danhmuc/dm1.5.jpeg" alt="" />
                <div class="overlay">
                  <a href="#" class="buy-btn">Khám Phá</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="#">Ăn healthy - Giảm 15%</a>
                  <span>Nhập mã "ANKHOE" giảm 15%, hoặc nhập mã "DANGTHON" để giảm 25K </span>
                </div>
              </div>
            </div>
          </li>
          <li class="item-f">
            <div class="box">
              <div class="slide-img">
                <img src="./img/danhmuc/dm1.6.png" alt="" />
                <div class="overlay">
                  <a href="#" class="buy-btn">Khám Phá</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="#">Chợ online-Sale Đỉnh giảm 99k </a>
                  <span>Càng mua càng giảm với bộ Sale Đỉnh giảm tới 99k </span>
                </div>
              </div>
            </div>
          </li>
          <!-- <li class="item-g">
            <div class="box">
                <div class="slide-img">
                    <img src="./img/danhmuc/dm1.7.jpeg" alt="" />
                    <div class="overlay">
                      <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">UNDER ARMOUR</a>
                        <span>Golf T-shirt</span>
                    </div>

                </div>
            </div>
        </li>
        <li class="item-h">
            <div class="box">
                <div class="slide-img">
                    <img src="./img/danhmuc/dm1.8.jpeg"  alt="" />
                    <div class="overlay">
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type">
                        <a href="#">DOROTHY PERKINS</a>
                        <span>Solid Cape Top</span>
                    </div>

                </div>
            </div>
        </li> -->
        </ul>
      </div>
    </section>


    <section id="section2" class="show-on-scroll">
      <div class="container">
        <div class="other">
          <span>Món Ăn ngon</span>
          <a href="#">Xem tất Cả <i class="fas fa-chevron-right"></i></a>
        </div>

        <ul style="display: flex; flex-wrap: wrap">
          <li class="box1" id="a1">
            <div>
              <div class="col l4 m8 s12 offset-m2 offset-l4">
                <div class="product-card">
                  <div class="card z-depth-4">
                    <div class="card-image">
                      <a href="#" class="btn-floating btn-large price waves-effect waves-light"
                        >-50%</a
                      >

                      <img src="./img/danhmuc/dm2.1.jpg" alt="product-img" />
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <p
                          href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/"
                          target="_blank"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light white"
                        >
                          <i
                            style="line-height: 36px"
                            class="material-icons grey-text text-darken-3"
                            >share</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          id="like"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light red accent-2"
                        >
                          <i style="line-height: 36px" class="material-icons like"
                            >favorite_border</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          style="width: 35px; height: 35px"
                          id="buy"
                          class="btn-floating waves-effect waves-light blue"
                        >
                          <i style="line-height: 36px" class="material-icons buy"
                            >add_shopping_cart</i
                          >
                        </p>
                      </li>
                    </ul>
                    <div style="padding: 0 5px" class="card-content">
                      <div class="row" style="margin-bottom: 5px">
                        <div class="col s12">
                          <br />
                          <div>
                            <strong
                              style="
                                color: #222222;
                                font-size: 14px;
                                height: 55px;
                                line-height: 22px;
                                font-weight:700;
                              "
                              >Cơm Chiên Cá Mặn ngon như cơm mẹ chiên</strong
                            >
                            <br /><br />
                          </div>
                          <del style="opacity: 0.7"> ₫198.000</del
                          ><span style="color: red"> ₫99.000</span>
                        </div>
                      </div>
                      <div
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          margin-bottom: 10px;
                          font-size: 13px;
                          margin-left: 0;
                          margin-right: 0;
                        "
                      >
                        <span style="flex-basis: 45%">Đã bán 190</span>
                        <span style="flex-basis: 30%">
                          <i class="fas fa-map-marker-alt"></i> 83km</span
                        >
                        <img
                          style="width: 30px; height: 30px; flex-basis: 25%"
                          class="imgfreeship"
                          src="./img/logo/freeship.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="box1" id="a1">
            <div>
              <div class="col l4 m8 s12 offset-m2 offset-l4">
                <div class="product-card">
                  <div class="card z-depth-4">
                    <div class="card-image">
                      <a href="#" class="btn-floating btn-large price waves-effect waves-light"
                        >-50%</a
                      >

                      <img src="./img/danhmuc/dm2.1.jpg" alt="product-img" />
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <p
                          href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/"
                          target="_blank"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light white"
                        >
                          <i
                            style="line-height: 36px"
                            class="material-icons grey-text text-darken-3"
                            >share</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          id="like"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light red accent-2"
                        >
                          <i style="line-height: 36px" class="material-icons like"
                            >favorite_border</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          style="width: 35px; height: 35px"
                          id="buy"
                          class="btn-floating waves-effect waves-light blue"
                        >
                          <i style="line-height: 36px" class="material-icons buy"
                            >add_shopping_cart</i
                          >
                        </p>
                      </li>
                    </ul>
                    <div style="padding: 0 5px" class="card-content">
                      <div class="row" style="margin-bottom: 5px">
                        <div class="col s12">
                          <br />
                          <div>
                            <strong
                              style="
                                color: #222222;
                                font-size: 14px;
                                height: 55px;
                                line-height: 22px;
                                font-weight:700;
                              "
                              >Cơm Chiên Cá Mặn ngon như cơm mẹ chiên</strong
                            >
                            <br /><br />
                          </div>
                          <del style="opacity: 0.7"> ₫198.000</del
                          ><span style="color: red"> ₫99.000</span>
                        </div>
                      </div>
                      <div
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          margin-bottom: 10px;
                          font-size: 13px;
                          margin-left: 0;
                          margin-right: 0;
                        "
                      >
                        <span style="flex-basis: 45%">Đã bán 190</span>
                        <span style="flex-basis: 30%">
                          <i class="fas fa-map-marker-alt"></i> 83km</span
                        >
                        <img
                          style="width: 30px; height: 30px; flex-basis: 25%"
                          class="imgfreeship"
                          src="./img/logo/freeship.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="box1" id="a1">
            <div>
              <div class="col l4 m8 s12 offset-m2 offset-l4">
                <div class="product-card">
                  <div class="card z-depth-4">
                    <div class="card-image">
                      <a href="#" class="btn-floating btn-large price waves-effect waves-light"
                        >-50%</a
                      >

                      <img src="./img/danhmuc/dm2.1.jpg" alt="product-img" />
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <p
                          href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/"
                          target="_blank"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light white"
                        >
                          <i
                            style="line-height: 36px"
                            class="material-icons grey-text text-darken-3"
                            >share</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          id="like"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light red accent-2"
                        >
                          <i style="line-height: 36px" class="material-icons like"
                            >favorite_border</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          style="width: 35px; height: 35px"
                          id="buy"
                          class="btn-floating waves-effect waves-light blue"
                        >
                          <i style="line-height: 36px" class="material-icons buy"
                            >add_shopping_cart</i
                          >
                        </p>
                      </li>
                    </ul>
                    <div style="padding: 0 5px" class="card-content">
                      <div class="row" style="margin-bottom: 5px">
                        <div class="col s12">
                          <br />
                          <div>
                            <strong
                              style="
                                color: #222222;
                                font-size: 14px;
                                height: 55px;
                                line-height: 22px;
                                font-weight:700;
                              "
                              >Cơm Chiên Cá Mặn ngon như cơm mẹ chiên</strong
                            >
                            <br /><br />
                          </div>
                          <del style="opacity: 0.7"> ₫198.000</del
                          ><span style="color: red"> ₫99.000</span>
                        </div>
                      </div>
                      <div
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          margin-bottom: 10px;
                          font-size: 13px;
                          margin-left: 0;
                          margin-right: 0;
                        "
                      >
                        <span style="flex-basis: 45%">Đã bán 190</span>
                        <span style="flex-basis: 30%">
                          <i class="fas fa-map-marker-alt"></i> 83km</span
                        >
                        <img
                          style="width: 30px; height: 30px; flex-basis: 25%"
                          class="imgfreeship"
                          src="./img/logo/freeship.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="box1" id="a1">
            <div>
              <div class="col l4 m8 s12 offset-m2 offset-l4">
                <div class="product-card">
                  <div class="card z-depth-4">
                    <div class="card-image">
                      <a href="#" class="btn-floating btn-large price waves-effect waves-light"
                        >-50%</a
                      >

                      <img src="./img/danhmuc/dm2.1.jpg" alt="product-img" />
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <p
                          href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/"
                          target="_blank"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light white"
                        >
                          <i
                            style="line-height: 36px"
                            class="material-icons grey-text text-darken-3"
                            >share</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          id="like"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light red accent-2"
                        >
                          <i style="line-height: 36px" class="material-icons like"
                            >favorite_border</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          style="width: 35px; height: 35px"
                          id="buy"
                          class="btn-floating waves-effect waves-light blue"
                        >
                          <i style="line-height: 36px" class="material-icons buy"
                            >add_shopping_cart</i
                          >
                        </p>
                      </li>
                    </ul>
                    <div style="padding: 0 5px" class="card-content">
                      <div class="row" style="margin-bottom: 5px">
                        <div class="col s12">
                          <br />
                          <div>
                            <strong
                              style="
                                color: #222222;
                                font-size: 14px;
                                height: 55px;
                                line-height: 22px;
                                font-weight:700;
                              "
                              >Cơm Chiên Cá Mặn ngon như cơm mẹ chiên</strong
                            >
                            <br /><br />
                          </div>
                          <del style="opacity: 0.7"> ₫198.000</del
                          ><span style="color: red"> ₫99.000</span>
                        </div>
                      </div>
                      <div
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          margin-bottom: 10px;
                          font-size: 13px;
                          margin-left: 0;
                          margin-right: 0;
                        "
                      >
                        <span style="flex-basis: 45%">Đã bán 190</span>
                        <span style="flex-basis: 30%">
                          <i class="fas fa-map-marker-alt"></i> 83km</span
                        >
                        <img
                          style="width: 30px; height: 30px; flex-basis: 25%"
                          class="imgfreeship"
                          src="./img/logo/freeship.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="box1" id="a1">
            <div>
              <div class="col l4 m8 s12 offset-m2 offset-l4">
                <div class="product-card">
                  <div class="card z-depth-4">
                    <div class="card-image">
                      <a href="#" class="btn-floating btn-large price waves-effect waves-light"
                        >-50%</a
                      >

                      <img src="./img/danhmuc/dm2.1.jpg" alt="product-img" />
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <p
                          href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/"
                          target="_blank"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light white"
                        >
                          <i
                            style="line-height: 36px"
                            class="material-icons grey-text text-darken-3"
                            >share</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          id="like"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light red accent-2"
                        >
                          <i style="line-height: 36px" class="material-icons like"
                            >favorite_border</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          style="width: 35px; height: 35px"
                          id="buy"
                          class="btn-floating waves-effect waves-light blue"
                        >
                          <i style="line-height: 36px" class="material-icons buy"
                            >add_shopping_cart</i
                          >
                        </p>
                      </li>
                    </ul>
                    <div style="padding: 0 5px" class="card-content">
                      <div class="row" style="margin-bottom: 5px">
                        <div class="col s12">
                          <br />
                          <div>
                            <strong
                              style="
                                color: #222222;
                                font-size: 14px;
                                height: 55px;
                                line-height: 22px;
                                font-weight:700;
                              "
                              >Cơm Chiên Cá Mặn ngon như cơm mẹ chiên</strong
                            >
                            <br /><br />
                          </div>
                          <del style="opacity: 0.7"> ₫198.000</del
                          ><span style="color: red"> ₫99.000</span>
                        </div>
                      </div>
                      <div
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          margin-bottom: 10px;
                          font-size: 13px;
                          margin-left: 0;
                          margin-right: 0;
                        "
                      >
                        <span style="flex-basis: 45%">Đã bán 190</span>
                        <span style="flex-basis: 30%">
                          <i class="fas fa-map-marker-alt"></i> 83km</span
                        >
                        <img
                          style="width: 30px; height: 30px; flex-basis: 25%"
                          class="imgfreeship"
                          src="./img/logo/freeship.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="box1" id="a1">
            <div>
              <div class="col l4 m8 s12 offset-m2 offset-l4">
                <div class="product-card">
                  <div class="card z-depth-4">
                    <div class="card-image">
                      <a href="#" class="btn-floating btn-large price waves-effect waves-light"
                        >-50%</a
                      >

                      <img src="./img/danhmuc/dm2.1.jpg" alt="product-img" />
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <p
                          href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/"
                          target="_blank"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light white"
                        >
                          <i
                            style="line-height: 36px"
                            class="material-icons grey-text text-darken-3"
                            >share</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          id="like"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light red accent-2"
                        >
                          <i style="line-height: 36px" class="material-icons like"
                            >favorite_border</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          style="width: 35px; height: 35px"
                          id="buy"
                          class="btn-floating waves-effect waves-light blue"
                        >
                          <i style="line-height: 36px" class="material-icons buy"
                            >add_shopping_cart</i
                          >
                        </p>
                      </li>
                    </ul>
                    <div style="padding: 0 5px" class="card-content">
                      <div class="row" style="margin-bottom: 5px">
                        <div class="col s12">
                          <br />
                          <div>
                            <strong
                              style="
                                color: #222222;
                                font-size: 14px;
                                height: 55px;
                                line-height: 22px;
                                font-weight:700;
                              "
                              >Cơm Chiên Cá Mặn ngon như cơm mẹ chiên</strong
                            >
                            <br /><br />
                          </div>
                          <del style="opacity: 0.7"> ₫198.000</del
                          ><span style="color: red"> ₫99.000</span>
                        </div>
                      </div>
                      <div
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          margin-bottom: 10px;
                          font-size: 13px;
                          margin-left: 0;
                          margin-right: 0;
                        "
                      >
                        <span style="flex-basis: 45%">Đã bán 190</span>
                        <span style="flex-basis: 30%">
                          <i class="fas fa-map-marker-alt"></i> 83km</span
                        >
                        <img
                          style="width: 30px; height: 30px; flex-basis: 25%"
                          class="imgfreeship"
                          src="./img/logo/freeship.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="box1" id="a1">
            <div>
              <div class="col l4 m8 s12 offset-m2 offset-l4">
                <div class="product-card">
                  <div class="card z-depth-4">
                    <div class="card-image">
                      <a href="#" class="btn-floating btn-large price waves-effect waves-light"
                        >-50%</a
                      >

                      <img src="./img/danhmuc/dm2.1.jpg" alt="product-img" />
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <p
                          href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/"
                          target="_blank"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light white"
                        >
                          <i
                            style="line-height: 36px"
                            class="material-icons grey-text text-darken-3"
                            >share</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          id="like"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light red accent-2"
                        >
                          <i style="line-height: 36px" class="material-icons like"
                            >favorite_border</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          style="width: 35px; height: 35px"
                          id="buy"
                          class="btn-floating waves-effect waves-light blue"
                        >
                          <i style="line-height: 36px" class="material-icons buy"
                            >add_shopping_cart</i
                          >
                        </p>
                      </li>
                    </ul>
                    <div style="padding: 0 5px" class="card-content">
                      <div class="row" style="margin-bottom: 5px">
                        <div class="col s12">
                          <br />
                          <div>
                            <strong
                              style="
                                color: #222222;
                                font-size: 14px;
                                height: 55px;
                                line-height: 22px;
                                font-weight:700;
                              "
                              >Cơm Chiên Cá Mặn ngon như cơm mẹ chiên</strong
                            >
                            <br /><br />
                          </div>
                          <del style="opacity: 0.7"> ₫198.000</del
                          ><span style="color: red"> ₫99.000</span>
                        </div>
                      </div>
                      <div
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          margin-bottom: 10px;
                          font-size: 13px;
                          margin-left: 0;
                          margin-right: 0;
                        "
                      >
                        <span style="flex-basis: 45%">Đã bán 190</span>
                        <span style="flex-basis: 30%">
                          <i class="fas fa-map-marker-alt"></i> 83km</span
                        >
                        <img
                          style="width: 30px; height: 30px; flex-basis: 25%"
                          class="imgfreeship"
                          src="./img/logo/freeship.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="box1" id="a1">
            <div>
              <div class="col l4 m8 s12 offset-m2 offset-l4">
                <div class="product-card">
                  <div class="card z-depth-4">
                    <div class="card-image">
                      <a href="#" class="btn-floating btn-large price waves-effect waves-light"
                        >-50%</a
                      >

                      <img src="./img/danhmuc/dm2.1.jpg" alt="product-img" />
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <p
                          href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/"
                          target="_blank"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light white"
                        >
                          <i
                            style="line-height: 36px"
                            class="material-icons grey-text text-darken-3"
                            >share</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          id="like"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light red accent-2"
                        >
                          <i style="line-height: 36px" class="material-icons like"
                            >favorite_border</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          style="width: 35px; height: 35px"
                          id="buy"
                          class="btn-floating waves-effect waves-light blue"
                        >
                          <i style="line-height: 36px" class="material-icons buy"
                            >add_shopping_cart</i
                          >
                        </p>
                      </li>
                    </ul>
                    <div style="padding: 0 5px" class="card-content">
                      <div class="row" style="margin-bottom: 5px">
                        <div class="col s12">
                          <br />
                          <div>
                            <strong
                              style="
                                color: #222222;
                                font-size: 14px;
                                height: 55px;
                                line-height: 22px;
                                font-weight:700;
                              "
                              >Cơm Chiên Cá Mặn ngon như cơm mẹ chiên</strong
                            >
                            <br /><br />
                          </div>
                          <del style="opacity: 0.7"> ₫198.000</del
                          ><span style="color: red"> ₫99.000</span>
                        </div>
                      </div>
                      <div
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          margin-bottom: 10px;
                          font-size: 13px;
                          margin-left: 0;
                          margin-right: 0;
                        "
                      >
                        <span style="flex-basis: 45%">Đã bán 190</span>
                        <span style="flex-basis: 30%">
                          <i class="fas fa-map-marker-alt"></i> 83km</span
                        >
                        <img
                          style="width: 30px; height: 30px; flex-basis: 25%"
                          class="imgfreeship"
                          src="./img/logo/freeship.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="box1" id="a1">
            <div>
              <div class="col l4 m8 s12 offset-m2 offset-l4">
                <div class="product-card">
                  <div class="card z-depth-4">
                    <div class="card-image">
                      <a href="#" class="btn-floating btn-large price waves-effect waves-light"
                        >-50%</a
                      >

                      <img src="./img/danhmuc/dm2.1.jpg" alt="product-img" />
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <p
                          href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/"
                          target="_blank"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light white"
                        >
                          <i
                            style="line-height: 36px"
                            class="material-icons grey-text text-darken-3"
                            >share</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          id="like"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light red accent-2"
                        >
                          <i style="line-height: 36px" class="material-icons like"
                            >favorite_border</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          style="width: 35px; height: 35px"
                          id="buy"
                          class="btn-floating waves-effect waves-light blue"
                        >
                          <i style="line-height: 36px" class="material-icons buy"
                            >add_shopping_cart</i
                          >
                        </p>
                      </li>
                    </ul>
                    <div style="padding: 0 5px" class="card-content">
                      <div class="row" style="margin-bottom: 5px">
                        <div class="col s12">
                          <br />
                          <div>
                            <strong
                              style="
                                color: #222222;
                                font-size: 14px;
                                height: 55px;
                                line-height: 22px;
                                font-weight:700;
                              "
                              >Cơm Chiên Cá Mặn ngon như cơm mẹ chiên</strong
                            >
                            <br /><br />
                          </div>
                          <del style="opacity: 0.7"> ₫198.000</del
                          ><span style="color: red"> ₫99.000</span>
                        </div>
                      </div>
                      <div
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          margin-bottom: 10px;
                          font-size: 13px;
                          margin-left: 0;
                          margin-right: 0;
                        "
                      >
                        <span style="flex-basis: 45%">Đã bán 190</span>
                        <span style="flex-basis: 30%">
                          <i class="fas fa-map-marker-alt"></i> 83km</span
                        >
                        <img
                          style="width: 30px; height: 30px; flex-basis: 25%"
                          class="imgfreeship"
                          src="./img/logo/freeship.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="box1" id="a1">
            <div>
              <div class="col l4 m8 s12 offset-m2 offset-l4">
                <div class="product-card">
                  <div class="card z-depth-4">
                    <div class="card-image">
                      <a href="#" class="btn-floating btn-large price waves-effect waves-light"
                        >-50%</a
                      >

                      <img src="./img/danhmuc/dm2.1.jpg" alt="product-img" />
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <p
                          href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/"
                          target="_blank"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light white"
                        >
                          <i
                            style="line-height: 36px"
                            class="material-icons grey-text text-darken-3"
                            >share</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          id="like"
                          style="width: 35px; height: 35px"
                          class="btn-floating waves-effect waves-light red accent-2"
                        >
                          <i style="line-height: 36px" class="material-icons like"
                            >favorite_border</i
                          >
                        </p>
                      </li>
                      <li>
                        <p
                          style="width: 35px; height: 35px"
                          id="buy"
                          class="btn-floating waves-effect waves-light blue"
                        >
                          <i style="line-height: 36px" class="material-icons buy"
                            >add_shopping_cart</i
                          >
                        </p>
                      </li>
                    </ul>
                    <div style="padding: 0 5px" class="card-content">
                      <div class="row" style="margin-bottom: 5px">
                        <div class="col s12">
                          <br />
                          <div>
                            <strong
                              style="
                                color: #222222;
                                font-size: 14px;
                                height: 55px;
                                line-height: 22px;
                                font-weight:700;
                              "
                              >Cơm Chiên Cá Mặn ngon như cơm mẹ chiên</strong
                            >
                            <br /><br />
                          </div>
                          <del style="opacity: 0.7"> ₫198.000</del
                          ><span style="color: red"> ₫99.000</span>
                        </div>
                      </div>
                      <div
                        style="
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          margin-bottom: 10px;
                          font-size: 13px;
                          margin-left: 0;
                          margin-right: 0;
                        "
                      >
                        <span style="flex-basis: 45%">Đã bán 190</span>
                        <span style="flex-basis: 30%">
                          <i class="fas fa-map-marker-alt"></i> 83km</span
                        >
                        <img
                          style="width: 30px; height: 30px; flex-basis: 25%"
                          class="imgfreeship"
                          src="./img/logo/freeship.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </section>
   <br><br><br><br><br>
    <footer class="footer">
      <div class="container">
        <div class="footer-container">
          <div class="footer-column">
            <a href="index.html" class="footer-logo">
              <img srcset="./img/logo/logo.png 2x" alt="" />
            </a>
            <p class="footer-desc text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, qui error,
              aspernatur ut velit saepe adipisci reprehenderit maxime suscipit ea non earum
              repudiandae aliquid doloremque nihil pariatur, culpa iste officiis?
            </p>

            <div class="social">
              <a href="#" class="social-item">
                <img srcset="./img/logo/facebook.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="./img/logo/twitter.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="./img/logo/instagram.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="./img/logo/apple.png 2x" alt="" />
              </a>
            </div>
          </div>
          <div class="footer-column">
            <h3 class="footer-heading heading-small">Dịch vụ</h3>
            <ul class="footer-links">
              <li class="footer-item">
                <a href="#" class="footer-link">Tên dịch vụ</a>
              </li>
              <li class="footer-item">
                <a href="#" class="footer-link">Tên dịch vụ</a>
              </li>
              <li class="footer-item">
                <a href="#" class="footer-link">Tên dịch vụ</a>
              </li>
              <li class="footer-item">
                <a href="#" class="footer-link">Tên dịch vụ</a>
              </li>
              <li class="footer-item">
                <a href="#" class="footer-link">Tên dịch vụ</a>
              </li>
            </ul>
          </div>
          <div class="footer-column">
            <h3 class="footer-heading heading-small">Hỗ trợ</h3>
            <ul class="footer-links">
              <li class="footer-item">
                <a href="#" class="footer-link">Làm gì đó</a>
              </li>
              <li class="footer-item">
                <a href="#" class="footer-link">Làm gì đó</a>
              </li>
              <li class="footer-item">
                <a href="#" class="footer-link">Làm gì đó</a>
              </li>
              <li class="footer-item">
                <a href="#" class="footer-link">Làm gì đó</a>
              </li>
              <li class="footer-item">
                <a href="#" class="footer-link">Làm gì đó</a>
              </li>
            </ul>
          </div>
          <div class="footer-column">
            <h3 class="footer-heading heading-small">Liên hệ</h3>
            <ul class="footer-links">
              <li class="footer-item">
                <a href="mailto:TongCongTyFATMe@gmail.com" class="footer-link-none"
                  >TongCongTyFATMe@gmail.com</a
                >
              </li>
              <li class="footer-item">
                <a href="tel:+84971292838" class="footer-link-none">(84+) 971 29 28 38</a>
              </li>
              <li class="footer-item">
                <span href="#" class="footer-link-none"
                  >Khu phố 6, P.Linh Trung, Tp.Thủ Đức, Tp.Hồ Chí Minh.</span
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="copyright">All Right Reserved by Us! Copyright FATMe 2021</div>
      </div>
    </footer>

    <!-- script link -->
    <script type="text/javascript" src="./js/script.js"></script>
    <!-- <script src="js/jquery-1.12.0.min.js "></script> -->
    <script src="js/owl.carousel.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script src="js/main.js "></script>
    <script
      async
      defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyIMWhs-crjT0yhctbRjfJFq75FlEhSzE&callback=initMap "
    ></script>
    <!-- <img src="./img/slider/1900x1000.png" alt=""> -->
    <!-- my script -->
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
