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
    <?php if($this->session->has_userdata('name')):?>

        <?php require("header.php") ?>

        <div id="page-wrapper">
            <br>
            <div class="container-fluid">
                <div class="row">
                    <h2>Danh sách đơn hàng</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>ID sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá bán</th>
                                <th>Thành tiền</th>
                                <th>Tên khách hàng</th>
                                <th>SDT</th>
                                <th>Địa chỉ</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; ?>
                            <?php foreach ($guiDenOrder_view as $key => $value): ?>
                                <tr>
                                    <?php $i++; ?>
                                    <td><?= $i; ?></td>
                                    <td>
                                        <?= $value['id_product'] ?>
                                    </td>

                                    <td><?= $value['quantity'] ?></td>


                                    <td>
                                        <p><?= $value['price'] ?></p>
                                    </td>
                                    <td><?= $value['total_money'] ?></td>
                                    <td>
                                        <p>
                                            <?= $value['name_user'] ?>
                                            <a data-href="<?= $value['id_orders'];?>" class="suatenbangajax btn" href="#"><i class="fas fa-edit" style="color: green;" name ="tenUpdate"></i></a>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?= $value['phone'] ?>
                                            <a data-href="<?= $value['id_orders'];?>" class = "suasdtbangajax btn" href="#"><i class="fas fa-edit" style="color: green;"></i></a>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?= $value['address_order'] ?>
                                            <a data-href="<?= $value['id_orders'];?>" class = "suadiachibangajax btn" href="#"><i class="fas fa-edit" style="color: green;"></i></a>
                                        </p>
                                    </td>
                                    <td>

                                        <select class="form-control" id="tinh_trang" name = "tinh_trang">
                                            <option value="chua_giao_hang" selected>Chưa duyệt hàng</option>
                                            <option value="dang_giao_hang">Đang giao hàng</option>
                                            <option value="da_giao_hang">Đã giao hàng</option>

                                        </select>
                                        
                                    </td>


                                    <td style="font-size: 20px;">

                                        <a data-href="<?= $value['id_orders'];?>" class="nutxoabangajax btn"><i class="fas fa-trash-alt" style="color: red;"></i></a>


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
                $('.suatenbangajax').click(function(event) {
                    var tenkhachhang = prompt("Nhập tên mới", '');
                    if (tenkhachhang) {

                        var idOrder = $(this).data('href');
                        $.ajax({
                            url: duongdan + 'index.php/order/updateDataNameOrder',
                            type: 'POST',
                            dataType: 'json',
                            data: {tenUpdate: tenkhachhang,idOrder: idOrder},
                        })
                        .done(function() {
                            console.log("success");
                        })
                        .fail(function() {
                            console.log("error");
                        })
                        .always(function() {
                            console.log("complete");
                            location.reload();
                        });
                    }
                    

                });

                $('.suasdtbangajax').click(function(event) {
                    var tenkhachhang = prompt("Nhập sdt mới", '');
                    if (tenkhachhang) {

                        var idOrder = $(this).data('href');
                        $.ajax({
                            url: duongdan + 'index.php/order/updateDataPhoneOrder',
                            type: 'POST',
                            dataType: 'json',
                            data: {tenUpdate: tenkhachhang,idOrder: idOrder},
                        })
                        .done(function() {
                            console.log("success");
                        })
                        .fail(function() {
                            console.log("error");
                        })
                        .always(function() {
                            console.log("complete");
                            location.reload();
                        });

                    }

                });

                $('.suadiachibangajax').click(function(event) {
                    var tenkhachhang = prompt("Nhập địa chỉ mới", '');
                    if (tenkhachhang) {
                        
                        var idOrder = $(this).data('href');
                        $.ajax({
                            url: duongdan + 'index.php/order/updateDataDcOrder',
                            type: 'POST',
                            dataType: 'json',
                            data: {tenUpdate: tenkhachhang,idOrder: idOrder},
                        })
                        .done(function() {
                            console.log("success");
                        })
                        .fail(function() {
                            console.log("error");
                        })
                        .always(function() {
                            console.log("complete");
                            location.reload();
                        });
                        
                    }

                });



                $('.nutxoabangajax').click(function(event) {
                    /* Act on the event */
                    linkxoa = $(this).data('href');
                    doituongcanxoa = $(this).parent().parent();
                    $.ajax({
                        url: duongdan + 'index.php/order/deleteOrder/' + linkxoa,
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
