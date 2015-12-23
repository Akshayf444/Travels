
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

<ul class="table-view">
    <li class="table-view-divider">POPULAR DESTINATIONS</li>
    <li class="table-view-cell">
            <li class="table-view-cell media">
                <a class="navigate-right">
                    <img class="media-object pull-left" src="<?php echo asset_url() ?>images/Venice.jpg">
                    <div class="media-body">
                        Venice, Italy
                        <p>Venice is built on 117 small islands and has some 150 canals and 409 bridges.</p>
                        <button class="btn btn-primary btn-block">Book Now</button>
                    </div>
                </a>
            </li>
            <li class="table-view-cell media">
                <a class="navigate-right">
                    <img class="media-object pull-left" src="http://placehold.it/42x42">
                    <div class="media-body">
                        Item 1
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet.</p>
                    </div>
                </a>
            </li>
            <li class="table-view-cell media">
                <a class="navigate-right">
                    <img class="media-object pull-left" src="http://placehold.it/42x42">
                    <div class="media-body">
                        Item 1
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet.</p>
                    </div>
                </a>
            </li>
        
    </li>
</ul>

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