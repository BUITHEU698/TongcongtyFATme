function KhuyenMai(){
    location.href ="/edit_menu/frames/Khuyen_mai/them_ma/them_ma.html"
}
var d = new Date();
  var month = d.getMonth() + 1;
  var day = d.getDate();
  var year = d.getFullYear();
  var today = day + "/" + month + "/" + year  
document.getElementById("today").innerHTML = today;
document.getElementById("today2").innerHTML = today;
document.getElementById("today3").innerHTML = today;