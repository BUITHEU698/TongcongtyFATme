// function checkRadio() {
    
//     var radioBox = document.getElementById("apply_4");
    
//     var text = document.getElementById("show");
//     if (radioBox.checked == true){
//         text.style.display = "block";
//       } 
//     else {
//         text.style.display = "none";
//       }
// }
function CheckBox() {
    var checkBox = document.getElementById("showCheckBox");
    var text = document.getElementById("show_checkbox");
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }
  function CheckBox2() {
    var checkBox2 = document.getElementById("checkBoxDanhMuc");
    var text = document.getElementById("checkbox_danh_muc");
    if (checkBox2.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }
function cancle(){
    alert("Bạn chắc chắn muốn huỷ ?")
    location.href = "/edit_menu/frames/Khuyen_mai/Chuong_trinh_khuyen_mai/chuong_trinh_khuyen_mai.html";
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
// $(document).ready(function() {
//   $('input[type="radio"]').click(function() {
//     if ($(this).attr('id') == 'danh_muc') {
//       $('#show2').show();
//     } else {
//       $('#show2').hide();
//     }
//   });
// });