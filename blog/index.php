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
    <title>FATMe - Blog</title>
  </head>
  <body>
    <div class="totop">
      <a
        href="#"
        class="goto-top"
      ></a>
    </div>
    <div class="wrapper">
      <header class="header">
        <div class="navigation">
          <a href="../main-page/index.php"
            ><img class="header-logo" srcset="../assets/images/main-images/logo.png 2x"
          /></a>
          <input type="checkbox" name="" id="toggle-check" class="toggle-check" />
          <ul class="menu">
            <div class="menu-item toggle-close">
              <label for="toggle-check"
                ><img src="../assets/images/main-images/menu-close.png" alt="Close"
              /></label>
            </div>
            <li class="menu-item"><a class="menu-link" href="../main-page/index.php">Trang chủ</a></li>
            <?php if (!empty($_SESSION['email'])){ ?>
                <li class="menu-item">
                    <a class="menu-link" href="../Home_main_page/index.php">Quản lí trang bán hàng</a>
                </li>
            <?php }?>
            <li class="menu-item">
              <a class="menu-link" href="../monan_main_page/index.php">Món ăn</a>
            </li>
            <li class="menu-item"><a class="menu-link link-active" href="#!">Blog</a></li>
            <li class="menu-item"><a class="menu-link" href="../service/service.php">Dịch vụ</a></li>
            <li class="menu-item"><a class="menu-link" href="../contact/index.php">Liên hệ</a></li>
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
            ><img src="../assets/images/main-images/menu.png" alt="Menu"
          /></label>
          <label for="toggle-check" class="overlay"></label>
        </div>
      </header>
      <main>
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
            <!-- posts -->
            <div class="post-feature-list slider-responsive-2">
              <div class="post-feature show-on-scroll">
                <div class="post-feature-content">
                  <a href="./blog_1/index.php" class="post-feature-media post-media show-on-scroll show-on-scroll">
                    <img
                      src="https://cdn.dribbble.com/users/33073/screenshots/15238065/media/5df5a84f3ed908ad7bad36fa645e3d4a.png?compress=1&resize=1200x900"
                      alt=""
                      class="post-feature-image"
                    />
                  </a>
                  <div class="post-feature-info">
                    <a href="#" class="post-category">The newest</a>
                    <h2>
                      <a href="./blog_1/index.php" class="post-feature-title post-title"
                        >HowmmmmHowmmmmHowmmmmHowmmmmHHowmmmm</a
                      >
                    </h2>
                    <p class="post-desc">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quas
                      distinctio, quis minima magni sint accusamus! Aliquid distinctio unde porro
                      adipisci totam itaque, laudantium natus! Repudiandae perferendis mollitia
                      ipsam repellendus.
                    </p>
                  </div>
                </div>
              </div>
              <div class="post-feature show-on-scroll">
                <div class="post-feature-content">
                  <a href="./blog_1/index.php" class="post-feature-media post-media show-on-scroll show-on-scroll">
                    <img
                      src="https://cdn.dribbble.com/users/2539288/screenshots/15326794/media/4c3268cdbc069e4ff03979d9b9a16e11.jpg?compress=1&resize=1600x1200"
                      alt=""
                      class="post-feature-image"
                    />
                  </a>
                  <div class="post-feature-info">
                    <a href="#" class="post-category">The newest</a>
                    <h2>
                      <a href="./blog_1/index.php" class="post-feature-title post-title"
                        >HowmmmmHowmmmmHowmmmmHowmmmmHHowmmmm</a
                      >
                    </h2>
                    <p class="post-desc">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quas
                      distinctio, quis minima magni sint accusamus! Aliquid distinctio unde porro
                      adipisci totam itaque, laudantium natus! Repudiandae perferendis mollitia
                      ipsam repellendus.
                    </p>
                  </div>
                </div>
              </div>
              <div class="post-feature show-on-scroll">
                <div class="post-feature-content">
                  <a href="./blog_1/index.php" class="post-feature-media post-media show-on-scroll show-on-scroll">
                    <img
                      src="https://cdn.dribbble.com/users/2539288/screenshots/15326794/media/4c3268cdbc069e4ff03979d9b9a16e11.jpg?compress=1&resize=1600x1200"
                      alt=""
                      class="post-feature-image"
                    />
                  </a>
                  <div class="post-feature-info">
                    <a href="#" class="post-category">The newest</a>
                    <h2>
                      <a href="./blog_1/index.php" class="post-feature-title post-title"
                        >Howmmmm</a
                      >
                    </h2>
                    <p class="post-desc">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quas
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="post-list">
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
            <!-- blog list -->
            <p class="global-heading--normal">
              Có thể bạn thích
            </p>
            <div class="blog-list slider-responsive">
              <div class="blog-item show-on-scroll">
                <div class="blog-image img-responsive">
                  <img src="../assets/images/main-images/img-blog1.jpg" />
                </div>
                <div class="blog-content">
                  <h3 class="blog-title">Tên Blog món ăn</h3>
                  <p class="blog-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum pariatur
                    consequuntur reiciendis rem?
                  </p>
                  <div class="blog-more"><a href="#!">Xem thêm</a></div>
                </div>
              </div>
              <div class="blog-item show-on-scroll">
                <div class="blog-image">
                  <img src="../assets/images/main-images/img-blog1.jpg" />
                </div>
                <div class="blog-content">
                  <h3 class="blog-title">Tên Blog món ăn</h3>
                  <p class="blog-desc">1</p>
                  <div class="blog-more"><a href="#!">Xem thêm</a></div>
                </div>
              </div>
              <div class="blog-item show-on-scroll">
                <div class="blog-image">
                  <img src="../assets/images/main-images/img-blog1.jpg" />
                </div>
                <div class="blog-content">
                  <h3 class="blog-title">Tên Blog món ăn</h3>
                  <p class="blog-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum pariatur
                    consequuntur reiciendis rem? Quod doloribus impedit cupiditate perspiciatis
                    optio expedita voluptatum cum corporis praesentium, consequatur accusantium,
                    quas mollitia sapiente in.
                  </p>
                  <div class="blog-more"><a href="#!">Xem thêm</a></div>
                </div>
              </div>
              <div class="blog-item show-on-scroll">
                <div class="blog-image">
                  <img src="../assets/images/main-images/img-blog1.jpg" />
                </div>
                <div class="blog-content">
                  <h3 class="blog-title">Tên Blog món ăn</h3>
                  <p class="blog-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum pariatur
                    consequuntur reiciendis rem? Quod doloribus impedit cupiditate perspiciatis
                    optio expedita voluptatum cum corporis praesentium, consequatur accusantium,
                    quas mollitia sapiente in.
                  </p>
                  <div class="blog-more"><a href="#!">Xem thêm</a></div>
                </div>
              </div>
              <div class="blog-item show-on-scroll">
                <div class="blog-image">
                  <img src="../assets/images/main-images/img-blog1.jpg" />
                </div>
                <div class="blog-content">
                  <h3 class="blog-title">Tên Blog món ăn</h3>
                  <p class="blog-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum pariatur
                    consequuntur reiciendis rem? Quod doloribus impedit cupiditate perspiciatis
                    optio expedita voluptatum cum corporis praesentium, consequatur accusantium,
                    quas mollitia sapiente in.
                  </p>
                  <div class="blog-more"><a href="#!">Xem thêm</a></div>
                </div>
              </div>
              <div class="blog-item show-on-scroll">
                <div class="blog-image">
                  <img src="../assets/images/main-images/img-blog1.jpg" />
                </div>
                <div class="blog-content">
                  <h3 class="blog-title">Tên Blog món ăn</h3>
                  <p class="blog-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum pariatur
                    consequuntur reiciendis rem? Quod doloribus impedit cupiditate perspiciatis
                    optio expedita voluptatum cum corporis praesentium, consequatur accusantium,
                    quas mollitia sapiente in.
                  </p>
                  <div class="blog-more"><a href="#!">Xem thêm</a></div>
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
                  Sign up to Our Newsletter
                </h2>
                <p class="global-text subscribe-desc show-on-scroll">
                  You need to get positive results when you spend hard earned revenue and time.
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
            <a href="index.php" class="footer-logo">
              <img srcset="../assets/images/main-images/logo.png 2x" alt="" />
            </a>
            <p class="footer-desc text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, qui error,
              aspernatur ut velit saepe adipisci reprehenderit maxime suscipit ea non earum
              repudiandae aliquid doloremque nihil pariatur, culpa iste officiis?
            </p>
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
    <script src="../assets/js/main.js"></script>
  </body>
</html>
