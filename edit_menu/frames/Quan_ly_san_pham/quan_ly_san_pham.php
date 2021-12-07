<?php
    include'../../../connect/connect.php';
    if(empty($_SESSION['email'])){
        header("location: ../../../login/index.php");
    }else{
        $email=$_SESSION['email'];
        $sql="SELECT * FROM danhmuc INNER JOIN monan ON danhmuc.id_danhmuc = monan.id_danhmuc WHERE monan.email_khachhang='$email'";
        $query=mysqli_query($conn,$sql);
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý sản phẩm</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <link rel="stylesheet" href="/Home_main_page/css/reset.css" />
    <link rel="stylesheet" href="./quan_ly_san_pham.css/quan_ly_san_pham.css" />


    <style>
        .btn_a_them_mon{
            width: 15rem;
            background-color: #FF5500;
            border-radius: 5px;
            text-align: center;
            float: right;
            font-size: 15.3333px;
            color: white;
            text-decoration: none;
        }
        .btn_a_them_mon:hover {
            background-color: var(--color-button-hover);
        }
        .checked_btn{
            width: 8rem;
            padding-top: 5px;
        }
        .all{
            margin-left: 1px !important;
            width: 2.2rem ;
            height: 2.2rem;
        }
    </style>
</head>

<body>


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

<form action="xoa_nhieu.php"method="post"enctype="multipart/form-data">
    <div class="quan_ly_san_pham_container">
        <div class="header_container">
            <ul>
                <li>
                    <h3>Danh sách món ăn</h3>
                </li>
                <li class="btn_add">
                    <a href="../../frames/Them_san_pham/them_san_pham.php" class="btn_a_them_mon">Thêm món</a>
                    <!-- <button onclick="add()">Thêm món</button> -->
                </li>
            </ul>
        </div>
        <div class="body_container">
            <!-- <div class="part1">
          <ul>
            <li><i class="fas fa-download"></i><a href="">Nhập danh sách</a></li>
            <li><i class="fas fa-upload"></i><a href="">Xuất danh sách</a></li>
            <li><input type="radio" />Hiển thị <input type="radio" />Ẩn</li>
          </ul>
          </div> -->
            <div class="sap_xep">
                <ul>
                    <li class="search">
                        <input tyle="text" placeholder="Tên món ăn" />
                    </li>
                    <li>
                        <select name="" id="">
                      <option value="" disabled selected>Danh mục</option>
                      <option value="">Đồ ăn nhanh</option>
                      <option value="">Lẩu</option>
                  </select>
                    </li>
                    <li>
                        <select name="" id="">
                      <option value="" disabled selected>Giá</option>
                      <option value="">10000đ - 100000đ</option>
                      <option value=""></option>
                  </select>
                    </li>
                    <li class="date_time">
                        <input type="date" placeholder="Ngày đăng" />
                    </li>
                    <li class="status">
                        <select name="" id="">
                    <option value="" disabled selected>Trạng thái</option>
                    <option value="">Hiện</option>
                    <option value="">Ẩn</option>
                  </select>
                    </li>
                    <li>
                        <button>Tìm kiếm</button>
                    </li>

                </ul>
            </div>
            <div class="scroll_table">
                <table>
                    <thead>
                        <tr>
                            <th class="checked_btn"><input class="all" type="checkbox" id="select_all" /> All</th>
                            <th>STT</th>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Giá</th>
                            <th>Ngày đăng</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($query as $key=>$value)  { ?>
                                    <tr>
                                        
                                        <td>
                                            <input type="checkbox" name="del[]" value="<?php echo $value['id_monan']?>" class="checkbox" />
                                        </td>
                                        <td>
                                            <?php echo $key+1 ?>
                                        </td>
                                        <td>
                                            <img src="../../../img-uploads/<?php echo $value['IMAGE']?>" alt="lỗi">
                                        </td>
                                        <td>
                                            <?php echo $value['TENMONAN']?>
                                        </td>
                                        <td>
                                            <?php echo $value['TENDANHMUC']?>
                                        </td>
                                        <td>
                                            <?php echo $value['GIA']?>
                                        </td>
                                        <td>
                                            <?php echo $value['NGAYDANG']?>
                                        </td>
                                        <?php if ($value['TRANGTHAI']==1){ ?>
                                            <td>Hiện</td>
                                        <?php } else {?>
                                            <td>Ẩn</td>
                                        <?php }?>
                                        <td>
                                            <div class="dropdown_more_btn">
                                                <button class="more_button">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown_content_more"name="xoa">
                                                    <a href="xoa_mon_an.php?id=<?php echo $value['id_monan']; ?>"><i class="fas fa-trash-alt"></i>Xoá</a>
                                                    <a href="/edit_menu/frames/Thong_tin_san_pham/thong_tin_san_pham.html"><i class="fas fa-info"></i>Thông tin</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?> 
                            </tbody>
                    </table>
                </div>
            <div class="btn">
                <button>Xoá sản phẩm</button>
            </div>
        </div>
    </div>
    </form>
    <script src="./Quan_ly_san_pham_js/quan_ly_san_pham.js"></script>
</body>

</html>