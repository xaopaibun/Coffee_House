$(document).ready(function(){
    // $(".suasanpham").hide();
    // $('.themsp').hide();
    // $('.themmoisanpham').click(function(){
        
    //     $('.hienthidata').hide();
    //     $('.themsp').show();

    //   });
    //   $('.themmoidulieu').click(function (){
    //     $.ajax({
    //       type: "POST",
    //       url: "http://localhost/CoffeeHouse/AdminQuanTri/Them.php",
    //       data: {
    //         TenCoffee: $('#TenCoffee').val(),
    //         LoaiCoffee:$('#LoaiCoffee').val(),
    //         // anh:$('#anh').val();
    //         Mo_Ta:CKEDITOR.instances['Mo_Ta'].getData(),
    //         Gia:$('#Gia').val(),
    //         SoLuong : $('#SoLuong').val(),
    //         ThongTin:$('#ThongTin').val(),
    //         ThuongHieu : $('#ThuongHieu').val(),
    //       },
    //       dataType: "JSON",
    //       success: function (response) {
    //         console.log(response);
    //       }, 
    //     }).always(function(){
    //       today = new Date();
    //       TenLoai = '';
    //       if($('#LoaiCoffee').val() == 1){
    //           TenLoai = 'Đồ Uống';
    //       }
    //       else if($('#LoaiCoffee').val() == 2){
    //         TenLoai = 'Cà Phê Cảm Hứng';
    //       }
    //       else if($('#LoaiCoffee').val() == 3){
    //         TenLoai = 'Cà Phê Pha Việt';
    //       }
    //       else if($('#LoaiCoffee').val() == 4){
    //         TenLoai = 'Cà Phê Thế Giới';
    //       }
    //       Row =  '<tr style="height: 80px;">';
    //       Row +=  '<td scope="row">&nbsp</td>';
    //       Row +=  '<td style="width: 70px;">'+$('#TenCoffee').val()+'</td>';
    //       Row +=  '<td>'+TenLoai +'</td>';
    //       Row +=  '<td style="width: 250px; line-height: 36px; -webkit-line-clamp: 3; -webkit-box-orient: vertical;overflow: hidden;display: -webkit-box;">'+CKEDITOR.instances['Mo_Ta'].getData()+'</td>';
    //         Row +=  '<td ><img width="100px" height="100px" src="IMG/001.jpg" alt=""></td>';
    //         Row +=  '<td>'+ $('#SoLuong').val()+'</td>';
    //         Row +=  '<td>'+$('#Gia').val()+' VNĐ</td>';
    //         Row +=  '<td>'+ today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate()+" "+today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds()+'</td>';
    //         Row +=  '<td><a data-href="" class="NutXoa">  <button type="button" class="btn btn-primary btn-lg">Xóa</button></a><a class="NutSua" data-href="">  <button type="button" class="btn btn-warning btn-lg">Sửa </button></a></td>';
    //         Row +=  '</tr>';
    //         $('#body_table').append(Row);
    //         $('#TenCoffee').val('');
    //         $('#LoaiCoffee').val('');
    //         CKEDITOR.instances['Mo_Ta'].getData('');
    //         $('#Gia').val('');
    //         $('#SoLuong').val('');
    //         $('#ThongTin').val('');
    //         $('#ThuongHieu').val('');
    //     });
        
    //     $('.hienthidata').show();
    //     $('.themsp').hide();
    //     return false;
    //   });
      
      $('.NutXoa').click(function () {
       idSanPham = $(this).data('href');
       DongXoa = $(this).parent().parent();
       console.log(idSanPham);
       $.ajax({
        type: "POST",
        url: 'http://localhost/CoffeeHouse/AdminQuanTri/XoaSP.php?idCoffee= '+idSanPham,
        data: {},
        dataType: "JSON",
        success: function (response) {
          console.log(response);
        }
        }).always(function(){
            DongXoa.remove();
      });
       return false;
      });
      
      // $('.NutSua').click(function () {
      //   idSanPham = $(this).data('href');
      //   $(".suasanpham").show();
      //   $('.hienthidata').hide();
      //   $.ajax({
      //    type: "POST",
      //    url: 'http://localhost/CoffeeHouse/AdminQuanTri/SuaSP.php?idCoffee= '+idSanPham,
      //    data: {},
      //    dataType: "JSON",
      //    success: function (response) {
      //      console.log(response);
      //    }
      //  });
      //   return false;
      //  });


      //  $('.themmoidulieuloaisanpham').click(function (){
      //    console.log('dhashzj');
      //   $.ajax({
      //     type: "POST",
      //     url: "http://localhost/CoffeeHouse/AdminQuanTri/ThemLoai.php",
      //     data: {
      //       LoaiCoffee: $('#TenLoaiCoffee').val(),
      //     },
      //     dataType: "JSON",
      //     success: function (response) {
      //       console.log(response);
      //     }, 
      //   }).always(function(){
      //     Row =  '<tr style="height: 80px;">';
      //     Row += '<td  class="text-center" scope="row"></td>';
      //     Row += '<td class="text-center">'
      //     Row += $('#TenLoaiCoffee').val();
      //     Row += '</td>';
      //     Row+= "<td  class='text-center' ><a data-href='' class='NutXoa'>  <button type='button' class='btn btn-primary btn-lg'>Xóa</button></a><a class='NutSua' data-href=''>  <button type='button' class='btn btn-warning btn-lg'>Sửa </button></a></td>";
      //     Row +='</tr>';
      //     $('#body_table').append(Row);
      //     $('#TenLoaiCoffee').val('');
      //   });
      //   $('.hienthidata').show();
      //   $('.themsp').hide();
      //   return false;
      // });
      // $('.NutXoaLoaiSanPham').click(function () {
      //   idLoai = $(this).data('href');
      //   DongXoa = $(this).parent().parent();
      //   console.log(idLoai);
      //   $.ajax({
      //    type: "POST",
      //    url: 'http://localhost/CoffeeHouse/AdminQuanTri/XoaLoaiSanPham.php?idLoai='+idLoai,
      //    data: {},
      //    dataType: "JSON",
      //    success: function (response) {
      //      console.log(response);
      //    }
      //    }).always(function(){
      //        DongXoa.remove();
      //  });
      //   return false;
      //  });
  });