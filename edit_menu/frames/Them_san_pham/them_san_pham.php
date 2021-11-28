<?php
include'../../../connect/connect.php';




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="/edit_menu/frames/Thong_tin_san_pham/thong_tin_css/thong_tin_san_pham.css">

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/Home_main_page/css/reset.css">
</head>
<body>
  <div class="thongtin_sanpham_container">
      <div class="header_container">
          <h2>Thêm món ăn</h2>
      </div>
      <div class="body_container">
          <div class="thong_tin">
              <div class="san_pham_moi">
                  <h3>Tên món ăn (*)</h3>
                  <input type="text" id="name" placeholder="Nhập tên món ăn">
                    <div class="error">
                      <a id="mon_an"></a>
                    </div>
                  <h3>Mô tả</h3>
                  <textarea name="" id="describe" cols="30" rows="10" placeholder="Mô tả món ăn ..."></textarea>
              </div><br>
              
              <div class="hinh_anh">
                  <h3>Ảnh món ăn (*)</h3>
                  <div class="add_img">
                      <!-- <i class="fas fa-images"></i><br> -->
                      <input type="file" value="" id="img" required>
                  </div>
                  <div class="error">
                    <a id="img_error"></a>
                  </div>
              </div>
          </div>
          <div class="trang_thai">
              <h3>Trạng thái</h3>
              <input type="radio" checked><a>Hiển thị</a><br>
              <input type="radio"><a>Ẩn</a><br>
              <h3 style="display: inline;">Giá tiền (*)</h3><a style="color: red" id="idMoney"></a> <br>
              <input type="number" id="money1" class="money" placeholder="Nhập giá tiền">
              <h3>Danh mục</h3>
              <select name="" id="type">
                  <option value="" >Đồ ăn nhanh</option>
                  <option value="">Đồ uống</option>
                  <option value="">Lẩu</option>
              </select><br>
              <!-- <label for="">Địa chỉ</label><br>
              <input type="text" class="local" placeholder="Địa chỉ nhập món ăn">
              <br>
              <label>Thời gian</label><br>
              <input class="money" id="time" type="datetime-local"> -->
              <div class="save">
                <button id="save" onclick="saveInfo()"><h3>Lưu</h3></button>
                <button id="cancle" onclick="cancleInfo()"><h3>Huỷ</h3></button>
              </div>
              <div class="trung">
                  <span>Món ăn đã tồn tại</span>
              </div>
          </div>
      </div>
  </div>
  <script src="./scripts/index.js"></script>
</body>
</html>