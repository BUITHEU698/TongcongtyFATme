<?php
include'../connect/connect.php';
if(empty($_SESSION['email'])){
    header("location: ../login/index.php");
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
    <link rel="stylesheet" href="../assets/css/food/monan.css" />
    <title>FATMe - Món ăn</title>
  </head>
  <body>
    <div class="totop">
      <a href="#" class="goto-top"></a>
    </div>
    <div class="wrapper">
      <header class="header">
        <div class="navigation">
          <a href="../main-page/index-main.html"
            ><img class="header-logo" srcset="../assets/images/main-images/logo.png 2x"
          /></a>
          <input type="checkbox" name="" id="toggle-check" class="toggle-check" />
          <ul class="menu">
            <div class="menu-item toggle-close">
              <label for="toggle-check"
                ><img src="../assets/images/main-images/menu-close.png" alt="Close"
              /></label>
            </div>
            <li class="menu-item">
              <a class="menu-link" href="../main-page/index-main.html">Trang chủ</a>
            </li>
            <li class="menu-item">
              <a class="menu-link" href="../mon-an/index.html">Món ăn</a>
            </li>
            <li class="menu-item"><a class="menu-link" href="../blog/index.html">Blog</a></li>
            <li class="menu-item">
              <a class="menu-link" href="../service/service.html">Dịch vụ</a>
            </li>
            <li class="menu-item"><a class="menu-link" href="../contact/index.html">Liên hệ</a></li>
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
                    <a href="" class="dropdown-item">
                      <img
                        src="../assets/images/food/xoixaxiu.jpeg"
                        alt="Hình thức ăn"
                        class="dropdown-item-image"
                      />
                      <div class="dropdown-item-text">
                        <div class="dropdown-item-text-desc">Xôi</div>
                        <div class="dropdown-item-text-title">Xôi Xá Xíu</div>
                        <div class="dropdown-item-text-price">35.000đ</div>
                      </div>
                      <div class="dropdown-item-right">
                        <img
                          class="trash"
                          src="../assets/images/main-images/icon-trash.png"
                          alt="trash"
                        />
                        <img
                          class="heart"
                          src="../assets/images/main-images/icon-heart-fill.png"
                          alt="heart"
                        />
                      </div>
                    </a>
                  </li>
                  <li class="auth-like-dropdown-item">
                    <a href="" class="dropdown-item">
                      <img
                        src="../assets/images/food/xoixaxiu.jpeg"
                        alt="Hình thức ăn"
                        class="dropdown-item-image"
                      />
                      <div class="dropdown-item-text">
                        <div class="dropdown-item-text-desc">Xôi</div>
                        <div class="dropdown-item-text-title">Xôi Xá Xíu</div>
                        <div class="dropdown-item-text-price">35.000đ</div>
                      </div>
                      <div class="dropdown-item-right">
                        <img
                          class="trash"
                          src="../assets/images/main-images/icon-trash.png"
                          alt="trash"
                        />
                        <img
                          class="heart"
                          src="../assets/images/main-images/icon-heart-fill.png"
                          alt="heart"
                        />
                      </div>
                    </a>
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
                    <a href="" class="dropdown-item">
                      <img
                        src="../assets/images/food/xoixaxiu.jpeg"
                        alt="Hình thức ăn"
                        class="dropdown-item-image"
                      />
                      <div class="dropdown-item-text">
                        <div class="dropdown-item-text-desc">Xôi</div>
                        <div class="dropdown-item-text-title">Xôi Xá Xíu</div>
                        <div class="dropdown-item-text-price"><span class="price">35.000</span>đ</div>
                      </div>
                      <div class="dropdown-item-right">
                        <img
                          class="trash"
                          src="../assets/images/main-images/icon-trash.png"
                          alt="trash"
                        />
                        <img
                          class="heart"
                          src="../assets/images/main-images/icon-heart-fill.png"
                          alt="heart"
                        />
                      </div>
                    </a>
                  </li>
                  <li class="auth-shoppingcart-dropdown-item">
                    <div class="auth-shoppingcart-dropdown-link" href="#!">
                      <span class="sum">
                        Tổng tiền: <span class="sum-price">35.000</span>đ
                      </span>
                      <a href="./">Thanh toán</a>
                      </div>
                  </li>
                </ul>
              </div>
              <div class="auth-user">
                <div class="auth-user-top">
                  <img src="../assets/images/main-images/icon-user.png" alt="user" />
                  <span class="auth-username">Win Lax</span>
                  <img
                    class="arrow-down"
                    src="../assets/images/main-images/icon-arrow-down.png"
                    alt="arrow-down"
                  />
                </div>
                <ul class="auth-user-dropdown">
                  <li class="auth-user-dropdown-item">
                    <a class="auth-user-dropdown-link" href="../profile/index.html">Tài khoản</a>
                  </li>
                  <li class="auth-user-dropdown-item">
                    <a class="auth-user-dropdown-link" href="../login/index.php">Đăng xuất</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <label for="toggle-check" class="toggle"
            ><img src="../assets/images/main-images/menu.png" alt="Menu"
          /></label>
          <label for="toggle-check" class="overlay"></label>
        </div>
      </header>

      <main>
        <!-- banner -->
        <section class="banner">
          <!-- banner slide top -->
          <div class="banner-slide slider-responsive-banner">
            <div class="banner-list">
              <div class="banner-item">
                <div class="banner-header">
                  <span
                    class="
                      banner-caption
                      green
                      global-heading global-heading--normal
                      show-on-scroll
                    "
                    >Fresh 100% organic fruits</span
                  >
                  <h2 class="banner-heading global-heading global-heading--big show-on-scroll">
                    Liên kết các cửa hàng với bạn nhanh chóng
                  </h2>
                  <p class="banner-desc global-text show-on-scroll">
                    Hướng đến việc tiện lợi khi ở nhà mà cũng có đồ ăn mọi lúc mọi nơi, chúng tôi sẽ
                    là người giúp các bạn thực hiện việc đó dễ dàng hơn.
                  </p>
                  <a class="button button--dark" href="#!">Xem ngay</a>
                </div>
                <div class="banner-image">
                  <img
                    src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60"
                    alt="Banner"
                    class="banner-image-item"
                  />
                </div>
              </div>
            </div>
            <div class="banner-list">
              <div class="banner-item">
                <div class="banner-header">
                  <span
                    class="
                      banner-caption
                      green
                      global-heading global-heading--normal
                      show-on-scroll
                    "
                    >Fresh 100% organic fruits</span
                  >
                  <h2 class="banner-heading global-heading global-heading--big show-on-scroll">
                    Liên kết các cửa hàng với bạn nhanh chóng
                  </h2>
                  <p class="banner-desc global-text show-on-scroll">
                    Hướng đến việc tiện lợi khi ở nhà mà cũng có đồ ăn mọi lúc mọi nơi, chúng tôi sẽ
                    là người giúp các bạn thực hiện việc đó dễ dàng hơn.
                  </p>
                  <a class="button button--dark" href="#!">Xem ngay</a>
                </div>
                <div class="banner-image">
                  <img
                    src="https://images.unsplash.com/photo-1501959915551-4e8d30928317?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGZvb2R8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    alt="Banner"
                    class="banner-image-item"
                  />
                </div>
              </div>
            </div>
            <div class="banner-list">
              <div class="banner-item">
                <div class="banner-header">
                  <span
                    class="
                      banner-caption
                      green
                      global-heading global-heading--normal
                      show-on-scroll
                    "
                    >Fresh 100% organic fruits</span
                  >
                  <h2 class="banner-heading global-heading global-heading--big show-on-scroll">
                    Liên kết các cửa hàng với bạn nhanh chóng
                  </h2>
                  <p class="banner-desc global-text show-on-scroll">
                    Hướng đến việc tiện lợi khi ở nhà mà cũng có đồ ăn mọi lúc mọi nơi, chúng tôi sẽ
                    là người giúp các bạn thực hiện việc đó dễ dàng hơn.
                  </p>
                  <a class="button button--dark" href="#!">Xem ngay</a>
                </div>
                <div class="banner-image">
                  <img
                    src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGZvb2R8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    alt="Banner"
                    class="banner-image-item"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- banner product -->
          <div class="food-container">
            <div class="banner-product">
              <div class="banner-product-list slider-responsive-banner-list">
                <div class="banner-product-list-item">
                  <div class="banner-product-item orange-bg">
                    <div class="banner-product-header">
                      <div
                        class="
                          banner-product-sale
                          green
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Giảm giá 30%
                      </div>
                      <div
                        class="
                          banner-product-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Grab food
                      </div>
                      <a class="button button--green" href="#!">Xem ngay</a>
                    </div>
                    <div class="banner-product-image">
                      <img
                        src="../assets/images/main-images/brand-grab.png"
                        alt="Banner"
                        class="banner-product-image-item"
                      />
                    </div>
                  </div>
                </div>
                <div class="banner-product-list-item">
                  <div class="banner-product-item green-bg">
                    <div class="banner-product-header">
                      <div
                        class="
                          banner-product-sale
                          red
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Giảm giá 50%
                      </div>
                      <div
                        class="
                          banner-product-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Loship
                      </div>
                      <a class="button button--red" href="#!">Xem ngay</a>
                    </div>
                    <div class="banner-product-image">
                      <img
                        src="../assets/images/main-images/brand-loship.png"
                        alt="Banner"
                        class="banner-product-image-item"
                      />
                    </div>
                  </div>
                </div>
                <div class="banner-product-list-item">
                  <div class="banner-product-item blue-dark-bg">
                    <div class="banner-product-header">
                      <div
                        class="
                          banner-product-sale
                          blue-dark
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Giảm giá 10%
                      </div>
                      <div
                        class="
                          banner-product-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Gojek
                      </div>
                      <a class="button button--dark" href="#!">Xem ngay</a>
                    </div>
                    <div class="banner-product-image">
                      <img
                        src="../assets/images/main-images/brand-gojek.png"
                        alt="Banner"
                        class="banner-product-image-item"
                      />
                    </div>
                  </div>
                </div>
                <div class="banner-product-list-item">
                  <div class="banner-product-item green-bg">
                    <div class="banner-product-header">
                      <div
                        class="
                          banner-product-sale
                          orange
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Giảm giá 70%
                      </div>
                      <div
                        class="
                          banner-product-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Shopee Food
                      </div>
                      <a class="button button--orange" href="#!">Xem ngay</a>
                    </div>
                    <div class="banner-product-image">
                      <img
                        src="../assets/images/main-images/brand-shopeefood.png"
                        alt="Banner"
                        class="banner-product-image-item"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end banner -->
        <!-- category -->
        <section class="category">
          <div class="food-container">
            <div class="food-header">
              <h2 class="food-heading global-heading global-food-heading show-on-scroll is-visible">
                Thể loại
              </h2>
              <div class="food-more">
                <a href="#!" class="food-link">Xem thêm</a>
                <img src="../assets/images/main-images/icon-arrow-right.png" alt="" />
              </div>
            </div>
            <div class="category-list slider-responsive-category-list">
              <div class="category-list-item green-bgfull">
                <a href="#!">
                  <div class="category-item">
                    <div class="category-item-image">
                      <img
                        src="../assets/images/food/cagetory1.png"
                        alt="Banner"
                        class="category-item-image-item"
                      />
                    </div>
                    <div class="category-item-header">
                      <div class="category-item-special global-text show-on-scroll">Món ngon</div>
                      <div
                        class="
                          category-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        rau củ sạch
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="category-list-item orange-bgfull">
                <a href="#!">
                  <div class="category-item">
                    <div class="category-item-image">
                      <img
                        src="../assets/images/food/cagetory2.png"
                        alt="Banner"
                        class="category-item-image-item"
                      />
                    </div>
                    <div class="category-item-header">
                      <div class="category-item-special global-text show-on-scroll">Bánh ngọt</div>
                      <div
                        class="
                          category-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Giảm giá 30%
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="category-list-item blue-dark-bgfull">
                <a href="#!">
                  <div class="category-item">
                    <div class="category-item-image">
                      <img
                        src="../assets/images/food/cagetory1.png"
                        alt="Banner"
                        class="category-item-image-item"
                      />
                    </div>
                    <div class="category-item-header">
                      <div class="category-item-special global-text show-on-scroll">
                        Trái cây tươi
                      </div>
                      <div
                        class="
                          category-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Giảm giá 30%
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="category-list-item green-bgfull">
                <a href="#!">
                  <div class="category-item">
                    <div class="category-item-image">
                      <img
                        src="../assets/images/food/cagetory4.png"
                        alt="Banner"
                        class="category-item-image-item"
                      />
                    </div>
                    <div class="category-item-header">
                      <div class="category-item-special global-text show-on-scroll">
                        Trái cây tươi
                      </div>
                      <div
                        class="
                          category-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Giảm giá 30%
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="category-list-item orange-bgfull">
                <a href="#!">
                  <div class="category-item">
                    <div class="category-item-image">
                      <img
                        src="https://images.unsplash.com/photo-1557800636-894a64c1696f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8ZnJ1aXR8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="Banner"
                        class="category-item-image-item"
                      />
                    </div>
                    <div class="category-item-header">
                      <div class="category-item-special global-text show-on-scroll">
                        Trái cây tươi
                      </div>
                      <div
                        class="
                          category-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Giảm giá 30%
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- end category -->
        <!-- product -->
        <section class="product">
          <div class="food-container">
            <div class="food-header">
              <h2 class="food-heading global-heading global-food-heading show-on-scroll is-visible">
                Có thể bạn thích
              </h2>
            </div>
            <div class="product-list slider-responsive-product-list">
              <a href="https://loship.vn/xoibanhmicochang?pItem=62007355">
                <div class="producr-list-item">
                  <div class="product-item">
                    <div class="product-item-top">
                      <div class="product-item-sale green-bgfull">Mới có</div>
                      <img src="../assets/images/main-images/icon-heart.png" alt="" class="heart" />
                    </div>
                    <div class="product-item-image">
                      <img src="../assets/images/food/xoixaxiu.jpeg" alt="" />
                    </div>
                    <div class="product-item-name">
                      <div class="product-item-special global-text show-on-scroll">Xôi</div>
                      <div
                        class="
                          product-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Xôi Xá Xíu
                      </div>
                    </div>
                    <div class="product-item-price global-heading--normal">
                      <div class="product-item-price-new">
                        <span class="price-new">35 000</span>
                        <span class="price-new-unit">đ</span>
                      </div>
                      <div class="product-item-price-old">
                        <span class="price-old"></span>
                        <span class="price-old-unit"></span>
                      </div>
                    </div>
                    <div class="product-item-bottom">
                      <div class="product-item-number">
                        <div class="buttons_added">
                          <input class="minus is-form" type="button" value="-" />
                          <input
                            aria-label="quantity"
                            class="input-qty"
                            max="10"
                            min="1"
                            name=""
                            type="number"
                            value="1"
                          />
                          <input class="plus is-form" type="button" value="+" />
                        </div>
                      </div>
                      <img
                        class="product-item-shoppingcart"
                        src="../assets/images/main-images/icon-shoppingcart.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a href="https://loship.vn/delicapizzagaranandmiynguyenvandau?pItem=62657806">
                <div class="producr-list-item">
                  <div class="product-item">
                    <div class="product-item-top">
                      <div class="product-item-sale green-bgfull">Mới có</div>
                      <img src="../assets/images/main-images/icon-heart.png" alt="" class="heart" />
                    </div>
                    <div class="product-item-image">
                      <img src="../assets/images/food/pizza.jpeg" alt="" />
                    </div>
                    <div class="product-item-name">
                      <div class="product-item-special global-text show-on-scroll">Pizza</div>
                      <div
                        class="
                          product-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Pizza Hải Sản Sốt Tiêu Đen
                      </div>
                    </div>
                    <div class="product-item-price global-heading--normal">
                      <div class="product-item-price-new">
                        <span class="price-new">69.000</span>
                        <span class="price-new-unit">đ</span>
                      </div>
                      <!-- <div class="product-item-price-old">
                        <span class="price-old">1.000.000</span>
                        <span class="price-old-unit">đ</span>
                      </div> -->
                    </div>
                    <div class="product-item-bottom">
                      <div class="product-item-number">
                        <div class="buttons_added">
                          <input class="minus is-form" type="button" value="-" />
                          <input
                            aria-label="quantity"
                            class="input-qty"
                            max="10"
                            min="1"
                            name=""
                            type="number"
                            value="1"
                          />
                          <input class="plus is-form" type="button" value="+" />
                        </div>
                      </div>
                      <img
                        class="product-item-shoppingcart"
                        src="../assets/images/main-images/icon-shoppingcart.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a
                href="https://jollibee.com.vn/tin-tuc/no-phu-phe-ngon-quen-loi-ve-voi-combo-cap-doi-an-y-cho-toan-quoc"
              >
                <div class="producr-list-item">
                  <div class="product-item">
                    <div class="product-item-top">
                      <div class="product-item-sale">Giảm giá khi mua combo</div>
                      <img src="../assets/images/main-images/icon-heart.png" alt="" class="heart" />
                    </div>
                    <div class="product-item-image">
                      <img style="height: 200px" src="../assets/images/food/gavuive.jpeg" alt="" />
                    </div>
                    <div class="product-item-name">
                      <div class="product-item-special global-text show-on-scroll">
                        Thức ăn nhanh
                      </div>
                      <div
                        class="
                          product-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Jollibee - 02 miếng gà giòn vui vẻ + 01 ly pepsi thường + tặng 1 lon pepsi
                        blackpink
                      </div>
                    </div>
                    <div class="product-item-price global-heading--normal">
                      <div class="product-item-price-new">
                        <span class="price-new">139 000</span>
                        <span class="price-new-unit">đ</span>
                      </div>
                      <div class="product-item-price-old">
                        <span class="price-old">160 000</span>
                        <span class="price-old-unit">đ</span>
                      </div>
                    </div>
                    <div class="product-item-bottom">
                      <div class="product-item-number">
                        <div class="buttons_added">
                          <input class="minus is-form" type="button" value="-" />
                          <input
                            aria-label="quantity"
                            class="input-qty"
                            max="10"
                            min="1"
                            name=""
                            type="number"
                            value="1"
                          />
                          <input class="plus is-form" type="button" value="+" />
                        </div>
                      </div>
                      <img
                        class="product-item-shoppingcart"
                        src="../assets/images/main-images/icon-shoppingcart.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a href="https://kfcvietnam.com.vn/vi/thuc-don/13/menu-uu-dai.html">
                <div class="producr-list-item">
                  <div class="product-item">
                    <div class="product-item-top">
                      <div class="product-item-sale">Giảm giá khi mua combo</div>
                      <img src="../assets/images/main-images/icon-heart.png" alt="" class="heart" />
                    </div>
                    <div class="product-item-image">
                      <img style="height: 200px" src="../assets/images/food/phucloc.png" alt="" />
                    </div>
                    <div class="product-item-name">
                      <div class="product-item-special global-text show-on-scroll">
                        Thức ăn nhanh
                      </div>
                      <div
                        class="
                          product-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Combo Lộc Phúc
                      </div>
                    </div>
                    <div class="product-item-price global-heading--normal">
                      <div class="product-item-price-new">
                        <span class="price-new">86 000</span>
                        <span class="price-new-unit">đ</span>
                      </div>
                      <div class="product-item-price-old">
                        <span class="price-old">125 000</span>
                        <span class="price-old-unit">đ</span>
                      </div>
                    </div>
                    <div class="product-item-bottom">
                      <div class="product-item-number">
                        <div class="buttons_added">
                          <input class="minus is-form" type="button" value="-" />
                          <input
                            aria-label="quantity"
                            class="input-qty"
                            max="10"
                            min="1"
                            name=""
                            type="number"
                            value="1"
                          />
                          <input class="plus is-form" type="button" value="+" />
                        </div>
                      </div>
                      <img
                        class="product-item-shoppingcart"
                        src="../assets/images/main-images/icon-shoppingcart.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a href="https://www.lotteria.vn/combo-79-000d.html">
                <div class="producr-list-item">
                  <div class="product-item">
                    <div class="product-item-top">
                      <div class="product-item-sale">Giảm giá khi mua combo</div>
                      <img src="../assets/images/main-images/icon-heart.png" alt="" class="heart" />
                    </div>
                    <div class="product-item-image">
                      <img style="height: 200px" src="../assets/images/food/burger.png" alt="" />
                    </div>
                    <div class="product-item-name">
                      <div class="product-item-special global-text show-on-scroll">
                        Thức ăn nhanh
                      </div>
                      <div
                        class="
                          product-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        1 Burger bò Teriyaki trứng + 1 Mì Ý + 1 Khoai Tây Chiên + 1 Pepsi
                      </div>
                    </div>
                    <div class="product-item-price global-heading--normal">
                      <div class="product-item-price-new">
                        <span class="price-new">79 000</span>
                        <span class="price-new-unit">đ</span>
                      </div>
                      <div class="product-item-price-old">
                        <span class="price-old">120 000</span>
                        <span class="price-old-unit">đ</span>
                      </div>
                    </div>
                    <div class="product-item-bottom">
                      <div class="product-item-number">
                        <div class="buttons_added">
                          <input class="minus is-form" type="button" value="-" />
                          <input
                            aria-label="quantity"
                            class="input-qty"
                            max="10"
                            min="1"
                            name=""
                            type="number"
                            value="1"
                          />
                          <input class="plus is-form" type="button" value="+" />
                        </div>
                      </div>
                      <img
                        class="product-item-shoppingcart"
                        src="../assets/images/main-images/icon-shoppingcart.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a href="https://www.lotteria.vn/combo-ga-s-t-tr-ng-mu-i-38-000d.html">
                <div class="producr-list-item">
                  <div class="product-item">
                    <div class="product-item-top">
                      <div class="product-item-sale">Giảm giá khi mua combo</div>
                      <img src="../assets/images/main-images/icon-heart.png" alt="" class="heart" />
                    </div>
                    <div class="product-item-image">
                      <img
                        style="height: 200px"
                        src="../assets/images/food/gatrungmuoi.png"
                        alt=""
                      />
                    </div>
                    <div class="product-item-name">
                      <div class="product-item-special global-text show-on-scroll">
                        Thức ăn nhanh
                      </div>
                      <div
                        class="
                          product-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        1 Gà Số Trứng Muối + 1 Pepsi
                      </div>
                    </div>
                    <div class="product-item-price global-heading--normal">
                      <div class="product-item-price-new">
                        <span class="price-new">36 000</span>
                        <span class="price-new-unit">đ</span>
                      </div>
                      <div class="product-item-price-old">
                        <span class="price-old">39 000</span>
                        <span class="price-old-unit">đ</span>
                      </div>
                    </div>
                    <div class="product-item-bottom">
                      <div class="product-item-number">
                        <div class="buttons_added">
                          <input class="minus is-form" type="button" value="-" />
                          <input
                            aria-label="quantity"
                            class="input-qty"
                            max="10"
                            min="1"
                            name=""
                            type="number"
                            value="1"
                          />
                          <input class="plus is-form" type="button" value="+" />
                        </div>
                      </div>
                      <img
                        class="product-item-shoppingcart"
                        src="../assets/images/main-images/icon-shoppingcart.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a href="https://shopeefood.vn/ha-noi/tra-sua-tocotoco-le-trong-tan">
                <div class="producr-list-item">
                  <div class="product-item">
                    <div class="product-item-top">
                      <div class="product-item-sale">Giảm giá 50%</div>
                      <img src="../assets/images/main-images/icon-heart.png" alt="" class="heart" />
                    </div>
                    <div class="product-item-image">
                      <img
                        style="height: 200px"
                        src="../assets/images/food/trasuatoco.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="product-item-name">
                      <div class="product-item-special global-text show-on-scroll">Đồ uống</div>
                      <div
                        class="
                          product-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Sữa chua Tocotoco
                      </div>
                    </div>
                    <div class="product-item-price global-heading--normal">
                      <div class="product-item-price-new">
                        <span class="price-new">20 000</span>
                        <span class="price-new-unit">đ</span>
                      </div>
                      <div class="product-item-price-old">
                        <span class="price-old">40 000</span>
                        <span class="price-old-unit">đ</span>
                      </div>
                    </div>
                    <div class="product-item-bottom">
                      <div class="product-item-number">
                        <div class="buttons_added">
                          <input class="minus is-form" type="button" value="-" />
                          <input
                            aria-label="quantity"
                            class="input-qty"
                            max="10"
                            min="1"
                            name=""
                            type="number"
                            value="1"
                          />
                          <input class="plus is-form" type="button" value="+" />
                        </div>
                      </div>
                      <img
                        class="product-item-shoppingcart"
                        src="../assets/images/main-images/icon-shoppingcart.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </section>
        <section class="product-2">
          <div class="food-container">
            <div class="food-header">
              <h2 class="food-heading global-heading global-food-heading show-on-scroll is-visible">
                Mọi người ăn gì?
              </h2>
            </div>
            <div class="product-list slider-responsive-product-list">
              <a href="https://loship.vn/steakbinduongso8?pItem=87617">
                <div class="producr-list-item">
                  <div class="product-item">
                    <div class="product-item-top">
                      <div class="product-item-sale green-bgfull">Đang hot</div>
                      <img src="../assets/images/main-images/icon-heart.png" alt="" class="heart" />
                    </div>
                    <div class="product-item-image">
                      <img src="../assets/images/food/beefsteak.jpeg" alt="" />
                    </div>
                    <div class="product-item-name">
                      <div class="product-item-special global-text show-on-scroll">Beefsteak</div>
                      <div
                        class="
                          product-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Beefsteak Bò Sốt Tiêu
                      </div>
                    </div>
                    <div class="product-item-price global-heading--normal">
                      <div class="product-item-price-new">
                        <span class="price-new">70.000</span>
                        <span class="price-new-unit">đ</span>
                      </div>
                      <!-- <div class="product-item-price-old">
                        <span class="price-old">1.000.000</span>
                        <span class="price-old-unit">đ</span>
                      </div> -->
                    </div>
                    <div class="product-item-bottom">
                      <div class="product-item-number">
                        <div class="buttons_added">
                          <input class="minus is-form" type="button" value="-" />
                          <input
                            aria-label="quantity"
                            class="input-qty"
                            max="10"
                            min="1"
                            name=""
                            type="number"
                            value="1"
                          />
                          <input class="plus is-form" type="button" value="+" />
                        </div>
                      </div>
                      <img
                        class="product-item-shoppingcart"
                        src="../assets/images/main-images/icon-shoppingcart.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a href="https://loship.vn/sushiwayquan1?pItem=63673332">
                <div class="producr-list-item">
                  <div class="product-item">
                    <div class="product-item-top">
                      <div class="product-item-sale green-bgfull">Đang hot</div>
                      <img src="../assets/images/main-images/icon-heart.png" alt="" class="heart" />
                    </div>
                    <div class="product-item-image">
                      <img src="../assets/images/food/banhbachtuoc.jpeg" alt="" />
                    </div>
                    <div class="product-item-name">
                      <div class="product-item-special global-text show-on-scroll">Ăn vặt</div>
                      <div
                        class="
                          product-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Bánh Bạch Tuộc
                      </div>
                    </div>
                    <div class="product-item-price global-heading--normal">
                      <div class="product-item-price-new">
                        <span class="price-new">99.000</span>
                        <span class="price-new-unit">đ</span>
                      </div>
                      <!-- <div class="product-item-price-old">
                        <span class="price-old">1.000.000</span>
                        <span class="price-old-unit">đ</span>
                      </div> -->
                    </div>
                    <div class="product-item-bottom">
                      <div class="product-item-number">
                        <div class="buttons_added">
                          <input class="minus is-form" type="button" value="-" />
                          <input
                            aria-label="quantity"
                            class="input-qty"
                            max="10"
                            min="1"
                            name=""
                            type="number"
                            value="1"
                          />
                          <input class="plus is-form" type="button" value="+" />
                        </div>
                      </div>
                      <img
                        class="product-item-shoppingcart"
                        src="../assets/images/main-images/icon-shoppingcart.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a href="https://loship.vn/gachanhganuongtopmoshoponline?pItem=8711331">
                <div class="producr-list-item">
                  <div class="product-item">
                    <div class="product-item-top">
                      <!-- <div class="product-item-sale">Giảm giá <span class="percent">50</span>%</div> -->
                      <img src="../assets/images/main-images/icon-heart.png" alt="" class="heart" />
                    </div>
                    <div class="product-item-image">
                      <img src="../assets/images/food/galachanh.jpeg" alt="" />
                    </div>
                    <div class="product-item-name">
                      <div class="product-item-special global-text show-on-scroll">Đồ ăn mặn</div>
                      <div
                        class="
                          product-item-title
                          global-heading global-heading--normal
                          show-on-scroll
                        "
                      >
                        Gà Lá Chanh Tóp Mỡ Ngũ Vị
                      </div>
                    </div>
                    <div class="product-item-price global-heading--normal">
                      <div class="product-item-price-new">
                        <span class="price-new">105.000</span>
                        <span class="price-new-unit">đ</span>
                      </div>
                      <!-- <div class="product-item-price-old">
                        <span class="price-old">1.000.000</span>
                        <span class="price-old-unit">đ</span>
                      </div> -->
                    </div>
                    <div class="product-item-bottom">
                      <div class="product-item-number">
                        <div class="buttons_added">
                          <input class="minus is-form" type="button" value="-" />
                          <input
                            aria-label="quantity"
                            class="input-qty"
                            max="10"
                            min="1"
                            name=""
                            type="number"
                            value="1"
                          />
                          <input class="plus is-form" type="button" value="+" />
                        </div>
                      </div>
                      <img
                        class="product-item-shoppingcart"
                        src="../assets/images/main-images/icon-shoppingcart.png"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </a>
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
                  Nhập gmail để không bỏ lỡ những thông báo mới nhất và các ưu đãi hấp dẫn đến từ
                  Fatme nhé !!!
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
    <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="footer-container">
          <div class="footer-column">
            <a href="index.html" class="footer-logo">
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
    <script src="../assets/js/food.js"></script>
  </body>
</html>
