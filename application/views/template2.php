<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo isset($title) ? $title : ""; ?></title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link href="<?php echo asset_url() ?>css/ratchet.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo asset_url() ?>css/app.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo asset_url() ?>css/ratchet-theme-ios.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo asset_url() ?>css/docs.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo asset_url() ?>css/pygments-manni.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header style="height: 11%;" class="bar bar-nav">
            <h1 class="title" >
                <img style="height: 99%;" src="<?php echo asset_url() ?>images/travels.png" alt=""/>
            </h1>
        </header>
        <?php $this->load->view($content, $view_data); ?>
        <?php $this->load->view('footer'); ?>
        <script src="<?php echo asset_url() ?>js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo asset_url() ?>js/ratchet.min.js" type="text/javascript"></script>
        <script src="<?php echo asset_url() ?>js/segmented-controllers.js" type="text/javascript"></script>
        <script src="<?php echo asset_url() ?>js/modals.js" type="text/javascript"></script>
        <script src="<?php echo asset_url() ?>js/popovers.js" type="text/javascript"></script>
        <script src="<?php echo asset_url() ?>js/push.js" type="text/javascript"></script>
        <script src="<?php echo asset_url() ?>js/sliders.js" type="text/javascript"></script>
        <script src="<?php echo asset_url() ?>js/toggles.js" type="text/javascript"></script>
        <script src="<?php echo asset_url() ?>js/docs.js" type="text/javascript"></script>
        <script src="<?php echo asset_url() ?>js/docs.min.js" type="text/javascript"></script>
        <script src="<?php echo asset_url() ?>js/fingerblast.js" type="text/javascript"></script>
    </body>
</html>

