<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $title ?></title>
        <?php $this->load->view('links'); ?>
    </head>
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid" >
                <div class="row col-sm-offset-1">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" id="homeLogo"><img class="img-responsive" src="<?php echo asset_url() ?>/images/logo.jpg" alt=""/></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                    </div>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Page Content -->
        <div class="section" >
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-lg-2">
                        <?php $CI =& get_instance(); $this->load->view('Sidebar', $CI->loadSidebar()); ?>
                    </div>
                    <div class="col-lg-10">
                        <?php $this->load->view($content, $view_data); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo asset_url() ?>/js/bootstrap.min.js"></script>    
    </body>
</html>