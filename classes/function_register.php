<?php
include_once('generic.class.php');
?>
<?php
function display_registerproduct() {

	    global $generic;

		$sql = "SELECT * FROM advertisement_products WHERE label ='Register' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$posX = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				//print_r($row);
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $posX[$pos[0]][$pos[1]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell'],
											'image' => $row['image'],
										    );
			}
            
		
		//print_r($posX);
	   $i = 0;
       foreach($posX as $pos){
		  
	?>
            <div class="span4">
              <div class="fullwidthbanner-container slider-main margin-bottom-10">
                <div class="fullwidthabnner<?php echo $i+1; ?>">
                  <ul class="revolutionul" style="display:none;">
                
						   <?php  foreach($pos as $pos){ 
						         if(!empty($pos['image'])){
						           $image = 'documents/product/'.$pos['image'];
								 }else{
								    $image = 'documents/product/default.jpg';
								 }
						   ?>
                                <li data-transition="fade" data-slotamount="8" onClick="getProductPage()" class="pointer" data-masterspeed="700" data-delay="2400" data-thumb= ""> 
                                  <img src="<?php echo $image; ?>" alt="" style="width:358px"> 
                                                 
                                     </li>
                           <?php  } ?>
                        </ul>
                      <div class="tp-bannertimer tp-bottom"></div>
                    </div>
                  </div>
                </div>
        <?php 
	     $i++;
	   }
	?>
             
<?php		
		}
} // display home product function end
?>
