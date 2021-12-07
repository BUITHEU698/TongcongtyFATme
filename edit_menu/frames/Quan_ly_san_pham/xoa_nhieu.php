<?php
    include'../../../connect/connect.php';
    $del=isset($_POST['del'])?$_POST['del']:'';
    if(empty($del)){
        header("location:quan_ly_san_pham.php");
    }
    $strIn='';
    $count=1;
    foreach($del as $key=>$value){
        if($count<sizeof($del)){
            $strIn=$strIn.$value.',';
        }
        else {
            $strIn=$strIn.$value;
        }
        $count++;
    }
    // echo $strIn;
    $sql_del="DELETE FROM monan WHERE id_monan in($strIn)";
    echo $sql_del;
    $xoa=mysqli_query($conn,$sql_del);
    if ($xoa){
        header("location:quan_ly_san_pham.php");
    }

    // $del=(isset($_POST['del']))?$_POST['del']:'';
    // var_dump($del);


?>