<?php
//echo "2222222222222";
?>
  <div class="content"<?php print $content_attributes; ?>>
    <div id="full_product">
    <div class="container">
  <div class="row">
    <div class="col-lg-12"> <?php print render($content['field_full_banner']); ?> </div>
  </div>
  <div class="col-lg-8">
  <?php print render($content['body']); ?>
  </div>
  <div class="col-lg-4">
  <h3>  <?php echo "Marketsegments"; ?></h3>
  <div style="float:left;"><?php print render($content['field_marketsegments_image']); ?> </div>
   <p style="color: #333;    font-family: "trade";    font-size: 14px;"><?php print render($content['field_marketsegments']); ?></p>
   <h3>Share this project:</h3>
    <a href="#"><img src="sites/all/themes/me/images/Rectangle_30.png" /></a>&nbsp; <a href="#"><img src="sites/all/themes/me/images/Rectangle_30_copy.png" /></a>&nbsp; <a href="#"><img src="sites/all/themes/me/images/Rectangle_30_copy_2.png" /></a>
  </div>
</div>
    </div>
    </div>