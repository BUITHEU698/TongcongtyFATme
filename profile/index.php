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
  <body >
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
          <a href="../main-page/"
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
              <a class="menu-link" href="../main-page/index.html">Trang chủ</a>
            </li>
            <li class="menu-item">
              <a class="menu-link" href="../monan_main_page/">Món ăn</a>
            </li>
            <li class="menu-item"><a class="menu-link link-active" href="#!">Blog</a></li>
            <li class="menu-item"><a class="menu-link" href="#!">Dịch vụ</a></li>
            <li class="menu-item"><a class="menu-link" href="./index.html">Liên hệ</a></li>
            <li class="auth">
              <a class="button button--secondary auth-login" href="../login/index.php">Đăng nhập</a
              ><a class="button button--primary auth-signup" href="../register/index.php"
                >Đăng ký</a
              >
            </li>
          </ul>
          <label for="toggle-check" class="toggle"
            ><img src="./images/images-main/menu.png" alt="Menu"
          /></label>
          <label for="toggle-check" class="overlay"></label>
        </div>
      </header>
      <section class="">
        <div class="container">
          <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            <div class="profile-tab-nav border-right">
              <div class="p-4">
                <div class="img-circle text-center mb-3">
                  <img
                    style="max-width: max-content; margin: 0 auto"
                    src="./images/anh-tho-cute-dang-yeu.jpg"
                    alt="Image"
                    class="shadow"
                  />
                </div>
                <h4 class="text-center"><?php echo $taikhoan['HOTEN']?></h4>
              </div>
              <div
                class="nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <a
                  class="nav-link active"
                  id="account-tab"
                  data-toggle="pill"
                  href="#account"
                  role="tab"
                  aria-controls="account"
                  aria-selected="true"
                >
                  <i class="fa fa-home text-center mr-1"></i>
                  Hồ sơ
                </a>
                <a
                  class="nav-link"
                  id="notification-tab"
                  data-toggle="pill"
                  href="#notification"
                  role="tab"
                  aria-controls="notification"
                  aria-selected="false"
                >
                  <i class="fas fa-map-marker-alt"></i>
                  Địa chỉ
                </a>
                <a
                  class="nav-link"
                  id="password-tab"
                  data-toggle="pill"
                  href="#password"
                  role="tab"
                  aria-controls="password"
                  aria-selected="false"
                >
                  <i class="fa fa-key text-center mr-1"></i>
                  Mật khẩu
                </a>
                <a
                  class="nav-link"
                  id="notification-tab"
                  data-toggle="pill"
                  href="#notification"
                  role="tab"
                  aria-controls="notification"
                  aria-selected="false"
                >
                  <i class="fa fa-bell text-center mr-1"></i>
                  Thông Báo
                </a>
              </div>
            </div>
            <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="account"
                role="tabpanel"
                aria-labelledby="account-tab"
              >
                <h3 class="mb-4">Thông tin tài khoản</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Họ & Tên </label>
                      <input type="text" class="form-control" value="FATMe "/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Tên Tài Khoản</label>
                      <input type="text" class="form-control" value="FATMe" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    
                      <select name="day" id="" class="form-control"  >
                        <option value="">Ngày</option>
                        <option value="1">Ngày 1</option>
                        <option value="2">Ngày 2</option>
                        <option value="3">Ngày 3</option>
                        <option value="4">Ngày 4</option>
                        <option value="5">Ngày 5</option>
                        <option value="6">Ngày 6</option>
                        <option value="7">Ngày 7</option>
                        <option value="8">Ngày 8</option>
                        <option value="9">Ngày 9</option>
                        <option value="9">Ngày 9</option>
                        <option value="9">Ngày 9</option>
                        <option value="9">Ngày 9</option>
                        <option value="9">Ngày 9</option>
                        <option value="9">Ngày 9</option>
                        <option value="9">Ngày 9</option>
                        <option value="10">Ngày 10</option>
                        <option value="11">Ngày 11</option>
                        <option value="12">Ngày 12</option>
                        <option value="13">Ngày 13</option>
                        <option value="14">Ngày 14</option>
                        <option value="15">Ngày 15</option>
                        <option value="16">Ngày 16</option>
                        <option value="17">Ngày 17</option>
                        <option value="18">Ngày 18</option>
                        <option value="19">Ngày 19</option>
                        <option value="20">Ngày 20</option>
                        <option value="21">Ngày 21</option>
                        <option value="22">Ngày 22</option>
                        <option value="23">Ngày 23</option>
                        <option value="24">Ngày 24</option>
                        <option value="25">Ngày 25</option>
                        <option value="26">Ngày 26</option>
                        <option value="27">Ngày 27</option>
                        <option value="28">Ngày 28</option>
                        <option value="29">Ngày 29</option>
                        <option value="30">Ngày 30</option>
                        <option value="31">Ngày 31</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <select name="day" id=""class="form-control" >
                        <option value="">Tháng</option>
                        <option value="1">Tháng 1</option>
                        <option value="2">Tháng 2</option>
                        <option value="3">Tháng 3</option>
                        <option value="4">Tháng 4</option>
                        <option value="5">Tháng 5</option>
                        <option value="6">Tháng 6</option>
                        <option value="7">Tháng 7</option>
                        <option value="8">Tháng 8</option>
                        <option value="9">Tháng 9</option>
                        <option value="10">Tháng 10</option>
                        <option value="11">Tháng 11</option>
                        <option value="12">Tháng 12</option>
                    </select>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                     
                      <select name="nam" id=""class="form-control" >
                        <option value="">Năm</option>
                        <option value="1989">Năm 1989</option>
                        <option value="1990">Năm 1990</option>
                        <option value="1991">Năm 1991</option>
                        <option value="1992">Năm 1992</option>
                        <option value="1993">Năm 1993</option>
                        <option value="1994">Năm 1994</option>
                        <option value="1995">Năm 1995</option>
                        <option value="1996">Năm 1996</option>
                        <option value="1997">Năm 1997</option>
                        <option value="1998">Năm 1998</option>
                        <option value="1999">Năm 1999</option>
                        <option value="2000">Năm 2000</option>
                        <option value="2001">Năm 2001</option>
                        <option value="2002">Năm 2002</option>
                        <option value="2003">Năm 2003</option>
                        <option value="2004">Năm 2004</option>
                        <option value="2005">Năm 2005</option>
                        <option value="2006">Năm 2006</option>
                        <option value="2007">Năm 2007</option>
                        <option value="2008">Năm 2008</option>
                        <option value="2009">Năm 2009</option>
                        <option value="2010">Năm 2010</option>
                                        
                      </select>
                      
                    </div>
                  </div>
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="mail" class="form-control" value="congtyfatme@gmail.com" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Số Điện Thoại</label>
                      <input type="tel" class="form-control" value="(84+) 971 29 28 38" />
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Giói Thiệu Bản Thân </label>
                      <textarea class="form-control" rows="4"> I love you</textarea
                      >
                    </div>
                  </div>
                </div>
                <div>
                  <button class="btn btn-primary">Lưu</button>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="password"
                role="tabpanel"
                aria-labelledby="password-tab"
              >
                <h3 class="mb-4">Password Settings</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Old password</label>
                      <input type="password" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Accordion Item #1
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <button class="btn btn-primary">Update</button>
                  <button class="btn btn-light">Cancel</button>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="security"
                role="tabpanel"
                aria-labelledby="security-tab"
              >
                <h3 class="mb-4">Security Settings</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Login</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Two-factor auth</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="recovery" />
                        <label class="form-check-label" for="recovery"> Recovery </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <button class="btn btn-primary">Update</button>
                  <button class="btn btn-light">Cancel</button>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="application"
                role="tabpanel"
                aria-labelledby="application-tab"
              >
                <h3 class="mb-4">Application Settings</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="app-check" />
                        <label class="form-check-label" for="app-check"> App check </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="defaultCheck2"
                        />
                        <label class="form-check-label" for="defaultCheck2">
                          Lorem ipsum dolor sit.
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <button class="btn btn-primary">Update</button>
                  <button class="btn btn-light">Cancel</button>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="notification"
                role="tabpanel"
                aria-labelledby="notification-tab"
              >
                <h3 class="mb-4">Notification Settings</h3>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="notification1" />
                    <label class="form-check-label" for="notification1">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium
                      accusamus, neque cupiditate quis
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="notification2" />
                    <label class="form-check-label" for="notification2">
                      hic nesciunt repellat perferendis voluptatum totam porro eligendi.
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="notification3" />
                    <label class="form-check-label" for="notification3">
                      commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
                    </label>
                  </div>
                </div>
                <div>
                  <button class="btn btn-primary">Update</button>
                  <button class="btn btn-light">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="footer my-5">
      <div class="container">
        <div class="footer-container">
          <div class="footer-column">
            <a href="index.html" class="footer-logo">
              <img srcset="./images/images-main/logo.png 2x" alt="" />
            </a>
            <p class="footer-desc text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, qui error,
              aspernatur ut velit saepe adipisci reprehenderit maxime suscipit ea non earum
              repudiandae aliquid doloremque nihil pariatur, culpa iste officiis?
            </p>
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
    <script src="./app.js"></script>
  </body>
</html>