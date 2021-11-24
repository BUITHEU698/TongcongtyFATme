
// function CheckBox() {
//     var checkBox = document.getElementById("showCheckBox");
//     var text = document.getElementById("show_checkbox");
//     if (checkBox.checked == true){
//       text.style.display = "block";
//     } else {
//       text.style.display = "none";
//     }
//   }
//   function CheckBox2() {
//     var checkBox2 = document.getElementById("checkBoxDanhMuc");
//     var text = document.getElementById("checkbox_danh_muc");
//     if (checkBox2.checked == true){
//       text.style.display = "block";
//     } else {
//       text.style.display = "none";
//     }
//   }
function cancle(){
    alert("Bạn chắc chắn muốn huỷ ?")
    location.href = "/edit_menu/frames/Khuyen_mai/khuyen_mai.html";
}
$(document).ready(function() {
  $('input[type="radio"]').click(function() {
    if ($(this).attr('id') == 'apply_4') {
      $('#show').show();
    } else {
      $('#show').hide();
    }
  });
});
$(document).ready(function() {
  $('input[type="radio"]').click(function() {
    if ($(this).attr('id') == 'showCheckBox') {
      $('#show_checkbox').show();
    } else {
      $('#show_checkbox').hide();
    }
  });
});
function save(){
  const discout ={
    code : document.getElementById("code").value,
    valueKM : document.getElementById("valueKM").value,
    valueMax : document.getElementById("valueMax").value,
    timeStart : document.getElementById("timeStart").value,
    timeEnd : document.getElementById("timeEnd").value,
    num : document.getElementById("num").textContent,
  }
  var x = discout;
  if(x.code == "")
  {
    document.getElementById("code_cr").innerHTML = "Vui lòng nhập mã khuyến mãi";
    document.getElementById("code").style.borderColor = "red";
  }
  else if(x.valueKM == "")
  {
    document.getElementById("value1").innerHTML = "Vui lòng nhập mã khuyến mãi";
    document.getElementById("valueKM").style.borderColor = "red";
  }
  else if(x.valueMax == "")
  {
    document.getElementById("value2").innerHTML = "Vui lòng nhập mã khuyến mãi";
    document.getElementById("valueMax").style.borderColor = "red";
  }
  else if(x.timeStart == "")
  {
    document.getElementById("time1").innerHTML = "Vui lòng nhập mã khuyến mãi";
    document.getElementById("timeStart").style.borderColor = "red";
  }
  else if(x.timeEnd == "")
  {
    document.getElementById("time2").innerHTML = "Vui lòng nhập mã khuyến mãi";
    document.getElementById("timeEnd").style.borderColor = "red";
  }
  // else if( )
  // {
  //   document.getElementById("count1").innerHTML = "Vui lòng nhập số lượng";
  //   console.log("count1 : ");
  //   document.getElementById("nume").style.borderColor = "red";
  // }
  else alert("Lưu thành công");
}
