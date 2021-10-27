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
    <!-- <link href="<?php echo base_url(); ?>public/css/metisMenu.min.css" rel="stylesheet"> -->

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
                            Sửa sản phẩm
                        </h1>
                        <?php foreach ($dataEdit as $key => $value): ?>

                            <!-- <form style="width: 500px;"  action = "../updateData/" method = "get"> -->
                                <div style="width: 500px;">

                                    <fieldset class="form-group" style="width: 200px;">
                                        <label for="thuong_hieu">Thương hiệu: </label>
                                        <input class="form-control" type="text"  placeholder="" name="thuong_hieu" id = "thuong_hieu"value="<?= $value['ten_con'] ?>" readonly>

                                    </fieldset>

                                    <fieldset class="form-group">
                                        <label for="mo_ta">Thông tin mô tả:</label>
                                        <textarea class="form-control" id="mo_ta" rows="4" name="mo_ta"><?= $value['content_img'] ?></textarea>
                                        <input type="hidden" id="id_product" value = "<?= $value['id_product'] ?>">
                                    </fieldset>
                                    <fieldset>
                                        <label for="ma_sp">Mã sản phẩm</label>
                                        <input class="form-control" type="text" placeholder="" name="ma_sp" id= "ma_sp" value="<?= $value['masp'] ?>">
                                    </fieldset>
                                    <br>
                                    <fieldset>
                                        <label for="gia_tien">Giá tiền</label>
                                        <input class="form-control" type="text" placeholder=""name ="gia_tien" id="gia_tien" value="<?= $value['price'] ?>">
                                    </fieldset>
                                    <br>
                                    <fieldset class="form-group">
                                        <label for="them_anh">Ảnh sản phẩm:</label>
                                        <br>
                                        <img src="<?= $value['img_product'] ?>" alt="logo product" width="100px">
                                        <br>
                                        

                                        

                                    </fieldset>

                                    <button type="button" class="btn btn-primary" name="submit" id="suadatabangajax">Lưu</button>
                                </div>
                                <!-- </form> -->

                            <?php endforeach ?>



                        </div>

                    </div>

                </div>

            </div>

            
            <script>
                $(function(){
                    var duongdan = '<?= base_url() ?>';
                    //console.log(document.getElementById("them_anh").value);

                    $('#suadatabangajax').click(function(event) {

                        $.ajax({
                            url: duongdan + 'index.php/showData/ajax_edit',
                            type: 'POST',
                            dataType: 'json',
                            data:{
                                id_product: $('#id_product').val(),
                                mo_ta: $('#mo_ta').val(),
                                ma_sp: $('#ma_sp').val(),
                                gia_tien: $('#gia_tien').val(),

                        }
                    })
                        .done(function() {

                            
                        })
                        .fail(function() {
                            console.log("error");
                        })
                        .always(function() {
                            console.log("complete");
                            history.back();


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
    <script src="<?php echo base_url(); ?>public/js/startmin.js"></script>

<?php else: ?>
    <?php redirect('login','refresh'); ?>
<?php endif ?> 
</body>
</html>
