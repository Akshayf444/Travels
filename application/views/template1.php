<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?php echo asset_url() ?>css/ratchet-theme-android.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo asset_url() ?>js/ratchet.min.js" type="text/javascript"></script>
        <title><?php echo $title ?></title>
        <?php $this->load->view('links'); ?>
    </head>
    <body>
        <?php $CI =& get_instance(); $this->load->view('navigation', $CI->loadNavigation()); ?>
        <div class="section" >
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-lg-10">
                        <?php $this->load->view($content, $view_data); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>

        <!-- Bootstrap Core JavaScript -->    
    </body>
</html>