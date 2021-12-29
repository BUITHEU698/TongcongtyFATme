<?php
include'../connect/connect.php';
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
      href="../assets/images/main-images/logo-main.png"
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
    <link rel="stylesheet" href="../assets/css/main-page/app.css" />
    <title>FATMe - Blog</title>
  </head>
  <body>
    <div class="totop">
      <a href="#" class="goto-top"></a>
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
            <li class="menu-item">
              <a class="menu-link" href="../mon-an/index.php">Món ăn</a>
            </li>
            <li class="menu-item"><a class="menu-link" href="#!">Blog</a></li>
            <li class="menu-item">
              <a class="menu-link" href="../service/service.php">Dịch vụ</a>
            </li>
            <li class="menu-item"><a class="menu-link" href="../contact/index.php">Liên hệ</a></li>

            <?php if (empty($_SESSION['email'])){ ?>
              <li class="auth">
              <a class="button button--secondary auth-login" href="../login/index.php">Đăng nhập</a>
              <a class="button button--primary auth-signup" href="../register/index.php">Đăng ký</a>
            </li>
            <?php } else {?>
              <li class="auth">
              <div class="auth-like">
                <div class="auth-like-top">
                  <img
                    class="heart"
                    src="../assets/images/main-images/icon-heart.png"
                    alt="heart"
                  />
                  <img
                    class="arrow-down"
                    src="../assets/images/main-images/icon-arrow-down.png"
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
                    src="../assets/images/main-images/icon-shoppingcart-header.png"
                    alt="shopping cart"
                  />
                  <img
                    class="arrow-down"
                    src="../assets/images/main-images/icon-arrow-down.png"
                    alt="arrow-down"
                  />
                </div>
                <ul class="auth-shoppingcart-dropdown">
                  <li class="auth-shoppingcart-dropdown-item">
                    <a class="auth-shoppingcart-dropdown-link" href="#!">
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
                  <img src="../assets/images/main-images/icon-user.png" alt="user" />
                    <span class="auth-username"><?php echo $account?></span>
                  <img
                    class="arrow-down"
                    src="../assets/images/main-images/icon-arrow-down.png"
                    alt="arrow-down"
                  />
                </div>
                <ul class="auth-user-dropdown">
                  <li class="auth-user-dropdown-item">
                    <a class="auth-user-dropdown-link" href="#!">Tài khoản</a>
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
                Các bài blog được cập nhật thường xuyên của chúng tôi
              </h2>
              <p class="global-text show-on-scroll">
                tempus, lectus risus In' perdiel tellus, sed faucibus ipsum ipsurn nun neque.
              </p>
            </div>
            <!-- posts -->
            <div class="post-feature-list slider-responsive-2">
              <div class="post-feature show-on-scroll">
                <div class="post-feature-content">
                  <a
                    href="./blog_1/index.php"
                    class="post-feature-media post-media show-on-scroll show-on-scroll"
                  >
                    <img
                      src="../assets/images/blog-images/blog1.jpg"
                      alt=""
                      class="post-feature-image"
                    />
                  </a>
                  <div class="post-feature-info">
                    <a href="#" class="post-category">The newest</a>
                    <h2>
                      <a href="./blog_1/index.php" class="post-feature-title post-title"
                        >Những món ăn nhất định phải thử một lần khi sống trong đời</a
                      >
                    </h2>
                    <p class="post-desc">
                      <a
                        href="https://www.blogamthuc.com/nhung-mon-an-nhat-dinh-phai-thu-mot-lan-khi-song-trong-doi.html"
                        >https://www.blogamthuc.com/nhung-mon-an-nhat-dinh-phai-thu-mot-lan-khi-song-trong-doi.html</a
                      >
                    </p>
                  </div>
                </div>
              </div>
              <div class="post-feature show-on-scroll">
                <div class="post-feature-content">
                  <a
                    href="./blog_2/index.php"
                    class="post-feature-media post-media show-on-scroll show-on-scroll"
                  >
                    <img
                      src="../assets/images/blog-images/blog2.jpg"
                      alt=""
                      class="post-feature-image"
                    />
                  </a>
                  <div class="post-feature-info">
                    <a href="#" class="post-category">The newest</a>
                    <h2>
                      <a href="./blog_2/index.php" class="post-feature-title post-title"
                        >Người Nhật Bản ăn gì vào đêm trăng rằm?
                      </a>
                    </h2>
                    <p class="post-desc">
                      <a
                        href="https://www.blogamthuc.com/nguoi-nhat-ban-an-gi-vao-dem-trang-ram.html"
                        >https://www.blogamthuc.com/nguoi-nhat-ban-an-gi-vao-dem-trang-ram.html</a
                      >
                    </p>
                  </div>
                </div>
              </div>
              <div class="post-feature show-on-scroll">
                <div class="post-feature-content">
                  <a
                    href="./blog_3/index.php"
                    class="post-feature-media post-media show-on-scroll show-on-scroll"
                  >
                    <img
                      src="../assets/images/blog-images/blog3.jpg"
                      alt=""
                      class="post-feature-image"
                    />
                  </a>
                  <div class="post-feature-info">
                    <a href="#" class="post-category">The newest</a>
                    <h2>
                      <a href="./blog_3/index.php" class="post-feature-title post-title"
                        >Khám phá khu phố Tàu giữa lòng Sài Gòn</a
                      >
                    </h2>
                    <p class="post-desc">
                      <a href="https://lyhoangdong.weebly.com/am-thuc-duong-pho/pho-tau"
                        >https://lyhoangdong.weebly.com/am-thuc-duong-pho/pho-tau</a
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <p class="post-title-heading">Blog mới gần đây</p>
            <div class="post-list">
              <div class="post-item show-on-scroll">
                <a href="./blog_2/index.php" class="post-media">
                  <img src="../assets/images/blog-images/blog2.jpg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_2/index.php" class="post-title"
                      >Người Nhật Bản ăn gì vào đêm trăng rằm?
                    </a>
                  </h3>
                  <p class="post-desc">
                    <a href="https://www.blogamthuc.com/nguoi-nhat-ban-an-gi-vao-dem-trang-ram.html"
                      >https://www.blogamthuc.com/nguoi-nhat-ban-an-gi-vao-dem-trang-ram.html</a
                    >
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_3/index.php" class="post-media">
                  <img src="../assets/images/blog-images/blog3.jpg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_3/index.php" class="post-title"
                      >Khám phá khu phố Tàu giữa lòng Sài Gòn</a
                    >
                  </h3>
                  <p class="post-desc">
                    Khu phố Tàu Thành phố Hồ Chí Minh, nằm ở trung tâm quận 5, có vẻ yên tĩnh vào
                    buổi sáng nhưng nhộn nhịp vào ban đêm.
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_4/index.php" class="post-media">
                  <img src="../assets/images/blog-images/blog4.jpg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_4/index.php" class="post-title"
                      >Chỉ Với 30k Thì Ăn Gì Ở Sài Gòn?</a
                    >
                  </h3>
                  <p class="post-desc">
                    Với 30k, bạn có thể ăn món gì ở Sài Gòn? Một câu hỏi tưởng chừng rất dễ trả lời
                    nhưng lại khiến nhiều bạn lúng túng.
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_5/index.php" class="post-media">
                  <img src="../assets/images/blog-images/blog5.jpg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_5/index.php" class="post-title"
                      >TOP 8 loại quả đắt đỏ nhất thế giới
                    </a>
                  </h3>
                  <p class="post-desc">
                    <a
                      href="https://blogchiasekienthuc.com/kien-thuc/8-loai-qua-dat-do-nhat-the-gioi.html"
                      >https://blogchiasekienthuc.com/kien-thuc/8-loai-qua-dat-do-nhat-the-gioi.html</a
                    >
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_6/index.php" class="post-media">
                  <img src="../assets/images/blog-images/blog6.png" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_6/index.php" class="post-title"
                      >FOOD STYLIST – NHỮNG NGƯỜI NGHỆ SĨ BIẾN HOÁ TRÊN BÀN ĂN
                    </a>
                  </h3>
                  <p class="post-desc">
                    Đằng sau những món ăn “nhìn là thấy đói” xuất hiện trên các bức ảnh, menu nhà
                    hàng, bìa sách, tạp chí hay mạng internet mà chúng ta bắt gặp hằng ngày chính là
                    sự sáng tạo không ngừng của các food stylist.
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_7/index.php" class="post-media">
                  <img src="../assets/images/blog-images/blog7.jpeg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_7/index.php" class="post-title"
                      >CÁCH LÀM “ROSÉ ROLL CAKE” – BÁNH CUỘN KEM PHOMAI BẰNG… CHẢO
                    </a>
                  </h3>
                  <p class="post-desc">
                    <a
                      href="https://www.esheepkitchen.com/cach-lam-rose-roll-cake-banh-cuon-kem-phomai-bang-chao/"
                      >https://www.esheepkitchen.com/cach-lam-rose-roll-cake-banh-cuon-kem-phomai-bang-chao/</a
                    >
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_8/index.php" class="post-media">
                  <img src="../assets/images/blog-images/blog8.png" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_8/index.php" class="post-title"
                      >6 LỢI ÍCH CỦA VIỆC NẤU ĂN TẠI NHÀ</a
                    >
                  </h3>
                  <p class="post-desc">
                    <a href="https://bepxua.vn/6-loi-ich-cua-viec-nau-an-tai-nha/"
                      >https://bepxua.vn/6-loi-ich-cua-viec-nau-an-tai-nha/</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <!-- blog list -->
            <p class="post-title-heading">Có thể bạn thích</p>
            <div class="blog-list slider-responsive">
              <div class="post-item show-on-scroll">
                <a href="./blog_2/index.html" class="post-media">
                  <img src="../assets/images/blog-images/blog2.jpg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_2/index.html" class="post-title"
                      >Người Nhật Bản ăn gì vào đêm trăng rằm?</a
                    >
                  </h3>
                  <p class="post-desc">Tác giả: Blog Ẩm Thực</p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_3/index.html" class="post-media">
                  <img src="../assets/images/blog-images/blog3.jpg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_3/index.html" class="post-title"
                      >Khám phá khu phố Tàu giữa lòng Sài Gòn</a
                    >
                  </h3>
                  <p class="post-desc">Tác giả: LyHoangDong Blog</p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_4/index.html" class="post-media">
                  <img src="../assets/images/blog-images/blog4.jpg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_4/index.html" class="post-title"
                      >Chỉ Với 30k Thì Ăn Gì Ở Sài Gòn?
                    </a>
                  </h3>
                  <p class="post-desc">Tác giả: lyhoangdong.weebly.com</p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_5/index.html" class="post-media">
                  <img src="../assets/images/blog-images/blog5.jpg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_5/index.html" class="post-title"
                      >[Bạn Có Biết] TOP 8 loại quả đắt đỏ nhất thế giới</a
                    >
                  </h3>
                  <p class="post-desc">
                    Tác giả: Kiên Nguyễn Blog, Đinh Tùng – Blogchiasekienthuc.com
                  </p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_6/index.html" class="post-media">
                  <img src="../assets/images/blog-images/blog6.png" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_6/index.html" class="post-title"
                      >Food stylist – Những người nghệ sĩ biến hóa trên bàn ăn</a
                    >
                  </h3>
                  <p class="post-desc">Tác giả: Liam Production</p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_7/index.html" class="post-media">
                  <img src="../assets/images/blog-images/blog7.jpeg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_7/index.html" class="post-title"
                      >Cách làm “ROSÉ ROLL CAKE” – Bánh cuộn kem phômai bằng chảo
                    </a>
                  </h3>
                  <p class="post-desc">Tác giả: Esheep Kitchen</p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_8/index.html" class="post-media">
                  <img src="../assets/images/blog-images/blog8.jpg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_8/index.html" class="post-title"
                      >6 lợi ích của việc nấu ăn tại nhà
                    </a>
                  </h3>
                  <p class="post-desc">Tác giả: bepxua</p>
                </div>
              </div>
              <div class="post-item show-on-scroll">
                <a href="./blog_9/index.html" class="post-media">
                  <img src="../assets/images/blog-images/blog9.jpg" alt="" class="post-image" />
                </a>
                <div class="post-content">
                  <a href="#" class="post-category">Shop</a>
                  <h3>
                    <a href="./blog_9/index.html" class="post-title"
                      >Chế Độ Ăn Keto Là Gì? Cơ Bản Dành Cho Người Mới Bắt Đầu
                    </a>
                  </h3>
                  <p class="post-desc">Tác giả: benben123</p>
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
            <a href="index.php" class="footer-logo">
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
    <!-- script -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
