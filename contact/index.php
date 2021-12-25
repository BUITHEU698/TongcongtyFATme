<?php
include'../connect/connect.php';


?>


<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/images-main/logo-main.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- css link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
    />
    <!-- my css -->
    <link rel="stylesheet" href="./css/app.css" />
    <title>FATMe - Blog</title>
  </head>
  <body>
    <div class="totop">
      <a
        href="#"
        class="goto-top"
        style="
          background: url(./images/images-main/gototop.svg) no-repeat center,
            linear-gradient(45deg, #f67102 5.1%, #f4a91e 86.29%);
        "
      ></a>
    </div>
    <div class="wrapper">
      <header class="header">
        <div class="navigation">
          <a href="../main-page/index.php"
            ><img class="header-logo" srcset="./images/images-main/logo.png 2x"
          /></a>
          <input type="checkbox" name="" id="toggle-check" class="toggle-check" />
          <ul class="menu">
            <div class="menu-item toggle-close">
              <label for="toggle-check"
                ><img src="./images/images-main/menu-close.png" alt="Close"
              /></label>
            </div>
            <li class="menu-item">
              <a class="menu-link" href="../main-page/index.php">Trang chủ</a>
            </li>
            <?php if (!empty($_SESSION['email'])){ ?>
                <li class="menu-item">
                    <a class="menu-link" href="../Home_main_page/index.php">Quản lí trang bán hàng</a>
                </li>
            <?php }?>
            <li class="menu-item">
              <a class="menu-link" href="../monan_main_page/index.php">Món ăn</a>
            </li>
            <li class="menu-item"><a class="menu-link link-active" href="../blog/index.php">Blog</a></li>
            <li class="menu-item"><a class="menu-link" href="../service/service.php">Dịch vụ</a></li>
            <li class="menu-item"><a class="menu-link" href="./index.html">Liên hệ</a></li>
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
            ><img src="./images/images-main/menu.png" alt="Menu"
          /></label>
          <label for="toggle-check" class="overlay"></label>
        </div>
      </header>
      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
              <h2 class="heading-section">LIÊN HỆ</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="wrapper">
                <div class="row mb-5">
                  <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                      </div>
                      <div class="text">
                        <p>
                          <span>Địa chỉ: </span> Khu phố 6, P.Linh Trung, Tp.Thủ Đức, Tp.Hồ Chí
                          Minh.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span><i class="fas fa-phone"></i></span>
                      </div>
                      <div class="text">
                        <p>
                          <span>Số điện thoại:</span>
                          <a href="tel://1234567920">(84+) 971 29 28 38</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                      </div>
                      <div class="text">
                        <p>
                          <span>Email:</span>
                          <a href="mailto:info@yoursite.com">congtyfatme@gmail.com</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-globe"></span>
                      </div>
                      <div class="text">
                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row no-gutters">
                  <div class="col-md-7">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                      <h3 class="mb-4">Form liên hệ</h3>
                      <div id="form-message-warning" class="mb-4"></div>

                      <div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="label" for="name">Họ và Tên </label>
                              <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name"
                                placeholder="Name"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="label" for="email">Số Điện Thoại</label>
                              <input
                                type="phone"
                                class="form-control"
                                name="phone"
                                id="phone"
                                placeholder="Số điện Thoại"
                              />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="label" for="email">Địa chỉ email</label>
                              <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="email"
                                placeholder="Email"
                              />
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="label" for="subject">Tiêu đề</label>
                              <input
                                type="text"
                                class="form-control"
                                name="subject"
                                id="subject"
                                placeholder="Tiêu Đề"
                              />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="label" for="#">Nội dung</label>
                              <textarea
                                name="message"
                                class="form-control"
                                id="message"
                                cols="30"
                                rows="4"
                                placeholder="Điền nội dung ..."
                              ></textarea>
                            </div>
                          </div>
                          <div>
                            <a href="../main-page/index.php"
                              ><button
                                style="
                                  border: none;
                                  color: white;
                                  border-radius: 5px;
                                  margin-left: 15px;
                                  background: linear-gradient(
                                    103.38deg,
                                    #f67102 5.1%,
                                    #f4a91e 86.29%
                                  );
                                  padding: 10px;
                                "
                              >
                                Gửi thông tin
                              </button></a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 d-flex align-items-stretch">
                    <div
                      class="info-wrap w-100 p-5 img"
                      style="background-image: url(images/img.gif)"
                    >
                      <img
                        style="width: 200px; margin: 0 auto; margin-top: 150px"
                        src="./images/z3036584193908_a4dfed154f1eeb70ec049adfbb08d1a7.jpg"
                        alt=""
                      />
                      <h1></h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="footer-container">
          <div class="footer-column">
            <a href="index.php" class="footer-logo">
              <img srcset="./images/images-main/logo.png 2x" alt="" />
            </a>
            <p class="footer-desc text">Yêu là phải nói, đói là phải ăn, gọi FatMe thật nhanh, giao tận tay khách</p>
            <div class="social">
              <a href="#" class="social-item">
                <img srcset="./images/images-main/facebook.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="./images/images-main/twitter.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="./images/images-main/instagram.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="./images/images-main/apple.png 2x" alt="" />
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
            <h3 class="footer-heading heading-small">Món ăn</h3>
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
                <a href="mailto:congtyfatme@gmail.com" class="footer-link-none"
                  >congtyfatme@gmail.com</a
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <!-- script -->
    <script src="./app.js"></script>
  </body>
</html>