<div class="log-up">
            <h2 class="title-logup">Tạo tài khoản HCC</h2>
            <form id="form-logup" action="process/log_up_process.php" method="get" onsubmit="return log_up()">
                    <input class="log-up_name" type="text" placeholder="Tên tài khoản" name="ten" id=""><br>
                    <input class="log-up_password" type="password" placeholder="Mật khẩu" name="matkhau" id=""><br>
                    <input class="log-up_phone" type="text" placeholder="Số điện thoại" name="sodienthoai" id=""><br>
                    <input class="log-up_date" type="date" placeholder="" name="ngaysinh" id=""><br>
                    <select class="log-up_gender" name="gioitinh" id="">
                       <option value="nam">Nam</option>
                         <option value="nu">Nữ</option>
  
                   </select>

                        <button id="log-up_button" type="submit">Đăng kí</button><br><br>
                        <p style="margin-left:7%;" class="link-logup">Nếu bạn đã có tài khoản thì click <a style="color:red;" href="http://localhost:8080/hcc/login.php">vào đây</a>  để đăng nhập</p>
            </form>
           
</div>