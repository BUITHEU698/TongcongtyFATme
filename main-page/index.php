<?php
include'../connect/connect.php';

?>




<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../assets/images/main-images/logo-main.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- css link -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
    />
    <!-- my css -->
    <link rel="stylesheet" href="../assets/css/main-page/app.css" />
    <title>FATMe</title>
  </head>
  <body>
    <div class="totop">
        <a href="#" class="goto-top"></a>
    </div>
    <div class="wrapper">
    <header class="header">
        <div class="navigation">
        <a href="#"
            ><img class="header-logo" srcset="../assets/images/main-images/logo.png 2x"/></a>
        <input type="checkbox" name="" id="toggle-check" class="toggle-check" />
        <ul class="menu">
            <div class="menu-item toggle-close">
                <label for="toggle-check"><img src="../assets/images/main-images/menu-close.png" alt="Close" /></label>
            </div>
            <li class="menu-item">
                <a class="menu-link" href="index.php">Trang chủ</a>
            </li>
            <?php if (!empty($_SESSION['email'])){ ?>
                <li class="menu-item">
                    <a class="menu-link" href="../Home_main_page/index.php">Quản lí trang bán hàng</a>
                </li>
            <?php }?>
            <li class="menu-item">
                <a class="menu-link" href="../monan_main_page/index.php">Món ăn</a>
            </li>
            <li class="menu-item"><a class="menu-link" href="../blog/index.php">Blog</a></li>
            <li class="menu-item"><a class="menu-link" href="../service/service.php">Dịch vụ</a></li>
            <li class="menu-item"><a class="menu-link" href="../contact/index.php">Liên hệ</a></li>
            <?php if (empty($_SESSION['email'])){ ?>
                <li class="auth">
                    <a class="button button--secondary auth-login" href="../login/index.php">Đăng nhập</a>
                    <a class="button button--primary auth-signup" href="../register/index.php">Đăng ký</a>
                </li>
            <?php } else {?>
                <li class="auth">
                    <button class="button button--primary auth-signup"name="account">Account</button>

                </li>
            <?php }?>


        </ul>
        <label for="toggle-check" class="toggle"
            ><img src="../assets/images/main-images/menu.png" alt="Menu"
          /></label>
          <label for="toggle-check" class="overlay"></label>
        </div>
        <div class="header-main container">
          <div class="header-content">
            <span class="global-caption show-on-scroll">Chúng tôi</span>
            <h1 class="global-heading global-heading--huge header-heading show-on-scroll">
              Food At The Moment everytime
            </h1>
            <p class="global-text header-desc show-on-scroll">
                Chúng tôi là công ty cung cấp dịch vụ vận chuyển thức ăn chuyên nghiệp với nhiều
                thương hiệu nổi tiếng.
            </p>
            <div class="header-actions">
            <?php if (empty($_SESSION['email'])){ ?>
                <a class="button button--primary" href="../login/index.php">Đăng nhập</a>
            <?php }?>
                <a class="watch-video button button--secondary btn-watch" href="#!">
                    <div class="watch-icon">
                        <img srcset="../assets/images/main-images/icon-play.png 2x" />
                    </div>
                    <span>Xem Video</span>
                </a>
            </div>
          </div>
          <div class="header-image show-on-scroll">
            <video class="video" loop controls poster="../assets/images/main-images/img-header.png">
              <source src="./video/videofatme.mp4" type="video/mp4" />
            </video>
            <button id="play-pause" class="btn-watch btn-watch1">
              <div class="watch-icon watch-icon1"><img srcset="../assets/images/main-images/icon-play.png 2x" /></div>
            </button>
          </div>
        </div>
      </header>
      <main>
        <section class="brand">
          <div class="brand-item"><img src="../assets/images/main-images/brand-baemin.png" /></div>
          <div class="brand-item"><img src="../assets/images/main-images/brand-grab.png" /></div>
          <div class="brand-item"><img src="../assets/images/main-images/brand-shopeefood.png" /></div>
          <div class="brand-item"><img src="../assets/images/main-images/brand-gojek.png" /></div>
          <div class="brand-item"><img src="../assets/images/main-images/brand-loship.png" /></div>
        </section>
        <section class="service">
          <div class="container">
            <div class="service-header">
              <span class="global-caption service-caption show-on-scroll">CHÚNG TÔI LÀM GÌ</span>
              <h2 class="global-heading global-heading--big service-heading show-on-scroll">
                Liên kết các cửa hàng với bạn nhanh chóng
              </h2>
              <p class="global-text service-desc show-on-scroll">
                Hướng đến việc tiện lợi khi ở nhà mà cũng có đồ ăn mọi lúc mọi nơi, chúng tôi sẽ là
                người giúp các bạn thực hiện việc đó dễ dàng hơn.
              </p>
            </div>
            <div class="service-list">
              <div class="service-item show-on-scroll">
                <div class="service-icon"><img src="../assets/images/main-images/icon-food.png" /></div>
                <h3 class="global-heading global-heading--normal service-title">
                  Thực phẩm đa dạng
                </h3>
                <p class="global-text service-text">
                  Chúng tôi đảm bảo thức ăn luôn được tươi mới, thơm ngon.
                </p>
              </div>
              <div class="service-item show-on-scroll">
                <div class="service-icon"><img src="../assets/images/main-images/icon-delivery.png" /></div>
                <h3 class="global-heading global-heading--normal service-title">
                  Miễn phí vận chuyển
                </h3>
                <p class="global-text service-text">
                  Miễn phí vận chuyển 1 đơn hàng đầu tiên trong ngày.
                </p>
              </div>
              <div class="service-item show-on-scroll">
                <div class="service-icon"><img src="../assets/images/main-images/icon-restaurant.png" /></div>
                <h3 class="global-heading global-heading--normal service-title">
                  Hơn 100 nghìn nhà hàng
                </h3>
                <p class="global-text service-text">
                  Nhiều sự lựa chọn, cho các bạn đặt đồ ăn thoải mái nhé.
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="who">
          <div class="container">
            <div class="who-container">
              <div class="who-image"><img srcset="../assets/images/main-images/img-who.png 2x" /></div>
              <div class="who-content">
                <span class="global-caption show-on-scroll">Ai muốn gì?</span>
                <h2 class="global-heading global-heading--big show-on-scroll">
                  Vươn tầm sánh bước cùng các bạn mọi nơi
                </h2>
                <p class="global-text show-on-scroll">
                  Nunc venenalis Iorem sed risus trlstque sent per. Duls porta, rutruni tempus,
                  lectus risus imDerdiet tellus, sed faucibus sum ipsum ncn neque. Curubilu r
                  eleirend, erut ullamcorper porta. eras turpis.
                </p>
                <a class="button button--primary" href="../register/index.php">Nhấn đăng ký</a>
              </div>
            </div>
          </div>
        </section>
        <section class="mission">
          <div class="container">
            <div class="mission-container">
              <div class="mission-header">
                <span class="global-caption mission-caption show-on-scroll"
                  >Chúng tôi tôi có gì?</span
                >
                <h2 class="global-heading global-heading--big mission-heading show-on-scroll">
                  Realize Your Business Goals For Profit
                </h2>
                <p class="global-text show-on-scroll">
                  Nunc venenalis Iorem sed risus trlstque sent per. Duls porta, rutruni tempus,
                  lectus risus imDerdiet tellus, sed faucibus sum ipsum ncn neque. Curubilu r
                  eleirend, erut ullamcorper porta. eras turpis.
                </p>
              </div>
              <!-- <div class="mission-list">
                <div class="mission-item show-on-scroll">
                  <div class="mission-image">
                    <img
                      srcset="
                        https://images.unsplash.com/photo-1599420186946-7b6fb4e297f0?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80
                      "
                    />
                  </div>
                  <div class="mission-content">
                    <h3 class="mission-title">SEO tips and tricks for new</h3>
                    <p class="mission-desc">
                      Curapitur eleifenc erat id ullarncorper porta, eras turpis tun pus just!), a
                      porititar ju-to ode id oros. Proin lloborti*
                    </p>
                  </div>
                </div>
                <div class="mission-item show-on-scroll">
                  <div class="mission-image">
                    <img
                      srcset="
                        https://images.unsplash.com/photo-1599420186946-7b6fb4e297f0?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80
                      "
                    />
                  </div>
                  <div class="mission-content">
                    <h3 class="mission-title">SEO tips and tricks for new</h3>
                    <p class="mission-desc">
                      Curapitur eleifenc erat id ullarncorper porta, eras turpis tun pus just!), a
                      porititar ju-to ode id oros. Proin lloborti*
                    </p>
                  </div>
                </div>
                <div class="mission-item show-on-scroll">
                  <div class="mission-image">
                    <img
                      srcset="
                        https://images.unsplash.com/photo-1599420186946-7b6fb4e297f0?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80
                      "
                    />
                  </div>
                  <div class="mission-content">
                    <h3 class="mission-title">SEO tips and tricks for new</h3>
                    <p class="mission-desc">
                      Curapitur eleifenc erat id ullarncorper porta, eras turpis tun pus just!), a
                      porititar ju-to ode id oros. Proin lloborti*
                    </p>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </section>
        <section class="review">
          <div class="container">
            <div class="review-container">
              <div class="review-list">
                <img class="review-bg" srcset="../assets/images/main-images/review-bg.png 2x" />
                <div>
                  <div class="review-card show-on-scroll">
                    <div class="review-avatar">
                      <img srcset="https://source.unsplash.com/random 2x" />
                    </div>
                    <h3 class="review-name">Mark Parker</h3>
                    <span class="review-job">CEO of Fiverr</span>
                    <p class="review-desc">
                      Cura bitur susci pit nequeut lacus interd sit amet dictum nunc eleifend.
                      Mauris pulvinar odio at nunc labortis.
                    </p>
                    <div class="review-rating">
                      <img srcset="../assets/images/main-images/icon-star.png 2x" /><span>4.5</span>
                    </div>
                    <div class="review-quote"><img srcset="../assets/images/main-images/icon-quote.png 2x" /></div>
                  </div>
                  <div class="review-card show-on-scroll">
                    <div class="review-avatar">
                      <img srcset="https://source.unsplash.com/random 2x" />
                    </div>
                    <h3 class="review-name">Mark Parker</h3>
                    <span class="review-job">CEO of Fiverr</span>
                    <p class="review-desc">
                      Cura bitur susci pit nequeut lacus interd sit amet dictum nunc eleifend.
                      Mauris pulvinar odio at nunc labortis.
                    </p>
                    <div class="review-rating">
                      <img srcset="../assets/images/main-images/icon-star.png 2x" /><span>4.5</span>
                    </div>
                    <div class="review-quote"><img srcset="../assets/images/main-images/icon-quote.png 2x" /></div>
                  </div>
                </div>
                <div>
                  <div class="review-card show-on-scroll">
                    <div class="review-avatar">
                      <img srcset="https://source.unsplash.com/random 2x" />
                    </div>
                    <h3 class="review-name">Mark Parker</h3>
                    <span class="review-job">CEO of Fiverr</span>
                    <p class="review-desc">
                      Cura bitur susci pit nequeut lacus interd sit amet dictum nunc eleifend.
                      Mauris pulvinar odio at nunc labortis.
                    </p>
                    <div class="review-rating">
                      <img srcset="../assets/images/main-images/icon-star.png 2x" /><span>4.5</span>
                    </div>
                    <div class="review-quote"><img srcset="../assets/images/main-images/icon-quote.png 2x" /></div>
                  </div>
                </div>
              </div>
              <div class="review-content">
                <span class="global-caption show-on-scroll">Đã làm những gì</span>
                <h2 class="global-heading global-heading--big show-on-scroll">Phản hồi tích cực</h2>
                <p class="global-text show-on-scroll">
                  Ok oke okk Ok oke okk Ok oke okk Ok oke okk Ok oke okk Ok oke okkOk oke okk Ok oke
                  okk Ok oke okk
                </p>
                <div class="review-number show-on-scroll">
                  <div class="review-check"><img srcset="../assets/images/main-images/icon-check.png 2x" /></div>
                  <span class="review-count">450+</span><span>Phản hồi từ khách hàng</span>
                </div>
                <a class="button button--primary" href="../register/index.php">Nhấn đăng ký</a>
              </div>
            </div>
          </div>
        </section>
        <section class="blog">
          <div class="container">
            <div class="blog-header">
              <h2 class="global-heading global-heading--big show-on-scroll">
                Our Regular Updated Blog Posts
              </h2>
              <p class="global-text show-on-scroll">
                tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
              </p>
            </div>
            <!-- blog list -->
            <div class="blog-list slider-responsive">
              <div class="post-item show-on-scroll">
                <a href="#" class="post-media">
                  <img
                    src="https://cdn.dribbble.com/users/5209175/screenshots/15329869/media/46b95b0ec58274621935463cd534f793.jpg?compress=1&resize=1600x1200"
                    alt=""
                    class="post-image"
                  />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="#" class="post-title">How to choose best bike for spring in Australia</a>
                  </h3>
                  <p class="post-desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam at quae
                    architecto perspiciatis dolore deleniti, voluptas aperiam dolorem sit. Est in
                    asperiores ipsa repellat sit odit eos quia nostrum quae.
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="#" class="post-media">
                  <img
                    src="https://cdn.dribbble.com/users/5209175/screenshots/15329869/media/46b95b0ec58274621935463cd534f793.jpg?compress=1&resize=1600x1200"
                    alt=""
                    class="post-image"
                  />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="#" class="post-title">How to choose best bike for spring in Australia</a>
                  </h3>
                  <p class="post-desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam at quae
                    architecto perspiciatis dolore deleniti, voluptas aperiam dolorem sit. Est in
                    asperiores ipsa repellat sit odit eos quia nostrum quae.
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="#" class="post-media">
                  <img
                    src="https://cdn.dribbble.com/users/5209175/screenshots/15329869/media/46b95b0ec58274621935463cd534f793.jpg?compress=1&resize=1600x1200"
                    alt=""
                    class="post-image"
                  />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="#" class="post-title">How to choose best bike for spring in Australia</a>
                  </h3>
                  <p class="post-desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam at quae
                    architecto perspiciatis dolore deleniti, voluptas aperiam dolorem sit. Est in
                    asperiores ipsa repellat sit odit eos quia nostrum quae.
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="#" class="post-media">
                  <img
                    src="https://cdn.dribbble.com/users/5209175/screenshots/15329869/media/46b95b0ec58274621935463cd534f793.jpg?compress=1&resize=1600x1200"
                    alt=""
                    class="post-image"
                  />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="#" class="post-title">How to choose best bike for spring in Australia</a>
                  </h3>
                  <p class="post-desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam at quae
                    architecto perspiciatis dolore deleniti, voluptas aperiam dolorem sit. Est in
                    asperiores ipsa repellat sit odit eos quia nostrum quae.
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="#" class="post-media">
                  <img
                    src="https://cdn.dribbble.com/users/5209175/screenshots/15329869/media/46b95b0ec58274621935463cd534f793.jpg?compress=1&resize=1600x1200"
                    alt=""
                    class="post-image"
                  />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="#" class="post-title">How to choose best bike for spring in Australia</a>
                  </h3>
                  <p class="post-desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam at quae
                    architecto perspiciatis dolore deleniti, voluptas aperiam dolorem sit. Est in
                    asperiores ipsa repellat sit odit eos quia nostrum quae.
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="#" class="post-media">
                  <img
                    src="https://cdn.dribbble.com/users/5209175/screenshots/15329869/media/46b95b0ec58274621935463cd534f793.jpg?compress=1&resize=1600x1200"
                    alt=""
                    class="post-image"
                  />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="#" class="post-title">How to choose best bike for spring in Australia</a>
                  </h3>
                  <p class="post-desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam at quae
                    architecto perspiciatis dolore deleniti, voluptas aperiam dolorem sit. Est in
                    asperiores ipsa repellat sit odit eos quia nostrum quae.
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="#" class="post-media">
                  <img
                    src="https://cdn.dribbble.com/users/5209175/screenshots/15329869/media/46b95b0ec58274621935463cd534f793.jpg?compress=1&resize=1600x1200"
                    alt=""
                    class="post-image"
                  />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="#" class="post-title">How to choose best bike for spring in Australia</a>
                  </h3>
                  <p class="post-desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam at quae
                    architecto perspiciatis dolore deleniti, voluptas aperiam dolorem sit. Est in
                    asperiores ipsa repellat sit odit eos quia nostrum quae.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="subscribe">
          <div class="container subscribe-container">
            <div class="subscribe-main">
              <div class="subscribe-content">
                <h2 class="global-haeding subscribe-heading show-on-scroll">
                  Nhận thông báo mới nhất
                </h2>
                <p class="global-text subscribe-desc show-on-scroll">
                  Nhập gmail để không bỏ lỡ những thông báo mới nhất và các ưu đãi hấp dẫn đến từ Fatme nhé !!!
                </p>
              </div>
              <div class="subscribe-form">
                <div class="subscribe-field">
                  <input class="subscribe-input" type="text" placeholder="Email..." />
                </div>
                <button class="button button--primary">Đăng ký</button>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="footer-container">
          <div class="footer-column">
            <a href="index.html" class="footer-logo">
              <img srcset="../assets/images/main-images/logo.png 2x" alt="" />
            </a>
            <p class="footer-desc text">Yêu là phải nói, đói là phải ăn, gọi FatMe thật nhanh, giao tận tay khách</p>
            <div class="social">
              <a href="#" class="social-item">
                <img srcset="../assets/images/main-images/facebook.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="../assets/images/main-images/twitter.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="../assets/images/main-images/instagram.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="../assets/images/main-images/apple.png 2x" alt="" />
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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/5.0.4/mediaelement-and-player.min.js"></script> -->
    <!-- script -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
