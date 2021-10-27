<?php
   
   
    $sql="SELECT * From home";
    $result=excute($sql);
    foreach($result as $row){
?>
<div class="introduce">
        <div style="margin-top:5px;" class="introduce-top">
            <img src="<?php echo $row['home_img']; ?>" alt="" class="introduce-top_img">
        </div>
        <div class="introduce-mid">
            <p class="introduce-mid_tittle">Cửa hàng HCC</p>

            


        </div>
    <div class="introduce-bottom">
            <div class="introduce-bottom_leader">
                <img src="<?php echo $row['ceo_img']; ?>" alt="" class="leader-img">
                <p class="introduce-leader">CEO <br>    Vũ Tuấn Cảnh</p>
            </div>
            <div class="introduce-bottom_employee">
                <img src="<?php echo $row['founder_img']; ?>" alt="" class="employee-img">
                <p class="introduce-employee">FOUNDER <br> Nguyễn Quốc Huy</p>
            </div>
            <div class="introduce-bottom_staff">
                <img src="<?php echo $row['leader_img']; ?>" alt="" class="staff-img">
                <p class="introduce-staff">LEADER <br> Lê Văn Chiến</p>
            </div>
            

    </div>
</div>
<?php
    }
?>