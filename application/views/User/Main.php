
<link href="<?php echo asset_url() ?>css/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset_url() ?>css/owl.transitions.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset_url() ?>css/responsive.css" rel="stylesheet" type="text/css"/>
<style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    #owl-demo2 .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    .panel-body{
        padding: 0;
    }

   .col-xs-6{
       padding: 0;
       padding-right: 5px;
    }
</style>
<div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item"><img src="<?php echo asset_url() ?>images/2.jpg" alt="The Last of us"></div>
    <div class="item"><img src="<?php echo asset_url() ?>images/2.jpg" alt="GTA V"></div>
    <div class="item"><img src="<?php echo asset_url() ?>images/3.jpg" alt="Mirror Edge"></div>
</div>
<ul class="table-view">
  <li class="table-view-divider">Popular Places</li>
</ul>
<div class="row" style="margin-bottom:25px;">
<div id="owl-demo2" class="owl-carousel owl-theme">
    <div class="item"> 
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-6">
                    <img class="img-responsive" src="<?php echo asset_url() ?>images/Venice.jpg">
                </div>
                <div class="col-xs-6">
                    <h4>Venice</h4>
                    <p>Venice is built on 117 small islands and has some 150 canals and 409 bridges.</p>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Book Now</button>
            </div>
        </div>

    </div>
    <div class="item"> 
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-6">
                    <img class="img-responsive" src="<?php echo asset_url() ?>images/Paris.jpg">
                </div>
                <div class="col-xs-6">
                     <h4>Paris, France</h4>
                    <p>The most beautiful and romantic of all cities in the world.</p>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Book Now</button>
            </div>
        </div>

    </div>
    <div class="item"> 
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-6">
                    <img class="img-responsive" src="<?php echo asset_url() ?>images/Orlando.jpg">
                </div>
                <div class="col-xs-6">
                     <h4>Orlando, USA</h4>
                    <p>Orlando is the family entertainment capital of the world.</p>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Book Now</button>
            </div>
        </div>

    </div>
    <div class="item"> 
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-6">
                    <img class="img-responsive" src="<?php echo asset_url() ?>images/Dubai.jpg">
                </div>
                <div class="col-xs-6">
                     <h4>Dubai, UAE</h4>
                    <p>Dubai makes for great short break in the sun.</p>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Book Now</button>
            </div>
        </div>

    </div>
    <div class="item"> 
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-6">
                    <img class="img-responsive" src="<?php echo asset_url() ?>images/Cape_Town.jpg">
                </div>
                <div class="col-xs-6">
                     <h4>Cape Town</h4>
                    <p>The most popular international tourist destination in South Africa.</p>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Book Now</button>
            </div>
        </div>

    </div>
</div>
</div>

<script src="<?php echo asset_url() ?>js/owl.carousel.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            autoPlay:3000,
            paginationSpeed: 400,
            singleItem: true,
            navigation : false
        });
        $("#owl-demo2").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            navigation : false
        });
    });
</script>