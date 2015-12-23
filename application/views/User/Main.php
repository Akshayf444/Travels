
<link href="<?php echo asset_url() ?>css/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset_url() ?>css/owl.transitions.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset_url() ?>css/responsive.css" rel="stylesheet" type="text/css"/>
<style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
</style>
<div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item"><img src="<?php echo asset_url() ?>images/2.jpg" alt="The Last of us"></div>
    <div class="item"><img src="<?php echo asset_url() ?>images/2.jpg" alt="GTA V"></div>
    <div class="item"><img src="<?php echo asset_url() ?>images/3.jpg" alt="Mirror Edge"></div>
</div>
<script src="<?php echo asset_url() ?>js/owl.carousel.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            navigation : false
        });
    });
</script>