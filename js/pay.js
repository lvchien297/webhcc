function movepay(){

    if($('#name').val()==""||$('#sdt').val()==""||$('#address').val()=="" )
    {
        alert("Bạn chưa nhập đầy đủ thông tin khách hàng");
        return false;

    }
    else{
      
        
       window.location="http://localhost:8080/webshop/index.php?danhmuc=sanpham";
        return true;
    }


}