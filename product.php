<?php  
include_once('classes/check.class.php'); 
//protect("1,2");

$title = 'Product';
$label = 'product';
include_once('header.php');
include_once('classes/product.class.php');

$shomeProduct = $product->homeProduct();

?>
<style>
#product-cart {
	position: absolute;
	top: 122px;   
	right: 56px;   
	z-index: 999;
	opacity: 1 ;
}
</style>


<script src="js/product.js"></script>

<div class="container min-hight">
<!-- BEGIN FILTER -->


<div class="row-fluid padd">


<div class=""  id="product-cart" style="display:none;">
  <div class="responsive pull-right" data-tablet="span12" data-desktop="span12">
    <div class="dashboard-stat green">
      <div class="visual"> <i class="icon-shopping-cart"></i> </div>
      <div class="details">
        <div class="number productCount" id="productCount"> 0 </div>
        <div class="desc">Total Price - <span id="totalProductPrice"> $ 0.00 </span></div>
      </div>
      <a class="more" href="register.php"> Add Cart <i class="m-icon-swapright m-icon-white"></i> </a> </div>
  </div>
</div>

    <h2>Profile page Details</h2>
     <div class="border"></div>
  <div class="span6">
    <div class="row-fluid span12">
      <div class="span8">
        <form action="#" class="form-horizontal">
          <div class="control-group">
            <label class="control-label leftalign">NAME</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">PARTY</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">NUMBER</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">PHOTO</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">DESCRIPTION ABOUT YOU</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">PHONE</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">FAX</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">ADDRESS</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">WEB ADDRESS</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">SOCIAL NETWORKING LINKS</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">RECIEVE DIRECT MAIL</label>
            <div class="controls"> <span class="tickmark"><i class="icon-ok"></i></span> </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  <div class="span6">
  <form action="#" class="form-horizontal">
  <div class="control-group">
            <label class="control-label leftalign">CAMPAIGN PHOTO</label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1">YES</option>
                <option value="Category 4">NO</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">CAMPAIGN VIDEO</label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1">YES-100</option>
                <option value="Category 4">NO-100</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">COMPAIGN AUDIO</label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1">YES-100</option>
                <option value="Category 4">NO-100</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label leftalign">PLAN DURATION</label>
            <div class="controls">
              <select class="select2 span5 m-wrap" tabindex="1">
                <option value="Category 1">YES-100</option>
                <option value="Category 4">NO-100</option>
              </select>
            </div>
          </div>
        <div class="buy2">
        <button type="button" class="btn btn-info onClick="addtocart()">BUY</button>
        </div>
          
  </form>
  
  </div>
</div>

<!-- END CONTAINER --> 

<!-- BEGIN CONTAINER -->

<div class="container min-hight advertisement"> 
  <h2 class="marg">Home Page Advertisement</h2>
  <div class="border"></div>
  <div class="row-fluid ">
    <div class="span12 homeProduct"> 
    
    
    <?php
	   $i = 0;
       foreach($shomeProduct as $posx){
	?>
         <div class="span4 <?php echo 'homeA'.$i ?>">
            <div class="span6">
 				<h4>Tile <?php echo $i+1 ; ?></h4>
                <div class="checkbox">
                   <?php  foreach($posx as $posx){ ?>
                    <input type="checkbox" value="<?php echo $posx['name']; ?>|<?php echo $posx['price']; ?>" class="<?php echo $posx['label']; ?>"    <?php echo $posx['sell'] == 1 ?'disabled=disabled' : ''; ?> > <label><?php echo $posx['name']; ?>  &nbsp; $<?php echo $posx['price']; ?></label>
                   <?php  } ?>
                </div>
              </div>
             <div class="span4 buybtn">
                <div class="buy">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
            </div>               
           </div>
    <?php 
	     $i++;
	   }
	?>
   
       
    </div>
  </div>
 
    <h2>Other page Ads</h2>
    <div class="border"></div>
	<div class="row-fluid">
          <div class="span6 homeProduct">
          	<h4>REGISTER</h4>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|register" class="Home"> 1st Image $1.00
                  <input type="checkbox" value="1st Slide|1|register" class="Home"> 2st Image $1.00
                  <input type="checkbox" value="1st Slide|1|register" class="Home"> 3st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|register" class="Home"> 4st Image $1.00
                  <input type="checkbox" value="1st Slide|1|register" class="Home"> 5st Image $1.00
                  <input type="checkbox" value="1st Slide|1|register" class="Home"> 6st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|register" class="Home"> 7st Image $1.00
                  <input type="checkbox" value="1st Slide|1|register" class="Home"> 8st Image $1.00
                  <input type="checkbox" value="1st Slide|1|register" class="Home"> 9st Image $1.00
                </div> 
              </div>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>
          
          <div class="span6 homeProduct">
          	<h4>LOGIN PAGE</h4>
              <div class="span4 homeProduct">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|login" class="Home"> 1st Image $1.00
                  <input type="checkbox" value="1st Slide|1|login" class="Home"> 2st Image $1.00
                  <input type="checkbox" value="1st Slide|1|login" class="Home"> 3st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|login" class="Home"> 4st Image $1.00
                  <input type="checkbox" value="1st Slide|1|login" class="Home"> 5st Image $1.00
                  <input type="checkbox" value="1st Slide|1|login" class="Home"> 6st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|login" class="Home"> 7st Image $1.00
                  <input type="checkbox" value="1st Slide|1|login" class="Home"> 8st Image $1.00
                  <input type="checkbox" value="1st Slide|1|login" class="Home"> 9st Image $1.00
                </div> 
              </div>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>
          
          <div class="span6 homeProduct">
          	<h4>CONTACT US PAGE</h4>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|contact" class="Home"> 1st Image $1.00
                  <input type="checkbox" value="1st Slide|1|contact" class="Home"> 2st Image $1.00
                  <input type="checkbox" value="1st Slide|1|contact" class="Home"> 3st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|contact" class="Home"> 4st Image $1.00
                  <input type="checkbox" value="1st Slide|1|contact" class="Home"> 5st Image $1.00
                  <input type="checkbox" value="1st Slide|1|contact" class="Home"> 6st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|contact" class="Home"> 7st Image $1.00
                  <input type="checkbox" value="1st Slide|1|contact" class="Home"> 8st Image $1.00
                  <input type="checkbox" value="1st Slide|1|contact" class="Home"> 9st Image $1.00
                </div> 
              </div>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>
          
          <div class="span6 homeProduct">
          	<h4>ABOUT PAGE</h4>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|about" class="Home"> 1st Image $1.00
                  <input type="checkbox" value="1st Slide|1|about" class="Home"> 2st Image $1.00
                  <input type="checkbox" value="1st Slide|1|about" class="Home"> 3st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|about" class="Home"> 4st Image $1.00
                  <input type="checkbox" value="1st Slide|1|about" class="Home"> 5st Image $1.00
                  <input type="checkbox" value="1st Slide|1|about" class="Home"> 6st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|about" class="Home"> 7st Image $1.00
                  <input type="checkbox" value="1st Slide|1|about" class="Home"> 8st Image $1.00
                  <input type="checkbox" value="1st Slide|1|about" class="Home"> 9st Image $1.00
                </div> 
              </div>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>

          <div class="span6 homeProduct">
          	<h4>WELCOME PAGE</h4>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|welcome" class="Home"> 1st Image $1.00
                  <input type="checkbox" value="1st Slide|1|welcome" class="Home"> 2st Image $1.00
                  <input type="checkbox" value="1st Slide|1|welcome" class="Home"> 3st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|welcome" class="Home"> 4st Image $1.00
                  <input type="checkbox" value="1st Slide|1|welcome" class="Home"> 5st Image $1.00
                  <input type="checkbox" value="1st Slide|1|welcome" class="Home"> 6st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|welcome" class="Home"> 7st Image $1.00
                  <input type="checkbox" value="1st Slide|1|welcome" class="Home"> 8st Image $1.00
                  <input type="checkbox" value="1st Slide|1|welcome" class="Home"> 9st Image $1.00
                </div> 
              </div>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>

          <div class="span6 homeProduct">
          	<h4>ACCOUNT SPONSOR INFO PAGE</h4>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|account_sponsor" class="Home"> 1st Image $1.00
                  <input type="checkbox" value="1st Slide|1|account_sponsor" class="Home"> 2st Image $1.00
                  <input type="checkbox" value="1st Slide|1|account_sponsor" class="Home"> 3st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|account_sponsor" class="Home"> 4st Image $1.00
                  <input type="checkbox" value="1st Slide|1|account_sponsor" class="Home"> 5st Image $1.00
                  <input type="checkbox" value="1st Slide|1|account_sponsor" class="Home"> 6st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|account_sponsor" class="Home"> 7st Image $1.00
                  <input type="checkbox" value="1st Slide|1|account_sponsor" class="Home"> 8st Image $1.00
                  <input type="checkbox" value="1st Slide|1|account_sponsor" class="Home"> 9st Image $1.00
                </div> 
              </div>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>

          <div class="span6 homeProduct">
          	<h4>CANDIDATE INFO PAGE</h4>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|candidate_info" class="Home"> 1st Image $1.00
                  <input type="checkbox" value="1st Slide|1|candidate_info" class="Home"> 2st Image $1.00
                  <input type="checkbox" value="1st Slide|1|candidate_info" class="Home"> 3st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|candidate_info" class="Home"> 4st Image $1.00
                  <input type="checkbox" value="1st Slide|1|candidate_info" class="Home"> 5st Image $1.00
                  <input type="checkbox" value="1st Slide|1|candidate_info" class="Home"> 6st Image $1.00
                </div> 
              </div>
              <div class="span4">
                <div class="checkbox">
                  <input type="checkbox" value="1st Slide|1|candidate_info" class="Home"> 7st Image $1.00
                  <input type="checkbox" value="1st Slide|1|candidate_info" class="Home"> 8st Image $1.00
                  <input type="checkbox" value="1st Slide|1|candidate_info" class="Home"> 9st Image $1.00
                </div> 
              </div>
              
                <div class="buy1">
                <button type="button" class="btn btn-info" onClick="addtocart()">BUY</button>
                </div>
          </div>

    </div>
</div>
       
          
          
          
<!--        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>LOGIN PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>CONTACT US PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>ABOUT PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>WELCOME PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>ACCOUNT SPONSOR INFO PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
        <br>
        <br>
        <div class="row-fluid">
          <div class="span12"> <span>CANDIDATE INFO PAGE</span><br>
            <span>9 STILL ADS</span> </div>
        </div>
-->      


</div>

<?php include 'footer.php' ?>