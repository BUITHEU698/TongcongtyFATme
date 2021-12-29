<?php
include'../../connect/connect.php';

if(!empty($_SESSION['email'])){
  $email = $_SESSION['email'];
  $taikhoan=mysqli_query($conn,"SELECT * FROM khachhang WHERE email='$email'");
  foreach($taikhoan as $key=>$value)  {
    $ten=$value['HOTEN'];
    $tach_ten = explode(" ", $ten);
    $account=$tach_ten[1].' '.$tach_ten[2];
  }
}

?>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="../../assets/images/main-images/logo-main.png"
      type="image/x-icon"
    />
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
    <link rel="stylesheet" href="../../assets/css/main-page/app.css" />
    <link rel="stylesheet" href="../../assets/css/blog/app.css" />
    <title>FATMe - Blog</title>
  </head>
  <body>
    <div class="totop">
      <a href="#" class="goto-top"></a>
    </div>
    <div class="wrapper">
      <header class="header">
        <div class="navigation">
          <a href="../../main-page/index.php"
            ><img class="header-logo" srcset="../../assets/images/main-images/logo.png 2x"
          /></a>
          <input type="checkbox" name="" id="toggle-check" class="toggle-check" />
          <ul class="menu">
            <div class="menu-item toggle-close">
              <label for="toggle-check"
                ><img src="../../assets/images/main-images/menu-close.png" alt="Close"
              /></label>
            </div>
            <li class="menu-item"><a class="menu-link" href="../../main-page/index.php">Trang chủ</a></li>
            <li class="menu-item">
              <a class="menu-link" href="../../mon-an/index.php">Món ăn</a>
            </li>
            <li class="menu-item"><a class="menu-link link-active" href="../../blog/index.php">Blog</a></li>
            <li class="menu-item"><a class="menu-link" href="../../service/service.php">Dịch vụ</a></li>
            <li class="menu-item"><a class="menu-link" href="../../contact/index.php">Liên hệ</a></li>
            <?php if (empty($_SESSION['email'])){ ?>
                <li class="auth">
                    <a class="button button--secondary auth-login" href="../../login/index.php">Đăng nhập</a>
                    <a class="button button--primary auth-signup" href="../../register/index.php">Đăng ký</a>
                </li>
            <?php } else {?>
              <li class="auth">
              <div class="auth-like">
                <div class="auth-like-top">
                  <img
                    class="heart"
                    src="../../assets/images/main-images/icon-heart.png"
                    alt="heart"
                  />
                  <img
                    class="arrow-down"
                    src="../../assets/images/main-images/icon-arrow-down.png"
                    alt="arrow-down"
                  />
                </div>
                <ul class="auth-like-dropdown">
                  <li class="auth-like-dropdown-item">
                    <a class="auth-like-dropdown-link" href="">Tài khoản</a>
                  </li>
                  <li class="auth-like-dropdown-item">
                    <a class="auth-like-dropdown-link" href="">Đăng xuất</a>
                  </li>
                </ul>
              </div>
              <div class="auth-shoppingcart">
                <div class="auth-shoppingcart-top">
                  <img
                    class="shoppingcart"
                    src="../../assets/images/main-images/icon-shoppingcart-header.png"
                    alt="shopping cart"
                  />
                  <img
                    class="arrow-down"
                    src="../../assets/images/main-images/icon-arrow-down.png"
                    alt="arrow-down"
                  />
                </div>
                <ul class="auth-shoppingcart-dropdown">
                  <li class="auth-shoppingcart-dropdown-item">
                    <a class="auth-shoppingcart-dropdown-link" href="../../shoppingcart/index.php">
                      Giỏ hàng
                    </a>
                  </li>
                  <li class="auth-shoppingcart-dropdown-item">
                    <a class="auth-shoppingcart-dropdown-link" href="#!">
                      Đặt hàng
                    </a>
                  </li>
                </ul>
              </div>
              <div class="auth-user">
                <div class="auth-user-top">
                  <img src="../../assets/images/main-images/icon-user.png" alt="user" />
                    <span class="auth-username"><?php echo $account?></span>
                  <img
                    class="arrow-down"
                    src="../../assets/images/main-images/icon-arrow-down.png"
                    alt="arrow-down"
                  />
                </div>
                <ul class="auth-user-dropdown">
                  <li class="auth-user-dropdown-item">
                    <a class="auth-user-dropdown-link" href="../../profile/index.php">Tài khoản</a>
                  </li>
                  <li class="auth-user-dropdown-item">
                    <a class="auth-user-dropdown-link" href="../mon-an/dx.php">Đăng xuất</a>
                  </li>
                </ul>
              </div>
            </li>
            <?php }?>
          </ul>
          <label for="toggle-check" class="toggle"
            ><img src="../../assets/images/main-images/menu.png" alt="Menu"
          /></label>
          <label for="toggle-check" class="overlay"></label>
        </div>
      </header>
      <!-- blog_post -->
      <section class="blog_post">
        <div class="blog_post-container container">
          <div class="blog_post-header">
            <div class="blog_post-link">
              <a href="../../blog/index.php" class="blog_post-link-item menu-link">Blog </a>
              <img src="../../assets/images/main-images/icon-arrow-right.png" alt="" class="" />
              <a href="../blog_1/index.php" class="blog_post-link-item">Blog_1 </a>
            </div>
            <div class="">
              <p class="blog_post-time global-text show-on-scroll">22 tháng 12 năm 2021</p>
              <h2 class="blog_post-heading global-heading global-heading--big show-on-scroll">
                Tiêu đề bài post nó sẽ ở đây
              </h2>
              <p class="blog_post-desc global-text show-on-scroll">
                tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
              </p>
              <div class="blog_post-category">
                <a href="#" class="post-category">The newest</a>
                <a href="#" class="post-category">Shop</a>
                <a href="#" class="post-category">Tin tức</a>
                <a href="#" class="post-category">Công nghệ</a>
              </div>
            </div>
          </div>
          <div class="blog_post-content">
            <div class="blog_post-image">
              <img
                src="https://cdn.dribbble.com/users/2539288/screenshots/15326794/media/4c3268cdbc069e4ff03979d9b9a16e11.jpg?compress=1&resize=1600x1200"
                alt="blog-1"
                class="blog_post-image-img"
              />
            </div>
            <div class="blog_post-text">
              <div class="blog_post-social">
                <a href="#" class="blog_post-social-item">
                  <img srcset="../../assets/images/main-images/facebook.png 2x" alt="" />
                </a>
                <a href="#" class="blog_post-social-item">
                  <img srcset="../../assets/images/main-images/twitter.png 2x" alt="" />
                </a>
                <a href="#" class="blog_post-social-item">
                  <img srcset="../../assets/images/main-images/instagram.png 2x" alt="" />
                </a>
                <a href="#" class="blog_post-social-item">
                  <img srcset="../../assets/images/main-images/apple.png 2x" alt="" />
                </a>
              </div>
              <div class="blog_post-text-content">
                <p class="global-heading global-heading--normal">
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <p class="global-text">
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, error
                  soluta officiis sunt sed velit atque nostrum illum tenetur, animi nam eaque
                  accusantium dolores autem, mollitia dolor exercitationem earum. Vero? Similique
                  ipsa commodi voluptas obcaecati eligendi. Illo voluptate eius dolorem consequatur,
                  deleniti dignissimos sed, ab ipsum aspernatur magni fugiat fugit autem
                  voluptatibus assumenda eum debitis quae doloremque optio nobis animi.
                </p>
                <p class="global-text">
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, error
                  soluta officiis sunt sed velit atque nostrum illum tenetur, animi nam eaque
                  accusantium dolores autem, mollitia dolor exercitationem earum. Vero? Similique
                  ipsa commodi voluptas obcaecati eligendi. Illo voluptate eius dolorem consequatur,
                  deleniti dignissimos sed, ab ipsum aspernatur magni fugiat fugit autem
                  voluptatibus assumenda eum debitis quae doloremque optio nobis animi.
                </p>
                <img
                  src="https://cdn.dribbble.com/users/33073/screenshots/15238065/media/5df5a84f3ed908ad7bad36fa645e3d4a.png?compress=1&resize=1200x900"
                  alt=""
                  class="blog_post-text-img"
                />
                <p class="global-heading global-heading--normal">
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                </p>
                <p class="global-text">
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                </p>
                <p class="global-text">
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, error
                  soluta officiis sunt sed velit atque nostrum illum tenetur, animi nam eaque
                  accusantium dolores autem, mollitia dolor exercitationem earum. Vero? Similique
                  ipsa commodi voluptas obcaecati eligendi. Illo voluptate eius dolorem consequatur,
                  deleniti dignissimos sed, ab ipsum aspernatur magni fugiat fugit autem
                  voluptatibus assumenda eum debitis quae doloremque optio nobis animi.
                </p>
                <p class="global-text">
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, error
                  soluta officiis sunt sed velit atque nostrum illum tenetur, animi nam eaque
                  accusantium dolores autem, mollitia dolor exercitationem earum. Vero? Similique
                  ipsa commodi voluptas obcaecati eligendi. Illo voluptate eius dolorem consequatur,
                  deleniti dignissimos sed, ab ipsum aspernatur magni fugiat fugit autem
                  voluptatibus assumenda eum debitis quae doloremque optio nobis animi.
                </p>
                <p class="global-text">
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                </p>
                <p class="global-text">
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
                </p>
                <p class="global-text">
                  tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun
                </p>
              </div>
            </div>
          </div>

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
      <!-- subcribe -->
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
    </div>
    <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="footer-container">
          <div class="footer-column">
            <a href="index.php" class="footer-logo">
              <img srcset="../../assets/images/main-images/logo.png 2x" alt="" />
            </a>
            <p class="footer-desc text">Yêu là phải nói, đói là phải ăn, gọi FatMe thật nhanh, giao tận tay khách</p>
            <div class="social">
              <a href="#" class="social-item">
                <img srcset="../../assets/images/main-images/facebook.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="../../assets/images/main-images/twitter.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="../../assets/images/main-images/instagram.png 2x" alt="" />
              </a>
              <a href="#" class="social-item">
                <img srcset="../../assets/images/main-images/apple.png 2x" alt="" />
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
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/blog.js"></script>
  </body>
</html>
