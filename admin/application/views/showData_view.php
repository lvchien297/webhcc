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

    

    <link href="<?php echo base_url(); ?>public/css/startmin.css" rel="stylesheet">


    <link href="<?php echo base_url(); ?>public/fonts/font/css/all.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php if ($this->session->has_userdata('name')): ?>
        
        <?php require("header.php") ?>
        <div id="page-wrapper">
            <br>
            <div class="container-fluid">
                <div class="row">
                    <h2>Danh sách sản phẩm</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Sản phẩm</th>
                                <th>Thương hiệu</th>
                                <th>Mô tả</th>
                                <th>Giá bán</th>
                                <th>Cài đặt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; ?>
                            <?php foreach ($guiDenView as $key => $value): ?>
                                <tr>    

                                    <?php $i++; ?>
                                    <td><?= $i; ?></td>
                                    <td style="width: 200px;"> 
                                        <img class="img-responsive" src="<?= $value['img_product'] ?>" alt="Hình ảnh" style="max-width: 150px;" > 
                                    </td>

                                    <td><?= $value['ten_con'] ?></td>
                                    <input type="hidden" id="id_product" value="<?= $value['id_product'] ?>">

                                    <td>
                                        <p><?= $value['content_img'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $value['price'] ?></p>
                                    </td>
                                    <td style="font-size: 20px;">
                                        <a class = "btn" href="<?= base_url(); ?>index.php/showData/editData/<?= $value['id_product'];?>"><i class="fas fa-edit" style="color: green;"></i></a>
                                        <a class ="btn nutxoabangajax" data-href="<?= $value['id_product'];?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>


                                    </td>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url(); ?>public/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url(); ?>public/js/startmin.js"></script>

        <script>
            $(function(){
                var duongdan = '<?= base_url(); ?>'
                $('.nutxoabangajax').click(function(event) {
                    /* Act on the event */
                    linkxoa = $(this).data('href');
                    console.log(linkxoa);
                    doituongcanxoa = $(this).parent().parent();
                    $.ajax({
                        url: duongdan + 'index.php/showData/ajax_delete/' + linkxoa,
                        type: 'POST',
                        dataType: 'json',
                    })
                    .done(function() {
                        console.log("success");
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                        doituongcanxoa.remove();
                    });

                });

            })
        </script>
    <?php else: ?>
        <?php redirect('login','refresh'); ?>
    <?php endif ?> 
</body>
</html>
