<?php
//echo dpm($fields);
//echo "teaser";
?> 

  <div class="content"<?php print $content_attributes; ?>>
  <div id="front_product">
  <div class="title1">
          <div class="a1"> <h1<?php print $title_attributes; ?>><?php print $title; ?></h1> </div>
        </div>
 <div id="prod_image">
<?php print render($content['field_product_image']); ?> <br /><br /></div>
<div id="pro_body"> <?php print render($content['body']); ?><br /><br /></div>
<div id="pro_readmore"><a href="<?php print $node_url; ?>">Read more</a></div>
</div>
</div>
 
  