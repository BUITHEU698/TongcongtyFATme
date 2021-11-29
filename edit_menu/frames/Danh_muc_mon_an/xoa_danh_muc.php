<?php
include'../../../connect/connect.php';
$id=$_GET['id'];
$sql="DELETE FROM danhmuc WHERE id_danhmuc=$id";
$query=mysqli_query($conn,$sql);
if($query==false) { 
   echo "Danh mục này có món ăn không thể xóa";
}else{
    header("location: danh_muc_mon_an.php");
}

?>