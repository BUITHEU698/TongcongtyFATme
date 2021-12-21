<?php
include'../../../../connect/connect.php';
if(empty($_SESSION['email'])){
    header("location: ../../../login/index.php");
}else{
    $id=$_GET['id'];
    $sql="SELECT * FROM ma_khuyenmai WHERE id_makhuyenmai=$id";
    $khuyenmai=mysqli_query($conn,$sql);
    $danhsach= mysqli_fetch_assoc($khuyenmai);
}
$chuongtrinh_khuyenmai=mysqli_query($conn,"SELECT *FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email'");
if (isset($_POST['sua'])){

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin mã Khuyến Mãi</title>
    <link rel="stylesheet" href="./css/thong_tin_MKM.css">
    <link rel="stylesheet" href="/Home_main_page/css/reset.css">
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./Thong_tin_MKM_js/MKM.js"></script>
    <form action=""method="post">
        <div class="them_ma_container">
            <div class="title">
                <ul>
                    <li>
                        <h2>Thông tin mã khuyến mãi</h2>
                    </li>
                    <li class="right">
                        <button onclick="save()"name="sua">Sửa</button>
                    </li>
                    <li class="right">
                        <button onclick="cancle()"name="huy">Huỷ</button>
                    </li>
                </ul>
            </div>
            <div class="main">
                <div class="create_code">
                    <h2>Mã khuyến mãi (*)</h2>
                    <input class="create_code_input" type="text" id="code" placeholder="Nhập mã khuyến mãi">
                    <a id="code_cr"></a>
                    <p>Khách hàng sẽ nhập mã khuyến mãi này ở màn hình thanh toán</p>
                    <input class="create_code_checkbox" type="checkbox" id="checkBoxDanhMuc" onclick="CheckBox2()"><a style="color: black">Áp dụng cùng với chương trình khuyến mãi</a>
                    <div id="checkbox_danh_muc" class="hide_select">
                        <select name="" id="">
                            <option value="" disabled selected>Loại danh mục</option>
                            <option value="">Sinh nhật</option>
                            <option value="">Tiệc tại gia</option>
                            <option value="">Kỉ niệm ngày cưới</option>
                        </select>
                    </div>
                    <br>
                </div>
                <div class="value">
                    <h2>Giá trị (*)</h2>
                    <div class="part1">
                        <p>Giá trị khuyến mãi</p>
                        <input type="number" id="valueKM">
                        <a id="value1"></a>
                    </div>
                    <div class="part1">
                        <p>Giá trị giảm tối đa</p>
                        <input type="number" id="valueMax">
                        <a id="value2"></a>
                    </div>
                </div>
                <div class="apply_condition">
                    <h2>Điều kiện áp dụng cho</h2>
                    <input type="radio" id="" value="a" checked name="2">Không có<br>
                    
                    <input type="radio" id="" value="b" name="2">Tổng giá trị đơn hàng tối thiểu<br>
                    <input type="radio" name="2" value="c" id="apply_4">Tổng số lượng sản phẩm được khuyến mãi tối thiểu
                    <div id="show">
                        <input class="count" type="number" placeholder="Nhập số lượng" id="showid">
                        <a id="value_error"></a>
                    </div>
                </div>
                <div class="max_value">
                    <h2>Giới hạn sử dụng</h2>
                    <input type="radio" checked  name="3">Giới hạn mỗi lần khách hàng chỉ sử dụng mã giảm giá này 1 lần
                    <br>
                    <input type="radio" id="showCheckBox" name="3" onclick="CheckBox()">Giới hạn số lần mã giảm giá được áp dụng
                    <div id="show_checkbox" class="hide_checkbox">
                        <input class="count" type="number" placeholder="Nhập số lượng" id="num">
                        <a id="count1"></a>
                    </div>
                    
                </div>
                <div class="time">
                    <h2>Thời gian (*)</h2>
                    <div class="part1_time">
                        <label for="">Thời gian bắt đầu</label><br>
                        <input type="datetime-local" id="timeStart">
                        <a id="time1"></a>
                    </div>
                    <div class="part1_time">
                        <label for="">Thời gian kết thúc</label><br>
                        <input type="datetime-local" id="timeEnd">
                        <a id="time2"></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>