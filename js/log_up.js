function log_up(){
        let name=$('.log-up_name').val();
        let password=$('.log-up_password').val();
        let phone=$('.log-up_phone').val();
        let date=$('.log-up_date').val();
    if(name=="" || password==""||phone==""||date==""){
        alert("Bạn chưa nhập đầy đủ thông tin");
        return false;
    }

}