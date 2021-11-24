function cancle(){
    alert("Bạn chắc chắn muốn huỷ ?")
    location.href = "/edit_menu/frames/Khuyen_mai/Chuong_trinh_khuyen_mai/CTKM.html";
}
$(document).ready(function() {
    $('input[type="radio"]').click(function() {
      if ($(this).attr('id') == 'apply_cd') {
        $('#show').show();
      } else {
        $('#show').hide();
      }
    });
});