<?php
include'../../../../connect/connect.php';
if(empty($_SESSION['email'])){
    header("location: ../../../../login/index.php");
}else{
    $email=$_SESSION['email'];
    $chuongtrinh=mysqli_query($conn,"SELECT*FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email'");
    if (isset($_POST['them'])){
        header("location: them_CT_khuyen_mai/them_CTKM.php");
    }
    if (isset($_POST['xoa_all'])){
        require_once("xoa_nhieu.php");
    }
    if (isset($_POST['timkiem'])){
        if (!empty($_POST['TK_tu_khoa'])&&empty($_POST['TK_trang_thai'])&&!empty($_POST['TK_bat_dau'])&&!empty($_POST['TK_ket_thuc'])){
            $TK_tu_khoa=$_POST['TK_tu_khoa'];
            if (isset($_POST['TK_bat_dau'])){
                $ngay=$_POST['TK_bat_dau'];
                $tach_ngay = explode("-", $ngay);
                $TK_bat_dau=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            if (isset($_POST['TK_ket_thuc'])){
                $ngay=$_POST['TK_ket_thuc'];
                $tach_ngay = explode("-", $ngay);
                $TK_ket_thuc=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%' AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%' AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
        }else if (!empty($_POST['TK_tu_khoa'])&&empty($_POST['TK_trang_thai'])&&!empty($_POST['TK_bat_dau'])&&empty($_POST['TK_ket_thuc'])){
            $TK_tu_khoa=$_POST['TK_tu_khoa'];
            if (isset($_POST['TK_bat_dau'])){
                $ngay=$_POST['TK_bat_dau'];
                $tach_ngay = explode("-", $ngay);
                $TK_bat_dau=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%' AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%';";
        }else if (!empty($_POST['TK_tu_khoa'])&&empty($_POST['TK_trang_thai'])&&empty($_POST['TK_bat_dau'])&&!empty($_POST['TK_ket_thuc'])){
            $TK_tu_khoa=$_POST['TK_tu_khoa'];
            if (isset($_POST['TK_ket_thuc'])){
                $ngay=$_POST['TK_ket_thuc'];
                $tach_ngay = explode("-", $ngay);
                $TK_ket_thuc=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%' AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
        }else if (!empty($_POST['TK_tu_khoa'])&&empty($_POST['TK_trang_thai'])&&empty($_POST['TK_bat_dau'])&&empty($_POST['TK_ket_thuc'])){
            $TK_tu_khoa=$_POST['TK_tu_khoa'];
            $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%';";
        }else if (empty($_POST['TK_tu_khoa'])&&empty($_POST['TK_trang_thai'])&&!empty($_POST['TK_bat_dau'])&&!empty($_POST['TK_ket_thuc'])){
            if (isset($_POST['TK_bat_dau'])){
                $ngay=$_POST['TK_bat_dau'];
                $tach_ngay = explode("-", $ngay);
                $TK_bat_dau=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            if (isset($_POST['TK_ket_thuc'])){
                $ngay=$_POST['TK_ket_thuc'];
                $tach_ngay = explode("-", $ngay);
                $TK_ket_thuc=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%' AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
        }else if (empty($_POST['TK_tu_khoa'])&&empty($_POST['TK_trang_thai'])&&!empty($_POST['TK_bat_dau'])&&empty($_POST['TK_ket_thuc'])){
            if (isset($_POST['TK_bat_dau'])){
                $ngay=$_POST['TK_bat_dau'];
                $tach_ngay = explode("-", $ngay);
                $TK_bat_dau=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            
            $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%';";
        }else if (empty($_POST['TK_tu_khoa'])&&empty($_POST['TK_trang_thai'])&&empty($_POST['TK_bat_dau'])&&!empty($_POST['TK_ket_thuc'])){
            if (isset($_POST['TK_ket_thuc'])){
                $ngay=$_POST['TK_ket_thuc'];
                $tach_ngay = explode("-", $ngay);
                $TK_ket_thuc=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
        }else if (empty($_POST['TK_tu_khoa'])&&!empty($_POST['TK_trang_thai'])&&empty($_POST['TK_bat_dau'])&&empty($_POST['TK_ket_thuc'])){
            $TK_trang_thai=$_POST['TK_trang_thai'];
            $hientai=time();
            if ($TK_trang_thai==1){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC >'$hientai';";
            } else if ($TK_trang_thai==2){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU > '$hientai' AND TONGGIAY_KETTHUC >'$hientai';";
            } else {
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC <'$hientai';";
            }
        }else if (empty($_POST['TK_tu_khoa'])&&!empty($_POST['TK_trang_thai'])&&empty($_POST['TK_bat_dau'])&&!empty($_POST['TK_ket_thuc'])){
            if (isset($_POST['TK_ket_thuc'])){
                $ngay=$_POST['TK_ket_thuc'];
                $tach_ngay = explode("-", $ngay);
                $TK_ket_thuc=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $TK_trang_thai=$_POST['TK_trang_thai'];
            $hientai=time();
            if ($TK_trang_thai==1){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC >'$hientai' AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%' ;";
            } else if ($TK_trang_thai==2){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU > '$hientai' AND TONGGIAY_KETTHUC >'$hientai'AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
            } else {
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC <'$hientai'AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
            }
        }else if (empty($_POST['TK_tu_khoa'])&&!empty($_POST['TK_trang_thai'])&&!empty($_POST['TK_bat_dau'])&&empty($_POST['TK_ket_thuc'])){
            if (isset($_POST['TK_bat_dau'])){
                $ngay=$_POST['TK_bat_dau'];
                $tach_ngay = explode("-", $ngay);
                $TK_bat_dau=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $TK_trang_thai=$_POST['TK_trang_thai'];
            $hientai=time();
            if ($TK_trang_thai==1){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC >'$hientai' AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%' ;";
            } else if ($TK_trang_thai==2){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU > '$hientai' AND TONGGIAY_KETTHUC >'$hientai'AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%';";
            } else {
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC <'$hientai'AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%';";
            }
        }else if (empty($_POST['TK_tu_khoa'])&&!empty($_POST['TK_trang_thai'])&&!empty($_POST['TK_bat_dau'])&&!empty($_POST['TK_ket_thuc'])){
            if (isset($_POST['TK_bat_dau'])){
                $ngay=$_POST['TK_bat_dau'];
                $tach_ngay = explode("-", $ngay);
                $TK_bat_dau=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            if (isset($_POST['TK_ket_thuc'])){
                $ngay=$_POST['TK_ket_thuc'];
                $tach_ngay = explode("-", $ngay);
                $TK_ket_thuc=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $TK_trang_thai=$_POST['TK_trang_thai'];
            $hientai=time();
            if ($TK_trang_thai==1){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC >'$hientai' AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%'AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%' ;";
            } else if ($TK_trang_thai==2){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU > '$hientai' AND TONGGIAY_KETTHUC >'$hientai'AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%'AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
            } else {
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC <'$hientai'AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%'AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
            }
        }else if (!empty($_POST['TK_tu_khoa'])&&!empty($_POST['TK_trang_thai'])&&empty($_POST['TK_bat_dau'])&&empty($_POST['TK_ket_thuc'])){
            $TK_tu_khoa=$_POST['TK_tu_khoa'];
            $TK_trang_thai=$_POST['TK_trang_thai'];
            $hientai=time();
            if ($TK_trang_thai==1){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC >'$hientai' AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%' ;";
            } else if ($TK_trang_thai==2){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU > '$hientai' AND TONGGIAY_KETTHUC >'$hientai'AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%';";
            } else {
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC <'$hientai'AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%';";
            }
        }else if (!empty($_POST['TK_tu_khoa'])&&!empty($_POST['TK_trang_thai'])&&empty($_POST['TK_bat_dau'])&&!empty($_POST['TK_ket_thuc'])){
            if (isset($_POST['TK_ket_thuc'])){
                $ngay=$_POST['TK_ket_thuc'];
                $tach_ngay = explode("-", $ngay);
                $TK_ket_thuc=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $TK_tu_khoa=$_POST['TK_tu_khoa'];
            $TK_trang_thai=$_POST['TK_trang_thai'];
            $hientai=time();
            if ($TK_trang_thai==1){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC >'$hientai' AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%' AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
            } else if ($TK_trang_thai==2){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU > '$hientai' AND TONGGIAY_KETTHUC >'$hientai'AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%'AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
            } else {
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC <'$hientai'AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%'AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
            }
        }else if (!empty($_POST['TK_tu_khoa'])&&!empty($_POST['TK_trang_thai'])&&!empty($_POST['TK_bat_dau'])&&empty($_POST['TK_ket_thuc'])){
            if (isset($_POST['TK_bat_dau'])){
                $ngay=$_POST['TK_bat_dau'];
                $tach_ngay = explode("-", $ngay);
                $TK_bat_dau=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $TK_tu_khoa=$_POST['TK_tu_khoa'];
            $TK_trang_thai=$_POST['TK_trang_thai'];
            $hientai=time();
            if ($TK_trang_thai==1){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC >'$hientai' AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%'AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%';";
            } else if ($TK_trang_thai==2){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU > '$hientai' AND TONGGIAY_KETTHUC >'$hientai'AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%'AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%';";
            } else {
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC <'$hientai'AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%'AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%';";
            }
        }else if (!empty($_POST['TK_tu_khoa'])&&!empty($_POST['TK_trang_thai'])&&!empty($_POST['TK_bat_dau'])&&!empty($_POST['TK_ket_thuc'])){
            if (isset($_POST['TK_bat_dau'])){
                $ngay=$_POST['TK_bat_dau'];
                $tach_ngay = explode("-", $ngay);
                $TK_bat_dau=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            if (isset($_POST['TK_ket_thuc'])){
                $ngay=$_POST['TK_ket_thuc'];
                $tach_ngay = explode("-", $ngay);
                $TK_ket_thuc=$tach_ngay[0].'-'.$tach_ngay[1].'-'.$tach_ngay[2]; 
            }
            $TK_tu_khoa=$_POST['TK_tu_khoa'];
            $TK_trang_thai=$_POST['TK_trang_thai'];
            $hientai=time();
            if ($TK_trang_thai==1){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC >'$hientai' AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%'AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%'AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
            } else if ($TK_trang_thai==2){
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU > '$hientai' AND TONGGIAY_KETTHUC >'$hientai'AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%'AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%'AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
            } else {
                $sql="SELECT * FROM chuongtrinh_khuyenmai WHERE email_khachhang='$email' AND TONGGIAY_BATDAU < '$hientai' AND TONGGIAY_KETTHUC <'$hientai'AND TENCHUONGTRINH LIKE '%$TK_tu_khoa%'AND THOIGIAN_BATDAU LIKE '%$TK_bat_dau%'AND THOIGIAN_KETTHUC LIKE '%$TK_ket_thuc%';";
            }
        }
        $chuongtrinh=mysqli_query($conn,$sql);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch????ng tr??nh khuy???n m??i</title>
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
    <form action=""method="post">
        <div class="ct_khuyen_mai_container">
            <div class="title">
                <ul>
                    <li>
                        <h2>Ch????ng tr??nh khuy???n m??i</h2>
                    </li>
                    <li class="right">
                        <!-- <button onclick="khuyen_mai()">Th??m ch????ng tr??nh khuy???n m??i</button> -->
                        <button name="them">Th??m ch????ng tr??nh khuy???n m??i</button>
                    </li>
                </ul>
            </div>
            <div class="sap_xep">
                <ul>
                    <li>
                        <input type="text"name="TK_tu_khoa" placeholder="T??n ch????ng tr??nh khuy???n m??i">
                    </li>
                    <li>
                        <select name="TK_trang_thai" id="">
                            <option value="" disabled selected>Tr???ng th??i</option>
                            <option value="1">??ang di???n ra</option>
                            <option value="2">S???p di???n ra</option>
                            <option value="3">Ch????ng tr??nh ???? k???t th??c</option>
                        </select>
                    </li>
                    <li>
                        <a>Th???i gian b???t ?????u</a>
                        <input class="time" name="TK_bat_dau"type="date">
                    </li>
                    <li>
                        <a>Th???i gian k???t th??c</a>
                        <input class="time"name="TK_ket_thuc" type="date">
                    </li>
                    <li>
                        <button class="btn_search"name="timkiem">T??m ki???m</button>
                    </li>
                </ul>
                <div class="scroll_table">
                    <table>
                        <thead>
                            <tr>
                                <th class="checked_btn"><input class="all" type="checkbox" id="select_all"> All</th>
                                <th>T??n ch????ng tr??nh</th>
                                <th>Lo???i khuy???n m??i</th>
                                <th>Tr???ng th??i</th>
                                <th>B???t ?????u</th>
                                <th>K???t th??c</th>
                                <th class="more_button_col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach($chuongtrinh as $key=>$value)  {?>
                                <tr>
                                    <td class="checked_btn">
                                        <input type="checkbox" class="checkbox"name="id_chuongtrinh[]"value="<?php echo$value['id_chuongtrinh'] ?>">
                                    </td>
                                    <td>
                                        <?php echo $value['TENCHUONGTRINH'] ?>
                                    </td>
                                    <?php if ($value['LOAIKHUYENMAI']==1){ ?>
                                        <td>T???t c??? m??n ??n</td>
                                    <?php } else if($value['LOAIKHUYENMAI']==2){?>
                                        <td>Danh m???c</td>
                                    <?php }else {?>
                                        <td>M??n ??n</td>
                                    <?php }?>      
                                    <?php if(time()<$value['TONGGIAY_BATDAU']) {?>
                                        <td>S???p di???n ra</td>
                                    <?php } else if(time()>=$value['TONGGIAY_BATDAU']&&time()<=$value['TONGGIAY_KETTHUC']){?>
                                        <td>??ang di???n ra</td>
                                    <?php }else {?>
                                        <td>Ch????ng tr??nh ???? k???t th??c</td>
                                    <?php }?> 
                                    <td>
                                        <?php echo $value['THOIGIAN_BATDAU']?>
                                        </td>
                                    <td>
                                        <?php echo $value['THOIGIAN_KETTHUC']?>
                                    </td>
                                    <td class="more_button_col">
                                        <div class="dropdown_more_btn">
                                            <button class="more_button">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown_content_more">
                                                <a href="#"><i class="fas fa-trash-alt"></i>Xo??</a>
                                                <a href="./thong_tin_CTKH/thong_tin_CTKH.html"><i class="fas fa-info"></i>Chi ti???t</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php }?>
                            
                        </tbody>
                    </table>
                </div>
                <button class="btn_del"name="xoa_all">Xo?? m?? khuy???n m??i</button>
            </div>
        </div>
    </form>
</body>

</html>