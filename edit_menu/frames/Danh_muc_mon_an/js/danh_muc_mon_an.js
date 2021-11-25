function add_danh_muc(){
    location.href = "/edit_menu/frames/Danh_muc_mon_an/Them_danh_muc/them_danh_muc.html";
}
function del(){
    if (confirm("Danh mục bạn chọn có chứa món ăn, bạn chắc chắn muốn xoá ?")) {
    alert ("Xoá thành công");
    } 
    else {
    alert ("Đã huỷ");
    }
    // document.getElementById("demo").innerHTML = txt;
}