$(document).ready(function(){
  new WOW().init();
    $('.PhieuDienThongTin').hide();
    $('.nutdienthongtindathang').click(function(){
      console.log("Đa click");
      $('.PhieuDienThongTin').show();
    })
})
Cong = () => {
  console.log("Đa click");
  var count = document.getElementById("soluong").value;
  document.getElementById("soluong").value = count++;
}
