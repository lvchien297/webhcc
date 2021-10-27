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
                        <h2 class="page-header">HCC Shop</h2>
                        
                        
                    </div>

                </div>

            </div>

        </div>


    </div>
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
