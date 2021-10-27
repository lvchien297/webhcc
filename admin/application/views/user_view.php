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
            <br>
            <div class="container-fluid">
                <div class="row">
                    <h2>Danh sách tài khoản</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tài khoản</th>
                                <th>Mật khẩu</th>
                                <th>SĐT</th>
                                <th>Ngày sinh</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; ?>
                            <?php foreach ($guiDenView as $key => $value): ?>
                                <tr>    
                                   <?php $i++; ?>
                                   <td><?= $i; ?></td>
                                   <td><?= $value['name_user'] ?></td>
                                   <td><?= $value['password_user'] ?></td>
                                   <td><?= $value['phone'] ?></td>
                                   <td><?= $value['birthday'] ?></td>



                                   <td style="font-size: 20px;">
                                    <a data-href="<?= $value['id_user'];?>" class="nutxoabangajax btn"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(function(){
                var duongdan = '<?= base_url(); ?>';

                $('.nutxoabangajax').click(function(event) {
                    /* Act on the event */
                    linkxoa = $(this).data('href');
                    doituongcanxoa = $(this).parent().parent();
                    $.ajax({
                        url: duongdan + 'index.php/account/deleteUser/' + linkxoa,
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
