<div class="slider" id="mySlider">
  <div class="slide-group">
    <div class="slide">
        <img src="<?php echo asset_url()?>images/2.jpg">
      <span class="slide-text">
        <span class="icon icon-left-nav"></span>
        Slide me
      </span>
    </div>
    <div class="slide">
      <img src="<?php echo asset_url()?>images/3.jpg">
    </div>
  </div>
</div>
<script>
    document
            .querySelector('#mySlider')
            .addEventListener('slide', myFunction)
</script>