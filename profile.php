<?php
include_once('classes/check.class.php');
//protect("1,2");
include_once('header.php');
include_once('classes/profile.class.php');
include_once('classes/listbox.class.php');
$title = 'profile';
$label = '';

$candidateinfo = $profile->getField('candidate_info');
$user_profile_id = $profile->getField('user_profile_id');
if( !empty($user_profile_id)){
	$party_symbol = 'documents/party_symbols/'.$profile->getField('party_symbols');
}else{
	$party_symbol = '';
}
if( !empty($user_profile_id)){
	$party_name = $profile->getField('candidate_political_party');
}else{
	$party_name = '';
}
$login_avatar = $profile->getField('avatar');
if( !empty($login_avatar)){
	$avatar = 'documents/avatar/'.$profile->getField('avatar');
}else{
	$avatar = 'documents/avatar/default.png';
}
$candidate_first_name    = $profile->getField('candidate_first_name');
$candidate_middle_name   = $profile->getField('candidate_middle_name');
$candidate_last_name     = $profile->getField('candidate_last_name');
$party                   = $profile->getField('candidate_political_party');
$province                = $profile->getField('candidate_province');
$candidate_address 		 = $profile->getField('candidate_address');
$candidate_city			 = $profile->getField('candidate_city');
$phone					 = $profile->getField('candidate_phone');
$fax 					 = $profile->getField('candidate_fax');
$email					 = $profile->getField('candidate_email');
$website				 = $profile->getField('candidate_website');
$facebook				 = $profile->getField('candidate_fb_link');
$twitter				 = $profile->getField('candidate_twitter_link');
$info					 = $profile->getField('candidate_info');
$created				 = $profile->getField('created');
$candidate_no			 = $profile->getField('candidate_no');
$candidate_destrict		 = $profile->getField('candidate_destrict');
$spartyList              = $listbox->getPolitical_Party_List();
$sdistrict 				 = $listbox->getDistrict();
$sprovince			     = $listbox->getProvince();
?>
    <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">               
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="assets/css/pages/portfolio.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/pages/profile.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style_profile.css" rel="stylesheet" type="text/css"/>
<script src="js/profile.js"></script>
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid profile">
					<div class="span12">
						<!--BEGIN TABS-->
						<div class="tabbable tabbable-custom tabbable-full-width">
							<div class="tab-content">
								<div class="tab-pane row-fluid active" id="tab_1_1">
									<ul class="unstyled profile-nav span3">
									<li><img src="<?php echo $avatar; ?>" alt=""></li>
									</ul>
									<div class="span9">
										<div class="row-fluid">
											<div class="span8 profile-info">
												<span style="font-weight:500; font-size:18px;"><?php echo $candidate_first_name; ?>&nbsp<?php echo $candidate_middle_name; ?>&nbsp<?php echo $candidate_last_name; ?>&nbsp;&nbsp;(<?php echo $candidate_no; ?>)</span>
												<p><?php //echo $info; ?></p>
                                                <p><div ><img src="<?php echo $party_symbol; ?>" style="width:2%" />&nbsp;&nbsp;&nbsp;<span><?php echo $party_name; ?></span></div></p>
												<p><a href="#"><?php //echo $email; ?></a></p>
												<ul class="unstyled inline">
													<li><i class="icon-map-marker"></i> <?php echo $candidate_destrict; ?></li>
												</ul>
											</div>
											<!--end span8-->
											<div class="span4">
											
                                            </div>
											<!--end span4-->
										</div>
										<!--end row-fluid-->
										<div class="tabbable tabbable-custom tabbable-custom-profile">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#info" data-toggle="tab" onclick="location.replace('#info')"><?php echo SETTINGS_INFO ?></a></li>
												<li ><a href="#contact" data-toggle="tab" onclick="location.replace('#contact')"><?php echo SETTINGS_CONTACT ?></a></li>
												<li ><a href="#image" data-toggle="tab" onclick="location.replace('#image')"><?php echo SETTINGS_IMAGE ?></a></li>
												<li ><a href="#video" data-toggle="tab"  onclick="location.replace('#video')"><?php echo SETTINGS_VIDEO ?></a></li>
											</ul>
											<div class="tab-content">
                                            
												<div class="tab-pane active" id="info">
													<div class="portlet-body" style="display: block;">
														<table class="table table-striped table-advance table-hover ">
															<tbody>
																<tr>
																	<td><a href="#">Info</a></td>
																	<td class="hidden-phone"><?php echo $info; ?></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div> 
                                                                                           
												<div class="tab-pane" id="contact">
													<div class="portlet-body" style="display: block;">
														<table class="table table-striped table-advance table-hover ">
															<tbody>
																<tr>
																	<td><a href="#"><?php echo CANDIDATE_PROVINCES ?></a></td>
																	<td class="hidden-phone"><?php echo $province; ?></td>
																</tr>
                                                                
																<tr>
																	<td><a href="#"><?php echo SETTINGS_ADDRESS ?></a></td>
																	<td class="hidden-phone"><?php echo $candidate_address; ?><br>
																	<?php echo $candidate_city; ?></td>
																</tr>
                                                                
																<tr>
																	<td><a href="#"><?php echo SETTINGS_PHONE ?></a></td>
																	<td class="hidden-phone"><?php echo $phone; ?></td>
																</tr>
                                                                
																<tr>
																	<td><a href="#"><?php echo SETTINGS_FAX ?></a></td>
																	<td class="hidden-phone"><?php echo $fax; ?></td>
																</tr>
                                                                
																<tr>
																	<td><a href="#"><?php echo CANDIDATE_EMAIL ?></a></td>
																	<td class="hidden-phone"><?php echo $email; ?></td>
																</tr>
                                                                
																<tr>
																	<td><a href="#"><?php echo CANDIDATE_WEBSITE_URL ?></a></td>
																	<td class="hidden-phone"><a href="#"><?php echo $website; ?></a></td>
																</tr>
                                                                
																<tr>
																	<td><a href="#"><?php echo CANDIDATE_FACEBOOK_LINK ?></a></td>
																	<td class="hidden-phone"><a href="#"><?php echo $facebook; ?></a></td>
																</tr>
                                                                
																<tr>
																	<td><a href="#"><?php echo CANDIDATE_TWITTER_LINK ?></a></td>
																	<td class="hidden-phone"><a href="#"><?php echo $twitter; ?></a></td>
																</tr>
                                                                
                                                                
															</tbody>
														</table>
													</div>
												</div>
												<!--tab-pane-->
												<div class="tab-pane" id="image">
													<div class="tab-pane active" id="tab_1_1_1">
                                                <div class="row-fluid">
                                                    <div class="filter-v1 margin-bottom-40 span12">
                                                          <?php   $profile->mediaView() ; ?>  
                                                    </div>
                                                </div>
                                                    </div>
                                                </div>
                                                
												<div class="tab-pane" id="video">
													<div class="tab-pane active" id="tab_1_1_1">
                                                <div class="row-fluid">
                                                    <div class="filter-v1 margin-bottom-40 span12">
																																								                                                         <?php   $profile->videoView(); ?>  
  
                                                    </div>
                                                </div>
                                                    </div>
                                                </div>


													</div>
												</div>
												<!--tab-pane-->
											</div>
										</div>
									</div>
									<!--end span9-->
								</div>
							</div>
						</div>
						<!--END TABS-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER--> 
		</div>
		<!-- END PAGE --> 
    <script src="assets/plugins/jquery.mixitup.min.js"></script>      
    <script type="text/javascript" src="assets/plugins/hover-dropdown.js"></script>                
    <script src="assets/scripts/app.js"></script>      
    <script src="js/admin/media_view.js"></script>      
	<script>
		jQuery(document).ready(function() {       
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->

<?php include_once('footer.php'); ?>