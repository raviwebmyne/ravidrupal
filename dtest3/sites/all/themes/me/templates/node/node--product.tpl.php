<?php

//echo "procut";
?>
  <div class="content"<?php print $content_attributes; ?>>
    <div id="full_product">
  <div class="col-lg-11">
	      <div <?php print $title_attributes; ?> class="title"><?php print $title; ?></div>
	</div>
  <div class="col-lg-6" align="right">
        <div class="pimg"> <?php print render($content['field_product_image']); ?> </div>
      </div>
<div class="col-lg-6">
<div class="container1">
          <ul class="rtabs">
            <li><a href="#view1">Overview</a></li>
            <li><a href="#view2">Details</a></li>
            <li><a href="#view3">Download</a></li>
          </ul>
          <div class="panel-container">
            <div id="view1">
             <?php print render($content['body']); ?>
              <div class="row">
                <div class="col-lg-6">
                      <h4>Features</h4>
                      <div class="limg"> <a href="#"><img src="sites/all/themes/me/images/specs-icon_ecosaving.png" /></a> <a href="#"><img src="sites/all/themes/me/images/specs-icon_freezing.png" /></a> <a href="#"><img src="sites/all/themes/me/images/specs-icon_capacity.png" /></a> </div>
                </div>
                <div class="col-lg-6" align="right">
                      	<h4>Markets</h4>
                    	<div class="limg"> <a href="#"><img src="sites/all/themes/me/images/icon_marine-small.png" /></a> <a href="#"><img src="sites/all/themes/me/images/icon_catering-small.png" /></a> <a href="#"><img src="sites/all/themes/me/images/icon_hospitality-small.png" /></a> </div>
              </div>
            </div>
            </div>
            <div id="view2">
              <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Sed hendrerit. Morbi ac felis. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Nunc nulla. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Donec venenatis vulputate lorem. </p>
            </div>
            <div id="view3">
              <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Sed hendrerit. Morbi ac felis. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Nunc nulla. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Donec venenatis vulputate lorem. </p>
            </div>
          </div>
        </div>
        
        </br><ul id="demoList">
          <li>
          	<span class="my-custom-title" style="border-bottom: 1px solid #fff;"><h4 style="margin:0; color:#ffffff;"><span class="glyphicon glyphicon-menu-down2" aria-hidden="true"></span> INTERESTED? CONTACT US</h4></span>
            <ul>
              <li>
              	<div class="row">
                	<div class="col-lg-12">
                    	<h4 style="color:#ffffff;">Nearby office: The Netherlands</h4>
                    </div>
                </div>
                <div class="row">
                	<div class="col-lg-6">
                    	<h5 style="color:#ffffff;">Customer Service</h5>
                        <div style="margin-bottom:5px;"><img src="sites/all/themes/me/images/Phone_Hook.png"> +31 20 5650420</div>
                        <div><img src="sites/all/themes/me/images/email-white.png"> <u>sales@hoshizaki.nl </u></div>
                    </div>
                	<div class="col-lg-6">
                    	<h5 style="color:#ffffff;">Contact address</h5>
                        <p style="color:#fff;">Hoshizaki Netherlands<br>
          Keienbergweg 50 C/D<br>
          1101 GC Amsterdam<br>
          The Netherlands</p>
                    </div>
                </div>
                <div style="background: #fff;
  position: absolute;
  width: 104.8%;
  margin-left: -10px;
  color: #000;
  padding: 5px 10px;"><strong>Not your country?</strong>&nbsp;&nbsp;<select>
        <option>Select other branch office</option>
        <option>België</option>
        <option>Deutchland</option>
        <option>England</option>
        <option>France</option>
        <option>Hungary</option>
        <option>Switzerland</option>
        <option>Espanha</option>
        <option>Portugal</option>
      </select></div>
              </li>              
            </ul>            
          </li>
        </ul></div>


</div>
</div>
 <script type="text/javascript">
		$(document).ready(function() {
			$('#demoList').sapling({ multiexpand: false, animation: true });
		});
	</script> 