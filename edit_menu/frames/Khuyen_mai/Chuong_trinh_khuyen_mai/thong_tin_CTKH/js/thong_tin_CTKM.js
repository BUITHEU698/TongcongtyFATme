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

function save()
{
  const formSubmit ={
    name: document.getElementById("name").value,
    timeStart: document.getElementById("timeStart").value,
    timeEnd : document.getElementById("timeEnd").value,
  }
  var x = formSubmit;
  if(x.name == ""){
    document.getElementById("header").innerHTML ="Nhập tên";
    document.getElementById("name").style.borderColor ="unset";
    document.getElementById("name").style.borderColor = "red";
  }
  if(x.timeStart == ""){
    document.getElementById("start").innerHTML ="Chọn thời gian bắt đầu";
  }
  if(x.timeEnd == ""){
    document.getElementById("end").innerHTML ="Chọn thời gian kết thúc";
  }
  else alert("saved")

}
