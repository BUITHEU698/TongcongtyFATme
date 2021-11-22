function checkRadio() {
    // document.getElementById('show').style.display = 'block';
    var radioBox = document.getElementById("apply_4");
    // Get the output text
    var text = document.getElementById("show");
    if (radioBox.checked == true){
        text.style.display = "block";
      } else {
        text.style.display = "none";
      }
}
function CheckBox() {
    // Get the checkbox
    var checkBox = document.getElementById("showCheckBox");
    // Get the output text
    var text = document.getElementById("show_checkbox");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }
  function cancle(){
    alert("Bạn chắc chắn muốn huỷ ?")
    location.href = "/edit_menu/frames/Khuyen_mai/Chuong_trinh_khuyen_mai/chuong_trinh_khuyen_mai.html";
}