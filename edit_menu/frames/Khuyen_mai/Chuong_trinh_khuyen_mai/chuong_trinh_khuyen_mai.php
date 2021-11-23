<?php
include'../../../../connect/connect.php';
$chuongtrinh=mysqli_query($conn,"SELECT*FROM chuongtrinh_khuyenmai");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chương trình khuyến mãi</title>
    <link rel="stylesheet" href="./chuong_trinh_khuyen_mai_css/chuong_trinh_khuyen_mai.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
</head>
<body>
    <script src="./chuong_trinh_khuyen_mai_js/chuong_trinh_khuyen_mai.js"></script>
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
        var bd = document.getElementById('bd').value;
        console.log(bd);
    </script>
    <div class="ct_khuyen_mai_container">
        <div class="title">
            <ul>
                <li>
                    <h2>Chương trình khuyến mãi</h2>
                </li>
                <li class="right">
                    <button onclick="khuyen_mai()">Thêm chương trình khuyến mãi</button>
                </li>
            </ul>
        </div>
        <div class="sap_xep">
            <ul>
                <li>
                    <input type="text" placeholder="Tên chương trình khuyến mãi">
                </li>
                <li>
                    <select name="" id="">
                        <option value="" disabled selected>Trạng thái</option>
                        <option value="">Tất cả</option>
                        <option value="">Đã áp dụng</option>
                        <option value="">Chưa áp dụng</option>
                        <option value="">Ngưng áp dụng</option>
                    </select>
                </li>
                <li>
                    <a>Thời gian bắt đầu</a>
                    <input class="time" type="date">
                </li>
                <li>
                    <a>Thời gian kết thúc</a>
                    <input class="time" type="date">
                </li>
                <li>
                    <button class="btn_search">Tìm kiếm</button>
                </li>
            </ul>
            <div class="scroll_table">
                <table>
                    <thead>
                        <tr>
                            <th class="checked_btn"><input class="all" type="checkbox" id="select_all"> All</th>
                            <th>Tên chương trình</th>
                            <th>Loại khuyến mãi</th>
                            <th>Trạng thái</th>
                            <th>Bắt đầu</th>
                            <th>Kết thúc</th>
                            <th class="more_button_col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach($chuongtrinh as $key=>$value)  {?>
                            <tr>
                                <td class="checked_btn"><input type="checkbox" class="checkbox"></td>
                                <td><?php echo $value['tenchuongtrinh'] ?></td>
                                <?php if ($value['loaikhuyenmai']==1){ ?>
                                    <td>Tất cả món ăn</td>
                                <?php } else if($value['loaikhuyenmai']==2){?>
                                    <td>Danh mục</td>
                                <?php }else {?>
                                    <td>Món ăn</td>
                                <?php }?>      
                                <?php if(time()<$value['tonggiay_batdau']) {?>
                                    <td>Sắp diễn ra</td>
                                <?php } else if(time()>=$value['tonggiay_batdau']&&time()<=$value['tonggiay_ketthuc']){?>
                                    <td>Đang diễn ra</td>
                                <?php }else {?>
                                    <td>Chương trình đã kết thúc</td>
                                <?php }?> 
                                <td> <?php echo $value['thoigian_batdau']?></td>
                                <td><?php echo $value['thoigian_ketthuc']?></td>
                                <td class="more_button_col">
                                <div class="dropdown_more_btn">
                                    <button class="more_button"><i class="fas fa-ellipsis-h"></i></button>
                                    <div class="dropdown_content_more">
                                        <a href="#"><i class="fas fa-trash-alt"></i>Xoá</a>
                                        <a href="./thong_tin_CTKH/thong_tin_CTKH.html"><i class="fas fa-info"></i>Chi tiết</a>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        <?php }?>
                        
                    </tbody>
                </table>
            </div>
            <button class="btn_del">Xoá mã khuyến mãi</button>
        </div>
    </div>
</body>

</html>