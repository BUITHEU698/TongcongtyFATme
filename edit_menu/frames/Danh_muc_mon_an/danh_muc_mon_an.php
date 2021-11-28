<?php
include'../../../connect/connect.php';
$email=$_SESSION['email'];
echo $email;
$sql="SELECT *FROM danhmuc WHERE email_khachhang=$email";
$query=mysqli_query($conn,$sql);
echo $query;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danh mục sản phầm</title>
    <link rel="stylesheet" href="./css/danh_muc_mon_an.css" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <link rel="stylesheet" href="/Home_main_page/css/reset.css" />
</head>

<body>
    <script src="./js/danh_muc_mon_an.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#select_all').on('click', function() {
                if (this.checked) {
                    $('.checkbox').each(function() {
                        this.checked = true;
                    });
                } else {
                    $('.checkbox').each(function() {
                        this.checked = false;
                    });
                }
            });
            $('.checkbox').on('click', function() {
                if ($('.checkbox:checked').length == $('.checkbox').length) {
                    $('#select_all').prop('checked', true);
                } else {
                    $('#select_all').prop('checked', false);
                }
            });
        });
    </script>
    <!-- <img src="/edit_menu/frames/Danh_muc_mon_an/Them_danh_muc/them_danh_muc.html" alt=""> -->
    <div class="khuyen_mai_container">
        <div class="header">
            <h3>Danh mục món ăn</h3>
            <button onclick="add_danh_muc()">Thêm danh mục</button>
        </div>
        <div class="sap_xep">
            <ul>
                <li>
                    <select name="" id="">
                        <option value="" disabled selected>Loại danh mục</option>
                        <option value="">Sinh nhật</option>
                        <option value="">Quốc tế phụ nữ</option>
                        <option value="">Đám cưới</option>
                        <option value="">Tiệc tại gia</option>
                    </select>
                </li>
                <li>
                    <select name="" id="">
                        <option value="" disabled selected>Trạng thái</option>
                        <option value="">Hiện</option>
                        <option value="">Ẩn</option>
                        <option value="">Chưa áp dụng</option>
                        <option value="">Ngưng áp dụng</option>
                    </select>
                </li>
                <li>
                    <a>Số lượng món ăn</a>
                    <input class="time" type="number" placeholder="Nhập số lượng" />
                </li>
                <li>
                    <a>Ngày bắt đầu</a>
                    <input class="time" type="date" />
                </li>
                <li>
                    <button class="btn_search">Tìm kiếm</button>
                </li>
            </ul>
            <div class="scroll_table">
                <table>
                    <thead>
                        <tr>
                            <th class="checked_btn"><input class="all" type="checkbox" id="select_all" /> All</th>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Trạng thái</th>
                            <th>Ngày đăng</th>
                            <th class="more_button_col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($danhmucmonan as $key=>$value)  { ?>   
                    <tr>
                        <td class="checked_btn"><input type="checkbox"class="checkbox" /></td>
                        <td><?php echo$key+1 ?></td>
                        <td><?php echo $value['TENDANHMUC']   ?></td>
                        <?php if ($value['TRANGTHAI']==1){ ?>
                            <td>Hiện</td>
                        <?php } else {?>
                            <td>Ẩn</td>
                        <?php }?>
                        <td><?php echo $value['NGAYDANG']?></td>
                        <td class="more_button_col">
                            <div class="dropdown_more_btn">
                                <button class="more_button">
                                    <a><i class="fas fa-ellipsis-h"></i></a>
                                </button>
                                <div class="dropdown_content">
                                    <a href="#"><i class="fas fa-trash-alt"></i>Xoá</a>
                                    <a href="./thong_tin_danh_muc/thong_tin_danh_muc.html"><i class="fas fa-info"></i>Chi tiết</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php   }?>
                </tbody>
            </table>
        </div>
        <button onclick="del()" class="btn_del">Xoá</button>
    </div>
</body>
</html>