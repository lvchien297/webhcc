<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HCC</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>public/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <!-- <link href="<?php echo base_url(); ?>public/css/timeline.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>public/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!-- <link href="<?php echo base_url(); ?>public/css/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>public/fonts/font/css/all.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php if ($this->session->has_userdata('name')): ?>

    <?php require("header.php") ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Thêm bài viết mới
                    </h1>
                    <div style="width: 500px;">
                        <fieldset class="form-group" style="width: 200px;">
                            <label for="uutien">Mức độ ưu tiên: </label>
                            <select class="form-control" id="uutien" name ="uutien">
                                <option value="0">Không hiển thị</option>
                                <option value="1">hiển thị</option>
                            </select>
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="tieu_de">Tiêu đề: </label>
                            <textarea class="form-control" id="tieu_de" rows="4" name="tieu_de"></textarea>
                        </fieldset>
                        <fieldset>
                            <label for="noi_dung">Nội dung</label>
                            <input class="form-control" type="text" placeholder="" name="noi_dung" id="noi_dung">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="them_anh">Ảnh bài viết:</label>
                            <input name="files" type="file" class="form-control-file" id="them_anh">

                        </fieldset>

                        <button type="button" class="btn btn-primary nutxulyajax" name="submit">Lưu</button>

                    </div>
                    <br>
                    <div class="noidung">
                        <h5>Nội dung đã thêm: </h5>
                    </div>





                </div>

            </div>

        </div>

    </div>



    <script>

        $(function(){
            var duongdan = '<?= base_url() ?>';
            // body...
            $('.nutxulyajax').click(function(event) {
                //upload anh
                var file_data = $('#them_anh').prop('files')[0];
                //lấy ra kiểu file
                if (file_data) {
                    var type = file_data.type;
                    //Xét kiểu file được upload
                    var match= ["image/gif","image/png","image/jpeg",];

                    if(type == match[0] || type == match[1] || type == match[2])
                    {
                    //khởi tạo đối tượng form data
                    var form_data = new FormData();
                    //thêm files vào trong form data
                    form_data.append('file', file_data);
                    //sử dụng ajax post
                    $.ajax({
                    url: duongdan +'index.php/addData/upload', // gửi đến file upload.php 
                    type: 'POST',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,                       
                });
                } else{
                    alert('Chỉ được upload file ảnh');
                // $('#file').val('');
            }
        }else{
            alert("chưa thêm ảnh cho sản phẩm");
        }


        $.ajax({
            url: duongdan + 'index.php/news/addNews',
            type: 'POST',
            dataType: 'json',
            data:{
                uutien: $('#uutien').val(),
                tieu_de: $('#tieu_de').val(),
                noi_dung: $('#noi_dung').val(),

                them_anh: duongdan + 'img/'+ file_data['name'],

            }
        })
        .done(function() {

                // console.log(file_data['name']);
            })
        .fail(function() {
            console.log("error");
                // alert("không được để trống thông tin !");

            })
        .always(function() {            
            $('#uutien').val(0);
            // $('#tieu_de').val('');
            $('#noi_dung').val('');
            $('#them_anh').val('');
            noi_dung = '<div>'+$('#tieu_de').val() + '</div>';
            $('.noidung').append(noi_dung);

        });

    });
        })


    </script>


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>public/js/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->

    <?php else: ?>
    <?php redirect('login','refresh'); ?>
    <?php endif ?>


</body>
</html>
