<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" type="image/png" href="https://gr8synergy.com/subsea/wp-content/uploads/2018/09/gr8-Synergy_Logo-Name-1.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Subsea | Upload CV</title>

    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="<?=base_url()?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <style type="text/css">
    	#page-wrapper{
    		margin: 0px !important;
    		background-color: #fff;
    	}
    	.wizard > .content{
    		background:#f5feff !important ;
    	}
    	.wizard > .content > .body input.error{
    		background: rgb(251, 227, 228);
		    border: 1px solid #fbc2c4;
		    color: #8a1f11;
    	}
    	.wizard > .content > .body label.error{
    		display: none !important;
    	}
    	.wizard > .steps .current a, .wizard > .steps .current a:hover, .wizard > .steps .current a:active{
    		font-size: x-small;
    	}
    	.wizard > .steps a, .wizard > .steps a:hover, .wizard > .steps a:active{
    		font-size: x-small;
    	}
    	.wizard > .steps .disabled a, .wizard > .steps .disabled a:hover, .wizard > .steps .disabled a:active{
    		font-size: x-small;
    	}
    	.wizard > .content > .body{
    		position: initial !important;
    		width: 100% !important;
    	}
    	.chosen-container{
    		width: 100% !important;
    		position: initial !important;
    	}
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="page-wrapper">
	        <div class="row border-bottom">
		        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
			        <div class="navbar-header" style="text-align: center;">
			            <!-- <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a> -->
			            <form role="search" class="navbar-form-custom" action="search_results.html">
			                <div class="form-group">
			                    <img src="https://gr8synergy.com/subsea/wp-content/uploads/2018/11/Logo-New-Tagline-004.png" width="50%">
			                </div>
			            </form>
			        </div>
		            <ul class="nav navbar-top-links navbar-right" style="padding-top: 1%;">
		                <li>
		                	<a href="https://gr8synergy.com/subsea/"> Home</a>
		                </li>
		                <li class="dropdown" id="config">
                            <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Config <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="https://gr8synergy.com/subsea/about-gr8synergy-subsea/"><b>Vision & Value</b></a></li>
                                <li><a href="https://gr8synergy.com/subsea/gr8synergy-subsea-team/"><b>Team</b></a></li>
                            </ul>
                        </li>
		                <li>
		                	<a href="https://gr8synergy.com/subsea/account/"> Account</a>
		                </li>
		                <li>
		                	<a href="https://gr8synergy.com/subsea/login/"> Login</a>
		                </li>
		                <li>
		                	<a href="<?=site_url('Welcome/user_logout')?>"> Logout</a>
		                </li>
		            </ul>
		        </nav>
        	</div>
	        <div class="wrapper wrapper-content animated fadeInRight">
	            <div class="row">
	                <div class="col-lg-10 col-lg-offset-1">
	                    <div class="ibox-content" style="border: 1px solid #e7eaec;">
	                    	<form method="post" class="form-horizontal wizard-big wizard clearfix" enctype="multipart/form-data" id="form" action="<?=site_url('Welcome/add_subsea_cv')?>">
	                            <h1>Information Personal</h1>
	                            <fieldset>
	                                <div class="row" style="padding-right: 2%;padding-left: 2%;">
	                                    <div class="col-lg-12">
	                                        <?php foreach ($user_personal_details as $key) {?>
	                                        <div class="form-group hidden">
	                                            <label>User ID <span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-user"></i></span> 
	                                            	<input type="text" id="user_id" name="user_id" class="form-control" value="<?=$key['user_id']?>">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label>Name (As in Passport) <span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-user"></i></span> 
	                                            	<input type="text" placeholder="Name (As in Passport)" id="user_name" name="user_name" class="form-control" value="<?=$key['user_name']?>">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Date Of Birth <span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa fa-birthday-cake"></i></span> 
	                                            	<input type="text" placeholder="Date Of Birth" name="user_DOB" id="user_DOB" class="form-control datepicker" value="<?=$key['user_DOB']?>">
	                                            </div>
	                                        </div>
	                                        <div class="form-group hidden">
	                                        	<label>Age <span style="color:red;">*</span></label> 
	                                        	<input type="text" id="age_cal" name="user_age" id="user_age" class="form-control" value="<?=$key['user_age']?>">
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Passport No. <span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-address-card-o"></i></span> 
	                                            	<input type="text" placeholder="Passport Number" name="user_passport_no" id="user_passport_no" class="form-control" value="<?=$key['user_passport_no']?>">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Passport Copy</label>
	                                            <input type="file" name="user_passport_copy" class="form-control" style="border: none;background: #f5feff;">
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>PP Issuing Authority <span style="color:red;">*</span></label> 
	                                        	<select id="country" name ="user_pp_issue_authority" id="user_pp_issue_authority" class="form-control">
	                                        	</select>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Validity of Passport <span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
	                                            	<input type="text" placeholder="" name="user_passport_validaty" id="user_passport_validaty" class="form-control datepicker_expiry" value="<?=$key['user_passport_validaty']?>">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Email ID <span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-envelope"></i></span> 
	                                            	<input type="email" placeholder="" name="user_email" id="user_email" class="form-control" value="<?=$key['user_email']?>" readonly>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Mobile Phone (with country code)<span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-mobile"></i></span> 
	                                            	<input type="text" placeholder="" name="user_mobile_no" class="form-control" value="<?=$key['user_mobile_no']?>">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Whatsapp Phone <span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-whatsapp"></i></span> 
	                                            	<input type="text" placeholder="" name="user_whatsapp_no" class="form-control" value="<?=$key['user_whatsapp_no']?>">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Address</label> 
	                                            <textarea  name="user_address" class="form-control" rows="3"><?=$key['user_address']?></textarea>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Country <span style="color:red;">*</span></label> 
	                                        	<select id="country_add" name ="user_address_country" class="form-control">
	                                        	</select>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>State <span style="color:red;">*</span></label> 
	                                        	<select id="state_add" name ="user_address_state" class="form-control">
	                                        	</select>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>State <span style="color:red;">*</span></label> 
	                                        	<input type="text" name ="user_address_pincode" class="form-control" placeholder="Please Enter Pincode." value="<?=$key['user_address_pincode']?>">
	                                        </div>
	                                        <div class="form-group">
	                                        	<div class="col-sm-9" style="padding-top: 2%;">
	                                        		<label>Are you a Director in any Company ? <span style="color:red;">*</span></label>
	                                            </div>
	                                            <div class="col-sm-3">
		                                            <div class="radio i-checks">
		                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="user_company_director" <?=($key['user_company_director']=='yes')?'checked':''?> class="cpny_director"> <i></i> Yes </label>
		                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="user_company_director" <?=($key['user_company_director']=='no')?'checked':''?> class="cpny_director"> <i></i>No </label>
		                                            </div>
		                                        </div>
	                                        </div>
	                                        <?=($key['user_company_director']=='yes')?'<div class="form-group" id="company_director">':'<div class="form-group hidden" id="company_director">'?>
		                                        	<label>Company Name <span style="color:red;">*</span></label> 
		                                            <input type="text" placeholder="Company Name" name="user_company_name" class="form-control" value="<?=$key['user_company_name']?>">
	                                        	</div>
	                                        <div class="form-group">
	                                        	<label>Latest Photograph</label>
	                                            <input type="file" name="user_latest_photograph" class="form-control" style="border: none;background: #f5feff;">
	                                        </div>
	                                        <?php } ?>
	                                    </div>
	                                </div>
	                            </fieldset>
	                            <h1>Information Next to Kin</h1>
	                            <fieldset>
	                                <div class="row" style="padding-right: 2%;padding-left: 2%;">
	                                    <div class="col-lg-12">
	                                    	<?php foreach ($kin_details as $key) {?>
	                                        <div class="form-group">
	                                            <label>Next to Kin - Name <span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-user"></i></span> 
	                                            	<input type="text" placeholder="Next to Kin - Name" name="kin_name" class="form-control" value="<?=$key['kin_name'].''?>">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Relationship with Next of Kin <span style="color:red;">*</span></label> 
	                                            <input type="text" placeholder="Relationship with Next of Kin" name="relationship_kin" class="form-control" value="<?=$key['kin_relationship']?>">
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Next of Kin - Email <span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-envelope"></i></span> 
	                                            	<input type="text" placeholder="" name="kin_email" class="form-control" value="<?=$key['kin_email']?>">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Next of Kin Mobile No.(with country code)<span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-mobile"></i></span> 
	                                            	<input type="text" placeholder="" name="kin_mobile_no" class="form-control" value="<?=$key['kin_mobile_no']?>">
	                                            </div>
	                                        </div>
	                                        <?php } ?>
	                                    </div>
	                                </div>
	                            </fieldset>
	                            <h1>Professional Medical</h1>
	                            <fieldset>
	                                <div class="row" style="padding-left: 2%;padding-right: 2%;">
	                                    <div class="col-lg-12">
	                                    	<?php foreach ($medical_details as $key) {?>
	                                        <div class="form-group">
	                                        	<label>Upload Offshore Topside Medical</label>
	                                            <input type="file" name="offshore_topside_medical_file" class="form-control" style="border: none;background: #f5feff;">
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>Upload Offshore Divers Medical</label>
	                                            <input type="file" name="offshore_diver_medical_file" class="form-control" style="border: none;background: #f5feff;">
	                                        </div>
	                                        <div class="form-group">
	                                        	<div class="col-sm-5" style="padding-top: 2%;">
	                                        		<label>Medical is issued by a <span style="color:red;">*</span></label>
	                                            </div>
	                                            <div class="col-sm-7">
		                                            <div class="radio i-checks">
		                                            	<label class="checkbox-inline"> <input type="radio" <?=($key['medical_issue_bye']=='OPITO approved Doctor')?'checked':''?> value="OPITO approved Doctor" name="medical_issue_bye"> <i></i> OPITO approved Doctor </label>
		                                            	<label class="checkbox-inline"> <input type="radio" <?=($key['medical_issue_bye']=='IMCA Approved Doctor')?'checked':''?> value="IMCA Approved Doctor" name="medical_issue_bye"> <i></i>IMCA Approved Doctor </label>
		                                            </div>
		                                        </div>
	                                        </div>
	                                        <div class="form-group">
	                                        	<label>My Medical Expires on <span style="color:red;">*</span></label>
	                                            <div class="input-group m-b">
	                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	                                            	<input type="text" placeholder="" name="medical_expiry_date" class="form-control datepicker_expiry" value="<?=$key['medical_expiry_date'] ?>">
	                                            </div>
	                                        </div>
	                                        <?php } ?>
	                                    </div>
	                                </div>
	                            </fieldset>
	                            <h1>Certification Personal - I</h1>
	                            <fieldset>
	                            	<div class="row" style="padding-left: 2%;padding-right: 2%;">
	                                    <div class="col-lg-12">
			                                <div class="form-group" style="font-size: larger;background-color: cyan;">
			                                	<div class="col-sm-2" style="padding-top: 2%;">
		                                    		<label>Division <span style="color:red;">*</span></label>
		                                        </div>
		                                        <div class="col-sm-10">
			                                        <div class="radio i-checks">
			                                        	<label class="checkbox-inline"> <input type="radio" value="1" name="CSR_division" class="division_details_data" checked=""> Diving </label>
			                                        	<label class="checkbox-inline"> <input type="radio" value="2" name="CSR_division" class="division_details_data"> Subsea Inst. Engg. </label>
			                                        	<label class="checkbox-inline"> <input type="radio" value="3" name="CSR_division" class="division_details_data"> Marine </label>
			                                        </div>
			                                    </div>
		                                    </div>
	                                        <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>CSR</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-left: 2%;padding-right: 2%;">
														<?php foreach ($CSR_details as $key) {?>												
														<div class="col-sm-12">
															<div class="form-group">
																<label>OGP Client Rep Cert No</label> 
				                                            	<input type="text" placeholder="OGP Client Rep Cert No" name="CSR_OGP_client_report_cert_no" class="form-control" value="<?=$key['CSR_OGP_client_report_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="CSR_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="CSR_training_center" class="form-control" value="<?=$key['CSR_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issue Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="CSR_issue_date" class="form-control datepicker" value="<?=$key['CSR_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <?php } ?>
				                                    </div>
												</div>
											</div>
											<div class="ibox float-e-margins" id="diving_data" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Diving</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-left: 2%;padding-right: 2%;">
														<?php foreach ($diving_details as $key) { ?>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Surface Diver Part I Cert No</label> 
				                                            	<input type="text" placeholder="Surface Diver Part I Cert No" name="diving_surface_prt_I_cert" class="form-control" value="<?=$key['diving_surface_prt_I_cert']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="diving_prt_I_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="diving_prt_I_training_center" class="form-control" value="<?=$key['diving_prt_I_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issue Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_prt_I_issue_date" class="form-control datepicker" value="<?=$key['diving_prt_I_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Surface Diver Part II Cert No</label> 
				                                            	<input type="text" placeholder="Surface Diver Part II Cert No" name="diving_surface_prt_II_cert" class="form-control" value="<?=$key['diving_surface_prt_II_cert']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="diving_prt_II_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="diving_prt_II_training_center" class="form-control" value="<?=$key['diving_prt_II_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issue Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_prt_II_issue_date" class="form-control datepicker" value="<?=$key['diving_prt_II_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Surface Diving Superviser Cert No</label> 
				                                            	<input type="text" placeholder="Surface Diving Superviser Cert No" name="diving_surface_superviser_cert" class="form-control" value="<?=$key['diving_surface_superviser_cert']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="diving_superviser_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="diving_superviser_training_center" class="form-control" value="<?=$key['diving_superviser_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issue Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_superviser_issue_date" class="form-control datepicker" value="<?=$key['diving_superviser_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Saturation Diving Superviser Cert No</label> 
				                                            	<input type="text" placeholder="Saturation Diving Superviser Cert No" name="diving_saturation_surface_superviser_cert" class="form-control" value="<?=$key['diving_saturation_surface_superviser_cert']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="diving_saturation_superviser_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="diving_saturation_superviser_training_center" class="form-control" value="<?=$key['diving_saturation_superviser_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issue Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_saturation_superviser_issue_date" class="form-control datepicker" value="<?=$key['diving_saturation_superviser_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>ALST Cert No</label>
				                                            	<input type="text" placeholder="ALST Cert No" name="diving_ALST_cert" class="form-control" value="<?=$key['diving_ALST_cert']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label>
				                                            	<input type="file" name="diving_ALST_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label>
				                                            	<input type="text" placeholder="Training Center" name="diving_ALST_training_center" class="form-control" value="<?=$key['diving_ALST_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issue Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_ALST_issue_date" class="form-control datepicker" value="<?=$key['diving_ALST_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>LST Cert No</label> 
				                                            	<input type="text" placeholder="LST Cert No" name="diving_LST_cert" class="form-control" value="<?=$key['diving_LST_cert']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label>
				                                            	<input type="file" name="diving_LST_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label>
				                                            	<input type="text" placeholder="Training Center" name="diving_LST_training_center" class="form-control" value="<?=$key['diving_LST_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issue Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_LST_issue_date" class="form-control datepicker" value="<?=$key['diving_LST_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issue Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_LSS_issue_date" class="form-control datepicker" value="<?=$key['diving_LSS_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>No. of offshore days as LSS</label>
				                                            	<input type="text" placeholder="No. of offshore days as LSS" name="diving_LSS_no_offshore_day" class="form-control" value="<?=$key['diving_LSS_no_offshore_day']?>">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Subsea NDT Inspection Level I Cert No</label>
				                                            	<input type="text" placeholder="Subsea NDT Inspection Level I Cert No" name="diving_subsea_NDT_levl_I_cert" class="form-control" value="<?=$key['diving_subsea_NDT_levl_I_cert']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label>
				                                            	<input type="file" name="diving_subsea_NDT_levl_I_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label>
				                                            	<input type="text" placeholder="Training Center" name="diving_subsea_NDT_levl_I_training_center" class="form-control" value="<?=$key['diving_subsea_NDT_levl_I_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issue Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_subsea_NDT_levl_I_issue_date" class="form-control datepicker" value="<?=$key['diving_subsea_NDT_levl_I_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Cert Expirt Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_subsea_NDT_levl_I_expiry_date" class="form-control datepicker_expiry" value="<?=$key['diving_subsea_NDT_levl_I_expiry_date']?>">
					                                            </div>
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Subsea NDT Inspection Level II Cert No</label> 
				                                            	<input type="text" placeholder="Subsea NDT Inspection Level II Cert No" name="diving_subsea_NDT_levl_II_cert" class="form-control" value="<?=$key['diving_subsea_NDT_levl_II_cert']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="diving_subsea_NDT_levl_II_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="diving_subsea_NDT_levl_II_training_center" class="form-control" value="<?=$key['diving_subsea_NDT_levl_II_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issue Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_subsea_NDT_levl_II_issue_date" class="form-control datepicker" value="<?=$key['diving_subsea_NDT_levl_II_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Cert Expirt Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="diving_subsea_NDT_levl_II_expiry_date" class="form-control datepicker_expiry" value="<?=$key['diving_subsea_NDT_levl_II_expiry_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <?php } ?>
				                                    </div>
												</div>
											</div>
		                                </div>
		                            </div>
	                            </fieldset>
	                            <h1>Certification Personal - II</h1>
	                            <fieldset>
	                            	<div class="row">
	                                    <div class="col-lg-12">
			                                <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Engineering</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<?php foreach ($engg_details as $key) { ?>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Engg. Stream</label> 
				                                            	<select name="engg_stram" class="form-control">
				                                            		<option value="<?=$key['engg_stram']?>"><?=$key['engg_stram']?></option>
				                                            		<!-- <option value="0" selected="selected">--- Select ---</option> -->
				                                            		<option value="Electrical">Electrical</option>
				                                            		<option value="Mechanical">Mechanical</option>
				                                            		<option value="Chemical">Chemical</option>
				                                            		<option value="Petrochemical">Petrochemical</option>
				                                            		<option value="Subsea">Subsea</option>
				                                            		<option value="Marine">Marine</option>
				                                            	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="engg_stram_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Engg. Passing Year</label> 
				                                            	<input type="text" name="engg_passing_year" class="form-control" value="<?=$key['engg_passing_year']?>">
															</div>
				                                        </div>
				                                        <?php } ?>
													</div>
												</div>
											</div>
											<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Management</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-left: 2%;padding-right: 2%;">
														<?php foreach ($mgnt_details as $key) { ?>
														<h1>HSE Training & Certification</h1>
														<div class="col-sm-12">
															<div class="form-group">
																<label>NEEBOSH Certification No.</label> 
				                                            	<input type="text" placeholder="NEEBOSH Certification No." name="NEEBOSH_cert_no" class="form-control" value="<?=$key['NEEBOSH_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="NEEBOSH_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Cert Expirt Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="NEEBOSH_expiry_date" class="form-control datepicker_expiry" value="<?=$key['NEEBOSH_expiry_date']?>">
					                                            </div>
															</div>
				                                        </div>
					                                    <h1>Management Training</h1>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Project Management Cert No.</label> 
				                                            	<input type="text" placeholder="Project Management Cert No." name="pro_mgnt_cert_no" class="form-control" value="<?=$key['pro_mgnt_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="pro_mgnt_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issuing Authority</label>
																<input type="text" placeholder="Issuing Authority" name="pro_mgnt_issue_authority" class="form-control" value="<?=$key['pro_mgnt_issue_authority']?>">
															</div>
				                                        </div>
					                                    <h1>DP System Familirisation Courses</h1>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Input Certificate No.</label> 
				                                            	<input type="text" placeholder="Input Certificate No." name="input_cert_no" class="form-control" value="<?=$key['input_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="input_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Issuing Authority</label>
																<input type="text" placeholder="Issuing Authority" name="input_issue_authority" class="form-control" value="<?=$key['input_issue_authority']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Date of Issue</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="input_issue_date" class="form-control datepicker" value="<?=$key['input_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Validity</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="input_validity_date" class="form-control datepicker" value="<?=$key['input_validity_date']?>">
					                                            </div>
															</div>
				                                        </div>
					                                    <h1>Operational Risk Managerment</h1>
														<div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-10" style="padding-top: 2%;">
																	<label>Have you Participated in a HAZID as part of Onshore Management ?</label>
																</div>
																<div class="col-sm-2">
					                                            	<div class="radio i-checks">
							                                        	<label class="checkbox-inline"> <input type="radio" <?=($key['HAZID_paticipate_mgnt']=='Yes')?'checked':''?> value="Yes" name="HAZID_paticipate_mgnt"> <i></i> Yes </label>
							                                        	<label class="checkbox-inline"> <input type="radio" <?=($key['HAZID_paticipate_mgnt']=='No')?'checked':''?> value="No" name="HAZID_paticipate_mgnt"> <i></i>No </label>
							                                        </div>
							                                    </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-3" style="padding-top: 2%;">
																	<label>File Upload</label> 
																</div>
																<div class="col-sm-9">
				                                            		<input type="file" name="HAZID_file" class="form-control" style="border: none;background: #f5feff;">
				                                            	</div>
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-10" style="padding-top: 2%;">
																	<label>Have You Participated in Offshore Risk Assessement ?</label> 
																</div>
																<div class="col-sm-2">			
					                                            	<div class="radio i-checks">
							                                        	<label class="checkbox-inline"> <input type="radio" value="Yes" <?=($key['offshore_risk_paticipate_assessement']=='Yes')?'checked':''?>  name="offshore_risk_paticipate_assessement"> <i></i> Yes </label>
							                                        	<label class="checkbox-inline"> <input type="radio" <?=($key['offshore_risk_paticipate_assessement']=='No')?'checked':''?>  value="No" name="offshore_risk_paticipate_assessement"> <i></i>No </label>
							                                        </div>
							                                    </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-3" style="padding-top: 2%;">
																	<label>File Upload</label> 
																</div>
																<div class="col-sm-9">
				                                            		<input type="file" name="offshore_file" class="form-control" style="border: none;background: #f5feff;">
				                                            	</div>
															</div>
				                                        </div>
					                                    <h1>Auditor Credential</h1>
														<div class="col-sm-12">
															<div class="form-group">
																<label>IRCA Auditors Certificate No.</label> 
				                                            	<input type="text" placeholder="IRCA Auditors Certificate No." name="IRCA_auditor_cert_no" class="form-control" value="<?=$key['IRCA_auditor_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="IRCA_auditor_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Training and Certifying Authority</label>
																<input type="text" placeholder="Issuing Authority" name="IRCA_auditor_training_authority" class="form-control" value="<?=$key['IRCA_auditor_training_authority']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Date of Issue</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="IRCA_auditor_issue_date" class="form-control datepicker" value="<?=$key['IRCA_auditor_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <?php } ?>
				                                    </div>
												</div>
											</div>
										</div>
									</div>
	                            </fieldset>
	                            <h1>Certification Personal - III</h1>
	                            <fieldset>
	                               	<div class="row">
	                               		<div class="col-lg-12">
	                               			<div class="ibox float-e-margins hidden" id="marine_data" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Marine Cert</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<?php foreach ($marine_details as $key) { ?>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Certificate of Compliance Master No.</label> 
				                                            	<input type="text" placeholder="Certificate of Compliance Master No." name="compliance_mster_cert_no" class="form-control" value="<?=$key['compliance_mster_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Present Certificate of Compliance Master No.</label> 
				                                            	<input type="text" placeholder="Present Certificate of Compliance Master No." name="compliance_mster_present_cert_no" class="form-control" value="<?=$key['compliance_mster_present_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="compliance_mster_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Date of Issue (When issued for the First Time)</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="compliance_mster_fst_issue_date" class="form-control datepicker" value="<?=$key['compliance_mster_fst_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Date of Issue</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="compliance_mster_issue_date" class="form-control datepicker" value="<?=$key['compliance_mster_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Renewal Due on</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="compliance_mster_renewal_date" class="form-control datepicker" value="<?=$key['compliance_mster_renewal_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                    	<div class="hr-line-dashed"></div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>GMDSS Certificate No.</label> 
				                                            	<input type="text" placeholder="GMDSS Certificate No." name="GMDSS_cert_no" class="form-control" value="<?=$key['GMDSS_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify Training Equipment</label> 
				                                            	<input type="text" placeholder="Specify Training Equipment" name="GMDSS_training_equipment" class="form-control" value="<?=$key['GMDSS_training_equipment']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="GMDSS_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="GMDSS_training_center" class="form-control" value="<?=$key['GMDSS_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Restrictions if any</label> 
				                                            	<textarea placeholder="Restrictions if any" name="GMDSS_restriction" class="form-control"><?=$key['GMDSS_restriction']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Expiry Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="GMDSS_expiry_date" class="form-control datepicker_expiry" value="<?=$key['GMDSS_expiry_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                    	<div class="hr-line-dashed"></div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>SOS Certificate No.</label> 
				                                            	<input type="text" placeholder="SOS Certificate No." name="SOS_cert_no" class="form-control" value="<?=$key['SOS_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify Training Equipment</label> 
				                                            	<input type="text" placeholder="Specify Training Equipment" name="SOS_training_equipment" class="form-control" value="<?=$key['SOS_training_equipment']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="SOS_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="SOS_training_center" class="form-control" value="<?=$key['SOS_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Restrictions if any</label> 
				                                            	<textarea placeholder="Restrictions if any" name="SOS_restriction" class="form-control"><?=$key['SOS_restriction']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Expiry Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="SOS_expiry_date" class="form-control datepicker_expiry" value="<?=$key['SOS_expiry_date']?>">
					                                            </div>
															</div>
				                                        </div>
														<div class="hr-line-dashed"></div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Medicare Certificate No.</label> 
				                                            	<input type="text" placeholder="Medicare Certificate No." name="medicare_cert_no" class="form-control" value="<?=$key['medicare_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify Training Equipment</label> 
				                                            	<input type="text" placeholder="Specify Training Equipment" name="medicare_training_equipment" class="form-control" value="<?=$key['medicare_training_equipment']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="medicare_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="medicare_training_center" class="form-control" value="<?=$key['medicare_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Restrictions if any</label> 
				                                            	<textarea placeholder="Restrictions if any" name="medicare_restriction" class="form-control"></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Expiry Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="medicare_expiry_date" class="form-control datepicker_expiry" value="<?=$key['medicare_expiry_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                    	<div class="hr-line-dashed"></div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>ECDIS Certificate No.</label> 
				                                            	<input type="text" placeholder="ECDIS Certificate No." name="ECDIS_cert_no" class="form-control" value="<?=$key['ECDIS_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify Training Equipment</label> 
				                                            	<input type="text" placeholder="Specify Training Equipment" name="ECDIS_training_equipment" class="form-control" value="<?=$key['ECDIS_training_equipment']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="ECDIS_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="ECDIS_training_center" class="form-control" value="<?=$key['ECDIS_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Restrictions if any</label> 
				                                            	<textarea placeholder="Restrictions if any" name="ECDIS_restriction" class="form-control"><?=$key['ECDIS_restriction']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Expiry Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="ECDIS_expiry_date" class="form-control datepicker_expiry" value="<?=$key['ECDIS_expiry_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                    	<div class="hr-line-dashed"></div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>DP Training Certificate No.</label> 
				                                            	<input type="text" placeholder="DP Training Certificate No." name="DP_cert_no" class="form-control" value="<?=$key['DP_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify Training Equipment</label> 
				                                            	<input type="text" placeholder="Specify Training Equipment" name="DP_training_equipment" class="form-control" value="<?=$key['DP_training_equipment']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="DP_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="DP_training_center" class="form-control"
				                                            	value="<?=$key['DP_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Restrictions if any</label> 
				                                            	<textarea placeholder="Restrictions if any" name="DP_restriction" class="form-control"><?=$key['DP_restriction']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Expiry Date</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="DP_expiry_date" class="form-control datepicker_expiry" value="<?=$key['DP_expiry_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <?php } ?>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Sea-Fearers Certificate - STCW</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<?php foreach ($STCW_details as $key) {?>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Personal Survival Techniques (STCW A-VI/1-1) - Certificate No</label> 
				                                            	<input type="text" placeholder="Personal Survival Techniques (STCW A-VI/1-1) - Certificate No" name="STCW_A_VII_11_cert_no" class="form-control" value="<?=$key['STCW_A_VII_11_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="STCW_A_VII_11_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Personal Survival Techniques (STCW A-VI/1-2) - Certificate No</label> 
				                                            	<input type="text" placeholder="Personal Survival Techniques (STCW A-VI/1-2) - Certificate No" name="STCW_A_VII_12_cert_no" class="form-control" value="<?=$key['STCW_A_VII_12_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="STCW_A_VII_12_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Elementary First Aid (STCW A-VI/1-3) - Certificate No.</label> 
				                                            	<input type="text" placeholder="Elementary First Aid (STCW A-VI/1-3) - Certificate No." name="STCW_A_VII_13_cert_no" class="form-control" value="<?=$key['STCW_A_VII_13_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="STCW_A_VII_13_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Personal Safety and Social Responsibilities (STCW A-VI/1-4) - Certificate No.</label> 
				                                            	<input type="text" placeholder="Personal Safety and Social Responsibilities (STCW A-VI/1-4) - Certificate No." name="STCW_A_VII_14_cert_no" class="form-control" value="<?=$key['STCW_A_VII_14_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="STCW_A_VII_14_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
														<div class="col-sm-12">
															<div class="form-group">
																<label>Proficiency in Security Awareness (STCW A-VI/6-1) - Certificate No.</label> 
				                                            	<input type="text" placeholder="Proficiency in Security Awareness (STCW A-VI/6-1) - Certificate No." name="STCW_A_VII_61_cert_no" class="form-control" value="<?=$key['STCW_A_VII_61_cert_no']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>File Upload</label> 
				                                            	<input type="file" name="STCW_A_VII_61_file" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Training Center</label> 
				                                            	<input type="text" placeholder="Training Center" name="STCW_training_center" class="form-control" value="<?=$key['STCW_training_center']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Date of Issue</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class=" datepicker"></i></span> 
					                                            	<input type="text" placeholder="" name="STCW_issue_date" class="form-control datepicker" value="<?=$key['STCW_issue_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Date of Expiry</label>
					                                            <div class="input-group m-b">
					                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
					                                            	<input type="text" placeholder="" name="STCW_expiry_date" class="form-control datepicker_expiry" value="<?=$key['STCW_expiry_date']?>">
					                                            </div>
															</div>
				                                        </div>
				                                        <?php } ?>
				                                    </div>
												</div>
											</div>
											<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Apply For Position <span style="color: red;">(Any 2)</span></h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-left: 2%;padding-right: 2%;">
														<div class="col-sm-12">
															<div class="form-group" id="apply_position"> 
																<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving SME"><b> &nbsp Diving SME</b> &nbsp &nbsp
														        <input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving CSR"><b> &nbsp Diving CSR</b> &nbsp &nbsp
														        <input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving Project  Manager"><b> &nbsp Diving Project  Manager</b> &nbsp &nbsp
														        <input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving Operations  Manager"><b> &nbsp Diving Operations  Manager</b> &nbsp &nbsp
														        <input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Saturation Diving Superintendent  (IMCA DIVING SUPERVISOR)"><b> &nbsp Saturation Diving Superintendent  (IMCA DIVING SUPERVISOR)</b> &nbsp &nbsp
															</div>
				                                        </div>
				                                    </div>
												</div>
											</div>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                            <h1>Part 2 - SME</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_SME_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                               	<div class="row hidden" id="visible_SME_data">
	                               		<div class="col-lg-12">
											<?php foreach ($SME_details as $key) { ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>SME - Subject Matter Expert</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<div class="col-sm-12">
															<div class="form-group">
				                                            	<label>Period of Working as Diving SME</label><br> 
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="SME_working_priod_start" class="form-control datepicker SME_datepicker" value="<?=$key['SME_working_priod_start']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="SME_working_priod_end" class="form-control datepicker SME_datepicker" value="<?=$key['SME_working_priod_end']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No of Years </label> 
				                                            	<input type="text" placeholder="No of Years as Diving/Engg/Marine" name="SME_no_year" class="form-control" value="<?=$key['SME_no_year']?>" readonly>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the International Oil & Gas Clients (Not Diving Contractors) you have worked for</label>
					                                            <input type="text" placeholder="" name="SME_internation_gas_oil_client" class="form-control" value="<?=$key['SME_internation_gas_oil_client']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Projects that You have been Involved in </label>
					                                            <input type="text" placeholder="" name="SME_prj_name" class="form-control" value="<?=$key['SME_prj_name']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Provide LOA for the last 2 Projects</label> 
																<div class="row">
																	<div class="col-sm-6">
					                                            		<input type="file" name="SME_LOA_I_file" class="form-control" style="border: none;background: #f5feff;">
																	</div>
																	<div class="col-sm-6">
					                                            		<input type="file" name="SME_LOA_II_file" class="form-control" style="border: none;background: #f5feff;">
																	</div>																
																</div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you developed the Diving Safety Management System </label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"><input type="radio" value="yes" name="SME_diving_safety_mgnt" <?=($key['SME_diving_safety_mgnt']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"><input type="radio" value="no" name="SME_diving_safety_mgnt" <?=($key['SME_diving_safety_mgnt']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Audited and Approved Diving Contractors for Oil and Gas Company</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_audit_approve_diving_constract_oil_gas" <?=($key['SME_audit_approve_diving_constract_oil_gas']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_audit_approve_diving_constract_oil_gas" <?=($key['SME_audit_approve_diving_constract_oil_gas']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12" id="div_eng_data">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label> Have you Front End Engineering and Design of Subsea Structures</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_front_end_engg_design_subsea_str" <?=($key['SME_front_end_engg_design_subsea_str']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_front_end_engg_design_subsea_str" <?=($key['SME_front_end_engg_design_subsea_str']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Developing Scope of Work for Subsea Installation Projects</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_develope_scope_work_subsea_install" <?=($key['SME_develope_scope_work_subsea_install']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_develope_scope_work_subsea_install" <?=($key['SME_develope_scope_work_subsea_install']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label> Have you Defining the Acceptance Criteria (Contractual Assessment)</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_accept_criteria" <?=($key['SME_accept_criteria']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_accept_criteria" <?=($key['SME_accept_criteria']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Auditing the Contractors Safety Management System</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_audit_cinstract_safety_mgnt" <?=($key['SME_audit_cinstract_safety_mgnt']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_audit_cinstract_safety_mgnt" <?=($key['SME_audit_cinstract_safety_mgnt']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Reviewing of Contractors Project Plan </label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
					                                            		<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_review_contract_prj_plan" <?=($key['SME_review_contract_prj_plan']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_review_contract_prj_plan" <?=($key['SME_review_contract_prj_plan']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you  Subsea Installation Project HSE Review & HAZID </label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_subsea_install_prj_HSE_review_HAZID" <?=($key['SME_subsea_install_prj_HSE_review_HAZID']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_subsea_install_prj_HSE_review_HAZID" <?=($key['SME_subsea_install_prj_HSE_review_HAZID']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Review of Contractors Procedure </label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_review_contract_procedure" <?=($key['SME_review_contract_procedure']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_review_contract_procedure" <?=($key['SME_review_contract_procedure']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Risk Assessment Stage 1 (Onshore)</label> 
					                                            	</div>
						                                            <div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_onshore_risk_ass_stage_I" <?=($key['SME_onshore_risk_ass_stage_I']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_onshore_risk_ass_stage_I" <?=($key['SME_onshore_risk_ass_stage_I']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Review and approval of Contractors Personnel</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_review_approval_diving_contract_personnel" <?=($key['SME_review_approval_diving_contract_personnel']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_review_approval_diving_contract_personnel" <?=($key['SME_review_approval_diving_contract_personnel']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Review and Close Out of DESIGN Audits for Systems</label>
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_review_close_design_audit" <?=($key['SME_review_close_design_audit']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_review_close_design_audit" <?=($key['SME_review_close_design_audit']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12" id="div_data">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Mobolisation of Diving Support Vessel - DP2 DSV</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_DP2_DSV" <?=($key['SME_DP2_DSV']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_DP2_DSV" <?=($key['SME_DP2_DSV']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12" id="div_data_1">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Mobolisation of Hyperbaric Reception Facility</label>
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_mobolisation_hyperbaric_reception" <?=($key['SME_mobolisation_hyperbaric_reception']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_mobolisation_hyperbaric_reception" <?=($key['SME_mobolisation_hyperbaric_reception']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12" id="div_data_2">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Hyperbaric Evacuation Drills and Trails</label>
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_hyperbaric_evacuation_drills_trails" <?=($key['SME_hyperbaric_evacuation_drills_trails']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_hyperbaric_evacuation_drills_trails" <?=($key['SME_hyperbaric_evacuation_drills_trails']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                    </div>
				                                        <div class=" hidden" id="eng_data_1">
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you System Integration Testing on shore (Trails for Subsea Installation of Subsea Assets)</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_sys_integration_test_onshore" <?=($key['SME_sys_integration_test_onshore']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_sys_integration_test_onshore" <?=($key['SME_sys_integration_test_onshore']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Developed and Engineering Code for a Subsea Engineering Company?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_develope_engg_code" <?=($key['SME_develope_engg_code']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_develope_engg_code" <?=($key['SME_develope_engg_code']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Audited a Subsea Engineering Contractor?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_audited_subsea_contract" <?=($key['SME_audited_subsea_contract']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_audited_subsea_contract" <?=($key['SME_audited_subsea_contract']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Been Involved in Front end engineering  and design for a Subsea Installation to a Industry Recognised Code (DNv,Lloyds,ABS)?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_involve_front_end_engg_design" <?=($key['SME_involve_front_end_engg_design']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_involve_front_end_engg_design" <?=($key['SME_involve_front_end_engg_design']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Developed the Criteria of acceptance to evaluate a  Subsea Installation Contractor?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_develope_criteria_acceptance" <?=($key['SME_develope_criteria_acceptance']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_develope_criteria_acceptance" <?=($key['SME_develope_criteria_acceptance']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Audited a Subsea Engineering Criteria for their Process Control and approval process?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_audit_criteria_process_control_approval" <?=($key['SME_audit_criteria_process_control_approval']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_audit_criteria_process_control_approval" <?=($key['SME_audit_criteria_process_control_approval']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you developed the Engineering Project Plan for a Subsea Installation Project?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_engg_prj_plan" <?=($key['SME_engg_prj_plan']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_engg_prj_plan" <?=($key['SME_engg_prj_plan']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Participated in Project HSE Review & HAZID for a Subsea Installation Scope?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_HSE_review_HAZID" <?=($key['SME_HSE_review_HAZID']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_HSE_review_HAZID" <?=($key['SME_HSE_review_HAZID']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Approved an Installation procedure submitted by a Subsea Installation Contractor?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_approve_install_procedure" <?=($key['SME_approve_install_procedure']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_approve_install_procedure" <?=($key['SME_approve_install_procedure']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Approved a Risk Assessment for a Subsea Installation Scope developed by an Installation Contractor?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_approve_risk_assessment" <?=($key['SME_approve_risk_assessment']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_approve_risk_assessment" <?=($key['SME_approve_risk_assessment']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Been responsible to develop and develop the Engineering Team under your Leadership?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_responsible_team_leadership" <?=($key['SME_responsible_team_leadership']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_responsible_team_leadership" <?=($key['SME_responsible_team_leadership']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Approved a SIT& FAT for a Subsea Well Control Systems (Installation and Comissioning)?</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_approve_SIT_FAT" <?=($key['SME_approve_SIT_FAT']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_approve_SIT_FAT" <?=($key['SME_approve_SIT_FAT']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                    </div>
					                                    <div class="col-sm-12">
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Emergency Response Plan Drills and Trails</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_emergency_respone_plan_drills_tails" <?=($key['SME_emergency_respone_plan_drills_tails']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_emergency_respone_plan_drills_tails" <?=($key['SME_emergency_respone_plan_drills_tails']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Offshore Execution Phase</label>
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_offshore_execution_phase" <?=($key['SME_offshore_execution_phase']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_offshore_execution_phase" <?=($key['SME_offshore_execution_phase']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Incident Reporting and Investigation</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_incident_report_investigation" <?=($key['SME_incident_report_investigation']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_incident_report_investigation" <?=($key['SME_incident_report_investigation']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have you Project Close Out Report</label>
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="SME_prj_close_out_report" <?=($key['SME_prj_close_out_report']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="SME_prj_close_out_report" <?=($key['SME_prj_close_out_report']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                    </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Scope of Work executed under you as SME </label> 
				                                            	<select class="form-control scope_select SME_scope_data" name="SME_scope_work_execute_under_you[]" multiple style="width: 100%;">
				                                            		<option value="" disabled="">Select Scope</option>
				                                            		<option value="Riser / J Tube Installation">Riser / J Tube Installation</option>
				                                            		<option value="Boat Fender Installation">Boat Fender Installation</option>
				                                            		<option value="Clamp Installation">Clamp Installation</option>
				                                            		<option value="Conductor Guide Frame Installation">Conductor Guide Frame Installation</option>
				                                            		<option value="Member Strengthening / Replacement">Member Strengthening / Replacement</option>
				                                            		<option value="Anode Installation">Anode Installation</option>
				                                            		<option value="Umbilical Installation ">Umbilical Installation </option>
				                                            		<option value="SBM Installation / Removal Works">SBM Installation / Removal Works</option>
				                                            		<option value="ABS UWILD Surveys">ABS UWILD Surveys</option>
				                                            		<option value="Pipeline Repair Works (Clamp Installation)">Pipeline Repair Works (Clamp Installation)</option>
				                                            		<option value="Pipeline Tie-in Works">Pipeline Tie-in Works</option>
				                                            		<option value="Pipeline Sectional Replacement Works">Pipeline Sectional Replacement Works</option>
				                                            		<option value="Decomissioning Works">Decomissioning Works</option>
				                                            		<option value="Subsea Broco Oxy-Arc Cutting">Subsea Broco Oxy-Arc Cutting</option>
				                                            		<option value="PLEM Installation">PLEM Installation</option>
				                                            		<option value="Well-Head Installation">Well-Head Installation</option>
				                                            		<option value="Well-Head Intervention / Operations">Well-Head Intervention / Operations</option>
				                                            		<option value="Jumper Connections between Umbilical Manifold and Well-Head">Jumper Connections between Umbilical Manifold and Well-Head</option>
				                                            		<option value="Hyperbaric Welding">Hyperbaric Welding</option>
				                                            		<option value="Any Other Add to the List and the drop down list should reflect the same">Any Other Add to the List and the drop down list should reflect the same </option>
				                                            	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SME Scope </label> 
				                                            	<input type="text" placeholder="SME Scope" name="SME_scope_details" class="form-control" value="<?=$key['SME_scope_work_execute_under_you']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden" id="other_sme_scope">
															<div class="form-group">
																<label>Other Scope </label> 
				                                            	<input type="text" placeholder="SME Scope" name="other_SME_scope_work_execute_under_you" class="form-control" value="<?=$key['other_SME_scope_work_execute_under_you']?>">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="SME_position_min_rate" class="form-control" value="<?=$key['SME_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="SME_position_max_rate" class="form-control" value="<?=$key['SME_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>	                            
	                            <h1>Part 2 - CSR</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_CSR_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                               	<div class="row hidden" id="visible_CSR_data">
	                               		<div class="col-lg-12">
											<?php foreach ($CSR_PRT_details as $key) {?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>CSR - Client Site Representative</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<div class="col-sm-12">
															<div class="form-group">											
				                                            	<label>Period of Working as Diving CSR</label> <br>
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="CSR_working_priod_start" class="form-control datepicker CSR_datepicker" value="<?=$key['CSR_working_priod_start']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="CSR_working_priod_end" class="form-control datepicker CSR_datepicker" value="<?=$key['CSR_working_priod_end']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No of Years</label> 
				                                            	<input type="text" placeholder="No of Years as Diving/Engg/Marine" name="CSR_no_year" class="form-control" value="<?=$key['CSR_no_year']?>" readonly>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the International Oil & Gas Clients (Not Diving Contractors) you worked for</label>
					                                            <input type="text" placeholder="" name="CSR_internation_gas_oil_client" class="form-control" value="<?=$key['CSR_internation_gas_oil_client']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Projects that You have been Involved in</label>
					                                            <input type="text" placeholder="" name="CSR_prj_name" class="form-control" value="<?=$key['CSR_prj_name']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Provide LOA for the last 2 Projects</label> 
																<div class="row">
																	<div class="col-sm-6">
					                                            		<input type="file" name="CSR_LOA_I_file" class="form-control" style="border: none;background: #f5feff;">
																	</div>
																	<div class="col-sm-6">
					                                            		<input type="file" name="CSR_LOA_II_file" class="form-control" style="border: none;background: #f5feff;">
																	</div>																
																</div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
					                                        <div class="col-sm-12" id="div_eng_data_1">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Front End Engineering and Design of Subsea Structures</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_front_end_engg_design_subsea_str" <?=($key['CSR_front_end_engg_design_subsea_str']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_front_end_engg_design_subsea_str" <?=($key['CSR_front_end_engg_design_subsea_str']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Developing the Diving/Engg/Marine Scope of Work for Subsea Installation Projects</label> 		                                            	
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_develope_scope_work_subsea_install" <?=($key['CSR_develope_scope_work_subsea_install']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_develope_scope_work_subsea_install" <?=($key['CSR_develope_scope_work_subsea_install']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Defining the Acceptance Criteria (Contractual Assessment)</label> 
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_accept_criteria" <?=($key['CSR_accept_criteria']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_accept_criteria" <?=($key['CSR_accept_criteria']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Auditing the Contractors Safety Management System</label>
																	</div> 
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_audit_cinstract_safety_mgnt" <?=($key['CSR_audit_cinstract_safety_mgnt']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_audit_cinstract_safety_mgnt" <?=($key['CSR_audit_cinstract_safety_mgnt']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Reviewing of Contractors Project Plan </label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_review_contract_prj_plan" <?=($key['CSR_review_contract_prj_plan']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_review_contract_prj_plan" <?=($key['CSR_review_contract_prj_plan']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Subsea Installation Project HSE Review & HAZID</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_subsea_install_prj_HSE_review_HAZID" <?=($key['CSR_subsea_install_prj_HSE_review_HAZID']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_subsea_install_prj_HSE_review_HAZID" <?=($key['CSR_subsea_install_prj_HSE_review_HAZID']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Review and approval of Contractors Personnel</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_review_approval_diving_contract_personnel" <?=($key['CSR_review_approval_diving_contract_personnel']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_review_approval_diving_contract_personnel" <?=($key['CSR_review_approval_diving_contract_personnel']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Review and Close Out of DESIGN Audits for Systems</label>
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_review_close_design_audit" <?=($key['CSR_review_close_design_audit']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_review_close_design_audit" <?=($key['CSR_review_close_design_audit']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12" id="div_data_3">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Mobolisation of Diving Support Vessel - DP2 DSV</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_DP2_DSV" <?=($key['CSR_DP2_DSV']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_DP2_DSV" <?=($key['CSR_DP2_DSV']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12" id="div_data_4">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Mobolisation of Hyperbaric Reception Facility</label>
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_mobolisation_hyperbaric_reception" <?=($key['CSR_mobolisation_hyperbaric_reception']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_mobolisation_hyperbaric_reception" <?=($key['CSR_mobolisation_hyperbaric_reception']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                    </div>
				                                        <div class="hidden" id="eng_data">
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You System Integration Testing on shore (Trails for Subsea Installation of Subsea Assets)</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_sys_integration_test_onshore" <?=($key['CSR_sys_integration_test_onshore']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_sys_integration_test_onshore" <?=($key['CSR_sys_integration_test_onshore']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Implemented the Engineering Code for a Subsea Instllation?</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_implement_engg_code" <?=($key['CSR_implement_engg_code']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_implement_engg_code" <?=($key['CSR_implement_engg_code']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Been Involved in Front end engineering  and design for a Subsea Installation to a Industry Recognised Code (DNv,Lloyds,ABS)?</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_involve_front_engg" <?=($key['CSR_involve_front_engg']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_involve_front_engg" <?=($key['CSR_involve_front_engg']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Developed a Part Scope of Work for Subsea Installation Projects - Like a Package Manager? </label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_part_scope_work" <?=($key['CSR_part_scope_work']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_part_scope_work" <?=($key['CSR_part_scope_work']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Been a team member of an Audit team to audit a Subsea Engineering Contractor for their Engineering Process Control and approval system? </label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_team_mem_audit_process_approval" <?=($key['CSR_team_mem_audit_process_approval']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_team_mem_audit_process_approval" <?=($key['CSR_team_mem_audit_process_approval']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Participated in Project HSE Review & HAZID for a Subsea Installation Scope? </label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_HSE_review_HAZID" <?=($key['CSR_HSE_review_HAZID']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_HSE_review_HAZID" <?=($key['CSR_HSE_review_HAZID']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Reviewed/Commented on an Installation procedure submitted by a Subsea Installation Contractor?</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_review_install_procedure" <?=($key['CSR_review_install_procedure']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_review_install_procedure" <?=($key['CSR_review_install_procedure']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Participated in a  Risk Assessment for a Subsea Installation Scope developed by an Installation Contractor?</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_risk_assets_install" <?=($key['CSR_risk_assets_install']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_risk_assets_install" <?=($key['CSR_risk_assets_install']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Participate in System Integration Testing for Subsea Well Control Systems for Installation and Comissioning?</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_sys_integration_test" <?=($key['CSR_sys_integration_test']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_sys_integration_test" <?=($key['CSR_sys_integration_test']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                    </div>
				                                        <div class="col-sm-12">
					                                        <div class="col-sm-12" id="div_data_5">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Hyperbaric Evacuation Drills and Trails</label>
																	</div>
					                                            	<div class="col-sm-2">
					                                            		<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_hyperbaric_evacuation_drills_trails" <?=($key['CSR_hyperbaric_evacuation_drills_trails']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_hyperbaric_evacuation_drills_trails" <?=($key['CSR_hyperbaric_evacuation_drills_trails']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Emergency Response Plan Drills and Trails</label> 
					                                            	</div>
					                                            	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_emergency_respone_plan_drills_tails" <?=($key['CSR_emergency_respone_plan_drills_tails']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_emergency_respone_plan_drills_tails" <?=($key['CSR_emergency_respone_plan_drills_tails']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Offshore Execution Phase</label>
						                                            </div>
						                                            <div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_offshore_execution_phase" <?=($key['CSR_offshore_execution_phase']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_offshore_execution_phase" <?=($key['CSR_offshore_execution_phase']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Incident Reporting and Investigation</label>
						                                            </div>
						                                            <div class="col-sm-2">
					                                            		<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_incident_report_investigation" <?=($key['CSR_incident_report_investigation']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_incident_report_investigation" <?=($key['CSR_incident_report_investigation']=='no')?'checked':''?>> <i></i>No </label>
								                                        </div>
																	</div>
						                                        </div>
						                                    </div>
					                                        <div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-10" style="padding-top: 2%;">
																		<label>Have You Project Close Out Report</label>
																	</div>
																	<div class="col-sm-2">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="CSR_prj_close_out_report" <?=($key['CSR_prj_close_out_report']=='yes')?'checked':''?>> <i></i> Yes </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="CSR_prj_close_out_report" <?=($key['CSR_prj_close_out_report']=='no')?'checked':''?>> <i></i>No </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                    </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Scope of Work executed under you as CSR</label> 
				                                            	<select class="form-control scope_select CSR_scope_data" name="CSR_scope_work_execute_under_you[]" style="width:100%;" multiple="">
				                                            		<option value="">Select Scope</option>
				                                            		<option value="Riser / J Tube Installation">Riser / J Tube Installation</option>
				                                            		<option value="Boat Fender Installation">Boat Fender Installation</option>
				                                            		<option value="Clamp Installation">Clamp Installation</option>
				                                            		<option value="Conductor Guide Frame Installation">Conductor Guide Frame Installation</option>
				                                            		<option value="Member Strengthening / Replacement">Member Strengthening / Replacement</option>
				                                            		<option value="Anode Installation">Anode Installation</option>
				                                            		<option value="Umbilical Installation ">Umbilical Installation </option>
				                                            		<option value="SBM Installation / Removal Works">SBM Installation / Removal Works</option>
				                                            		<option value="ABS UWILD Surveys">ABS UWILD Surveys</option>
				                                            		<option value="Pipeline Repair Works (Clamp Installation)">Pipeline Repair Works (Clamp Installation)</option>
				                                            		<option value="Pipeline Tie-in Works">Pipeline Tie-in Works</option>
				                                            		<option value="Pipeline Sectional Replacement Works">Pipeline Sectional Replacement Works</option>
				                                            		<option value="Decomissioning Works">Decomissioning Works</option>
				                                            		<option value="Subsea Broco Oxy-Arc Cutting">Subsea Broco Oxy-Arc Cutting</option>
				                                            		<option value="PLEM Installation">PLEM Installation</option>
				                                            		<option value="Well-Head Installation">Well-Head Installation</option>
				                                            		<option value="Well-Head Intervention / Operations">Well-Head Intervention / Operations</option>
				                                            		<option value="Jumper Connections between Umbilical Manifold and Well-Head">Jumper Connections between Umbilical Manifold and Well-Head</option>
				                                            		<option value="Hyperbaric Welding">Hyperbaric Welding</option>
				                                            		<option value="Any Other Add to the List and the drop down list should reflect the same">Any Other Add to the List and the drop down list should reflect the same </option>
				                                            	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>CSR Scope </label> 
				                                            	<input type="text" placeholder="CSR Scope" name="CSR_scope_details" class="form-control" value="<?=$key['CSR_scope_work_execute_under_you']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden" id="other_csr_scope">
															<div class="form-group">
																<label>Other Scope </label> 
				                                            	<input type="text" placeholder="CSR Scope" name="other_CSR_scope_work_execute_under_you" class="form-control" value="<?=$key['other_CSR_scope_work_execute_under_you']?>">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="CSR_position_min_rate" class="form-control" value="<?=$key['CSR_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="CSR_position_max_rate" class="form-control" value="<?=$key['CSR_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                            <h1>Part 2 - DPM</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_DPM_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                               	<div class="row hidden" id="visible_DPM_data">
	                               		<div class="col-lg-12">
											<?php foreach ($DPM_details as $key) { ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>DPM - Diving Project Manager </h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<div class="col-sm-12">
															<div class="form-group">
				                                            	<label>Period of Working as Diving Project Manager </label> <br>
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="DPM_working_priod_start" class="form-control datepicker DPM_datepicker" value="<?=$key['DPM_working_priod_start']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="DPM_working_priod_end" class="form-control datepicker DPM_datepicker" value="<?=$key['DPM_working_priod_end']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                    </div>
														</div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No of Years as Diving/Engg/Marine</label> 
				                                            	<input type="text" placeholder="No of Years as Diving/Engg/Marine" name="DPM_no_year" class="form-control" value="<?=$key['DPM_no_year']?>" readonly>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-10" style="padding-top: 2%;">
																	<label>Are you familiar with IMCA Guidance, OGP RP and Best Industry Practices applicable to Offshore Diving Operations and their HSE significance ?</label> 
				                                            	</div>
				                                            	<div class="col-sm-2">
					                                            	<div class="radio i-checks">
						                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="DPM_familier_IMCA_OGP_RP" <?=($key['DPM_familier_IMCA_OGP_RP']=='yes')?'checked':''?>> <i></i> Yes </label>
						                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="DPM_familier_IMCA_OGP_RP" <?=($key['DPM_familier_IMCA_OGP_RP']=='no')?'checked':''?>> <i></i>No </label>
						                                            </div>
						                                        </div>
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>DPM - Project I Details </h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
				                                    <div class="row" style="padding-right: 2%;padding-left: 2%;">
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Project Name</label>
					                                            <input type="text" placeholder="" name="DPM_prj_name" class="form-control" value="<?=$key['DPM_prj_name']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Location </label>
					                                            <input type="text" placeholder="" name="DPM_prj_location" class="form-control" value="<?=$key['DPM_prj_location']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Oil Company </label>
					                                            <input type="text" placeholder="" name="DPM_prj_oil_company_name" class="form-control" value="<?=$key['DPM_prj_oil_company_name']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Location </label>
					                                            <input type="text" placeholder="" name="DPM_prj_oil_company_location" class="form-control" value="<?=$key['DPM_prj_oil_company_location']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Diving Contractor</label>
					                                            <input type="text" placeholder="" name="DPM_diving_contractor_name" class="form-control" value="<?=$key['DPM_diving_contractor_name']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Were you employed by the Company / the Diving Contractor / EPIC Contractor ?</label>
					                                            <input type="text" placeholder="" name="DPM_emp_oil_company_diving_contractor" class="form-control" value="<?=$key['DPM_emp_oil_company_diving_contractor']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>What was the Value of the Contract ?</label>
					                                            <input type="text" placeholder="" name="DPM_value_contractor" class="form-control" value="<?=$key['DPM_value_contractor']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify the constitution of the PM Team.</label>
					                                            <input type="text" placeholder="" name="DPM_constitution_PM_team" class="form-control" value="<?=$key['DPM_constitution_PM_team']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Scope of Work</label>
					                                            <input type="text" placeholder="" name="DPM_work_scope" class="form-control" value="<?=$key['DPM_work_scope']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Marine Assets used on the Project</label>
					                                            <input type="text" placeholder="" name="DPM_marine_assets" class="form-control" value="<?=$key['DPM_marine_assets']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Salient Feature / achievement on the Project.</label>
					                                            <input type="text" placeholder="" name="DPM_salient_feature_achivement" class="form-control" value="<?=$key['DPM_salient_feature_achivement']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Marine Assets deployed  (Names of DP2 DSV, Pipelay Barge, etc etc)</label>
					                                            <input type="text" placeholder="" name="DPM_marine_assets_deploy" class="form-control" value="<?=$key['DPM_marine_assets_deploy']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Depth of Saturation Diving Intervention (msw)</label>
					                                            <input type="text" placeholder="" name="DPM_depth_saturation_diving_invest" class="form-control" value="<?=$key['DPM_depth_saturation_diving_invest']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Was there an ROV system deployed on the Project ? Define Class of ROV and ROV Contractor ?</label>
					                                            <input type="text" placeholder="" name="DPM_ROV_deploy" class="form-control" value="<?=$key['DPM_ROV_deploy']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Client Reference</label>
					                                            <input type="text" placeholder="" name="DPM_client_ref" class="form-control" value="<?=$key['DPM_client_ref']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="DPM_LOA" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>DPM - Project II Details </h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
				                                    <div class="row" style="padding-right: 2%;padding-left: 2%;">
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Project Name</label>
					                                            <input type="text" placeholder="" name="DPM_prj_name_1" class="form-control" value="<?=$key['DPM_prj_name_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Location </label>
					                                            <input type="text" placeholder="" name="DPM_prj_location_1" class="form-control" value="<?=$key['DPM_prj_location_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Oil Company </label>
					                                            <input type="text" placeholder="" name="DPM_prj_oil_company_name_1" class="form-control" value="<?=$key['DPM_prj_oil_company_name_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Location </label>
					                                            <input type="text" placeholder="" name="DPM_prj_oil_company_location_1" class="form-control" value="<?=$key['DPM_prj_oil_company_location_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Diving Contractor</label>
					                                            <input type="text" placeholder="" name="DPM_diving_contractor_name_1" class="form-control" value="<?=$key['DPM_diving_contractor_name_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Were you employed by the Company / the Diving Contractor / EPIC Contractor ?</label>
					                                            <input type="text" placeholder="" name="DPM_emp_oil_company_diving_contractor_1" class="form-control" value="<?=$key['DPM_emp_oil_company_diving_contractor_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>What was the Value of the Contract ?</label>
					                                            <input type="text" placeholder="" name="DPM_value_contractor_1" class="form-control" value="<?=$key['DPM_value_contractor_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify the constitution of the PM Team.</label>
					                                            <input type="text" placeholder="" name="DPM_constitution_PM_team_1" class="form-control" value="<?=$key['DPM_constitution_PM_team_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Scope of Work</label>
					                                            <input type="text" placeholder="" name="DPM_work_scope_1" class="form-control" value="<?=$key['DPM_work_scope_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Marine Assets used on the Project</label>
					                                            <input type="text" placeholder="" name="DPM_marine_assets_1" class="form-control" value="<?=$key['DPM_marine_assets_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Salient Feature / achievement on the Project.</label>
					                                            <input type="text" placeholder="" name="DPM_salient_feature_achivement_1" class="form-control" value="<?=$key['DPM_salient_feature_achivement_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Marine Assets deployed  (Names of DP2 DSV, Pipelay Barge, etc etc)</label>
					                                            <input type="text" placeholder="" name="DPM_marine_assets_deploy_1" class="form-control" value="<?=$key['DPM_marine_assets_deploy_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Depth of Saturation Diving Intervention (msw)</label>
					                                            <input type="text" placeholder="" name="DPM_depth_saturation_diving_invest_1" class="form-control" value="<?=$key['DPM_depth_saturation_diving_invest_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Was there an ROV system deployed on the Project ? Define Class of ROV and ROV Contractor ?</label>
					                                            <input type="text" placeholder="" name="DPM_ROV_deploy_1" class="form-control" value="<?=$key['DPM_ROV_deploy_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Client Reference</label>
					                                            <input type="text" placeholder="" name="DPM_client_ref_1" class="form-control" value="<?=$key['DPM_client_ref_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="DPM_LOA_1" class="form-control" style="border: none;background: #f5feff;">
															</div>
														</div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="DPM_position_min_rate" class="form-control" value="<?=$key['DPM_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="DPM_position_max_rate" class="form-control" value="<?=$key['DPM_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>
											<?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                            <h1>Part 2 - DOpsMan</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_DOM_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                               	<div class="row hidden" id="visible_DOM_data">
	                               		<div class="col-lg-12">
											<?php foreach ($DOM_details as $key) { ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>DOpsMan - Diving Operations Manager </h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<div class="col-sm-12">
															<div class="form-group">
				                                            	<label>Period Working as Diving/Engg/Marine</label> <br>
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="DOM_working_priod_start" class="form-control datepicker DOM_datepicker" value="<?=$key['DoM_working_priod_start']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="DOM_working_priod_end" class="form-control datepicker DOM_datepicker" value="<?=$key['DoM_working_priod_end']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                    </div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No of Years as Diving/Engg/Marine</label> 
				                                            	<input type="text" placeholder="No of Years as Diving/Engg/Marine" name="DOM_no_year" class="form-control" value="<?=$key['DoM_no_year']?>" readonly>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-10" style="padding-top: 2%;">
																	<label>Are you familiar with IMCA Guidance, OGP RP and Best Industry Practices applicable to Offshore Diving Operations and their HSE significance ?</label> 
				                                            	</div>
				                                            	<div class="col-sm-2">
					                                            	<div class="radio i-checks">
						                                            	<label class="checkbox-inline"> <input type="radio" value="yes" name="DOM_familier_IMCA_OGP_RP" <?=($key['DoM_familier_IMCA_OGP_RP']=='yes')?'checked':''?>> <i></i> Yes </label>
						                                            	<label class="checkbox-inline"> <input type="radio" value="no" name="DOM_familier_IMCA_OGP_RP" <?=($key['DoM_familier_IMCA_OGP_RP']=='no')?'checked':''?>> <i></i>No </label>
						                                            </div>
						                                        </div>
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>DOpsMan - Project I Details </h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
				                                    <div class="row" style="padding-right: 2%;padding-left: 2%;">
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Project Name</label>
					                                            <input type="text" placeholder="" name="DOM_prj_name" class="form-control" value="<?=$key['DoM_prj_name']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Location </label>
					                                            <input type="text" placeholder="" name="DOM_prj_location" class="form-control" value="<?=$key['DoM_prj_location']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Oil Company </label>
					                                            <input type="text" placeholder="" name="DOM_prj_oil_company_name" class="form-control" value="<?=$key['DoM_prj_oil_company_name']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Location </label>
					                                            <input type="text" placeholder="" name="DOM_prj_oil_company_location" class="form-control" value="<?=$key['DoM_prj_oil_company_location']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Diving Contractor</label>
					                                            <input type="text" placeholder="" name="DOM_diving_contractor_name" class="form-control" value="<?=$key['DoM_diving_contractor_name']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Who was your Employer Oil Company or Diving Contractor </label>
					                                            <input type="text" placeholder="" name="DOM_emp_oil_company_diving_contractor" class="form-control" value="<?=$key['DoM_emp_oil_company_diving_contractor']?>">
															</div>
				                                        </div>
				                                        <!-- <div class="col-sm-12">
															<div class="form-group">
																<label>Value of the Contract ?</label>
					                                            <input type="text" placeholder="" name="DOM_value_contractor" class="form-control" value="<?=$key['DoM_value_contractor']?>">
															</div>
				                                        </div> -->
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Constitution of the PM Team</label>
					                                            <input type="text" placeholder="" name="DOM_constitution_PM_team" class="form-control" value="<?=$key['DoM_constitution_PM_team']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Scope of Work</label>
					                                            <input type="text" placeholder="" name="DOM_work_scope" class="form-control" value="<?=$key['DoM_work_scope']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Marine Assets used on the Project</label>
			                                            		<input type="text" placeholder="" name="DOM_marine_assets" class="form-control" value="<?=$key['DoM_marine_assets']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Salient Feature / achievement on the Project. </label>
					                                            <input type="text" placeholder="" name="DOM_salient_feature_achivement" class="form-control" value="<?=$key['DoM_salient_feature_achivement']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Marine Assets deployed  (Names of DP2 DSV, Pipelay Barge, etc etc)</label>
					                                            <input type="text" placeholder="" name="DOM_marine_assets_deploy" class="form-control" value="<?=$key['DoM_marine_assets_deploy']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Depth of Saturation Diving Intervention (msw)</label>
					                                            <input type="text" placeholder="" name="DOM_depth_saturation_diving_invest" class="form-control" value="<?=$key['DoM_depth_saturation_diving_invest']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Was there an ROV system deployed on the Project ? Define Class of ROV and ROV Contractor ?</label>
					                                            <input type="text" placeholder="" name="DOM_ROV_deploy" class="form-control" value="<?=$key['DoM_ROV_deploy']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Client Reference</label>
					                                            <input type="text" placeholder="" name="DOM_client_ref" class="form-control" value="<?=$key['DoM_client_ref']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="DOM_LOA" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>DOpsMan - Project II Details </h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
				                                    <div class="row" style="padding-right: 2%;padding-left: 2%;">
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Project Name</label>
					                                            <input type="text" placeholder="" name="DOM_prj_name_1" class="form-control" value="<?=$key['DoM_prj_name_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Location </label>
					                                            <input type="text" placeholder="" name="DOM_prj_location_1" class="form-control" value="<?=$key['DoM_prj_location_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Oil Company </label>
					                                            <input type="text" placeholder="" name="DOM_prj_oil_company_name_1" class="form-control" value="<?=$key['DoM_prj_oil_company_name_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Location </label>
					                                            <input type="text" placeholder="" name="DOM_prj_oil_company_location_1" class="form-control" value="<?=$key['DoM_prj_oil_company_location_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Diving Contractor</label>
					                                            <input type="text" placeholder="" name="DOM_diving_contractor_name_1" class="form-control" value="<?=$key['DoM_diving_contractor_name_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Who was your Employer Oil Company or Diving Contractor </label>
					                                            <input type="text" placeholder="" name="DOM_emp_oil_company_diving_contractor_1" class="form-control" value="<?=$key['DoM_emp_oil_company_diving_contractor_1']?>">
															</div>
				                                        </div>
				                                        <!-- <div class="col-sm-12">
															<div class="form-group">
																<label>Value of the Contract ?</label>
					                                            <input type="text" placeholder="" name="DOM_value_contractor_1" class="form-control" value="<?=$key['DoM_value_contractor_1']?>">
															</div>
				                                        </div> -->
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Constitution of the PM Team</label>
					                                            <input type="text" placeholder="" name="DOM_constitution_PM_team_1" class="form-control" value="<?=$key['DoM_constitution_PM_team_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Scope of Work</label>
					                                            <input type="text" placeholder="" name="DOM_work_scope_1" class="form-control" value="<?=$key['DoM_work_scope_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Marine Assets used on the Project</label>
					                                            <input type="text" placeholder="" name="DOM_marine_assets_1" class="form-control" value="<?=$key['DoM_marine_assets_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Salient Feature / achievement on the Project. </label>
					                                            <input type="text" placeholder="" name="DOM_salient_feature_achivement_1" class="form-control" value="<?=$key['DoM_salient_feature_achivement_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Marine Assets deployed  (Names of DP2 DSV, Pipelay Barge, etc etc)</label>
					                                            <input type="text" placeholder="" name="DOM_marine_assets_deploy_1" class="form-control" value="<?=$key['DoM_marine_assets_deploy_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Depth of Saturation Diving Intervention (msw)</label>
					                                            <input type="text" placeholder="" name="DOM_depth_saturation_diving_invest_1" class="form-control" value="<?=$key['DoM_depth_saturation_diving_invest_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Was there an ROV system deployed on the Project ? Define Class of ROV and ROV Contractor ?</label>
					                                            <input type="text" placeholder="" name="DOM_ROV_deploy_1" class="form-control" value="<?=$key['DoM_ROV_deploy_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Client Reference</label>
					                                            <input type="text" placeholder="" name="DOM_client_ref_1" class="form-control" value="<?=$key['DoM_client_ref_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="DOM_LOA_1" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="DOM_position_min_rate" class="form-control" value="<?=$key['DoM_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="DOM_position_max_rate" class="form-control" value="<?=$key['DoM_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                            <h1>Part 2 - Sat. Div. Superintendent</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_SDS_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                            	<div class="row hidden" id="visible_SDS_data">
	                               		<div class="col-lg-12">
											<?php foreach ($SDS_details as $key) { ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Saturation Diving Superintendent </h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<div class="col-sm-12">
															<div class="form-group">															
				                                            	<label>Period Working</label> <br>
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="SDS_working_priod_start" class="form-control datepicker" value="<?=$key['SDS_working_priod_start']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="SDS_working_priod_end" class="form-control datepicker" value="<?=$key['SDS_working_priod_end']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No of Years</label>
				                                            	<input type="text" placeholder="" name="SDS_no_year" class="form-control" value="<?=$key['SDS_no_year']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No. of Saturation Diving Projects Managed Offhsore</label>
					                                            <input type="text" placeholder="" name="SDS_no_SDS_offshare" class="form-control" value="<?=$key['SDS_no_SDS_offshare']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Barges that I have executed Saturation Diving Ops from.</label>
					                                            <input type="text" placeholder="" name="SDS_name_barges_exe_SDS_from" class="form-control" value="<?=$key['SDS_name_barges_exe_SDS_from']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the DP2 DSV that I have executed Saturation Diving Ops from.</label>
					                                            <input type="text" placeholder="Name the DP2 DSV that I have executed Saturation Diving Ops from." name="SDS_name_DP2_DSV_exe_SDS_from" class="form-control" value="<?=$key['SDS_name_DP2_DSV_exe_SDS_from']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>IMCA Diving Contractors I have Worked for </label>
					                                            <input type="text" placeholder="IMCA Diving Contractors I have Worked for" name="SDS_IMCA_div_cntr_wrk" class="form-control" value="<?=$key['SDS_IMCA_div_cntr_wrk']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Oil Companies I have Worked for </label>
					                                            <input type="text" placeholder="Oil Companies I have Worked for" name="SDS_oil_comp_wrk" class="form-control" value="<?=$key['SDS_oil_comp_wrk']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>EPIC Projects that I have worked as Saturation Diving Superintendent.</label>
					                                            <input type="text" placeholder="EPIC Projects that I have worked as Saturation Diving Superintendent." name="SDS_EPIC_prj_wrk_SDS" class="form-control" value="<?=$key['SDS_EPIC_prj_wrk_SDS']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>I have Project Management Experience </label>
					                                            <input type="text" placeholder="I have Project Management Experience" name="SDS_prj_mgnt_exp" class="form-control" value="<?=$key['SDS_prj_mgnt_exp']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Type of Work</label> 
				                                            	<select class="form-control scope_select SDS_scope_data" name="SDS_type_wrk[]" style="width:100%;" multiple="">
				                                            		<option value="">Select Scope</option>
				                                            		<option value="MGR / Inspection">MGR / Inspection</option>
				                                            		<option value="Riser / J Tube Installation">Riser / J Tube Installation</option>
				                                            		<option value="Boat Fender Installation">Boat Fender Installation</option>
				                                            		<option value="Clamp Installation">Clamp Installation</option>
				                                            		<option value="Conductor Guide Frame Installation">Conductor Guide Frame Installation</option>
				                                            		<option value="Member Strengthening / Replacement">Member Strengthening / Replacement</option>
				                                            		<option value="Anode Installation">Anode Installation</option>
				                                            		<option value="Umbilical Installation ">Umbilical Installation </option>
				                                            		<option value="SBM Installation / Removal Works">SBM Installation / Removal Works</option>
				                                            		<option value="ABS UWILD Surveys">ABS UWILD Surveys</option>
				                                            		<option value="Pipeline Repair Works (Clamp Installation)">Pipeline Repair Works (Clamp Installation)</option>
				                                            		<option value="Pipeline Tie-in Works">Pipeline Tie-in Works</option>
				                                            		<option value="Pipeline Sectional Replacement Works">Pipeline Sectional Replacement Works</option>
				                                            		<option value="Decomissioning Works">Decomissioning Works</option>
				                                            		<option value="Insert Subsea Broco Oxy-Arc Cutting">Insert Subsea Broco Oxy-Arc Cutting</option>
				                                            		<option value="PLEM Installation">PLEM Installation</option>
				                                            		<option value="Well-Head Installation">Well-Head Installation</option>
				                                            		<option value="Well-Head Intervention / Operations">Well-Head Intervention / Operations</option>
				                                            		<option value="Jumper Connections between Umbilical Manifold and Well-Head">Jumper Connections between Umbilical Manifold and Well-Head</option>
				                                            		<option value="Hyperbaric Welding">Hyperbaric Welding</option>
				                                            		<option value="Any Other Add to the List and the drop down list should reflect the same ">Any Other Add to the List and the drop down list should reflect the same </option>
				                                            	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="SDS Scope" name="SDS_scope_details" class="form-control" value="<?=$key['SDS_type_wrk']?>">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="SDS_position_min_rate" class="form-control" value="<?=$key['SDS_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="SDS_position_max_rate" class="form-control" value="<?=$key['SDS_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                            <h1>Part 2 - Project Engg. Div</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_Prj_Engg_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                            	<div class="row hidden" id="visible_Prj_Engg_data">
	                               		<div class="col-lg-12">
											<?php foreach ($prj_engg_details as $key) { ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Project Engineer  Subsea - (Diving Operations)</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<div class="col-sm-12">
															<div class="form-group">															
				                                            	<label>Period Working as Project Engineer with Divers</label> <br>
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="Prj_Engg_working_priod_start" class="form-control datepicker prj_datepicker" value="<?=$key['Prj_Engg_working_priod_start']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="Prj_Engg_working_priod_end" class="form-control datepicker prj_datepicker" value="<?=$key['Prj_Engg_working_priod_end']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No of Years as Project Engineer Subsea - Working with Divers</label>
				                                            	<input type="text" placeholder="No of Years as Project Engineer Subsea - Working with Divers" name="Prj_Engg_no_year" class="form-control" readonly value="<?=$key['Prj_Engg_no_year']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Barges that I have executed Saturation Diving Ops from.</label>
					                                            <input type="text" placeholder="" name="Prj_Engg_name_barges_exe_SDS_from" class="form-control" value="<?=$key['Prj_Engg_name_barges_exe_SDS_from']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the DP2 DSV that I have executed Saturation Diving Ops from.</label>
					                                            <input type="text" placeholder="Name the DP2 DSV that I have executed Saturation Diving Ops from." name="Prj_Engg_name_DP2_DSV_exe_SDS_from" class="form-control" value="<?=$key['Prj_Engg_name_DP2_DSV_exe_SDS_from']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>IMCA Diving Contractors I have Worked for </label>
					                                            <input type="text" placeholder="IMCA Diving Contractors I have Worked for" name="Prj_Engg_IMCA_div_cntr_wrk" class="form-control" value="<?=$key['Prj_Engg_IMCA_div_cntr_wrk']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Oil Companies I have Worked for </label>
					                                            <input type="text" placeholder="Oil Companies I have Worked for" name="Prj_Engg_oil_comp_wrk" class="form-control" value="<?=$key['Prj_Engg_oil_comp_wrk']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>EPIC Projects that I have worked as Project Engineer Subsea - Working with Divers</label>
					                                            <input type="text" placeholder="EPIC Projects that I have worked as Saturation Diving Superintendent." name="Prj_Engg_EPIC_prj_engg_susea" class="form-control" value="<?=$key['Prj_Engg_EPIC_prj_engg_susea']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="Prj_Engg_LOA1" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="Prj_Engg_LOA2" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Project Management Experience</label>
					                                            <input type="text" placeholder="Project Management Experience" name="Prj_Engg_prj_mgnt_exp" class="form-control" value="<?=$key['Prj_Engg_prj_mgnt_exp']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Type of Work</label> 
				                                            	<select class="form-control scope_select Prj_Engg_scope_data" name="Prj_Engg_type_wrk[]" style="width:100%;" multiple="">
				                                            		<option value="">Select Scope</option>
				                                            		<option value="Pipe Lay">Pipe Lay</option>
				                                            		<option value="Jacket Installation">Jacket Installation</option>
				                                            		<option value="Topside Hook-up (Riser and Umbilicals)">Topside Hook-up (Riser and Umbilicals)</option>
				                                            		<option value="Pipeline Installations Works">Pipeline Installations Works</option>
				                                            		<option value="Riser Installations Works">Riser Installations Works</option>
				                                            		<option value="Offshore Heavy Lift Engineering">Offshore Heavy Lift Engineering</option>
				                                            		<option value="Installation of BOP">Installation of BOP</option>
				                                            		<option value="Installation of Subsea Well Heads">Installation of Subsea Well Heads</option>
				                                            		<option value="Umibilical Lay">Umibilical Lay</option>
				                                            		<option value="ABS UWILD Surveys">ABS UWILD Surveys</option>
				                                            		<option value="Umbilical Tie-in">Umbilical Tie-in</option>
				                                            		<option value="Pipeline Tie-in Works">Pipeline Tie-in Works</option>
				                                            		<option value="Subsea Well Head Commissioning Works">Subsea Well Head Commissioning Works</option>
				                                            		<option value="Pipeline Commissioning Works">Pipeline Commissioning Works</option>
				                                            		<option value="Free Span Correction">Free Span Correction</option>
				                                            		<option value="Subsea Trenching">Subsea Trenching</option>
				                                            		<option value="Rock dumping subsea">Rock dumping subsea</option>
				                                            		<option value="Decommisiong of Offshore Platforms">Decommisiong of Offshore Platforms</option>
				                                            		<option value="Mooring / Spar Buoy Installation">Mooring / Spar Buoy Installation</option>
				                                            		<option value="SBM Installation">SBM Installation</option>
				                                            		<option value="DSV Modifications">DSV Modifications</option>
				                                            		<option value="Hyperbaric Welding">Hyperbaric Welding</option>
				                                            		<option value="Any Other Add to the List and the drop down list should reflect the same ">Any Other Add to the List and the drop down list should reflect the same </option>
				                                            	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="SDS Scope" name="Prj_Engg_scope_details" class="form-control" value="<?=$key['Prj_Engg_type_wrk']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience in developing Installation Methodolgy </label>
					                                           	<select class="form-control scope_select Prj_Engg_develop_install_method_data" name="Prj_Engg_develop_install_method[]" style="width:100%;" multiple="">
					                                           		<option value="">Select Methodology</option>
					                                           		<option value="Pipeline">Pipeline</option>
					                                           		<option value="Flexibles">Flexibles</option>
					                                           		<option value="Umbilical">Umbilical</option>
					                                           		<option value="Structures">Structures</option>
					                                           	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="Methodology Scope" name="Prj_Engg_develop_install_method_details" class="form-control" value="<?=$key['Prj_Engg_develop_install_method']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Develop Mobolisation Plans for DSV Ops and Acceptance Criteria</label>
					                                           	<select class="form-control scope_select Prj_Engg_develop_mobolisation_plan_data" name="Prj_Engg_develop_mobolisation_plan[]" style="width:100%;" multiple="">
					                                           		<option value="">Select Plan</option>
					                                           		<option value="Pipeline">Pipeline</option>
					                                           		<option value="Flexibles">Flexibles</option>
					                                           		<option value="Umbilical">Umbilical</option>
					                                           		<option value="Structures">Structures</option>
					                                           	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>Mobolisation Scope </label> 
				                                            	<input type="text" placeholder="Mobolisation Plan" name="Prj_Engg_develope_mobolisation_plan_details" class="form-control" value="<?=$key['Prj_Engg_develop_mobolisation_plan']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience with relevant pipeline analysis software (ANSYS, Abaqus, SIMLA or equivalent)</label>
					                                            <textarea rows="2" name="Prj_Engg_exp_rel_pipeline_analysis_sw" class="form-control"> <?=$key['Prj_Engg_exp_rel_pipeline_analysis_sw']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience with other pipeline design tools (FatFree, PET, Offpipe, Riflex, Orcaflex, Ceasar, Sage (2D) etc.)</label>
					                                            <textarea rows="2" name="Prj_Engg_exp_other_pipeline_design_tool" class="form-control"> <?=$key['Prj_Engg_exp_other_pipeline_design_tool']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience with structural analysis tools  (SESAM / inite Element Analysis (FEA)</label>
					                                            <textarea rows="2" name="Prj_Engg_exp_structural_analysis_tool_tool" class="form-control"> <?=$key['Prj_Engg_exp_structural_analysis_tool_tool']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience in  design and detailing verification in accordance with acknowledged industry Codes, Standards and Design Guides (e.g. API, DnV, ISO); Client Specifications and Scopes of Work.</label>
					                                            <textarea rows="2" name="Prj_Engg_exp_design_details_veri_ack_industry" class="form-control"> <?=$key['Prj_Engg_exp_design_details_veri_ack_industry']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience in Production and checking of design documentation including feasibility reports, detailed design reports, construction drawings, design specifications, material take-offs, weight control calculations, etc.</label>
					                                            <textarea rows="2" name="Prj_Engg_exp_production_check_design_doc" class="form-control"> <?=$key['Prj_Engg_exp_production_check_design_doc']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience in Liasing  with associated subsea related disciplines and understand the interfaces within a project</label>
					                                            <textarea rows="2" name="Prj_Engg_exp_liading_ass_interface" class="form-control"> <?=$key['Prj_Engg_exp_liading_ass_interface']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Capable of providing engineering assistance during mobilisations and occasional periods of offshore or site working, including FATs, SITs, Pre-commissioning, etc.</label>
					                                            <textarea rows="2" name="Prj_Engg_exp_engg_mobilisation_oxxasional_period" class="form-control"> <?=$key['Prj_Engg_exp_engg_mobilisation_oxxasional_period']?></textarea>
														</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Capable of providingtechnical engineering support to other departments within the Central Engineering Group, the Project Engineering Group, and to colleagues in terms of training and mentoring.</label>
					                                            <textarea rows="2" name="Prj_Engg_exp_engg_technical_support" class="form-control"> <?=$key['Prj_Engg_exp_engg_technical_support']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Prior experience of participate as required in events such as Bid Clarifications, Kickoff meetings, HIRAs, Design Reviews. MOC and Variations management</label>
					                                            <textarea rows="2" name="Prj_Engg_exp_participate_req_event" class="form-control"> <?=$key['Prj_Engg_exp_participate_req_event']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experinence in Developing Lift Plans (Onshore and Offshore) in accordance to acknowledged industry Codes, Standards and Design Guides (e.g. API, DnV, ISO); Client Specifications and Scopes of Work. </label>
					                                            <textarea rows="2" name="Prj_Engg_exp_develope_lift_plan" class="form-control"> <?=$key['Prj_Engg_exp_develope_lift_plan']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>What is your Strength</label>
					                                           	<select class="form-control scope_select Prj_Engg_strength_data" name="Prj_Engg_strength_plan[]" style="width:100%;" multiple="">
					                                           		<option value="">Select Plan</option>
					                                           		<option value="Developing Scope of Work">Developing Scope of Work</option>
					                                           		<option value="Technical Authorship">Technical Authorship</option>
					                                           		<option value="Developing Installation Methodology ">Developing Installation Methodology </option>
					                                           		<option value="Installation Analysis Scheduling">Installation Analysis Scheduling</option>
					                                           		<option value="Budget - Cost Management - MOC - Variations">Budget - Cost Management - MOC - Variations</option>
					                                           		<option value="Installation Subcontractor Evaluation">Installation Subcontractor Evaluation</option>
					                                           		<option value="SCM / Contracts">SCM / Contracts</option>
					                                           		<option value="Research">Research</option>
					                                           		<option value="Installation Team Lead">Installation Team Lead</option>
					                                           		<option value="Risk Mitigation">Risk Mitigation</option>
					                                           		<option value="Codes and Compliance">Codes and Compliance</option>
					                                           		<option value="QA/QC">QA/QC</option>
					                                           	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="Strength" name="Prj_Engg_strength_details" class="form-control" value="<?=$key['Prj_Engg_strength_plan']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Area of Specialisation</label>
					                                           	<select class="form-control scope_select Prj_Engg_specification_area_data" name="Prj_Engg_specification_area_plan[]" style="width:100%;" multiple="">
					                                           		<option value="">Select Area</option>
					                                           		<option value="Umbilicals">Umbilicals</option>
					                                           		<option value="Rigid Pipeline">Rigid Pipeline</option>
					                                           		<option value="Flexible Pipelines">Flexible Pipelines</option>
					                                           		<option value="Subsea Structure">Subsea Structure</option>
					                                           		<option value="Subsea System Integration">Subsea System Integration</option>
					                                           	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="Specialisation Area" name="Prj_Engg_specification_area_details" class="form-control" value="<?=$key['Prj_Engg_specification_area_plan']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Cycle of Comfort</label>
					                                           	<select class="form-control scope_select Prj_Engg_comfort_cycle_data" name="Prj_Engg_comfort_cycle_plan[]" style="width:100%;" multiple="">
					                                           		<option value="">Select Area</option>
					                                           		<option value="Concept Evaluation ">Concept Evaluation </option>
					                                           		<option value="Front End Engineering">Front End Engineering</option>
					                                           		<option value="Feasibility Assessment">Feasibility Assessment</option>
					                                           		<option value="Installation">Installation</option>
					                                           		<option value="Commissioning">Commissioning</option>
					                                           		<option value="Operations">Operations</option>
					                                           	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="Comfort Cycle" name="Prj_Engg_comfort_cycle_details" class="form-control" value="<?=$key['Prj_Engg_comfort_cycle_plan']?>">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="Prj_Engg_position_min_rate" class="form-control" value="<?=$key['Prj_Engg_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="Prj_Engg_position_max_rate" class="form-control" value="<?=$key['Prj_Engg_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                            <h1>Part 2 - Feild Engg. Div</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_Field_Engg_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                            	<div class="row hidden" id="visible_Field_Engg_data">
	                               		<div class="col-lg-12">
											<?php foreach ($field_engg_details as $key) { ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Field Engineer  Subsea - (Diving Operations)</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<div class="col-sm-12">
															<div class="form-group">															
				                                            	<label>Period Working as Project Engineer with Divers</label> <br>
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="Field_Engg_working_priod_start" class="form-control datepicker field_datepicker" value="<?=$key['Field_Engg_working_priod_start']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="Field_Engg_working_priod_end" class="form-control datepicker field_datepicker" value="<?=$key['Field_Engg_working_priod_end']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No of Years as Project Engineer Subsea - Working with Divers</label>
				                                            	<input type="text" placeholder="No of Years as Project Engineer Subsea - Working with Divers" name="Field_Engg_no_year" class="form-control" value="<?=$key['Field_Engg_no_year']?>" readonly>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the Barges that I have executed Saturation Diving Ops from.</label>
					                                            <input type="text" placeholder="" name="Field_Engg_name_barges_exe_SDS_from" class="form-control" value="<?=$key['Field_Engg_name_barges_exe_SDS_from']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Name the DP2 DSV that I have executed Saturation Diving Ops from.</label>
					                                            <input type="text" placeholder="Name the DP2 DSV that I have executed Saturation Diving Ops from." name="Field_Engg_name_DP2_DSV_exe_SDS_from" class="form-control" value="<?=$key['Field_Engg_name_DP2_DSV_exe_SDS_from']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>IMCA Diving Contractors I have Worked for </label>
					                                            <input type="text" placeholder="IMCA Diving Contractors I have Worked for" name="Field_Engg_IMCA_div_cntr_wrk" class="form-control" value="<?=$key['Field_Engg_IMCA_div_cntr_wrk']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Oil Companies I have Worked for </label>
					                                            <input type="text" placeholder="Oil Companies I have Worked for" name="Field_Engg_oil_comp_wrk" class="form-control" value="<?=$key['Field_Engg_oil_comp_wrk']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>EPIC Projects that I have worked as Project Engineer Subsea - Working with Divers</label>
					                                            <input type="text" placeholder="EPIC Projects that I have worked as Saturation Diving Superintendent." name="Field_Engg_EPIC_field_engg_susea" class="form-control" value="<?=$key['Field_Engg_EPIC_field_engg_susea']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="Field_Engg_LOA_1" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="Field_Engg_LOA_2" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>I have Project Management Experience </label>
					                                            <input type="text" placeholder="I have Project Management Experience" name="Field_Engg_prj_mgnt_exp" class="form-control" value="<?=$key['Field_Engg_prj_mgnt_exp']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Type of Work</label> 
				                                            	<select class="form-control scope_select field_Engg_scope_data" name="Field_Engg_type_wrk[]" style="width:100%;" multiple="">
				                                            		<option value="">Select Scope</option>
				                                            		<option value="Pipe Lay">Pipe Lay</option>
				                                            		<option value="Jacket Installation">Jacket Installation</option>
				                                            		<option value="Topside Hook-up (Riser and Umbilicals)">Topside Hook-up (Riser and Umbilicals)</option>
				                                            		<option value="Pipeline Installations Works">Pipeline Installations Works</option>
				                                            		<option value="Riser Installations Works">Riser Installations Works</option>
				                                            		<option value="Offshore Heavy Lift Engineering">Offshore Heavy Lift Engineering</option>
				                                            		<option value="HeavyLift Transportation">HeavyLift Transportation</option>
				                                            		<option value="Installation of BOP">Installation of BOP</option>
				                                            		<option value="Installation of Subsea Well Heads">Installation of Subsea Well Heads</option>
				                                            		<option value="Umibilical Lay">Umibilical Lay</option>
				                                            		<option value="Umbilical Tie-in">Umbilical Tie-in</option>
				                                            		<option value="Subsea Well Head Commissioning Works">Subsea Well Head Commissioning Works</option>
				                                            		<option value="Pipeline Commissioning Works">Pipeline Commissioning Works</option>
				                                            		<option value="Free Span Correction">Free Span Correction</option>
				                                            		<option value="Subsea Trenching">Subsea Trenching</option>
				                                            		<option value="Rock dumping subsea">Rock dumping subsea</option>
				                                            		<option value="Decommisiong of Offshore Platforms">Decommisiong of Offshore Platforms</option>
				                                            		<option value="Mooring / Spar Buoy Installation">Mooring / Spar Buoy Installation</option>
				                                            		<option value="Member Re-inforcement">Member Re-inforcement</option>
				                                            		<option value="SBM Installation">SBM Installation</option>
				                                            		<option value="DSV Modifications">DSV Modifications</option>
				                                            		<option value="Hyperbaric Welding">Hyperbaric Welding</option>
				                                            		<option value="Any Other Add to the List and the drop down list should reflect the same ">Any Other Add to the List and the drop down list should reflect the same </option>
				                                            	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="SDS Scope" name="field_Engg_scope_details" class="form-control" value="<?=$key['Field_Engg_type_wrk']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience in developing Installation Methodolgy </label>
					                                           	<select class="form-control scope_select Field_Engg_develop_install_method_data" name="Field_Engg_develop_install_method[]" style="width:100%;" multiple="">
					                                           		<option value="">Select Methodology</option>
					                                           		<option value="Pipeline">Pipeline</option>
					                                           		<option value="Flexibles">Flexibles</option>
					                                           		<option value="Umbilical">Umbilical</option>
					                                           		<option value="Structures">Structures</option>
					                                           	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="Methodology Scope" name="Field_Engg_develop_install_method_details" class="form-control" value="<?=$key['Field_Engg_develop_install_method']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Develop Mobolisation Plans for DSV Ops and Acceptance Criteria</label>
					                                           	<select class="form-control scope_select Field_Engg_develop_mobolisation_plan_data" name="Field_Engg_develop_mobolisation_plan[]" style="width:100%;" multiple="">
					                                           		<option value="">Select Plan</option>
					                                           		<option value="Pipeline">Pipeline</option>
					                                           		<option value="Flexibles">Flexibles</option>
					                                           		<option value="Umbilical">Umbilical</option>
					                                           		<option value="Structures">Structures</option>
					                                           	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>Mobolisation Scope </label> 
				                                            	<input type="text" placeholder="Mobolisation Plan" name="Field_Engg_develope_mobolisation_plan_details" class="form-control" value="<?=$key['Field_Engg_develop_mobolisation_plan']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience with relevant pipeline analysis software (ANSYS, Abaqus, SIMLA or equivalent)</label>
					                                            <textarea rows="2" name="Field_Engg_exp_rel_pipeline_analysis_sw" class="form-control"> <?=$key['Field_Engg_exp_rel_pipeline_analysis_sw']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience with other pipeline design tools (FatFree, PET, Offpipe, Riflex, Orcaflex, Ceasar, Sage (2D) etc.)</label>
					                                            <textarea rows="2" name="Field_Engg_exp_other_pipeline_design_tool" class="form-control"> <?=$key['Field_Engg_exp_other_pipeline_design_tool']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience with structural analysis tools  (SESAM / inite Element Analysis (FEA)</label>
					                                            <textarea rows="2" name="Field_Engg_exp_structural_analysis_tool_tool" class="form-control"> <?=$key['Field_Engg_exp_structural_analysis_tool_tool']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience in  design and detailing verification in accordance with acknowledged industry Codes, Standards and Design Guides (e.g. API, DnV, ISO); Client Specifications and Scopes of Work.</label>
					                                            <textarea rows="2" name="Field_Engg_exp_design_details_veri_ack_industry" class="form-control"> <?=$key['Field_Engg_exp_design_details_veri_ack_industry']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience in Production and checking of design documentation including feasibility reports, detailed design reports, construction drawings, design specifications, material take-offs, weight control calculations, etc.</label>
					                                            <textarea rows="2" name="Field_Engg_exp_production_check_design_doc" class="form-control"> <?=$key['Field_Engg_exp_production_check_design_doc']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experience in Liasing  with associated subsea related disciplines and understand the interfaces within a project</label>
					                                            <textarea rows="2" name="Field_Engg_exp_liading_ass_interface" class="form-control"> <?=$key['Field_Engg_exp_liading_ass_interface']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Capable of providing engineering assistance during mobilisations and occasional periods of offshore or site working, including FATs, SITs, Pre-commissioning, etc.</label>
					                                            <textarea rows="2" name="Field_Engg_exp_engg_mobilisation_oxxasional_period" class="form-control"> <?=$key['Field_Engg_exp_engg_mobilisation_oxxasional_period']?></textarea>
														</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Capable of providing technical engineering support to other departments within the Central Engineering Group, the Project Engineering Group, and to colleagues in terms of training and mentoring.</label>
					                                            <textarea rows="2" name="Field_Engg_exp_engg_technical_support" class="form-control"> <?=$key['Field_Engg_exp_engg_technical_support']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Prior experience of participate as required in events such as Bid Clarifications, Kickoff meetings, HIRAs, Design Reviews. MOC and Variations management</label>
					                                            <textarea rows="2" name="Field_Engg_exp_participate_req_event" class="form-control"> <?=$key['Field_Engg_exp_participate_req_event']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Experinence in Developing Lift Plans (Onshore and Offshore) in accordance to acknowledged industry Codes, Standards and Design Guides (e.g. API, DnV, ISO); Client Specifications and Scopes of Work. </label>
					                                            <textarea rows="2" name="Field_Engg_exp_develope_lift_plan" class="form-control"> <?=$key['Field_Engg_exp_develope_lift_plan']?></textarea>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>What is your Strength</label>
					                                           	<select class="form-control scope_select Field_Engg_strength_data" name="Field_Engg_strength_plan[]" style="width:100%;" multiple="">
					                                           		<option value="">Select Plan</option>
					                                           		<option value="Developing Scope of Work">Developing Scope of Work</option>
					                                           		<option value="Technical Authorship">Technical Authorship</option>
					                                           		<option value="Developing Installation Methodology ">Developing Installation Methodology </option>
					                                           		<option value="Installation Analysis Scheduling">Installation Analysis Scheduling</option>
					                                           		<option value="Budget - Cost Management - MOC - Variations">Budget - Cost Management - MOC - Variations</option>
					                                           		<option value="Installation Subcontractor Evaluation">Installation Subcontractor Evaluation</option>
					                                           		<option value="SCM / Contracts">SCM / Contracts</option>
					                                           		<option value="Research">Research</option>
					                                           		<option value="Installation Team Lead">Installation Team Lead</option>
					                                           		<option value="Risk Mitigation">Risk Mitigation</option>
					                                           		<option value="Codes and Compliance">Codes and Compliance</option>
					                                           		<option value="QA/QC">QA/QC</option>
					                                           	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="Strength" name="Field_Engg_strength_details" class="form-control" value="<?=$key['Field_Engg_strength_plan']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Area of Specialisation</label>
					                                           	<select class="form-control scope_select Field_Engg_specification_area_data" name="Field_Engg_specification_area_plan[]" style="width:100%;" multiple="">
					                                           		<option value="">Select Area</option>
					                                           		<option value="Umbilicals">Umbilicals</option>
					                                           		<option value="Rigid Pipeline">Rigid Pipeline</option>
					                                           		<option value="Flexible Pipelines">Flexible Pipelines</option>
					                                           		<option value="Subsea Structure">Subsea Structure</option>
					                                           		<option value="Subsea System Integration">Subsea System Integration</option>
					                                           	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="Specialisation Area" name="Field_Engg_specification_area_details" class="form-control" value="<?=$key['Field_Engg_specification_area_plan']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Cycle of Comfort</label>
					                                           	<select class="form-control scope_select Field_Engg_comfort_cycle_data" name="Field_Engg_comfort_cycle_plan[]" style="width:100%;" multiple="">
					                                           		<option value="">Select Area</option>
					                                           		<option value="Concept Evaluation ">Concept Evaluation </option>
					                                           		<option value="Front End Engineering">Front End Engineering</option>
					                                           		<option value="Feasibility Assessment">Feasibility Assessment</option>
					                                           		<option value="Installation">Installation</option>
					                                           		<option value="Commissioning">Commissioning</option>
					                                           		<option value="Operations">Operations</option>
					                                           	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="Comfort Cycle" name="Field_Engg_comfort_cycle_details" class="form-control" value="<?=$key['Field_Engg_comfort_cycle_plan']?>">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="field_Engg_position_min_rate" class="form-control" value="<?=$key['field_Engg_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="field_Engg_position_max_rate" class="form-control" value="<?=$key['field_Engg_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                            <h1>DP 2 DSV Master/MWS Exp.</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_DP_DSV_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                            	<div class="row hidden" id="visible_DP_DSV_data">
	                               		<div class="col-lg-12">
											<?php foreach ($DSV_details as $key) {	 ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>DP 2 DSV Vessel Master</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<h3 style="color: blue;">DP 2 DSV that you have Served as Vessel Master - 1</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>DSV Name</label>
				                                            	<input type="text" placeholder="DSV Name" name="DP_DSV_name" class="form-control" value="<?=$key['DP_DSV_name']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>GRT</label>
					                                            <input type="text" placeholder="GRT" name="DP_DSV_GRT" class="form-control" value="<?=$key['DP_DSV_GRT']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Subsea Crane Tonnage</label>
					                                            <input type="text" placeholder="Subsea Crane Tonnage" name="DP_DSV_subsea_crane_tonnage" class="form-control" value="<?=$key['DP_DSV_subsea_crane_tonnage']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>DSV Owners or Operators</label>
					                                            <input type="text" placeholder="DSV Owners or Operators" name="DP_DSV_owner_operator" class="form-control" value="<?=$key['DP_DSV_owner_operator']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Months Served</label>
					                                            <input type="text" placeholder="Months Served" name="DP_DSV_month_serve" class="form-control" value="<?=$key['DP_DSV_month_serve']?>">
															</div>
				                                        </div>
				                                        <h3 style="color: blue;">DP 2 DSV that you have Served as Vessel Master - 2</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>DSV Name</label>
				                                            	<input type="text" placeholder="DSV Name" name="DP_DSV_name_1" class="form-control" value="<?=$key['DP_DSV_name_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>GRT</label>
					                                            <input type="text" placeholder="GRT" name="DP_DSV_GRT_1" class="form-control" value="<?=$key['DP_DSV_GRT_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Subsea Crane Tonnage</label>
					                                            <input type="text" placeholder="Subsea Crane Tonnage" name="DP_DSV_subsea_crane_tonnage_1" class="form-control" value="<?=$key['DP_DSV_subsea_crane_tonnage_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>DSV Owners or Operators</label>
					                                            <input type="text" placeholder="DSV Owners or Operators" name="DP_DSV_owner_operator_1" class="form-control" value="<?=$key['DP_DSV_owner_operator_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Months Served</label>
					                                            <input type="text" placeholder="Months Served" name="DP_DSV_month_serve_1" class="form-control" value="<?=$key['DP_DSV_month_serve_1']?>">
															</div>
				                                        </div>
				                                        <h3 style="color: blue;">DP 2 DSV that you have Served as Vessel Master - 3</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>DSV Name</label>
				                                            	<input type="text" placeholder="DSV Name" name="DP_DSV_name_2" class="form-control" value="<?=$key['DP_DSV_name_2']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>GRT</label>
					                                            <input type="text" placeholder="GRT" name="DP_DSV_GRT_2" class="form-control" value="<?=$key['DP_DSV_GRT_2']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Subsea Crane Tonnage</label>
					                                            <input type="text" placeholder="Subsea Crane Tonnage" name="DP_DSV_subsea_crane_tonnage_2" class="form-control" value="<?=$key['DP_DSV_subsea_crane_tonnage_2']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>DSV Owners or Operators</label>
					                                            <input type="text" placeholder="DSV Owners or Operators" name="DP_DSV_owner_operator_2" class="form-control" value="<?=$key['DP_DSV_owner_operator_2']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Months Served</label>
					                                            <input type="text" placeholder="Months Served" name="DP_DSV_month_serve_2" class="form-control" value="<?=$key['DP_DSV_month_serve_2']?>">
															</div>
				                                        </div>
				                                        <h3 style="color: blue;">DP 2 DSV that you have Served as Vessel Master - 4</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>DSV Name</label>
				                                            	<input type="text" placeholder="DSV Name" name="DP_DSV_name_3" class="form-control" value="<?=$key['DP_DSV_name_3']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>GRT</label>
					                                            <input type="text" placeholder="GRT" name="DP_DSV_GRT_3" class="form-control" value="<?=$key['DP_DSV_GRT_3']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Subsea Crane Tonnage</label>
					                                            <input type="text" placeholder="Subsea Crane Tonnage" name="DP_DSV_subsea_crane_tonnage_3" class="form-control" value="<?=$key['DP_DSV_subsea_crane_tonnage_3']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>DSV Owners or Operators</label>
					                                            <input type="text" placeholder="DSV Owners or Operators" name="DP_DSV_owner_operator_3" class="form-control" value="<?=$key['DP_DSV_owner_operator_3']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Months Served</label>
					                                            <input type="text" placeholder="Months Served" name="DP_DSV_month_serve_3" class="form-control" value="<?=$key['DP_DSV_month_serve_3']?>">
															</div>
				                                        </div>
				                                        <h3 style="color: blue;">DP 2 DSV that you have Served as Vessel Master - 5</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>DSV Name</label>
				                                            	<input type="text" placeholder="DSV Name" name="DP_DSV_name_4" class="form-control" value="<?=$key['DP_DSV_name_4']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>GRT</label>
					                                            <input type="text" placeholder="GRT" name="DP_DSV_GRT_4" class="form-control" value="<?=$key['DP_DSV_GRT_4']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Subsea Crane Tonnage</label>
					                                            <input type="text" placeholder="Subsea Crane Tonnage" name="DP_DSV_subsea_crane_tonnage_4" class="form-control" value="<?=$key['DP_DSV_subsea_crane_tonnage_4']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>DSV Owners or Operators</label>
					                                            <input type="text" placeholder="DSV Owners or Operators" name="DP_DSV_owner_operator_4" class="form-control" value="<?=$key['DP_DSV_owner_operator_4']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Months Served</label>
					                                            <input type="text" placeholder="Months Served" name="DP_DSV_month_serve_4" class="form-control" value="<?=$key['DP_DSV_month_serve_4']?>">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
			                                    <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Oil & Gas Clients Served as DP2 DSV  Master</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<h3 style="color: blue;">Oil & Gas Clients Served as DP2 DSV  Master - 1</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="Oil & Gas Clients Served as DP2 DSV  Master - 1" name="DP_DSV_oil_gas_client_name" class="form-control" value="<?=$key['DP_DSV_oil_gas_client_name']?>">
															</div>
				                                        </div>
				                                        <h3 style="color: blue;">Oil & Gas Clients Served as DP2 DSV  Master - 2</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="Oil & Gas Clients Served as DP2 DSV  Master - 2" name="DP_DSV_oil_gas_client_name_1" class="form-control" value="<?=$key['DP_DSV_oil_gas_client_name_1']?>">
															</div>
				                                        </div>
				                                        <h3 style="color: blue;">Oil & Gas Clients Served as DP2 DSV  Master - 3</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="Oil & Gas Clients Served as DP2 DSV  Master - 3" name="DP_DSV_oil_gas_client_name_2" class="form-control" value="<?=$key['DP_DSV_oil_gas_client_name_2']?>">
															</div>
				                                        </div>
				                                        <h3 style="color: blue;">Oil & Gas Clients Served as DP2 DSV  Master - 4</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="Oil & Gas Clients Served as DP2 DSV  Master - 4" name="DP_DSV_oil_gas_client_name_3" class="form-control" value="<?=$key['DP_DSV_oil_gas_client_name_3']?>">
															</div>
				                                        </div>
				                                        <h3 style="color: blue;">Oil & Gas Clients Served as DP2 DSV  Master - 5</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="Oil & Gas Clients Served as DP2 DSV  Master - 5" name="DP_DSV_oil_gas_client_name_4" class="form-control" value="<?=$key['DP_DSV_oil_gas_client_name_4']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Type of Work</label> 
				                                            	<select class="form-control scope_select DP_DSP_scope_data" name="DP_DSP_type_wrk[]" style="width:100%;" multiple="">
				                                            		<option value="">Select Scope</option>
				                                            		<option value="Pipe Lay">Pipe Lay</option>
				                                            		<option value="Jacket Installation">Jacket Installation</option>
				                                            		<option value="Topside Hook-up (Riser and Umbilicals)">Topside Hook-up (Riser and Umbilicals)</option>
				                                            		<option value="Pipeline Installations Works">Pipeline Installations Works</option>
				                                            		<option value="Riser Installations Works">Riser Installations Works</option>
				                                            		<option value="Offshore Heavy Lift Engineering">Offshore Heavy Lift Engineering</option>
				                                            		<option value="HeavyLift Transportation">HeavyLift Transportation</option>
				                                            		<option value="Installation of BOP">Installation of BOP</option>
				                                            		<option value="Installation of Subsea Well Heads">Installation of Subsea Well Heads</option>
				                                            		<option value="Umibilical Lay">Umibilical Lay</option>
				                                            		<option value="Umbilical Tie-in">Umbilical Tie-in</option>
				                                            		<option value="Subsea Well Head Commissioning Works">Subsea Well Head Commissioning Works</option>
				                                            		<option value="Pipeline Commissioning Works">Pipeline Commissioning Works</option>
				                                            		<option value="Free Span Correction">Free Span Correction</option>
				                                            		<option value="Subsea Trenching">Subsea Trenching</option>
				                                            		<option value="Rock dumping subsea">Rock dumping subsea</option>
				                                            		<option value="Decommisiong of Offshore Platforms">Decommisiong of Offshore Platforms</option>
				                                            		<option value="Mooring / Spar Buoy Installation">Mooring / Spar Buoy Installation</option>
				                                            		<option value="Member Re-inforcement">Member Re-inforcement</option>
				                                            		<option value="SBM Installation">SBM Installation</option>
				                                            		<option value="DSV Modifications">DSV Modifications</option>
				                                            		<option value="Hyperbaric Welding">Hyperbaric Welding</option>
				                                            		<option value="Any Other Add to the List and the drop down list should reflect the same ">Any Other Add to the List and the drop down list should reflect the same </option>
				                                            	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="SDS Scope" name="DP_DSP_scope_details" class="form-control" value="<?=$key['DP_DSP_type_wrk']?>">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                            <?php } ?>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
				                                <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>MWS Experience - Last 5 Years</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<?php foreach ($MWS_details as $key) { ?>
														<h3 style="color: blue;">MWS Employer - 1</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="MWS Employer Name - 1" name="MWS_employer" class="form-control" value="<?=$key['MWS_employer']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="From - 1" name="MWS_from" class="form-control datepicker" value="<?=$key['MWS_from']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="To - 1" name="MWS_to" class="form-control datepicker" value="<?=$key['MWS_to']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="MWS Region Name - 1" name="MWS_region" class="form-control" value="<?=$key['MWS_region']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="MWS Client Name - 1" name="MWS_client" class="form-control" value="<?=$key['MWS_client']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="MWS_LOA" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <h3 style="color: blue;">MWS Employer - 2</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="MWS Employer Name - 2" name="MWS_employer_1" class="form-control" value="<?=$key['MWS_employer_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="From - 2" name="MWS_from_1" class="form-control datepicker" value="<?=$key['MWS_from_1']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="To - 2" name="MWS_to_1" class="form-control datepicker" value="<?=$key['MWS_to_1']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="MWS Region Name - 2" name="MWS_region_1" class="form-control" value="<?=$key['MWS_region_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="MWS Client Name - 2" name="MWS_client_1" class="form-control" value="<?=$key['MWS_client_1']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="MWS_LOA_1" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                        <h3 style="color: blue;">MWS Employer - 3</h3>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="MWS Employer Name - 3" name="MWS_employer_2" class="form-control" value="<?=$key['MWS_employer_2']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="From - 3" name="MWS_from_2" class="form-control datepicker" value="<?=$key['MWS_from_2']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="To - 3" name="MWS_to_2" class="form-control datepicker" value="<?=$key['MWS_to_2']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="MWS Region Name - 3" name="MWS_region_2" class="form-control" value="<?=$key['MWS_region_2']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
				                                            	<input type="text" placeholder="MWS Client Name - 3" name="MWS_client_2" class="form-control" value="<?=$key['MWS_client_2']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Upload LOA</label>
					                                            <input type="file" name="MWS_LOA_2" class="form-control" style="border: none;background: #f5feff;">
															</div>
				                                        </div>
				                                     	<?php } ?>
				                                    </div>
			                                	</div>
				                            </div>
				                            <?php foreach ($DSV_details as $key) {	 ?>
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="DP_DSV_position_min_rate" class="form-control" value="<?=$key['DP_DSV_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="DP_DSV_position_max_rate" class="form-control" value="<?=$key['DP_DSV_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                            <div class="hidden">
	                            <h1>ROV Supervisor</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_ROV_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                            	<div class="row hidden" id="visible_ROV_data">
	                               		<div class="col-lg-12">
											<?php foreach ($ROV_details as $key) { ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>ROV Supervisor</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<div class="col-sm-12">
															<div class="form-group">															
				                                            	<label>Period Working as Project Engineer with Divers</label> <br>
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="ROV_working_priod_start" class="form-control datepicker rov_datepicker" value="<?=$key['ROV_working_priod_start']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="ROV_working_priod_end" class="form-control datepicker rov_datepicker" value="<?=$key['ROV_working_priod_end']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Years of Experience as ROV Superviso</label>
				                                            	<input type="text" placeholder="Years of Experience as ROV Superviso" name="ROV_no_year" class="form-control" value="<?=$key['ROV_no_year']?>" readonly>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify the Trenching/Burial ROV Piloted</label>
				                                            	<input type="text" placeholder="Specify the Trenching/Burial ROV Piloted" name="ROV_trench_burial_piloted" class="form-control" value="<?=$key['ROV_trench_burial_piloted']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify the Heavy Workclass Piloted</label>
				                                            	<input type="text" placeholder="Specify the Heavy Workclass Piloted" name="ROV_heavy_wrlcls_piloted" class="form-control" value="<?=$key['ROV_heavy_wrlcls_piloted']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify the Light Workclass Piloted</label>
				                                            	<input type="text" placeholder="Specify the Light Workclass Piloted" name="ROV_light_wrlcls_piloted" class="form-control" value="<?=$key['ROV_light_wrlcls_piloted']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify the Obs Class ROV Piloted</label>
				                                            	<input type="text" placeholder="Specify the Obs Class ROV Piloted" name="ROV_obs_cls_piloted" class="form-control" value="<?=$key['ROV_obs_cls_piloted']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify ROV tooling and Skidding deployed</label>
				                                            	<input type="text" placeholder="Specify ROV tooling and Skidding deployed" name="ROV_tool_skidd_deploy" class="form-control" value="<?=$key['ROV_tool_skidd_deploy']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify the ROV Manips worked with</label>
				                                            	<input type="text" placeholder="7 function and Make" name="ROV_manips_7_fun" class="form-control" value="<?=$key['ROV_manips_7_fun']?>">
				                                            	<input type="text" placeholder="5 function and Make" name="ROV_manips_5_fun" class="form-control" value="<?=$key['ROV_manips_5_fun']?>">
				                                            	<input type="text" placeholder="3 function and Make" name="ROV_manips_3_fun" class="form-control" value="<?=$key['ROV_manips_3_fun']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify the ROVSV you have worked with</label>
				                                            	<input type="text" placeholder="Specify the ROVSV you have worked with -1" name="ROV_ROVSV_wrk_1" class="form-control" value="<?=$key['ROV_ROVSV_wrk_1']?>">
				                                            	<input type="text" placeholder="Specify the ROVSV you have worked with -2" name="ROV_ROVSV_wrk_2" class="form-control" value="<?=$key['ROV_ROVSV_wrk_2']?>">
				                                            	<input type="text" placeholder="Specify the ROVSV you have worked with -3" name="ROV_ROVSV_wrk_3" class="form-control" value="<?=$key['ROV_ROVSV_wrk_3']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Specify the Rock Dump Vessel you have worked on </label>
				                                            	<input type="text" placeholder="Specify the Rock Dump Vessel you have worked on -1" name="ROV_rock_dump_vessel_wrk_1" class="form-control" value="<?=$key['ROV_rock_dump_vessel_wrk_1']?>">
				                                            	<input type="text" placeholder="Specify the Rock Dump Vessel you have worked on -2" name="ROV_rock_dump_vessel_wrk_2" class="form-control" value="<?=$key['ROV_rock_dump_vessel_wrk_2']?>">
				                                            	<input type="text" placeholder="Specify the Rock Dump Vessel you have worked on  -3" name="ROV_rock_dump_vessel_wrk_3" class="form-control" value="<?=$key['ROV_rock_dump_vessel_wrk_3']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Do you have Deepwater Experience</label>
				                                            	<input type="text" placeholder="Specify Max Depth of ROV Ops you have executed" name="ROV_deepwater_exp" class="form-control" value="<?=$key['ROV_deepwater_exp']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Have You  worked SIMOPS with Divers from a DP2 DSV ? </label>
				                                            	<input type="text" placeholder="Have You  worked SIMOPS with Divers from a DP2 DSV -1" name="ROV_SIMOPS_wrk_1" class="form-control" value="<?=$key['ROV_SIMOPS_wrk_1']?>">
				                                            	<input type="text" placeholder="Have You  worked SIMOPS with Divers from a DP2 DSV -2" name="ROV_SIMOPS_wrk_2" class="form-control" value="<?=$key['ROV_SIMOPS_wrk_2']?>">
				                                            	<input type="text" placeholder="Have You  worked SIMOPS with Divers from a DP2 DSV  -3" name="ROV_SIMOPS_wrk_3" class="form-control" value="<?=$key['ROV_SIMOPS_wrk_3']?>">
				                                            	<input type="text" placeholder="Have You  worked SIMOPS with Divers from a DP2 DSV  -4" name="ROV_SIMOPS_wrk_4" class="form-control" value="<?=$key['ROV_SIMOPS_wrk_4']?>">
				                                            	<input type="text" placeholder="Have You  worked SIMOPS with Divers from a DP2 DSV  -5" name="ROV_SIMOPS_wrk_5" class="form-control" value="<?=$key['ROV_SIMOPS_wrk_5']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>IMCA ROV Contractors You have Worked for (Top 5)  </label>
				                                            	<input type="text" placeholder="IMCA ROV Contractors You have Worked -1" name="ROV_IMCA_cont_wrk_1" class="form-control" value="<?=$key['ROV_IMCA_cont_wrk_1']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors You have Worked -2" name="ROV_IMCA_cont_wrk_2" class="form-control" value="<?=$key['ROV_IMCA_cont_wrk_2']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors You have Worked -3" name="ROV_IMCA_cont_wrk_3" class="form-control" value="<?=$key['ROV_IMCA_cont_wrk_3']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors You have Worked -4" name="ROV_IMCA_cont_wrk_4" class="form-control" value="<?=$key['ROV_IMCA_cont_wrk_4']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors You have Worked -5" name="ROV_IMCA_cont_wrk_5" class="form-control" value="<?=$key['ROV_IMCA_cont_wrk_5']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-10" style="padding-top: 2%;">
																	<label>Do you Maintain and IMCA Log Book for ROV Supervisor </label> 
																</div>
																<div class="col-sm-2">
					                                            	<div class="radio i-checks">
						                                            	<label class="checkbox-inline"> <input type="radio" <?=($key['ROV_maintain_IMCA_log_book']=='yes')?'checked':''?> value="yes" name="ROV_maintain_IMCA_log_book"> <i></i> Yes </label>
						                                            	<label class="checkbox-inline"> <input type="radio" <?=($key['ROV_maintain_IMCA_log_book']=='no')?'checked':''?> value="no" name="ROV_maintain_IMCA_log_book"> <i></i>No </label>
						                                            </div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Oil Companies You have Worked for with Region (Top 5)  </label>
				                                            	<input type="text" placeholder="Oil Companies You have Worked for with Region -1" name="ROV_oil_comp_wrk_1" class="form-control" value="<?=$key['ROV_oil_comp_wrk_1']?>">
				                                            	<input type="text" placeholder="Oil Companies You have Worked for with Region -2" name="ROV_oil_comp_wrk_2" class="form-control" value="<?=$key['ROV_oil_comp_wrk_2']?>">
				                                            	<input type="text" placeholder="Oil Companies You have Worked for with Region -3" name="ROV_oil_comp_wrk_3" class="form-control" value="<?=$key['ROV_oil_comp_wrk_3']?>">
				                                            	<input type="text" placeholder="Oil Companies You have Worked for with Region -4" name="ROV_oil_comp_wrk_4" class="form-control" value="<?=$key['ROV_oil_comp_wrk_4']?>">
				                                            	<input type="text" placeholder="Oil Companies You have Worked for with Region -5" name="ROV_oil_comp_wrk_5" class="form-control" value="<?=$key['ROV_oil_comp_wrk_5']?>">
															</div>
				                                        </div>				                                        
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Type of Work</label> 
				                                            	<select class="form-control scope_select ROV_scope_data" name="ROV_type_wrk[]" style="width:100%;" multiple="">
				                                            		<option value="">Select Scope</option>
				                                            		<option value="MGR / Inspection">MGR / Inspection</option>
				                                            		<option value="Pipeline Survey">Pipeline Survey</option>
				                                            		<option value="NDT Using ROV">NDT Using ROV</option>
				                                            		<option value="Riser / J Tube Installation">Riser / J Tube Installation</option>
				                                            		<option value="Clamp Installation">Clamp Installation</option>
				                                            		<option value="Conductor Guide Frame Installation">Conductor Guide Frame Installation</option>
				                                            		<option value="Member Strengthening / Replacement">Member Strengthening / Replacement</option>
				                                            		<option value="Anode Installation">Anode Installation</option>
				                                            		<option value="Umbilical Lay ">Umbilical Lay </option>
				                                            		<option value="SBM Installation / Removal Works">SBM Installation / Removal Works</option>
				                                            		<option value="ABS UWILD Surveys">ABS UWILD Surveys</option>
				                                            		<option value="Pipeline Repair Works (Clamp Installation)">Pipeline Repair Works (Clamp Installation)</option>
				                                            		<option value="Pipeline Tie-in Works">Pipeline Tie-in Works</option>
				                                            		<option value="Pipeline Sectional Replacement Works">Pipeline Sectional Replacement Works</option>
				                                            		<option value="Decomissioning Works">Decomissioning Works</option>
				                                            		<option value="Insert Subsea Broco Oxy-Arc Cutting">Insert Subsea Broco Oxy-Arc Cutting</option>
				                                            		<option value="PLEM Installation">PLEM Installation</option>
				                                            		<option value="Well-Head Installation">Well-Head Installation</option>
				                                            		<option value="Well-Head Intervention / Operations">Well-Head Intervention / Operations</option>
				                                            		<option value="Jumper Connections between Umbilical Manifold and Well-Head">Jumper Connections between Umbilical Manifold and Well-Head</option>
				                                            		<option value="Any Other Add to the List and the drop down list should reflect the same ">Any Other Add to the List and the drop down list should reflect the same </option>
				                                            	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SDS Scope </label> 
				                                            	<input type="text" placeholder="SDS Scope" name="ROV_scope_details" class="form-control" value="<?=$key['ROV_type_wrk']?>">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>	
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="ROV_position_min_rate" class="form-control" value="<?=$key['ROV_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="ROV_position_max_rate" class="form-control" value="<?=$key['ROV_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>													
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset> 
	                            </div>
	                            <h1>Life Support Supervisor</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_LSS_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                            	<div class="row hidden" id="visible_LSS_data">
	                               		<div class="col-lg-12">
											<?php foreach ($LSS_details as $key) { ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Life Support Supervisor</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<div class="col-sm-12">
															<div class="form-group">															
				                                            	<label>Period Working as Life Support Supervisor</label> <br>
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="LSS_working_priod_start" class="form-control datepicker lss_datepicker" value="<?=$key['LSS_working_priod_start']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="LSS_working_priod_end" class="form-control datepicker lss_datepicker" value="<?=$key['LSS_working_priod_end']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No of Years as Surface Life Support Supervisor</label>
				                                            	<input type="text" placeholder="No of Years as Surface Life Support Supervisor" name="LSS_no_year" class="form-control" value="<?=$key['LSS_no_year']?>" readonly>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No. of Sat Profiles  you have worked as LSS with Divers in SAT</label>
				                                            	<input type="text" placeholder="No. of Sat Profiles  you have worked as LSS with Divers in SAT" name="LSS_driver_SAT" class="form-control" value="<?=$key['LSS_driver_SAT']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-10" style="padding-top: 2%;">
																	<label>Do you Maintain and IMCA Log Book ? </label> 
																</div>
																<div class="col-sm-2">
					                                            	<div class="radio i-checks">
						                                            	<label class="checkbox-inline"> <input type="radio" <?=($key['LSS_maintain_IMCA_log_book']=='yes')?'checked':''?> value="yes" name="LSS_maintain_IMCA_log_book"> <i></i> Yes </label>
						                                            	<label class="checkbox-inline"> <input type="radio" <?=($key['LSS_maintain_IMCA_log_book']=='no')?'checked':''?> value="no" name="LSS_maintain_IMCA_log_book"> <i></i>No </label>
						                                            </div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No. of Days as LSS - Logged that can be Verified </label>
				                                            	<input type="text" placeholder="No. of Days as LSS - Logged that can be Verified " name="LSS_day_log_verify" class="form-control" value="<?=$key['LSS_day_log_verify']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Max. depth of Saturation Profile</label>
				                                            	<input type="text" placeholder="Max. depth of Saturation Profile" name="LSS_depth_sat_profile" class="form-control" value="<?=$key['LSS_depth_sat_profile']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Have you worked  from a DP 2 DSV with SPHL  ? </label>
				                                            	<input type="text" placeholder="Have you worked  from a DP 2 DSV with SPHL -1" name="LSS_DSV_SPHL_wrk_1" class="form-control" value="<?=$key['LSS_DSV_SPHL_wrk_1']?>">
				                                            	<input type="text" placeholder="Have you worked  from a DP 2 DSV with SPHL -2" name="LSS_DSV_SPHL_wrk_2" class="form-control" value="<?=$key['LSS_DSV_SPHL_wrk_2']?>">
				                                            	<input type="text" placeholder="Have you worked  from a DP 2 DSV with SPHL  -3" name="LSS_DSV_SPHL_wrk_3" class="form-control" value="<?=$key['LSS_DSV_SPHL_wrk_3']?>">
				                                            	<input type="text" placeholder="Have you worked  from a DP 2 DSV with SPHL  -4" name="LSS_DSV_SPHL_wrk_4" class="form-control" value="<?=$key['LSS_DSV_SPHL_wrk_4']?>">
				                                            	<input type="text" placeholder="Have you worked  from a DP 2 DSV with SPHL  -5" name="LSS_DSV_SPHL_wrk_5" class="form-control" value="<?=$key['LSS_DSV_SPHL_wrk_5']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>IMCA ROV Contractors You have Worked for (Top 5)  </label>
				                                            	<input type="text" placeholder="IMCA ROV Contractors You have Worked -1" name="LSS_IMCA_cont_wrk_1" class="form-control" value="<?=$key['LSS_IMCA_cont_wrk_1']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors You have Worked -2" name="LSS_IMCA_cont_wrk_2" class="form-control" value="<?=$key['LSS_IMCA_cont_wrk_2']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors You have Worked -3" name="LSS_IMCA_cont_wrk_3" class="form-control" value="<?=$key['LSS_IMCA_cont_wrk_3']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors You have Worked -4" name="LSS_IMCA_cont_wrk_4" class="form-control" value="<?=$key['LSS_IMCA_cont_wrk_4']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors You have Worked -5" name="LSS_IMCA_cont_wrk_5" class="form-control" value="<?=$key['LSS_IMCA_cont_wrk_5']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Oil Companies You have Worked for with Region (Top 5)  </label>
				                                            	<input type="text" placeholder="Oil Companies You have Worked for with Region -1" name="LSS_oil_comp_wrk_1" class="form-control" value="<?=$key['LSS_oil_comp_wrk_1']?>">
				                                            	<input type="text" placeholder="Oil Companies You have Worked for with Region -2" name="LSS_oil_comp_wrk_2" class="form-control" value="<?=$key['LSS_oil_comp_wrk_2']?>">
				                                            	<input type="text" placeholder="Oil Companies You have Worked for with Region -3" name="LSS_oil_comp_wrk_3" class="form-control" value="<?=$key['LSS_oil_comp_wrk_3']?>">
				                                            	<input type="text" placeholder="Oil Companies You have Worked for with Region -4" name="LSS_oil_comp_wrk_4" class="form-control" value="<?=$key['LSS_oil_comp_wrk_4']?>">
				                                            	<input type="text" placeholder="Oil Companies You have Worked for with Region -5" name="LSS_oil_comp_wrk_5" class="form-control" value="<?=$key['LSS_oil_comp_wrk_5']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-10" style="padding-top: 2%;">
																	<label>Have you been involved in a Hyperbaric Evacuation Situation ?</label> 
																</div>
																<div class="col-sm-2">
					                                            	<div class="radio i-checks">
						                                            	<label class="checkbox-inline"> <input type="radio" <?=($key['LSS_involve_evacuation_situation']=='yes')?'checked':''?> value="yes" name="LSS_involve_evacuation_situation"> <i></i> Yes </label>
						                                            	<label class="checkbox-inline"> <input type="radio" <?=($key['LSS_involve_evacuation_situation']=='no')?'checked':''?> value="no" name="LSS_involve_evacuation_situation"> <i></i>No </label>
						                                            </div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-10" style="padding-top: 2%;">
																	<label>Have you been involved in Setting up a HRF</label> 
																</div>
																<div class="col-sm-2">
					                                            	<div class="radio i-checks">
						                                            	<label class="checkbox-inline"> <input type="radio" <?=($key['LSS_involve_HRF']=='yes')?'checked':''?> value="yes" name="LSS_involve_HRF"> <i></i> Yes </label>
						                                            	<label class="checkbox-inline"> <input type="radio" <?=($key['LSS_involve_HRF']=='no')?'checked':''?> value="no" name="LSS_involve_HRF"> <i></i>No </label>
						                                            </div>
						                                        </div>
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>			
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="LSS_position_min_rate" class="form-control" value="<?=$key['LSS_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="LSS_position_max_rate" class="form-control" value="<?=$key['LSS_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>											
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                            <h1>Saturation Diver</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_SAT_DIV_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Next to continue.</span>
	                            	</div>
	                            	<div class="row hidden" id="visible_SAT_DIV_data">
	                               		<div class="col-lg-12">
											<?php foreach ($SAT_DIV_details as $key) { ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Saturation Diver</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
														<div class="col-sm-12">
															<div class="form-group">															
				                                            	<label>Period Working as Saturation Diver</label> <br>
				                                            	<div class="col-sm-5">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="SAT_DIV_working_priod_start" class="form-control datepicker" value="<?=$key['SAT_DIV_working_priod_start']?>">
							                                            </div>
																	</div>
						                                        </div>
						                                        <div class="col-sm-5 col-sm-offset-1">
																	<div class="form-group">
							                                            <div class="input-group m-b">
							                                            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							                                            	<input type="text" placeholder="" name="SAT_DIV_working_priod_end" class="form-control datepicker" value="<?=$key['SAT_DIV_working_priod_end']?>">
							                                            </div>
																	</div>
						                                        </div>
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Years of Experience asSaturation Diver</label>
				                                            	<input type="text" placeholder="Years of Experience asSaturation Diver" name="SAT_DIV_no_year" class="form-control" value="<?=$key['SAT_DIV_no_year']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>No of day in Saturation</label>
				                                            	<input type="text" placeholder="No of day in Saturation" name="SAT_DIV_DAY" class="form-control" value="<?=$key['SAT_DIV_DAY']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Max. depth of Sat Dive</label>
				                                            	<input type="text" placeholder="Max. depth of Sat Dive" name="SAT_DIV_MAX_depth" class="form-control" value="<?=$key['SAT_DIV_MAX_depth']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Have You  Dived from a DP 2 DSV ?</label>
				                                            	<input type="text" placeholder="Have You  Dived from a DP 2 DSV -1" name="SAT_DIV_DSV_dived_1" class="form-control" value="<?=$key['SAT_DIV_DSV_dived_1']?>">
				                                            	<input type="text" placeholder="Have You  Dived from a DP 2 DSV -2" name="SAT_DIV_DSV_dived_2" class="form-control" value="<?=$key['SAT_DIV_DSV_dived_2']?>">
				                                            	<input type="text" placeholder="Have You  Dived from a DP 2 DSV -3" name="SAT_DIV_DSV_dived_3" class="form-control" value="<?=$key['SAT_DIV_DSV_dived_3']?>">
				                                            	<input type="text" placeholder="Have You  Dived from a DP 2 DSV -4" name="SAT_DIV_DSV_dived_4" class="form-control" value="<?=$key['SAT_DIV_DSV_dived_4']?>">
				                                            	<input type="text" placeholder="Have You  Dived from a DP 2 DSV -5" name="SAT_DIV_DSV_dived_5" class="form-control" value="<?=$key['SAT_DIV_DSV_dived_5']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>IMCA ROV Contractors I have Worked for (Top 5)  </label>
				                                            	<input type="text" placeholder="IMCA ROV Contractors I have Worked -1" name="SAT_DIV_IMCA_cont_wrk_1" class="form-control" value="<?=$key['SAT_DIV_IMCA_cont_wrk_1']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors I have Worked -2" name="SAT_DIV_IMCA_cont_wrk_2" class="form-control" value="<?=$key['SAT_DIV_IMCA_cont_wrk_2']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors I have Worked -3" name="SAT_DIV_IMCA_cont_wrk_3" class="form-control" value="<?=$key['SAT_DIV_IMCA_cont_wrk_3']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors I have Worked -4" name="SAT_DIV_IMCA_cont_wrk_4" class="form-control" value="<?=$key['SAT_DIV_IMCA_cont_wrk_4']?>">
				                                            	<input type="text" placeholder="IMCA ROV Contractors I have Worked -5" name="SAT_DIV_IMCA_cont_wrk_5" class="form-control" value="<?=$key['SAT_DIV_IMCA_cont_wrk_5']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Oil Companies I have Worked for with Region (Top 5)  </label>
				                                            	<input type="text" placeholder="Oil Companies I have Worked for with Region -1" name="SAT_DIV_oil_comp_wrk_1" class="form-control" value="<?=$key['SAT_DIV_oil_comp_wrk_1']?>">
				                                            	<input type="text" placeholder="Oil Companies I have Worked for with Region -2" name="SAT_DIV_oil_comp_wrk_2" class="form-control" value="<?=$key['SAT_DIV_oil_comp_wrk_2']?>">
				                                            	<input type="text" placeholder="Oil Companies I have Worked for with Region -3" name="SAT_DIV_oil_comp_wrk_3" class="form-control" value="<?=$key['SAT_DIV_oil_comp_wrk_3']?>">
				                                            	<input type="text" placeholder="Oil Companies I have Worked for with Region -4" name="SAT_DIV_oil_comp_wrk_4" class="form-control" value="<?=$key['SAT_DIV_oil_comp_wrk_4']?>">
				                                            	<input type="text" placeholder="Oil Companies I have Worked for with Region -5" name="SAT_DIV_oil_comp_wrk_5" class="form-control" value="<?=$key['SAT_DIV_oil_comp_wrk_5']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Oil Field's that I have Worked in </label>
				                                            	<input type="text" placeholder="Oil Field's that I have Worked in -1" name="SAT_DIV_oil_field_wrk_1" class="form-control" value="<?=$key['SAT_DIV_oil_field_wrk_1']?>">
				                                            	<input type="text" placeholder="Oil Field's that I have Worked in -2" name="SAT_DIV_oil_field_wrk_2" class="form-control" value="<?=$key['SAT_DIV_oil_field_wrk_2']?>">
				                                            	<input type="text" placeholder="Oil Field's that I have Worked in -3" name="SAT_DIV_oil_field_wrk_3" class="form-control" value="<?=$key['SAT_DIV_oil_field_wrk_3']?>">
				                                            	<input type="text" placeholder="Oil Field's that I have Worked in -4" name="SAT_DIV_oil_field_wrk_4" class="form-control" value="<?=$key['SAT_DIV_oil_field_wrk_4']?>">
				                                            	<input type="text" placeholder="Oil Field's that I have Worked in -5" name="SAT_DIV_oil_field_wrk_5" class="form-control" value="<?=$key['SAT_DIV_oil_field_wrk_5']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Type of Work</label> 
				                                            	<select class="form-control scope_select SAT_DIV_scope_data" name="SAT_DIV_type_wrk[]" style="width:100%;" multiple="">
				                                            		<option value="">Select Scope</option>
				                                            		<option value="Pipe Lay">Pipe Lay</option>
				                                            		<option value="Jacket Installation">Jacket Installation</option>
				                                            		<option value="Topside Hook-up (Riser and Umbilicals)">Topside Hook-up (Riser and Umbilicals)</option>
				                                            		<option value="Pipeline Installations Works">Pipeline Installations Works</option>
				                                            		<option value="Riser Installations Works">Riser Installations Works</option>
				                                            		<option value="Offshore Heavy Lift Engineering">Offshore Heavy Lift Engineering</option>
				                                            		<option value="Installation of BOP">Installation of BOP</option>
				                                            		<option value="Installation of Subsea Well Heads">Installation of Subsea Well Heads</option>
				                                            		<option value="Umibilical Lay">Umibilical Lay</option>
				                                            		<option value="ABS UWILD Surveys">ABS UWILD Surveys</option>
				                                            		<option value="Umbilical Tie-in">Umbilical Tie-in</option>
				                                            		<option value="Pipeline Tie-in Works">Pipeline Tie-in Works</option>
				                                            		<option value="Subsea Well Head Commissioning Works">Subsea Well Head Commissioning Works</option>
				                                            		<option value="Pipeline Commissioning Works">Pipeline Commissioning Works</option>
				                                            		<option value="Free Span Correction">Free Span Correction</option>
				                                            		<option value="Subsea Trenching">Subsea Trenching</option>
				                                            		<option value="Rock dumping subsea">Rock dumping subsea</option>
				                                            		<option value="Decommisiong of Offshore Platforms">Decommisiong of Offshore Platforms</option>
				                                            		<option value="Mooring / Spar Buoy Installation">Mooring / Spar Buoy Installation</option>
				                                            		<option value="SBM Installation">SBM Installation</option>
				                                            		<option value="DSV Modifications">DSV Modifications</option>
				                                            		<option value="Hyperbaric Welding">Hyperbaric Welding</option>
				                                            		<option value="Any Other Add to the List and the drop down list should reflect the same ">Any Other Add to the List and the drop down list should reflect the same </option>
				                                            	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SAT DIV Scope </label> 
				                                            	<input type="text" placeholder="SDS Scope" name="SAT_DIV_scope_details" class="form-control" value="<?=$key['SAT_DIV_type_wrk']?>">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>	
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="SAT_DIV_position_min_rate" class="form-control" value="<?=$key['SAT_DIV_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="SAT_DIV_position_max_rate" class="form-control" value="<?=$key['SAT_DIV_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>															
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                            <h1>Saturation Diving Supervisor</h1>
	                            <fieldset>
	                            	<div class="row" id="in_visible_SAT_DIV_SUP_data">
	                            		<span style="color:red;font-size: large;">This section is not applicable for your selection. Click Submit to continue.</span>
	                            	</div>
	                            	<div class="row hidden" id="visible_SAT_DIV_SUP_data">
	                               		<div class="col-lg-12">
											<?php foreach ($SAT_DIV_SUP_details as $key) { ?>
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Part 2 - Saturation Diving Supervisor</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Oil Field's that I have Worked in </label>
				                                            	<input type="text" placeholder="Oil Field's that I have Worked in -1" name="SAT_DIV_SUP_oil_field_wrk_1" class="form-control" value="<?=$key['SAT_DIV_SUP_oil_field_wrk_1']?>">
				                                            	<input type="text" placeholder="Oil Field's that I have Worked in -2" name="SAT_DIV_SUP_oil_field_wrk_2" class="form-control" value="<?=$key['SAT_DIV_SUP_oil_field_wrk_2']?>">
				                                            	<input type="text" placeholder="Oil Field's that I have Worked in -3" name="SAT_DIV_SUP_oil_field_wrk_3" class="form-control" value="<?=$key['SAT_DIV_SUP_oil_field_wrk_3']?>">
				                                            	<input type="text" placeholder="Oil Field's that I have Worked in -4" name="SAT_DIV_SUP_oil_field_wrk_4" class="form-control" value="<?=$key['SAT_DIV_SUP_oil_field_wrk_4']?>">
				                                            	<input type="text" placeholder="Oil Field's that I have Worked in -5" name="SAT_DIV_SUP_oil_field_wrk_5" class="form-control" value="<?=$key['SAT_DIV_SUP_oil_field_wrk_5']?>">
															</div>
				                                        </div>
				                                        <div class="col-sm-12">
															<div class="form-group">
																<label>Type of Work</label> 
				                                            	<select class="form-control scope_select SAT_DIV_SUP_scope_data" name="SAT_DIV_SUP_type_wrk[]" style="width:100%;" multiple="">
				                                            		<option value="">Select Scope</option>
				                                            		<option value="Pipe Lay">Pipe Lay</option>
				                                            		<option value="Jacket Installation">Jacket Installation</option>
				                                            		<option value="Topside Hook-up (Riser and Umbilicals)">Topside Hook-up (Riser and Umbilicals)</option>
				                                            		<option value="Pipeline Installations Works">Pipeline Installations Works</option>
				                                            		<option value="Riser Installations Works">Riser Installations Works</option>
				                                            		<option value="Offshore Heavy Lift Engineering">Offshore Heavy Lift Engineering</option>
				                                            		<option value="Installation of BOP">Installation of BOP</option>
				                                            		<option value="Installation of Subsea Well Heads">Installation of Subsea Well Heads</option>
				                                            		<option value="Umibilical Lay">Umibilical Lay</option>
				                                            		<option value="ABS UWILD Surveys">ABS UWILD Surveys</option>
				                                            		<option value="Umbilical Tie-in">Umbilical Tie-in</option>
				                                            		<option value="Pipeline Tie-in Works">Pipeline Tie-in Works</option>
				                                            		<option value="Subsea Well Head Commissioning Works">Subsea Well Head Commissioning Works</option>
				                                            		<option value="Pipeline Commissioning Works">Pipeline Commissioning Works</option>
				                                            		<option value="Free Span Correction">Free Span Correction</option>
				                                            		<option value="Subsea Trenching">Subsea Trenching</option>
				                                            		<option value="Rock dumping subsea">Rock dumping subsea</option>
				                                            		<option value="Decommisiong of Offshore Platforms">Decommisiong of Offshore Platforms</option>
				                                            		<option value="Mooring / Spar Buoy Installation">Mooring / Spar Buoy Installation</option>
				                                            		<option value="SBM Installation">SBM Installation</option>
				                                            		<option value="DSV Modifications">DSV Modifications</option>
				                                            		<option value="Hyperbaric Welding">Hyperbaric Welding</option>
				                                            		<option value="Any Other Add to the List and the drop down list should reflect the same ">Any Other Add to the List and the drop down list should reflect the same </option>
				                                            	</select>
															</div>
				                                        </div>
				                                        <div class="col-sm-12 hidden">
															<div class="form-group">
																<label>SAT DIV Scope </label> 
				                                            	<input type="text" placeholder="SDS Scope" name="SAT_DIV_SUP_scope_details" class="form-control" value="<?=$key['SAT_DIV_SUP_type_wrk']?>">
															</div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>			
				                            <div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;padding: 7px 15px 7px !important">
												    <div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-8" style="padding-top: 1%;">
																<label>What is your expectation of day rate for this position (In USD) ?</label> 
															</div>
															<div class="col-sm-2">
				                                            	<input type="text" placeholder="Min" name="SAT_DIV_SUP_position_min_rate" class="form-control" value="<?=$key['SAT_DIV_SUP_position_min_rate']?>">
					                                        </div>
					                                        <div class="col-sm-2">
				                                            	<input type="text" placeholder="Max" name="SAT_DIV_SUP_position_max_rate" class="form-control" value="<?=$key['SAT_DIV_SUP_position_max_rate']?>">
					                                        </div>
														</div>
			                                        </div>	
												</div>
											</div>													
				                            <?php } ?>
	                               		</div>
	                               	</div>
	                            </fieldset>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
       </div>
   	</div>

    <!-- Mainly scripts -->
    <script src="<?=base_url()?>assets/js/jquery-2.1.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>assets/js/inspinia.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- Chosen -->
    <script src="<?=base_url()?>assets/js/plugins/chosen/chosen.jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

	<!-- Country JS -->
    <script type= "text/javascript" src ="<?=base_url()?>assets/js/countries.js"></script>

    <!-- Steps -->
    <script src="<?=base_url()?>assets/js/plugins/staps/jquery.steps.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Jquery Validate -->
    <script src="<?=base_url()?>assets/js/plugins/validate/jquery.validate.min.js"></script>


    <script type="text/javascript">
    	var settings = {
		    labels: {
		        finish: "Submit",
		        
		    }
		};
        $("#wizard").steps(settings);

            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    if(form.valid()){
                    	var user_id = $('input[name=user_id]').val();
                    	switch(currentIndex) {
						    case 0:
						        var user_name = $("input[name=user_name]").val();
						        var user_DOB = $("input[name=user_DOB]").val();
						        var user_age = $("input[name=user_age]").val();
						        var user_passport_no = $("input[name=user_passport_no]").val();
						        var user_pp_issue_authority = $("select[name=user_pp_issue_authority]").val();
						        var user_passport_validaty = $("input[name=user_passport_validaty]").val();
						        var user_mobile_no = $("input[name=user_mobile_no]").val();
						        var user_whatsapp_no = $("input[name=user_whatsapp_no]").val();
						        var user_company_director = $("input[name='user_company_director']:checked").val();
						        var user_company_name = $("input[name=user_company_name]").val();
						        var user_address= $("textarea[name=user_address]").val();
						        var user_address_country = $("select[name=user_address_country]").val();
						        var user_address_state = $("select[name=user_address_state]").val();
						        var user_address_pincode = $("input[name=user_address_pincode]").val();
						        $.post('<?=site_url('Welcome/personnel_info')?>',{user_id:user_id,user_name:user_name,user_DOB:user_DOB,user_age:user_age,user_passport_no:user_passport_no,user_pp_issue_authority:user_pp_issue_authority,user_passport_validaty:user_passport_validaty,user_mobile_no:user_mobile_no,user_whatsapp_no:user_whatsapp_no,user_company_director:user_company_director,user_company_name:user_company_name,user_address:user_address,user_address_country:user_address_country,user_address_state:user_address_state,user_address_pincode:user_address_pincode},function(data){
						        	console.log(data);
						        	// alert(data);
						        },'json');
						        break;
						    case 1:
						    	var kin_name = $("input[name=kin_name]").val();
						    	var relationship_kin = $("input[name=relationship_kin]").val();
						    	var kin_email = $("input[name=kin_email]").val();
						    	var kin_mobile_no = $("input[name=kin_mobile_no]").val();
						        $.post('<?=site_url('Welcome/kin_info')?>',{user_id:user_id,kin_name:kin_name,relationship_kin:relationship_kin,kin_email:kin_email,kin_mobile_no:kin_mobile_no},function(data){
						        	console.log(data);
						        	// alert(data);
						        },'json');
						        break;
					        case 2:
						        var medical_issue_bye = $("input[name=medical_issue_bye]:checked").val();
						    	var medical_expiry_date = $("input[name=medical_expiry_date]").val();
						        $.post('<?=site_url('Welcome/medical_info')?>',{user_id:user_id,medical_issue_bye:medical_issue_bye,medical_expiry_date:medical_expiry_date},function(data){
						        	console.log(data);
						        	// alert(data);
						        },'json');
						        break;
						    case 3:
						        var CSR_OGP_client_report_cert_no = $("input[name=CSR_OGP_client_report_cert_no]").val();
						        var CSR_training_center = $("input[name=CSR_training_center]").val();
						        var CSR_issue_date = $("input[name=CSR_issue_date]").val();
						        $.post('<?=site_url('welcome/CSR_info')?>',{user_id:user_id,CSR_OGP_client_report_cert_no:CSR_OGP_client_report_cert_no,CSR_training_center:CSR_training_center,CSR_issue_date:CSR_issue_date},function(data){
						        	console.log(data);
						        	// alert(data);
						        },'json');

						        var diving_surface_prt_I_cert = $("input[name=diving_surface_prt_I_cert]").val();
						        var diving_prt_I_training_center = $("input[name=diving_prt_I_training_center]").val();
						        var diving_prt_I_issue_date = $("input[name=diving_prt_I_issue_date]").val();
						        var diving_surface_prt_II_cert = $("input[name=diving_surface_prt_II_cert]").val();
						        var diving_prt_II_training_center = $("input[name=diving_prt_II_training_center]").val();
						        var diving_prt_II_issue_date = $("input[name=diving_prt_II_issue_date]").val();
						        var diving_surface_superviser_cert = $("input[name=diving_surface_superviser_cert]").val();
						        var diving_superviser_training_center = $("input[name=diving_superviser_training_center]").val();
						        var diving_superviser_issue_date = $("input[name=diving_superviser_issue_date]").val();
						        var diving_saturation_surface_superviser_cert = $("input[name=diving_saturation_surface_superviser_cert]").val();
						        var diving_saturation_superviser_training_center = $("input[name=diving_saturation_superviser_training_center]").val();
						        var diving_saturation_superviser_issue_date = $("input[name=diving_saturation_superviser_issue_date]").val();
						        var diving_ALST_cert = $("input[name=diving_ALST_cert]").val();
						        var diving_ALST_training_center = $("input[name=diving_ALST_training_center]").val();
						        var diving_ALST_issue_date = $("input[name=diving_ALST_issue_date]").val();
						        var diving_LST_cert = $("input[name=diving_LST_cert]").val();
						        var diving_LST_training_center = $("input[name=diving_LST_training_center]").val();
						        var diving_LST_issue_date = $("input[name=diving_LST_issue_date]").val();
						        var diving_LSS_issue_date = $("input[name=diving_LSS_issue_date]").val();
						        var diving_LSS_no_offshore_day = $("input[name=diving_LSS_no_offshore_day]").val();
						        var diving_subsea_NDT_levl_I_cert = $("input[name=diving_subsea_NDT_levl_I_cert]").val();
						        var diving_subsea_NDT_levl_I_training_center = $("input[name=diving_subsea_NDT_levl_I_training_center]").val();
						        var diving_subsea_NDT_levl_I_issue_date = $("input[name=diving_subsea_NDT_levl_I_issue_date]").val();
						        var diving_subsea_NDT_levl_I_expiry_date = $("input[name=diving_subsea_NDT_levl_I_expiry_date]").val();
						        var diving_subsea_NDT_levl_II_cert = $("input[name=diving_subsea_NDT_levl_II_cert]").val();
						        var diving_subsea_NDT_levl_II_training_center = $("input[name=diving_subsea_NDT_levl_II_training_center]").val();
						        var diving_subsea_NDT_levl_II_issue_date = $("input[name=diving_subsea_NDT_levl_II_issue_date]").val();
						        var diving_subsea_NDT_levl_II_expiry_date = $("input[name=diving_subsea_NDT_levl_II_expiry_date]").val();
						        $.post('<?=site_url('Welcome/diving_info')?>',{user_id:user_id,diving_surface_prt_I_cert:diving_surface_prt_I_cert,diving_prt_I_training_center:diving_prt_I_training_center,diving_prt_I_issue_date:diving_prt_I_issue_date,diving_surface_prt_II_cert:diving_surface_prt_II_cert,diving_prt_II_training_center:diving_prt_II_training_center,diving_prt_II_issue_date:diving_prt_II_issue_date,diving_surface_superviser_cert:diving_surface_superviser_cert,diving_superviser_training_center:diving_superviser_training_center,diving_superviser_issue_date:diving_superviser_issue_date,diving_saturation_surface_superviser_cert:diving_saturation_surface_superviser_cert,diving_saturation_superviser_training_center:diving_saturation_superviser_training_center,diving_saturation_superviser_issue_date:diving_saturation_superviser_issue_date,diving_ALST_cert:diving_ALST_cert,diving_ALST_training_center:diving_ALST_training_center,diving_ALST_issue_date:diving_ALST_issue_date,diving_LST_cert:diving_LST_cert,diving_LST_training_center:diving_LST_training_center,diving_LST_issue_date:diving_LST_issue_date,diving_LSS_issue_date:diving_LSS_issue_date,diving_LSS_no_offshore_day:diving_LSS_no_offshore_day,diving_subsea_NDT_levl_I_cert:diving_subsea_NDT_levl_I_cert,diving_subsea_NDT_levl_I_training_center:diving_subsea_NDT_levl_I_training_center,diving_subsea_NDT_levl_I_issue_date:diving_subsea_NDT_levl_I_issue_date,diving_subsea_NDT_levl_I_expiry_date:diving_subsea_NDT_levl_I_expiry_date,diving_subsea_NDT_levl_II_cert:diving_subsea_NDT_levl_II_cert,diving_subsea_NDT_levl_II_training_center:diving_subsea_NDT_levl_II_training_center,diving_subsea_NDT_levl_II_issue_date:diving_subsea_NDT_levl_II_issue_date,diving_subsea_NDT_levl_II_expiry_date:diving_subsea_NDT_levl_II_expiry_date},function(data){
						        	console.log(data);
						        })
						        break;
						    case 4:	
						    	var engg_stram = $("select[name=engg_stram]").val();		        
						    	var engg_passing_year = $("input[name=engg_passing_year]").val();
						    	$.post('<?=site_url('Welcome/engg_info')?>',{user_id:user_id,engg_stram:engg_stram,engg_passing_year:engg_passing_year},function(data){
						    		console.log(data);
						    	},'json');

						    	var NEEBOSH_cert_no = $("input[name=NEEBOSH_cert_no]").val();
						    	var NEEBOSH_expiry_date = $("input[name=NEEBOSH_expiry_date]").val();
						    	var pro_mgnt_cert_no = $("input[name=pro_mgnt_cert_no]").val();
						    	var pro_mgnt_issue_authority = $("input[name=pro_mgnt_issue_authority]").val();
						    	var input_cert_no = $("input[name=input_cert_no]").val();
						    	var input_issue_authority = $("input[name=input_issue_authority]").val();
						    	var input_issue_date = $("input[name=input_issue_date]").val();
						    	var input_validity_date = $("input[name=input_validity_date]").val();
						    	var HAZID_paticipate_mgnt = $("input[name=HAZID_paticipate_mgnt]:checked").val();
						    	var offshore_risk_paticipate_assessement = $("input[name=offshore_risk_paticipate_assessement]:checked").val();
						    	var IRCA_auditor_cert_no = $("input[name=IRCA_auditor_cert_no]").val();
						    	var IRCA_auditor_training_authority = $("input[name=IRCA_auditor_training_authority]").val();
						    	var IRCA_auditor_issue_date = $("input[name=IRCA_auditor_issue_date]").val();
						    	$.post('<?=site_url('Welcome/mgnt_info')?>',{user_id:user_id,NEEBOSH_cert_no:NEEBOSH_cert_no,NEEBOSH_expiry_date:NEEBOSH_expiry_date,pro_mgnt_cert_no:pro_mgnt_cert_no,pro_mgnt_issue_authority:pro_mgnt_issue_authority,input_cert_no:input_cert_no,input_issue_authority:input_issue_authority,input_issue_date:input_issue_date,input_validity_date:input_validity_date,HAZID_paticipate_mgnt:HAZID_paticipate_mgnt,offshore_risk_paticipate_assessement:offshore_risk_paticipate_assessement,IRCA_auditor_cert_no:IRCA_auditor_cert_no,IRCA_auditor_training_authority:IRCA_auditor_training_authority,IRCA_auditor_issue_date:IRCA_auditor_issue_date},function(data){
						    		console.log(data);
						    		// alert(data);
						    	},'json');		        
						        break;
						    case 5:
						        var compliance_mster_cert_no = $("input[name=compliance_mster_cert_no]").val();
						        var compliance_mster_present_cert_no = $("input[name=compliance_mster_present_cert_no]").val();
						        var compliance_mster_fst_issue_date = $("input[name=compliance_mster_fst_issue_date]").val();
						        var compliance_mster_issue_date = $("input[name=compliance_mster_issue_date]").val();
						        var compliance_mster_renewal_date = $("input[name=compliance_mster_renewal_date]").val();
						        var GMDSS_cert_no = $("input[name=GMDSS_cert_no]").val();
						        var GMDSS_training_equipment = $("input[name=GMDSS_training_equipment]").val();
						        var GMDSS_training_center = $("input[name=GMDSS_training_center]").val();
						        var GMDSS_restriction = $("textarea[name=GMDSS_restriction]").val();
						        var GMDSS_expiry_date = $("input[name=GMDSS_expiry_date]").val();
						        var SOS_cert_no = $("input[name=SOS_cert_no]").val();
						        var SOS_training_equipment = $("input[name=SOS_training_equipment]").val();
						        var SOS_training_center = $("input[name=SOS_training_center]").val();
						        var SOS_restriction = $("textarea[name=SOS_restriction]").val();
						        var SOS_expiry_date = $("input[name=SOS_expiry_date]").val();
						        var medicare_cert_no = $("input[name=medicare_cert_no]").val();
						        var medicare_training_equipment = $("input[name=medicare_training_equipment]").val();
						        var medicare_training_center = $("input[name=medicare_training_center]").val();
						        var medicare_restriction = $("textarea[name=medicare_restriction]").val();
						        var medicare_expiry_date = $("input[name=medicare_expiry_date]").val();
						        var ECDIS_cert_no = $("input[name=ECDIS_cert_no]").val();
						        var ECDIS_training_equipment = $("input[name=ECDIS_training_equipment]").val();
						        var ECDIS_training_center = $("input[name=ECDIS_training_center]").val();
						        var ECDIS_restriction = $("textarea[name=ECDIS_restriction]").val();
						        var ECDIS_expiry_date = $("input[name=ECDIS_expiry_date]").val();
						        var DP_cert_no = $("input[name=DP_cert_no]").val();
						        var DP_training_equipment = $("input[name=DP_training_equipment]").val();
						        var DP_training_center = $("input[name=DP_training_center]").val();
						        var DP_restriction = $("textarea[name=DP_restriction]").val();
						        var DP_expiry_date = $("input[name=DP_expiry_date]").val();
						        $.post('<?=site_url('Welcome/marine_info')?>',{user_id:user_id,compliance_mster_cert_no:compliance_mster_cert_no,compliance_mster_present_cert_no:compliance_mster_present_cert_no,compliance_mster_fst_issue_date:compliance_mster_fst_issue_date,compliance_mster_issue_date:compliance_mster_issue_date,compliance_mster_renewal_date:compliance_mster_renewal_date,GMDSS_cert_no:GMDSS_cert_no,GMDSS_training_equipment:GMDSS_training_equipment,GMDSS_training_center:GMDSS_training_center,GMDSS_restriction:GMDSS_restriction,GMDSS_expiry_date:GMDSS_expiry_date,SOS_cert_no:SOS_cert_no,SOS_training_equipment:SOS_training_equipment,SOS_training_center:SOS_training_center,SOS_restriction:SOS_restriction,SOS_expiry_date:SOS_expiry_date,medicare_cert_no:medicare_cert_no,medicare_training_equipment:medicare_training_equipment,medicare_training_center:medicare_training_center,medicare_restriction:medicare_restriction,medicare_expiry_date:medicare_expiry_date,ECDIS_cert_no:ECDIS_cert_no,ECDIS_training_equipment:ECDIS_training_equipment,ECDIS_training_center:ECDIS_training_center,ECDIS_restriction:ECDIS_restriction,ECDIS_expiry_date:ECDIS_expiry_date,DP_cert_no:DP_cert_no,DP_training_equipment:DP_training_equipment,DP_training_center:DP_training_center,DP_restriction:DP_restriction,DP_expiry_date:DP_expiry_date},function(data){
						        	console.log(data);
						        },'json');

						        var STCW_A_VII_11_cert_no = $('input[name=STCW_A_VII_11_cert_no]').val();
						        var STCW_A_VII_12_cert_no = $('input[name=STCW_A_VII_12_cert_no]').val();
						        var STCW_A_VII_13_cert_no = $('input[name=STCW_A_VII_13_cert_no]').val();
						        var STCW_A_VII_14_cert_no = $('input[name=STCW_A_VII_14_cert_no]').val();
						        var STCW_A_VII_61_cert_no = $('input[name=STCW_A_VII_61_cert_no]').val();
						        var STCW_training_center = $('input[name=STCW_training_center]').val();
						        var STCW_issue_date = $('input[name=STCW_issue_date]').val();
						        var STCW_expiry_date = $('input[name=STCW_expiry_date]').val();
						        $.post('<?=site_url('Welcome/STCW_info')?>',{user_id:user_id,STCW_A_VII_11_cert_no:STCW_A_VII_11_cert_no,STCW_A_VII_12_cert_no:STCW_A_VII_12_cert_no,STCW_A_VII_13_cert_no:STCW_A_VII_13_cert_no,STCW_A_VII_14_cert_no:STCW_A_VII_14_cert_no,STCW_A_VII_61_cert_no:STCW_A_VII_61_cert_no,STCW_training_center:STCW_training_center,STCW_issue_date:STCW_issue_date,STCW_expiry_date:STCW_expiry_date},function(data){
						        	console.log(data);
						        	// alert(data);
						        },'json');
						        break;
						    case 6:
						        var SME_working_priod_start = $('input[name=SME_working_priod_start]').val();
						        var SME_working_priod_end = $('input[name=SME_working_priod_end]').val();
						        var SME_no_year = $('input[name=SME_no_year]').val();
						        var SME_internation_gas_oil_client = $('input[name=SME_internation_gas_oil_client]').val();
						        var SME_prj_name = $('input[name=SME_prj_name]').val();
						        var SME_diving_safety_mgnt = $('input[name=SME_diving_safety_mgnt]:checked').val();
						        var SME_audit_approve_diving_constract_oil_gas = $('input[name=SME_audit_approve_diving_constract_oil_gas]:checked').val();
						        var SME_front_end_engg_design_subsea_str = $('input[name=SME_front_end_engg_design_subsea_str]:checked').val();
						        var SME_develope_scope_work_subsea_install = $('input[name=SME_develope_scope_work_subsea_install]:checked').val();
						        var SME_accept_criteria = $('input[name=SME_accept_criteria]:checked').val();
						        var SME_audit_cinstract_safety_mgnt = $('input[name=SME_audit_cinstract_safety_mgnt]:checked').val();
						        var SME_review_contract_prj_plan = $('input[name=SME_review_contract_prj_plan]:checked').val();
						        var SME_subsea_install_prj_HSE_review_HAZID = $('input[name=SME_subsea_install_prj_HSE_review_HAZID]:checked').val();
						        var SME_review_contract_procedure = $('input[name=SME_review_contract_procedure]:checked').val();
						        var SME_onshore_risk_ass_stage_I = $('input[name=SME_onshore_risk_ass_stage_I]:checked').val();
						        var SME_review_approval_diving_contract_personnel = $('input[name=SME_review_approval_diving_contract_personnel]:checked').val();
						        var SME_review_close_design_audit = $('input[name=SME_review_close_design_audit]:checked').val();
						        var SME_DP2_DSV = $('input[name=SME_DP2_DSV]:checked').val();
						        var SME_mobolisation_hyperbaric_reception = $('input[name=SME_mobolisation_hyperbaric_reception]:checked').val();
						        var SME_sys_integration_test_onshore = $('input[name=SME_sys_integration_test_onshore]:checked').val();
						        var SME_develope_engg_code = $('input[name=SME_develope_engg_code]:checked').val();
						        var SME_audited_subsea_contract = $('input[name=SME_audited_subsea_contract]:checked').val();
						        var SME_involve_front_end_engg_design = $('input[name=SME_involve_front_end_engg_design]:checked').val();
						        var SME_develope_criteria_acceptance = $('input[name=SME_develope_criteria_acceptance]:checked').val();
						        var SME_audit_criteria_process_control_approval = $('input[name=SME_audit_criteria_process_control_approval]:checked').val();
						        var SME_engg_prj_plan = $('input[name=SME_engg_prj_plan]:checked').val();
						        var SME_HSE_review_HAZID = $('input[name=SME_HSE_review_HAZID]:checked').val();
						        var SME_approve_install_procedure = $('input[name=SME_approve_install_procedure]:checked').val();
						        var SME_approve_risk_assessment = $('input[name=SME_approve_risk_assessment]:checked').val();
						        var SME_responsible_team_leadership = $('input[name=SME_responsible_team_leadership]:checked').val();
						        var SME_approve_SIT_FAT = $('input[name=SME_approve_SIT_FAT]:checked').val();
						        var SME_hyperbaric_evacuation_drills_trails = $('input[name=SME_hyperbaric_evacuation_drills_trails]:checked').val();
						        var SME_emergency_respone_plan_drills_tails = $('input[name=SME_emergency_respone_plan_drills_tails]').val();
						        var SME_offshore_execution_phase = $('input[name=SME_offshore_execution_phase]:checked').val();
						        var SME_incident_report_investigation = $('input[name=SME_incident_report_investigation]:checked').val();		        
						        var SME_prj_close_out_report = $('input[name=SME_prj_close_out_report]:checked').val();
						        var SME_scope_work_execute_under_you = $('input[name=SME_scope_details').val();
						        var SME_position_min_rate = $('input[name=SME_position_min_rate]').val();
						        var SME_position_max_rate = $('input[name=SME_position_max_rate]').val();
						        var other_SME_scope_work_execute_under_you = $('input[name=other_SME_scope_work_execute_under_you').val();
						        $.post('<?=site_url('Welcome/SME_info')?>',{user_id:user_id,SME_working_priod_start:SME_working_priod_start,SME_working_priod_end:SME_working_priod_end,SME_no_year:SME_no_year,SME_internation_gas_oil_client:SME_internation_gas_oil_client,SME_prj_name:SME_prj_name,SME_diving_safety_mgnt:SME_diving_safety_mgnt,SME_audit_approve_diving_constract_oil_gas:SME_audit_approve_diving_constract_oil_gas,SME_front_end_engg_design_subsea_str:SME_front_end_engg_design_subsea_str,SME_develope_scope_work_subsea_install:SME_develope_scope_work_subsea_install,SME_accept_criteria:SME_accept_criteria,SME_audit_cinstract_safety_mgnt:SME_audit_cinstract_safety_mgnt,SME_review_contract_prj_plan:SME_review_contract_prj_plan,SME_subsea_install_prj_HSE_review_HAZID:SME_subsea_install_prj_HSE_review_HAZID,SME_review_contract_procedure:SME_review_contract_procedure,SME_onshore_risk_ass_stage_I:SME_onshore_risk_ass_stage_I,SME_review_approval_diving_contract_personnel:SME_review_approval_diving_contract_personnel,SME_review_close_design_audit:SME_review_close_design_audit,SME_DP2_DSV:SME_DP2_DSV,SME_mobolisation_hyperbaric_reception:SME_mobolisation_hyperbaric_reception,SME_sys_integration_test_onshore:SME_sys_integration_test_onshore,SME_hyperbaric_evacuation_drills_trails:SME_hyperbaric_evacuation_drills_trails,SME_emergency_respone_plan_drills_tails:SME_emergency_respone_plan_drills_tails,SME_offshore_execution_phase:SME_offshore_execution_phase,SME_incident_report_investigation:SME_incident_report_investigation,SME_prj_close_out_report:SME_prj_close_out_report,SME_scope_work_execute_under_you:SME_scope_work_execute_under_you,other_SME_scope_work_execute_under_you:other_SME_scope_work_execute_under_you,SME_develope_engg_code:SME_develope_engg_code,SME_audited_subsea_contract:SME_audited_subsea_contract,SME_involve_front_end_engg_design:SME_involve_front_end_engg_design,SME_develope_criteria_acceptance:SME_develope_criteria_acceptance,SME_audit_criteria_process_control_approval:SME_audit_criteria_process_control_approval,SME_engg_prj_plan:SME_engg_prj_plan,SME_HSE_review_HAZID:SME_HSE_review_HAZID,SME_approve_install_procedure:SME_approve_install_procedure,SME_approve_risk_assessment:SME_approve_risk_assessment,SME_responsible_team_leadership:SME_responsible_team_leadership,SME_approve_SIT_FAT:SME_approve_SIT_FAT,SME_position_min_rate:SME_position_min_rate,SME_position_max_rate:SME_position_max_rate},function(data){
						        	console.log(data);
						        },'json');
						        break;
						    case 7:
						       	var CSR_working_priod_start = $('input[name=CSR_working_priod_start]').val();
						       	var CSR_working_priod_end = $('input[name=CSR_working_priod_end]').val();
						       	var CSR_no_year = $('input[name=CSR_no_year]').val();
						       	var CSR_internation_gas_oil_client = $('input[name=CSR_internation_gas_oil_client]').val();
						       	var CSR_prj_name = $('input[name=CSR_prj_name]').val();
						       	var CSR_front_end_engg_design_subsea_str = $('input[name=CSR_front_end_engg_design_subsea_str]:checked').val();
						       	var CSR_develope_scope_work_subsea_install = $('input[name=CSR_develope_scope_work_subsea_install]:checked').val();
						       	var CSR_accept_criteria = $('input[name=CSR_accept_criteria]:checked').val();
						       	var CSR_audit_cinstract_safety_mgnt = $('input[name=CSR_audit_cinstract_safety_mgnt]:checked').val();
						       	var CSR_review_contract_prj_plan = $('input[name=CSR_review_contract_prj_plan]:checked').val();
						       	var CSR_subsea_install_prj_HSE_review_HAZID = $('input[name=CSR_subsea_install_prj_HSE_review_HAZID]:checked').val();
						       	var CSR_review_approval_diving_contract_personnel = $('input[name=CSR_review_approval_diving_contract_personnel]:checked').val();
						       	var CSR_review_close_design_audit = $('input[name=CSR_review_close_design_audit]:checked').val();
						       	var CSR_DP2_DSV = $('input[name=CSR_DP2_DSV]:checked').val();
						       	var CSR_mobolisation_hyperbaric_reception = $('input[name=CSR_mobolisation_hyperbaric_reception]:checked').val();
						       	var CSR_sys_integration_test_onshore = $('input[name=CSR_sys_integration_test_onshore]:checked').val();
						       	var CSR_implement_engg_code = $('input[name=CSR_implement_engg_code]:checked').val();
						       	var CSR_involve_front_engg = $('input[name=CSR_involve_front_engg]:checked').val();
						       	var CSR_part_scope_work = $('input[name=CSR_part_scope_work]:checked').val();
						       	var CSR_team_mem_audit_process_approval = $('input[name=CSR_team_mem_audit_process_approval]:checked').val();
						       	var CSR_HSE_review_HAZID = $('input[name=CSR_HSE_review_HAZID]:checked').val();
						       	var CSR_review_install_procedure = $('input[name=CSR_review_install_procedure]:checked').val();
						       	var CSR_risk_assets_install = $('input[name=CSR_risk_assets_install]:checked').val();
						       	var CSR_sys_integration_test = $('input[name=CSR_sys_integration_test]:checked').val();
						       	var CSR_hyperbaric_evacuation_drills_trails = $('input[name=CSR_hyperbaric_evacuation_drills_trails]:checked').val();
						       	var CSR_emergency_respone_plan_drills_tails = $('input[name=CSR_emergency_respone_plan_drills_tails]:checked').val();
						       	var CSR_offshore_execution_phase = $('input[name=CSR_offshore_execution_phase]:checked').val();
						       	var CSR_incident_report_investigation = $('input[name=CSR_incident_report_investigation]:checked').val();
						       	var CSR_prj_close_out_report = $('input[name=CSR_prj_close_out_report]:checked').val();
						       	var CSR_scope_work_execute_under_you = $('input[name=CSR_scope_details').val();
						       	var CSR_position_min_rate = $('input[name=CSR_position_min_rate]').val();
						        var CSR_position_max_rate = $('input[name=CSR_position_max_rate]').val();
						       	var other_CSR_scope_work_execute_under_you = $('input[name=other_CSR_scope_work_execute_under_you').val();
						       	$.post('<?=site_url('Welcome/CSR_PART_info')?>',{user_id:user_id,CSR_working_priod_start:CSR_working_priod_start,CSR_working_priod_end:CSR_working_priod_end,CSR_no_year:CSR_no_year,CSR_internation_gas_oil_client:CSR_internation_gas_oil_client,CSR_prj_name:CSR_prj_name,CSR_front_end_engg_design_subsea_str:CSR_front_end_engg_design_subsea_str,CSR_develope_scope_work_subsea_install:CSR_develope_scope_work_subsea_install,CSR_accept_criteria:CSR_accept_criteria,CSR_audit_cinstract_safety_mgnt:CSR_audit_cinstract_safety_mgnt,CSR_review_contract_prj_plan:CSR_review_contract_prj_plan,CSR_subsea_install_prj_HSE_review_HAZID:CSR_subsea_install_prj_HSE_review_HAZID,CSR_review_approval_diving_contract_personnel:CSR_review_approval_diving_contract_personnel,CSR_review_close_design_audit:CSR_review_close_design_audit,CSR_DP2_DSV:CSR_DP2_DSV,CSR_mobolisation_hyperbaric_reception:CSR_mobolisation_hyperbaric_reception,CSR_sys_integration_test_onshore:CSR_sys_integration_test_onshore,CSR_hyperbaric_evacuation_drills_trails:CSR_hyperbaric_evacuation_drills_trails,CSR_emergency_respone_plan_drills_tails:CSR_emergency_respone_plan_drills_tails,CSR_offshore_execution_phase:CSR_offshore_execution_phase,CSR_incident_report_investigation:CSR_incident_report_investigation,CSR_prj_close_out_report:CSR_prj_close_out_report,CSR_scope_work_execute_under_you:CSR_scope_work_execute_under_you,other_CSR_scope_work_execute_under_you:other_CSR_scope_work_execute_under_you,CSR_implement_engg_code:CSR_implement_engg_code,CSR_involve_front_engg:CSR_involve_front_engg,CSR_part_scope_work:CSR_part_scope_work,CSR_team_mem_audit_process_approval:CSR_team_mem_audit_process_approval,CSR_HSE_review_HAZID:CSR_HSE_review_HAZID,CSR_review_install_procedure:CSR_review_install_procedure,CSR_risk_assets_install:CSR_risk_assets_install,CSR_sys_integration_test:CSR_sys_integration_test,CSR_position_min_rate:CSR_position_min_rate,CSR_position_max_rate:CSR_position_max_rate},function(data){
						       		console.log(data);
						       	},'json');
						        break;
						    case 8:
						        var DPM_working_priod_start = $('input[name=DPM_working_priod_start]').val();
						        var DPM_working_priod_end = $('input[name=DPM_working_priod_end]').val();
						        var DPM_no_year = $('input[name=DPM_no_year]').val();
						        var DPM_familier_IMCA_OGP_RP = $('input[name=DPM_familier_IMCA_OGP_RP]:checked').val();
						        var DPM_prj_name = $('input[name=DPM_prj_name]').val();
						        var DPM_prj_location = $('input[name=DPM_prj_location]').val();
						        var DPM_prj_oil_company_name = $('input[name=DPM_prj_oil_company_name]').val();
						        var DPM_prj_oil_company_location = $('input[name=DPM_prj_oil_company_location]').val();
						        var DPM_diving_contractor_name = $('input[name=DPM_diving_contractor_name]').val();
						        var DPM_emp_oil_company_diving_contractor = $('input[name=DPM_emp_oil_company_diving_contractor]').val();
						        var DPM_value_contractor = $('input[name=DPM_value_contractor]').val();
						        var DPM_constitution_PM_team = $('input[name=DPM_constitution_PM_team]').val();
						        var DPM_work_scope = $('input[name=DPM_work_scope]').val();
						        var DPM_marine_assets = $('input[name=DPM_marine_assets]').val();
						        var DPM_salient_feature_achivement = $('input[name=DPM_salient_feature_achivement]').val();
						        var DPM_marine_assets_deploy = $('input[name=DPM_marine_assets_deploy]').val();
						        var DPM_depth_saturation_diving_invest = $('input[name=DPM_depth_saturation_diving_invest]').val();
						        var DPM_ROV_deploy = $('input[name=DPM_ROV_deploy]').val();
						        var DPM_client_ref = $('input[name=DPM_client_ref]').val();
						        var DPM_prj_name_1 = $('input[name=DPM_prj_name_1]').val();
						        var DPM_prj_location_1 = $('input[name=DPM_prj_location_1]').val();
						        var DPM_prj_oil_company_name_1 = $('input[name=DPM_prj_oil_company_name_1]').val();
						        var DPM_prj_oil_company_location_1 = $('input[name=DPM_prj_oil_company_location_1]').val();
						        var DPM_diving_contractor_name_1 = $('input[name=DPM_diving_contractor_name_1]').val();
						        var DPM_emp_oil_company_diving_contractor_1 = $('input[name=DPM_emp_oil_company_diving_contractor_1]').val();
						        var DPM_value_contractor_1 = $('input[name=DPM_value_contractor_1]').val();
						        var DPM_constitution_PM_team_1 = $('input[name=DPM_constitution_PM_team_1]').val();
						        var DPM_work_scope_1 = $('input[name=DPM_work_scope_1]').val();
						        var DPM_marine_assets_1 = $('input[name=DPM_marine_assets_1]').val();
						        var DPM_salient_feature_achivement_1 = $('input[name=DPM_salient_feature_achivement_1]').val();
						        var DPM_marine_assets_deploy_1 = $('input[name=DPM_marine_assets_deploy_1]').val();
						        var DPM_depth_saturation_diving_invest_1 = $('input[name=DPM_depth_saturation_diving_invest_1]').val();
						        var DPM_ROV_deploy_1 = $('input[name=DPM_ROV_deploy_1]').val();
						        var DPM_client_ref_1 = $('input[name=DPM_client_ref_1]').val();
						        var DPM_position_min_rate = $('input[name=DPM_position_min_rate]').val();
						        var DPM_position_max_rate = $('input[name=DPM_position_max_rate]').val();

						        $.post('<?=site_url('Welcome/DPM_info')?>',{user_id:user_id,DPM_working_priod_start:DPM_working_priod_start,DPM_working_priod_end:DPM_working_priod_end,DPM_no_year:DPM_no_year,DPM_prj_name:DPM_prj_name,DPM_prj_location:DPM_prj_location,DPM_prj_oil_company_name:DPM_prj_oil_company_name,DPM_prj_oil_company_location:DPM_prj_oil_company_location,DPM_diving_contractor_name:DPM_diving_contractor_name,DPM_emp_oil_company_diving_contractor:DPM_emp_oil_company_diving_contractor,DPM_value_contractor:DPM_value_contractor,DPM_constitution_PM_team:DPM_constitution_PM_team,DPM_work_scope:DPM_work_scope,DPM_marine_assets:DPM_marine_assets,DPM_salient_feature_achivement:DPM_salient_feature_achivement,DPM_marine_assets_deploy:DPM_marine_assets_deploy,DPM_depth_saturation_diving_invest:DPM_depth_saturation_diving_invest,DPM_ROV_deploy:DPM_ROV_deploy,DPM_client_ref:DPM_client_ref,DPM_prj_name_1:DPM_prj_name_1,DPM_prj_location_1:DPM_prj_location_1,DPM_prj_oil_company_name_1:DPM_prj_oil_company_name_1,DPM_prj_oil_company_location_1:DPM_prj_oil_company_location_1,DPM_diving_contractor_name_1:DPM_diving_contractor_name_1,DPM_emp_oil_company_diving_contractor_1:DPM_emp_oil_company_diving_contractor_1,DPM_value_contractor_1:DPM_value_contractor_1,DPM_constitution_PM_team_1:DPM_constitution_PM_team_1,DPM_work_scope_1:DPM_work_scope_1,DPM_marine_assets_1:DPM_marine_assets_1,DPM_salient_feature_achivement_1:DPM_salient_feature_achivement_1,DPM_marine_assets_deploy_1:DPM_marine_assets_deploy_1,DPM_depth_saturation_diving_invest_1:DPM_depth_saturation_diving_invest_1,DPM_ROV_deploy_1:DPM_ROV_deploy_1,DPM_client_ref_1:DPM_client_ref_1,DPM_familier_IMCA_OGP_RP:DPM_familier_IMCA_OGP_RP,DPM_position_min_rate:DPM_position_min_rate,DPM_position_max_rate:DPM_position_max_rate},function(data){
						        	console.log(data);
						        },'json');
						        break;
						    case 9:
						    	var DOM_working_priod_start = $('input[name=DOM_working_priod_start]').val();
						    	var DOM_working_priod_end = $('input[name=DOM_working_priod_end]').val();
						    	var DOM_no_year = $('input[name=DOM_no_year]').val();
						    	var DOM_familier_IMCA_OGP_RP = $('input[name=DOM_familier_IMCA_OGP_RP]:checked').val();
						        var DOM_prj_name = $('input[name=DOM_prj_name]').val();
						        var DOM_prj_location = $('input[name=DOM_prj_location]').val();
						        var DOM_prj_oil_company_name = $('input[name=DOM_prj_oil_company_name]').val();
						        var DOM_prj_oil_company_location = $('input[name=DOM_prj_oil_company_location]').val();
						        var DOM_diving_contractor_name = $('input[name=DOM_diving_contractor_name]').val();
						        var DOM_emp_oil_company_diving_contractor = $('input[name=DOM_emp_oil_company_diving_contractor]').val();
						        var DOM_value_contractor = $('input[name=DOM_value_contractor]').val();
						        var DOM_constitution_PM_team = $('input[name=DOM_constitution_PM_team]').val();
						        var DOM_work_scope = $('input[name=DOM_work_scope]').val();
						        var DOM_marine_assets = $('input[name=DOM_marine_assets]').val();
						        var DOM_salient_feature_achivement = $('input[name=DOM_salient_feature_achivement]').val();
						        var DOM_marine_assets_deploy = $('input[name=DOM_marine_assets_deploy]').val();
						        var DOM_depth_saturation_diving_invest = $('input[name=DOM_depth_saturation_diving_invest]').val();
						        var DOM_ROV_deploy = $('input[name=DOM_ROV_deploy]').val();
						        var DOM_client_ref = $('input[name=DOM_client_ref]').val();
						        var DOM_prj_name_1 = $('input[name=DOM_prj_name_1]').val();
						        var DOM_prj_location_1 = $('input[name=DOM_prj_location_1]').val();
						        var DOM_prj_oil_company_name_1 = $('input[name=DOM_prj_oil_company_name_1]').val();
						        var DOM_prj_oil_company_location_1 = $('input[name=DOM_prj_oil_company_location_1]').val();
						        var DOM_diving_contractor_name_1 = $('input[name=DOM_diving_contractor_name_1]').val();
						        var DOM_emp_oil_company_diving_contractor_1 = $('input[name=DOM_emp_oil_company_diving_contractor_1]').val();
						        var DOM_value_contractor_1 = $('input[name=DOM_value_contractor_1]').val();
						        var DOM_constitution_PM_team_1 = $('input[name=DOM_constitution_PM_team_1]').val();
						        var DOM_work_scope_1 = $('input[name=DOM_work_scope_1]').val();
						        var DOM_marine_assets_1 = $('input[name=DOM_marine_assets_1]').val();
						        var DOM_salient_feature_achivement_1 = $('input[name=DOM_salient_feature_achivement_1]').val();
						        var DOM_marine_assets_deploy_1 = $('input[name=DOM_marine_assets_deploy_1]').val();
						        var DOM_depth_saturation_diving_invest_1 = $('input[name=DOM_depth_saturation_diving_invest_1]').val();
						        var DOM_ROV_deploy_1 = $('input[name=DOM_ROV_deploy_1]').val();
						        var DOM_client_ref_1 = $('input[name=DOM_client_ref_1]').val();
						        var DOM_position_min_rate = $('input[name=DOM_position_min_rate]').val();
						        var DOM_position_max_rate = $('input[name=DOM_position_max_rate]').val();
						        $.post('<?=site_url('Welcome/DOM_info')?>',{user_id:user_id,DOM_working_priod_start:DOM_working_priod_start,DOM_working_priod_end:DOM_working_priod_end,DOM_no_year:DOM_no_year,DOM_prj_name:DOM_prj_name,DOM_prj_location:DOM_prj_location,DOM_prj_oil_company_name:DOM_prj_oil_company_name,DOM_prj_oil_company_location:DOM_prj_oil_company_location,DOM_diving_contractor_name:DOM_diving_contractor_name,DOM_emp_oil_company_diving_contractor:DOM_emp_oil_company_diving_contractor,DOM_value_contractor:DOM_value_contractor,DOM_constitution_PM_team:DOM_constitution_PM_team,DOM_work_scope:DOM_work_scope,DOM_marine_assets:DOM_marine_assets,DOM_salient_feature_achivement:DOM_salient_feature_achivement,DOM_marine_assets_deploy:DOM_marine_assets_deploy,DOM_depth_saturation_diving_invest:DOM_depth_saturation_diving_invest,DOM_ROV_deploy:DOM_ROV_deploy,DOM_client_ref:DOM_client_ref,DOM_prj_name_1:DOM_prj_name_1,DOM_prj_location_1:DOM_prj_location_1,DOM_prj_oil_company_name_1:DOM_prj_oil_company_name_1,DOM_prj_oil_company_location_1:DOM_prj_oil_company_location_1,DOM_diving_contractor_name_1:DOM_diving_contractor_name_1,DOM_emp_oil_company_diving_contractor_1:DOM_emp_oil_company_diving_contractor_1,DOM_value_contractor_1:DOM_value_contractor_1,DOM_constitution_PM_team_1:DOM_constitution_PM_team_1,DOM_work_scope_1:DOM_work_scope_1,DOM_marine_assets_1:DOM_marine_assets_1,DOM_salient_feature_achivement_1:DOM_salient_feature_achivement_1,DOM_marine_assets_deploy_1:DOM_marine_assets_deploy_1,DOM_depth_saturation_diving_invest_1:DOM_depth_saturation_diving_invest_1,DOM_ROV_deploy_1:DOM_ROV_deploy_1,DOM_client_ref_1:DOM_client_ref_1,DOM_familier_IMCA_OGP_RP:DOM_familier_IMCA_OGP_RP,DOM_position_min_rate:DOM_position_min_rate,DOM_position_max_rate:DOM_position_max_rate},function(data){
						        	console.log(data);
						        },'json');
						        break;
						    case 10:
						        var SDS_working_priod_start = $('input[name=SDS_working_priod_start]').val();
						        var SDS_working_priod_end = $('input[name=SDS_working_priod_end]').val();
						        var SDS_no_year = $('input[name=SDS_no_year]').val();
						        var SDS_no_SDS_offshare = $('input[name=SDS_no_SDS_offshare]').val();
						        var SDS_name_barges_exe_SDS_from = $('input[name=SDS_name_barges_exe_SDS_from]').val();
						        var SDS_name_DP2_DSV_exe_SDS_from = $('input[name=SDS_name_DP2_DSV_exe_SDS_from]').val();
						        var SDS_IMCA_div_cntr_wrk = $('input[name=SDS_IMCA_div_cntr_wrk]').val();
						        var SDS_oil_comp_wrk = $('input[name=SDS_oil_comp_wrk]').val();
						        var SDS_EPIC_prj_wrk_SDS = $('input[name=SDS_EPIC_prj_wrk_SDS]').val();
						        var SDS_prj_mgnt_exp = $('input[name=SDS_prj_mgnt_exp]').val();
						        var SDS_type_wrk = $('input[name=SDS_scope_details]').val();
						        var SDS_position_min_rate = $('input[name=SDS_position_min_rate]').val();
						        var SDS_position_max_rate = $('input[name=SDS_position_max_rate]').val();
						        $.post('<?=site_url('Welcome/SDS_info')?>',{user_id:user_id,SDS_working_priod_start:SDS_working_priod_start,SDS_working_priod_end:SDS_working_priod_end,SDS_no_year:SDS_no_year,SDS_no_SDS_offshare:SDS_no_SDS_offshare,SDS_name_barges_exe_SDS_from:SDS_name_barges_exe_SDS_from,SDS_name_DP2_DSV_exe_SDS_from:SDS_name_DP2_DSV_exe_SDS_from,SDS_IMCA_div_cntr_wrk:SDS_IMCA_div_cntr_wrk,SDS_oil_comp_wrk:SDS_oil_comp_wrk,SDS_EPIC_prj_wrk_SDS:SDS_EPIC_prj_wrk_SDS,SDS_prj_mgnt_exp:SDS_prj_mgnt_exp,SDS_type_wrk:SDS_type_wrk,SDS_position_min_rate:SDS_position_min_rate,SDS_position_max_rate:SDS_position_max_rate},function(data){
						        	console.log(data);
						        },'json');
						        break;
						    case 11:
						    	var Prj_Engg_working_priod_start = $('input[name=Prj_Engg_working_priod_start]').val();
						    	var Prj_Engg_working_priod_end = $('input[name=Prj_Engg_working_priod_end]').val();
						    	var Prj_Engg_no_year = $('input[name=Prj_Engg_no_year]').val();
						    	var Prj_Engg_name_barges_exe_SDS_from = $('input[name=Prj_Engg_name_barges_exe_SDS_from]').val();
						    	var Prj_Engg_name_DP2_DSV_exe_SDS_from = $('input[name=Prj_Engg_name_DP2_DSV_exe_SDS_from]').val();
						    	var Prj_Engg_IMCA_div_cntr_wrk = $('input[name=Prj_Engg_IMCA_div_cntr_wrk]').val();
						    	var Prj_Engg_oil_comp_wrk = $('input[name=Prj_Engg_oil_comp_wrk]').val();
						    	var Prj_Engg_EPIC_prj_engg_susea = $('input[name=Prj_Engg_EPIC_prj_engg_susea]').val();
						    	var Prj_Engg_prj_mgnt_exp = $('input[name=Prj_Engg_prj_mgnt_exp]').val();
						    	var Prj_Engg_type_wrk = $('input[name=Prj_Engg_scope_details]').val();
						    	var Prj_Engg_develop_install_method = $('input[name=Prj_Engg_develop_install_method_details]').val();
						    	var Prj_Engg_develop_mobolisation_plan = $('input[name=Prj_Engg_develope_mobolisation_plan_details]').val();
						    	var Prj_Engg_exp_rel_pipeline_analysis_sw = $('textarea[name=Prj_Engg_exp_rel_pipeline_analysis_sw]').val();
						    	var Prj_Engg_exp_other_pipeline_design_tool = $('textarea[name=Prj_Engg_exp_other_pipeline_design_tool]').val();
						    	var Prj_Engg_exp_structural_analysis_tool_tool = $('textarea[name=Prj_Engg_exp_structural_analysis_tool_tool]').val();
						    	var Prj_Engg_exp_design_details_veri_ack_industry = $('textarea[name=Prj_Engg_exp_design_details_veri_ack_industry]').val();
						    	var Prj_Engg_exp_production_check_design_doc = $('textarea[name=Prj_Engg_exp_production_check_design_doc]').val();
						    	var Prj_Engg_exp_liading_ass_interface = $('textarea[name=Prj_Engg_exp_liading_ass_interface]').val();
						    	var Prj_Engg_exp_engg_mobilisation_oxxasional_period = $('textarea[name=Prj_Engg_exp_engg_mobilisation_oxxasional_period]').val();
						    	var Prj_Engg_exp_engg_technical_support = $('textarea[name=Prj_Engg_exp_engg_technical_support]').val();
						    	var Prj_Engg_exp_participate_req_event = $('textarea[name=Prj_Engg_exp_participate_req_event]').val();
						    	var Prj_Engg_exp_develope_lift_plan = $('textarea[name=Prj_Engg_exp_develope_lift_plan]').val();
						    	var Prj_Engg_strength_plan = $('input[name=Prj_Engg_strength_details]').val();
						    	var Prj_Engg_specification_area_plan = $('input[name=Prj_Engg_specification_area_details]').val();
						    	var Prj_Engg_comfort_cycle_plan = $('input[name=Prj_Engg_comfort_cycle_details]').val();
						    	var Prj_Engg_position_min_rate = $('input[name=Prj_Engg_position_min_rate]').val();
						    	var Prj_Engg_position_max_rate = $('input[name=Prj_Engg_position_max_rate]').val();
						    	$.post('<?=site_url('Welcome/prj_engg_info')?>',{user_id:user_id,Prj_Engg_working_priod_start:Prj_Engg_working_priod_start,Prj_Engg_working_priod_end:Prj_Engg_working_priod_end,Prj_Engg_no_year:Prj_Engg_no_year,Prj_Engg_name_barges_exe_SDS_from:Prj_Engg_name_barges_exe_SDS_from,Prj_Engg_name_DP2_DSV_exe_SDS_from:Prj_Engg_name_DP2_DSV_exe_SDS_from,Prj_Engg_IMCA_div_cntr_wrk:Prj_Engg_IMCA_div_cntr_wrk,Prj_Engg_oil_comp_wrk:Prj_Engg_oil_comp_wrk,Prj_Engg_EPIC_prj_engg_susea:Prj_Engg_EPIC_prj_engg_susea,Prj_Engg_prj_mgnt_exp:Prj_Engg_prj_mgnt_exp,Prj_Engg_type_wrk:Prj_Engg_type_wrk,Prj_Engg_develop_install_method:Prj_Engg_develop_install_method,Prj_Engg_develop_mobolisation_plan:Prj_Engg_develop_mobolisation_plan,Prj_Engg_exp_rel_pipeline_analysis_sw:Prj_Engg_exp_rel_pipeline_analysis_sw,Prj_Engg_exp_other_pipeline_design_tool:Prj_Engg_exp_other_pipeline_design_tool,Prj_Engg_exp_structural_analysis_tool_tool:Prj_Engg_exp_structural_analysis_tool_tool,Prj_Engg_exp_design_details_veri_ack_industry:Prj_Engg_exp_design_details_veri_ack_industry,Prj_Engg_exp_production_check_design_doc:Prj_Engg_exp_production_check_design_doc,Prj_Engg_exp_liading_ass_interface:Prj_Engg_exp_liading_ass_interface,Prj_Engg_exp_engg_mobilisation_oxxasional_period:Prj_Engg_exp_engg_mobilisation_oxxasional_period,Prj_Engg_exp_engg_technical_support:Prj_Engg_exp_engg_technical_support,Prj_Engg_exp_participate_req_event:Prj_Engg_exp_participate_req_event,Prj_Engg_exp_develope_lift_plan:Prj_Engg_exp_develope_lift_plan,Prj_Engg_strength_plan:Prj_Engg_strength_plan,Prj_Engg_specification_area_plan:Prj_Engg_specification_area_plan,Prj_Engg_comfort_cycle_plan:Prj_Engg_comfort_cycle_plan,Prj_Engg_position_min_rate:Prj_Engg_position_min_rate,Prj_Engg_position_max_rate:Prj_Engg_position_max_rate},function(data){
						    		console.log(data);
						    	},'json');
						    	break;
						    case 12:
						    	var Field_Engg_working_priod_start = $('input[name=Field_Engg_working_priod_start]').val();
						    	var Field_Engg_working_priod_end = $('input[name=Field_Engg_working_priod_end]').val();
						    	var Field_Engg_no_year = $('input[name=Field_Engg_no_year]').val();
						    	var Field_Engg_name_barges_exe_SDS_from = $('input[name=Field_Engg_name_barges_exe_SDS_from]').val();
						    	var Field_Engg_name_DP2_DSV_exe_SDS_from = $('input[name=Field_Engg_name_DP2_DSV_exe_SDS_from]').val();
						    	var Field_Engg_IMCA_div_cntr_wrk = $('input[name=Field_Engg_IMCA_div_cntr_wrk]').val();
						    	var Field_Engg_oil_comp_wrk = $('input[name=Field_Engg_oil_comp_wrk]').val();
						    	var Field_Engg_EPIC_field_engg_susea = $('input[name=Field_Engg_EPIC_field_engg_susea]').val();
						    	var Field_Engg_prj_mgnt_exp = $('input[name=Field_Engg_prj_mgnt_exp]').val();
						    	var Field_Engg_type_wrk = $('input[name=field_Engg_scope_details]').val();
						    	var Field_Engg_develop_install_method = $('input[name=Field_Engg_develop_install_method_details]').val();
						    	var Field_Engg_develop_mobolisation_plan = $('input[name=Field_Engg_develope_mobolisation_plan_details]').val();
						    	var Field_Engg_exp_rel_pipeline_analysis_sw = $('textarea[name=Field_Engg_exp_rel_pipeline_analysis_sw]').val();
						    	var Field_Engg_exp_other_pipeline_design_tool = $('textarea[name=Field_Engg_exp_other_pipeline_design_tool]').val();
						    	var Field_Engg_exp_structural_analysis_tool_tool = $('textarea[name=Field_Engg_exp_structural_analysis_tool_tool]').val();
						    	var Field_Engg_exp_design_details_veri_ack_industry = $('textarea[name=Field_Engg_exp_design_details_veri_ack_industry]').val();
						    	var Field_Engg_exp_production_check_design_doc = $('textarea[name=Field_Engg_exp_production_check_design_doc]').val();
						    	var Field_Engg_exp_liading_ass_interface = $('textarea[name=Field_Engg_exp_liading_ass_interface]').val();
						    	var Field_Engg_exp_engg_mobilisation_oxxasional_period = $('textarea[name=Field_Engg_exp_engg_mobilisation_oxxasional_period]').val();
						    	var Field_Engg_exp_engg_technical_support = $('textarea[name=Field_Engg_exp_engg_technical_support]').val();
						    	var Field_Engg_exp_participate_req_event = $('textarea[name=Field_Engg_exp_participate_req_event]').val();
						    	var Field_Engg_exp_develope_lift_plan = $('textarea[name=Field_Engg_exp_develope_lift_plan]').val();
						    	var Field_Engg_strength_plan = $('input[name=Field_Engg_strength_details]').val();
						    	var Field_Engg_specification_area_plan = $('input[name=Field_Engg_specification_area_details]').val();
						    	var Field_Engg_comfort_cycle_plan = $('input[name=Field_Engg_comfort_cycle_details]').val();
						    	var field_Engg_position_min_rate = $('input[name=field_Engg_position_min_rate]').val();
						    	var field_Engg_position_max_rate = $('input[name=field_Engg_position_max_rate]').val();

						    	$.post('<?=site_url('Welcome/field_engg_info')?>',{user_id:user_id,Field_Engg_working_priod_start:Field_Engg_working_priod_start,Field_Engg_working_priod_end:Field_Engg_working_priod_end,Field_Engg_no_year:Field_Engg_no_year,Field_Engg_name_barges_exe_SDS_from:Field_Engg_name_barges_exe_SDS_from,Field_Engg_name_DP2_DSV_exe_SDS_from:Field_Engg_name_DP2_DSV_exe_SDS_from,Field_Engg_IMCA_div_cntr_wrk:Field_Engg_IMCA_div_cntr_wrk,Field_Engg_oil_comp_wrk:Field_Engg_oil_comp_wrk,Field_Engg_EPIC_field_engg_susea:Field_Engg_EPIC_field_engg_susea,Field_Engg_prj_mgnt_exp:Field_Engg_prj_mgnt_exp,Field_Engg_type_wrk:Field_Engg_type_wrk,Field_Engg_develop_install_method:Field_Engg_develop_install_method,Field_Engg_develop_mobolisation_plan:Field_Engg_develop_mobolisation_plan,Field_Engg_exp_rel_pipeline_analysis_sw:Field_Engg_exp_rel_pipeline_analysis_sw,Field_Engg_exp_other_pipeline_design_tool:Field_Engg_exp_other_pipeline_design_tool,Field_Engg_exp_structural_analysis_tool_tool:Field_Engg_exp_structural_analysis_tool_tool,Field_Engg_exp_design_details_veri_ack_industry:Field_Engg_exp_design_details_veri_ack_industry,Field_Engg_exp_production_check_design_doc:Field_Engg_exp_production_check_design_doc,Field_Engg_exp_liading_ass_interface:Field_Engg_exp_liading_ass_interface,Field_Engg_exp_engg_mobilisation_oxxasional_period:Field_Engg_exp_engg_mobilisation_oxxasional_period,Field_Engg_exp_engg_technical_support:Field_Engg_exp_engg_technical_support,Field_Engg_exp_participate_req_event:Field_Engg_exp_participate_req_event,Field_Engg_exp_develope_lift_plan:Field_Engg_exp_develope_lift_plan,Field_Engg_strength_plan:Field_Engg_strength_plan,Field_Engg_specification_area_plan:Field_Engg_specification_area_plan,Field_Engg_comfort_cycle_plan:Field_Engg_comfort_cycle_plan,field_Engg_position_min_rate:field_Engg_position_min_rate,field_Engg_position_max_rate:field_Engg_position_max_rate},function(data){
						    		console.log(data);
						    	},'json');
						    	break;
						    case 13:
						    	var DP_DSV_name = $('input[name=DP_DSV_name]').val();
						    	var DP_DSV_GRT = $('input[name=DP_DSV_GRT]').val();
						    	var DP_DSV_subsea_crane_tonnage = $('input[name=DP_DSV_subsea_crane_tonnage]').val();
						    	var DP_DSV_owner_operator = $('input[name=DP_DSV_owner_operator]').val();
						    	var DP_DSV_month_serve = $('input[name=DP_DSV_month_serve]').val();
						    	var DP_DSV_name_1 = $('input[name=DP_DSV_name_1]').val();
						    	var DP_DSV_GRT_1 = $('input[name=DP_DSV_GRT_1]').val();
						    	var DP_DSV_subsea_crane_tonnage_1 = $('input[name=DP_DSV_subsea_crane_tonnage_1]').val();
						    	var DP_DSV_owner_operator_1 = $('input[name=DP_DSV_owner_operator_1]').val();
						    	var DP_DSV_month_serve_1 = $('input[name=DP_DSV_month_serve_1]').val();
						    	var DP_DSV_name_2 = $('input[name=DP_DSV_name_2]').val();
						    	var DP_DSV_GRT_2 = $('input[name=DP_DSV_GRT_2]').val();
						    	var DP_DSV_subsea_crane_tonnage_2 = $('input[name=DP_DSV_subsea_crane_tonnage_2]').val();
						    	var DP_DSV_owner_operator_2 = $('input[name=DP_DSV_owner_operator_2]').val();
						    	var DP_DSV_month_serve_2 = $('input[name=DP_DSV_month_serve_2]').val();
						    	var DP_DSV_name_3 = $('input[name=DP_DSV_name_3]').val();
						    	var DP_DSV_GRT_3 = $('input[name=DP_DSV_GRT_3]').val();
						    	var DP_DSV_subsea_crane_tonnage_3 = $('input[name=DP_DSV_subsea_crane_tonnage_3]').val();
						    	var DP_DSV_owner_operator_3 = $('input[name=DP_DSV_owner_operator_3]').val();
						    	var DP_DSV_month_serve_3 = $('input[name=DP_DSV_month_serve_3]').val();
						    	var DP_DSV_name_4 = $('input[name=DP_DSV_name_4]').val();
						    	var DP_DSV_GRT_4 = $('input[name=DP_DSV_GRT_4]').val();
						    	var DP_DSV_subsea_crane_tonnage_4 = $('input[name=DP_DSV_subsea_crane_tonnage_4]').val();
						    	var DP_DSV_owner_operator_4 = $('input[name=DP_DSV_owner_operator_4]').val();
						    	var DP_DSV_month_serve_4 = $('input[name=DP_DSV_month_serve_4]').val();
						    	var DP_DSV_oil_gas_client_name = $('input[name=DP_DSV_oil_gas_client_name]').val();
						    	var DP_DSV_oil_gas_client_name_1 = $('input[name=DP_DSV_oil_gas_client_name_1]').val();
						    	var DP_DSV_oil_gas_client_name_2 = $('input[name=DP_DSV_oil_gas_client_name_2]').val();
						    	var DP_DSV_oil_gas_client_name_3 = $('input[name=DP_DSV_oil_gas_client_name_3]').val();
						    	var DP_DSV_oil_gas_client_name_4 = $('input[name=DP_DSV_oil_gas_client_name_4]').val();
						    	var DP_DSV_position_min_rate = $('input[name=DP_DSV_position_min_rate]').val();
						    	var DP_DSV_position_max_rate = $('input[name=DP_DSV_position_max_rate]').val();
						    	var DP_DSP_type_wrk = $('input[name=DP_DSP_scope_details]').val();
						    	var MWS_employer = $('input[name=MWS_employer]').val();
						    	var MWS_from = $('input[name=MWS_from]').val();
						    	var MWS_to = $('input[name=MWS_to]').val();
						    	var MWS_region = $('input[name=MWS_region]').val();
						    	var MWS_client = $('input[name=MWS_client]').val();
						    	var MWS_employer_1 = $('input[name=MWS_employer_1]').val();
						    	var MWS_from_1 = $('input[name=MWS_from_1]').val();
						    	var MWS_to_1 = $('input[name=MWS_to_1]').val();
						    	var MWS_region_1 = $('input[name=MWS_region_1]').val();
						    	var MWS_client_1 = $('input[name=MWS_client_1]').val();
						    	var MWS_employer_2 = $('input[name=MWS_employer_2]').val();
						    	var MWS_from_2 = $('input[name=MWS_from_2]').val();
						    	var MWS_to_2 = $('input[name=MWS_to_2]').val();
						    	var MWS_region_2 = $('input[name=MWS_region_2]').val();
						    	var MWS_client_2 = $('input[name=MWS_client_2]').val();
						    	$.post('<?=site_url('Welcome/DSV_MWS_info')?>',{user_id:user_id,DP_DSV_name:DP_DSV_name,DP_DSV_GRT:DP_DSV_GRT,DP_DSV_subsea_crane_tonnage:DP_DSV_subsea_crane_tonnage,DP_DSV_owner_operator:DP_DSV_owner_operator,DP_DSV_month_serve:DP_DSV_month_serve,DP_DSV_name_1:DP_DSV_name_1,DP_DSV_GRT_1:DP_DSV_GRT_1,DP_DSV_subsea_crane_tonnage_1:DP_DSV_subsea_crane_tonnage_1,DP_DSV_owner_operator_1:DP_DSV_owner_operator_1,DP_DSV_month_serve_1:DP_DSV_month_serve_1,DP_DSV_name_2:DP_DSV_name_2,DP_DSV_GRT_2:DP_DSV_GRT_2,DP_DSV_subsea_crane_tonnage_2:DP_DSV_subsea_crane_tonnage_2,DP_DSV_owner_operator_2:DP_DSV_owner_operator_2,DP_DSV_month_serve_2:DP_DSV_month_serve_2,DP_DSV_name_3:DP_DSV_name_3,DP_DSV_GRT_3:DP_DSV_GRT_3,DP_DSV_subsea_crane_tonnage_3:DP_DSV_subsea_crane_tonnage_3,DP_DSV_owner_operator_3:DP_DSV_owner_operator_3,DP_DSV_month_serve_3:DP_DSV_month_serve_3,DP_DSV_name_4:DP_DSV_name_4,DP_DSV_GRT_4:DP_DSV_GRT_4,DP_DSV_subsea_crane_tonnage_4:DP_DSV_subsea_crane_tonnage_4,DP_DSV_owner_operator_4:DP_DSV_owner_operator_4,DP_DSV_month_serve_4:DP_DSV_month_serve_4,DP_DSV_oil_gas_client_name:DP_DSV_oil_gas_client_name,DP_DSV_oil_gas_client_name_1:DP_DSV_oil_gas_client_name_1,DP_DSV_oil_gas_client_name_2:DP_DSV_oil_gas_client_name_2,DP_DSV_oil_gas_client_name_3:DP_DSV_oil_gas_client_name_3,DP_DSV_oil_gas_client_name_4:DP_DSV_oil_gas_client_name_4,DP_DSP_type_wrk:DP_DSP_type_wrk,MWS_employer:MWS_employer,MWS_from:MWS_from,MWS_to:MWS_to,MWS_region:MWS_region,MWS_client:MWS_client,MWS_employer_1:MWS_employer_1,MWS_from_1:MWS_from_1,MWS_to_1:MWS_to_1,MWS_region_1:MWS_region_1,MWS_client_1:MWS_client_1,MWS_employer_2:MWS_employer_2,MWS_from_2:MWS_from_2,MWS_to_2:MWS_to_2,MWS_region_2:MWS_region_2,MWS_client_2:MWS_client_2,DP_DSV_position_min_rate:DP_DSV_position_min_rate,DP_DSV_position_max_rate:DP_DSV_position_max_rate},function(data){
						    		console.log(data);
						    	},'json');
						    	break;
						    case 14:
							    var ROV_working_priod_start = $('input[name=ROV_working_priod_start]').val();
							    var ROV_working_priod_end = $('input[name=ROV_working_priod_end]').val();
							    var ROV_no_year = $('input[name=ROV_no_year]').val();
							    var ROV_trench_burial_piloted = $('input[name=ROV_trench_burial_piloted]').val();
							    var ROV_heavy_wrlcls_piloted = $('input[name=ROV_heavy_wrlcls_piloted]').val();
							    var ROV_light_wrlcls_piloted = $('input[name=ROV_light_wrlcls_piloted]').val();
							    var ROV_obs_cls_piloted = $('input[name=ROV_obs_cls_piloted]').val();
							    var ROV_tool_skidd_deploy = $('input[name=ROV_tool_skidd_deploy]').val();
							    var ROV_manips_7_fun = $('input[name=ROV_manips_7_fun]').val();
							    var ROV_manips_5_fun = $('input[name=ROV_manips_5_fun]').val();
							    var ROV_manips_3_fun = $('input[name=ROV_manips_3_fun]').val();
							    var ROV_ROVSV_wrk_1 = $('input[name=ROV_ROVSV_wrk_1]').val();
							    var ROV_ROVSV_wrk_2 = $('input[name=ROV_ROVSV_wrk_2]').val();
							    var ROV_ROVSV_wrk_3 = $('input[name=ROV_ROVSV_wrk_3]').val();
							    var ROV_rock_dump_vessel_wrk_1 = $('input[name=ROV_rock_dump_vessel_wrk_1]').val();
							    var ROV_rock_dump_vessel_wrk_2 = $('input[name=ROV_rock_dump_vessel_wrk_2]').val();
							    var ROV_rock_dump_vessel_wrk_3 = $('input[name=ROV_rock_dump_vessel_wrk_3]').val();
							    var ROV_deepwater_exp = $('input[name=ROV_deepwater_exp]').val();
							    var ROV_SIMOPS_wrk_1 = $('input[name=ROV_SIMOPS_wrk_1]').val();
							    var ROV_SIMOPS_wrk_2 = $('input[name=ROV_SIMOPS_wrk_2]').val();
							    var ROV_SIMOPS_wrk_3 = $('input[name=ROV_SIMOPS_wrk_3]').val();
							    var ROV_SIMOPS_wrk_4 = $('input[name=ROV_SIMOPS_wrk_4]').val();
							    var ROV_SIMOPS_wrk_5 = $('input[name=ROV_SIMOPS_wrk_5]').val();
							    var ROV_IMCA_cont_wrk_1 = $('input[name=ROV_IMCA_cont_wrk_1]').val();
							    var ROV_IMCA_cont_wrk_2 = $('input[name=ROV_IMCA_cont_wrk_2]').val();
							    var ROV_IMCA_cont_wrk_3 = $('input[name=ROV_IMCA_cont_wrk_3]').val();
							    var ROV_IMCA_cont_wrk_4 = $('input[name=ROV_IMCA_cont_wrk_4]').val();
							    var ROV_IMCA_cont_wrk_5 = $('input[name=ROV_IMCA_cont_wrk_5]').val();
							    var ROV_maintain_IMCA_log_book = $('input[name=ROV_maintain_IMCA_log_book]:checked').val();
							    var ROV_oil_comp_wrk_1 = $('input[name=ROV_oil_comp_wrk_1]').val();
							    var ROV_oil_comp_wrk_2 = $('input[name=ROV_oil_comp_wrk_2]').val();
							    var ROV_oil_comp_wrk_3 = $('input[name=ROV_oil_comp_wrk_3]').val();
							    var ROV_oil_comp_wrk_4 = $('input[name=ROV_oil_comp_wrk_4]').val();
							    var ROV_oil_comp_wrk_5 = $('input[name=ROV_oil_comp_wrk_5]').val();
							    var ROV_position_min_rate = $('input[name=ROV_position_min_rate]').val();
						    	var ROV_position_max_rate = $('input[name=ROV_position_max_rate]').val();
							    var ROV_type_wrk = $('input[name=ROV_scope_details]').val();
							    $.post('<?=site_url('Welcome/ROV_info')?>',{user_id:user_id,ROV_working_priod_start:ROV_working_priod_start,ROV_working_priod_end:ROV_working_priod_end,ROV_no_year:ROV_no_year,ROV_trench_burial_piloted:ROV_trench_burial_piloted,ROV_heavy_wrlcls_piloted:ROV_heavy_wrlcls_piloted,ROV_light_wrlcls_piloted:ROV_light_wrlcls_piloted,ROV_obs_cls_piloted:ROV_obs_cls_piloted,ROV_tool_skidd_deploy:ROV_tool_skidd_deploy,ROV_manips_7_fun:ROV_manips_7_fun,ROV_manips_5_fun:ROV_manips_5_fun,ROV_manips_3_fun:ROV_manips_3_fun,ROV_ROVSV_wrk_1:ROV_ROVSV_wrk_1,ROV_ROVSV_wrk_2:ROV_ROVSV_wrk_2,ROV_ROVSV_wrk_3:ROV_ROVSV_wrk_3,ROV_rock_dump_vessel_wrk_1:ROV_rock_dump_vessel_wrk_1,ROV_rock_dump_vessel_wrk_2:ROV_rock_dump_vessel_wrk_2,ROV_rock_dump_vessel_wrk_3:ROV_rock_dump_vessel_wrk_3,ROV_deepwater_exp:ROV_deepwater_exp,ROV_SIMOPS_wrk_1:ROV_SIMOPS_wrk_1,ROV_SIMOPS_wrk_2:ROV_SIMOPS_wrk_2,ROV_SIMOPS_wrk_3:ROV_SIMOPS_wrk_3,ROV_SIMOPS_wrk_4:ROV_SIMOPS_wrk_4,ROV_SIMOPS_wrk_5:ROV_SIMOPS_wrk_5,ROV_IMCA_cont_wrk_1:ROV_IMCA_cont_wrk_1,ROV_IMCA_cont_wrk_2:ROV_IMCA_cont_wrk_2,ROV_IMCA_cont_wrk_3:ROV_IMCA_cont_wrk_3,ROV_IMCA_cont_wrk_4:ROV_IMCA_cont_wrk_4,ROV_IMCA_cont_wrk_5:ROV_IMCA_cont_wrk_5,ROV_maintain_IMCA_log_book:ROV_maintain_IMCA_log_book,ROV_oil_comp_wrk_1:ROV_oil_comp_wrk_1,ROV_oil_comp_wrk_2:ROV_oil_comp_wrk_2,ROV_oil_comp_wrk_3:ROV_oil_comp_wrk_3,ROV_oil_comp_wrk_4:ROV_oil_comp_wrk_4,ROV_oil_comp_wrk_5:ROV_oil_comp_wrk_5,ROV_type_wrk:ROV_type_wrk,ROV_position_min_rate:ROV_position_min_rate,ROV_position_max_rate:ROV_position_max_rate},function(data){
							    	console.log(data);
							    },'json');
						    	break;
						    case 15:
						    	var LSS_working_priod_start = $('input[name=LSS_working_priod_start]').val();
						    	var LSS_working_priod_end = $('input[name=LSS_working_priod_end]').val();
						    	var LSS_no_year = $('input[name=LSS_no_year]').val();
						    	var LSS_driver_SAT = $('input[name=LSS_driver_SAT]').val();
						    	var LSS_maintain_IMCA_log_book = $('input[name=LSS_maintain_IMCA_log_book]:checked').val();
						    	var LSS_day_log_verify = $('input[name=LSS_day_log_verify]').val();
						    	var LSS_depth_sat_profile = $('input[name=LSS_depth_sat_profile]').val();
						    	var LSS_DSV_SPHL_wrk_1 = $('input[name=LSS_DSV_SPHL_wrk_1]').val();
						    	var LSS_DSV_SPHL_wrk_2 = $('input[name=LSS_DSV_SPHL_wrk_2]').val();
						    	var LSS_DSV_SPHL_wrk_3 = $('input[name=LSS_DSV_SPHL_wrk_3]').val();
						    	var LSS_DSV_SPHL_wrk_4 = $('input[name=LSS_DSV_SPHL_wrk_4]').val();
						    	var LSS_DSV_SPHL_wrk_5 = $('input[name=LSS_DSV_SPHL_wrk_5]').val();
						    	var LSS_IMCA_cont_wrk_1 = $('input[name=LSS_IMCA_cont_wrk_1]').val();
						    	var LSS_IMCA_cont_wrk_2 = $('input[name=LSS_IMCA_cont_wrk_2]').val();
						    	var LSS_IMCA_cont_wrk_3 = $('input[name=LSS_IMCA_cont_wrk_3]').val();
						    	var LSS_IMCA_cont_wrk_4 = $('input[name=LSS_IMCA_cont_wrk_4]').val();
						    	var LSS_IMCA_cont_wrk_5 = $('input[name=LSS_IMCA_cont_wrk_5]').val();
						    	var LSS_oil_comp_wrk_1 = $('input[name=LSS_oil_comp_wrk_1]').val();
						    	var LSS_oil_comp_wrk_2 = $('input[name=LSS_oil_comp_wrk_2]').val();
						    	var LSS_oil_comp_wrk_3 = $('input[name=LSS_oil_comp_wrk_3]').val();
						    	var LSS_oil_comp_wrk_4 = $('input[name=LSS_oil_comp_wrk_4]').val();
						    	var LSS_oil_comp_wrk_5 = $('input[name=LSS_oil_comp_wrk_5]').val();
						    	var LSS_position_min_rate = $('input[name=LSS_position_min_rate]').val();
						    	var LSS_position_max_rate = $('input[name=LSS_position_max_rate]').val();
						    	var LSS_involve_evacuation_situation = $('input[name=LSS_involve_evacuation_situation]:checked').val();
						    	var LSS_involve_HRF = $('input[name=LSS_involve_HRF]:checked').val();
						    	$.post('<?=site_url('Welcome/LSS_info')?>',{user_id:user_id,LSS_working_priod_start:LSS_working_priod_start,LSS_working_priod_end:LSS_working_priod_end,LSS_no_year:LSS_no_year,LSS_driver_SAT:LSS_driver_SAT,LSS_maintain_IMCA_log_book:LSS_maintain_IMCA_log_book,LSS_day_log_verify:LSS_day_log_verify,LSS_depth_sat_profile:LSS_depth_sat_profile,LSS_DSV_SPHL_wrk_1:LSS_DSV_SPHL_wrk_1,LSS_DSV_SPHL_wrk_2:LSS_DSV_SPHL_wrk_2,LSS_DSV_SPHL_wrk_3:LSS_DSV_SPHL_wrk_3,LSS_DSV_SPHL_wrk_4:LSS_DSV_SPHL_wrk_4,LSS_DSV_SPHL_wrk_5:LSS_DSV_SPHL_wrk_5,LSS_IMCA_cont_wrk_1:LSS_IMCA_cont_wrk_1,LSS_IMCA_cont_wrk_2:LSS_IMCA_cont_wrk_2,LSS_IMCA_cont_wrk_3:LSS_IMCA_cont_wrk_3,LSS_IMCA_cont_wrk_4:LSS_IMCA_cont_wrk_4,LSS_IMCA_cont_wrk_5:LSS_IMCA_cont_wrk_5,LSS_oil_comp_wrk_1:LSS_oil_comp_wrk_1,LSS_oil_comp_wrk_2:LSS_oil_comp_wrk_2,LSS_oil_comp_wrk_3:LSS_oil_comp_wrk_3,LSS_oil_comp_wrk_4:LSS_oil_comp_wrk_4,LSS_oil_comp_wrk_5:LSS_oil_comp_wrk_5,LSS_involve_evacuation_situation:LSS_involve_evacuation_situation,LSS_involve_HRF:LSS_involve_HRF,LSS_position_min_rate:LSS_position_min_rate,LSS_position_max_rate:LSS_position_max_rate},function(data){
						    		console.log(data);
						    	},'json');
						    	break;
						    case 16:
						    	var SAT_DIV_working_priod_start = $('input[name=SAT_DIV_working_priod_start]').val();
						    	var SAT_DIV_working_priod_end = $('input[name=SAT_DIV_working_priod_end]').val();
						    	var SAT_DIV_no_year = $('input[name=SAT_DIV_no_year]').val();
						    	var SAT_DIV_DAY = $('input[name=SAT_DIV_DAY]').val();
						    	var SAT_DIV_MAX_depth = $('input[name=SAT_DIV_MAX_depth]').val();
						    	var SAT_DIV_DSV_dived_1 = $('input[name=SAT_DIV_DSV_dived_1]').val();
						    	var SAT_DIV_DSV_dived_2 = $('input[name=SAT_DIV_DSV_dived_2]').val();
						    	var SAT_DIV_DSV_dived_3 = $('input[name=SAT_DIV_DSV_dived_3]').val();
						    	var SAT_DIV_DSV_dived_4 = $('input[name=SAT_DIV_DSV_dived_4]').val();
						    	var SAT_DIV_DSV_dived_5 = $('input[name=SAT_DIV_DSV_dived_5]').val();
						    	var SAT_DIV_IMCA_cont_wrk_1 = $('input[name=SAT_DIV_IMCA_cont_wrk_1]').val();
						    	var SAT_DIV_IMCA_cont_wrk_2 = $('input[name=SAT_DIV_IMCA_cont_wrk_2]').val();
						    	var SAT_DIV_IMCA_cont_wrk_3 = $('input[name=SAT_DIV_IMCA_cont_wrk_3]').val();
						    	var SAT_DIV_IMCA_cont_wrk_4 = $('input[name=SAT_DIV_IMCA_cont_wrk_4]').val();
						    	var SAT_DIV_IMCA_cont_wrk_5 = $('input[name=SAT_DIV_IMCA_cont_wrk_5]').val();
						    	var SAT_DIV_oil_comp_wrk_1 = $('input[name=SAT_DIV_oil_comp_wrk_1]').val();
						    	var SAT_DIV_oil_comp_wrk_2 = $('input[name=SAT_DIV_oil_comp_wrk_2]').val();
						    	var SAT_DIV_oil_comp_wrk_3 = $('input[name=SAT_DIV_oil_comp_wrk_3]').val();
						    	var SAT_DIV_oil_comp_wrk_4 = $('input[name=SAT_DIV_oil_comp_wrk_4]').val();
						    	var SAT_DIV_oil_comp_wrk_5 = $('input[name=SAT_DIV_oil_comp_wrk_5]').val();
						    	var SAT_DIV_oil_field_wrk_1 = $('input[name=SAT_DIV_oil_field_wrk_1]').val();
						    	var SAT_DIV_oil_field_wrk_2 = $('input[name=SAT_DIV_oil_field_wrk_2]').val();
						    	var SAT_DIV_oil_field_wrk_3 = $('input[name=SAT_DIV_oil_field_wrk_3]').val();
						    	var SAT_DIV_oil_field_wrk_4 = $('input[name=SAT_DIV_oil_field_wrk_4]').val();
						    	var SAT_DIV_oil_field_wrk_5 = $('input[name=SAT_DIV_oil_field_wrk_5]').val();
						    	var SAT_DIV_type_wrk = $('input[name=SAT_DIV_scope_details]').val();
						    	var SAT_DIV_position_min_rate = $('input[name=SAT_DIV_position_min_rate]').val();
						    	var SAT_DIV_position_max_rate = $('input[name=SAT_DIV_position_max_rate]').val();
						    	$.post('<?=site_url('Welcome/SAT_DIV_info')?>',{user_id:user_id,SAT_DIV_working_priod_start:SAT_DIV_working_priod_start,SAT_DIV_working_priod_end:SAT_DIV_working_priod_end,SAT_DIV_no_year:SAT_DIV_no_year,SAT_DIV_DAY:SAT_DIV_DAY,SAT_DIV_MAX_depth:SAT_DIV_MAX_depth,SAT_DIV_DSV_dived_1:SAT_DIV_DSV_dived_1,SAT_DIV_DSV_dived_2:SAT_DIV_DSV_dived_2,SAT_DIV_DSV_dived_3:SAT_DIV_DSV_dived_3,SAT_DIV_DSV_dived_4:SAT_DIV_DSV_dived_4,SAT_DIV_DSV_dived_5:SAT_DIV_DSV_dived_5,SAT_DIV_IMCA_cont_wrk_1:SAT_DIV_IMCA_cont_wrk_1,SAT_DIV_IMCA_cont_wrk_2:SAT_DIV_IMCA_cont_wrk_2,SAT_DIV_IMCA_cont_wrk_3:SAT_DIV_IMCA_cont_wrk_3,SAT_DIV_IMCA_cont_wrk_4:SAT_DIV_IMCA_cont_wrk_4,SAT_DIV_IMCA_cont_wrk_5:SAT_DIV_IMCA_cont_wrk_5,SAT_DIV_oil_comp_wrk_1:SAT_DIV_oil_comp_wrk_1,SAT_DIV_oil_comp_wrk_2:SAT_DIV_oil_comp_wrk_2,SAT_DIV_oil_comp_wrk_3:SAT_DIV_oil_comp_wrk_3,SAT_DIV_oil_comp_wrk_4:SAT_DIV_oil_comp_wrk_4,SAT_DIV_oil_comp_wrk_5:SAT_DIV_oil_comp_wrk_5,SAT_DIV_oil_field_wrk_1:SAT_DIV_oil_field_wrk_1,SAT_DIV_oil_field_wrk_2:SAT_DIV_oil_field_wrk_2,SAT_DIV_oil_field_wrk_3:SAT_DIV_oil_field_wrk_3,SAT_DIV_oil_field_wrk_4:SAT_DIV_oil_field_wrk_4,SAT_DIV_oil_field_wrk_5:SAT_DIV_oil_field_wrk_5,SAT_DIV_type_wrk:SAT_DIV_type_wrk,SAT_DIV_position_min_rate:SAT_DIV_position_min_rate,SAT_DIV_position_max_rate:SAT_DIV_position_max_rate},function(data){
						    		console.log(data);
						    	},'json');
						    	break;
						    case 17:
						    	var SAT_DIV_SUP_oil_field_wrk_1 = $('input[name=SAT_DIV_SUP_oil_field_wrk_1]').val();
						    	var SAT_DIV_SUP_oil_field_wrk_2 = $('input[name=SAT_DIV_SUP_oil_field_wrk_2]').val();
						    	var SAT_DIV_SUP_oil_field_wrk_3 = $('input[name=SAT_DIV_SUP_oil_field_wrk_3]').val();
						    	var SAT_DIV_SUP_oil_field_wrk_4 = $('input[name=SAT_DIV_SUP_oil_field_wrk_4]').val();
						    	var SAT_DIV_SUP_oil_field_wrk_5 = $('input[name=SAT_DIV_SUP_oil_field_wrk_5]').val();
						    	var SAT_DIV_SUP_type_wrk = $('input[name=SAT_DIV_SUP_scope_details]').val();
						    	var SAT_DIV_SUP_position_min_rate = $('input[name=SAT_DIV_SUP_position_min_rate]').val();
						    	var SAT_DIV_SUP_position_max_rate = $('input[name=SAT_DIV_SUP_position_max_rate]').val();
						    	$.post('<?=site_url('Welcome/SAT_DIV_SUP_info')?>',{user_id:user_id,SAT_DIV_SUP_oil_field_wrk_1:SAT_DIV_SUP_oil_field_wrk_1,SAT_DIV_SUP_oil_field_wrk_2:SAT_DIV_SUP_oil_field_wrk_2,SAT_DIV_SUP_oil_field_wrk_3:SAT_DIV_SUP_oil_field_wrk_3,SAT_DIV_SUP_oil_field_wrk_4:SAT_DIV_SUP_oil_field_wrk_4,SAT_DIV_SUP_oil_field_wrk_5:SAT_DIV_SUP_oil_field_wrk_5,SAT_DIV_SUP_type_wrk:SAT_DIV_SUP_type_wrk},function(data){
						    		console.log(data);
						    	},'json');
						    	break;

						    default:
						}
                    	return form.valid();
                    };

                },
                // onStepChanged: function (event, currentIndex, priorIndex)
                // {
                //     // Suppress (skip) "Warning" step if the user is old enough.
                //     if (currentIndex === 2 && Number($("#age").val()) >= 18)
                //     {
                //         $(this).steps("next");
                //     }

                //     // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                //     if (currentIndex === 2 && priorIndex === 3)
                //     {
                //         $(this).steps("previous");
                //     }
                // },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    // form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                    // $(".loader").show();

                }
            }).validate({
                errorPlacement: function (error, element)
                {
                    element.after(error);
                },
               	/*rules: {
		                user_name: {
		                    required: true
		                },
		                user_DOB:{
		                	required:true
		                }, 
		                user_passport_no:{
		                	required:true
		                }, 
		                user_pp_issue_authority:{
		                	required:true
		                }, 
		                user_passport_validaty:{
		                	required:true
		                }, 
		                user_email:{
		                	required:true
		                }, 
		                user_company_name:{
		                	required:true
		                }, 
		                user_mobile_no:{
		                	required: true,
		                    digits: true,
		                    minlength: 12,
		                    maxlength: 13
		                },
		                user_address_pincode:{
							digits: true,
		                    minlength: 6,
		                    maxlength: 6
		                },
		                user_whatsapp_no:{
		                	required: true,
		                    digits: true,
		                    minlength: 12,
		                    maxlength: 13
		                },
		                kin_name: {
		                    required: true
		                },
		                relationship_kin: {
		                    required: true
		                },
		                kin_email: {
		                    required: true
		                },
		                kin_mobile_no:{
		                	required: true,
		                    digits: true,
		                    minlength: 12,
		                    maxlength: 13
		                },
		                medical_issue_bye: {
		                    required: true
		                },
		                medical_expiry_date: {
		                    required: true
		                }
                    },
                    message:{
                   	}*/
            });
    </script>
    <script type="text/javascript">
    	<?php 
    		$country = $user_personal_details[0]['user_pp_issue_authority'];
    		$add_country = $user_personal_details[0]['user_address_country'];
    		$add_state = $user_personal_details[0]['user_address_state'];
		    echo 'var contry_name = ' . json_encode($country) . ';';
		    echo 'var add_country = ' . json_encode($add_country) . ';';
		    echo 'var add_state = ' . json_encode($add_state) . ';';
    	?>
    	populateCountries("country");
    	populateCountries("country_add","state_add");
    	if(contry_name== '-1' ||contry_name == '') {
        	jQuery("#country").val("India").change();
        }else{ 
        	jQuery("#country").val(""+contry_name+"").change();
        }

        if(add_country== '-1' ||add_country == '') {
        	jQuery("#country_add").val("India").change();
        }else{ 
        	jQuery("#country_add").val(""+add_country+"").change();
        }

        if(add_state== '-1' ||add_state == '') {
        	jQuery("#state_add").val("Maharashtra").change();
        }else{ 
        	jQuery("#state_add").val(""+add_state+"").change();
        }
        console.log(add_state);
 
    	$(document).ready(function () {
    		$(document).on('change','.cpny_director',function(){
    			$("input[name=user_company_name]").val('')
    			var director = $(this).val();
    			switch(director){
    				case 'yes':
    					$('#company_director').removeClass();
    					$('#company_director').addClass('form-group');
    					break;
    				case 'no':
    					$('#company_director').removeClass();
    					$('#company_director').addClass('form-group hidden');
    					break;
    			}
    		});

            $(document).on('change','.division_details_data',function(){
				var division_data = $(this).val();
				$('#apply_position').empty();
				switch(division_data){
					case '1':
						$('#diving_data,#marine_data,#div_data,#div_data_1,#div_data_2,#div_data_3,#div_data_4,#div_data_5,#div_eng_data,#div_eng_data_1,#eng_data,#eng_data_1').removeClass();
						$('#diving_data').addClass('ibox float-e-margins');
						$('#marine_data').addClass('ibox float-e-margins hidden');
						$('#div_data,#div_data_1,#div_data_2,#div_data_3,#div_data_4,#div_data_5,#div_eng_data,#div_eng_data_1').addClass('col-sm-12');
						$('#eng_data,#eng_data_1').addClass('col-sm-12 hidden');
						$('#apply_position').html('<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving SME"><b> &nbsp Diving SME</b> &nbsp &nbsp'+
    						'<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving CSR"><b> &nbsp Diving CSR</b> &nbsp &nbsp'+
    						'<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving Project  Manager"><b> &nbsp Diving Project  Manager</b> &nbsp &nbsp'+
    						'<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving Operations  Manager"><b> &nbsp Diving Operations  Manager</b> &nbsp &nbsp'+
    						'<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Saturation Diving Superintendent  (IMCA DIVING SUPERVISOR)"><b> &nbsp Saturation Diving Superintendent  (IMCA DIVING SUPERVISOR)</b> &nbsp &nbsp');
						break;
					case '2':
						$('#diving_data,#marine_data,#div_data,#div_data_1,#div_data_2,#div_data_3,#div_data_4,#div_data_5,#div_eng_data,#div_eng_data_1,#eng_data,#eng_data_1').removeClass();
						$('#diving_data,#marine_data').addClass('ibox float-e-margins hidden');
						$('#eng_data,#eng_data_1,#div_eng_data,#div_eng_data_1').addClass('col-sm-12');
						$('#div_data,#div_data_1,#div_data_2,#div_data_3,#div_data_4,#div_data_5').addClass('col-sm-12 hidden');
						$('#apply_position').html('<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Subsea Installation Engg SME"><b> &nbsp Subsea Installation Engg SME</b> &nbsp &nbsp'+
							'<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Subsea Installation Engg. CSR"><b> &nbsp Subsea Installation Engg. CSR</b> &nbsp &nbsp'+
							'<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Project Engineer (Subsea : Diving & ROV Ops)"><b> &nbsp Project Engineer (Subsea : Diving & ROV Ops)</b> &nbsp &nbsp'+
							'<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Field Engineer (Subsea : Diving & ROV Ops)"><b> &nbsp Field Engineer (Subsea : Diving & ROV Ops)</b> &nbsp &nbsp');
						break;
					case '3':
						$('#diving_data,#marine_data,#div_data,#div_data_1,#div_data_2,#div_data_3,#div_data_4,#div_data_5,#div_eng_data,#div_eng_data_1,#eng_data,#eng_data_1').removeClass();
						$('#diving_data').addClass('ibox float-e-margins hidden');
						$('#marine_data').addClass('ibox float-e-margins');
						$('#eng_data,#eng_data_1,#div_eng_data,#div_eng_data_1,#div_data,#div_data_1,#div_data_2,#div_data_3,#div_data_4,#div_data_5').addClass('col-sm-12 hidden');
						$('#apply_position').html('<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Marine Master - Subsea Projects – SME"><b> &nbsp Marine Master - Subsea Projects – SME</b> &nbsp &nbsp'+
							'<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Marine Master - Subsea Projects – CSR"><b> &nbsp Marine Master - Subsea Projects – CSR</b> &nbsp &nbsp'+
							'<input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="DP 2 DSV Master - MWS Experience"><b> &nbsp DP 2 DSV Master - MWS Experience</b> &nbsp &nbsp');
						break;
				}
			});
        });

        // Datepicker Function
		$( ".datepicker" ).datepicker({
			dateFormat: "yy-mm-dd",
		    changeMonth: true,
		    changeYear: true,
      		yearRange: '1952:2030'
		});
		$( ".datepicker_expiry" ).datepicker({
			dateFormat: "yy-mm-dd",
		    changeMonth: true,
		    changeYear: true,
      		yearRange: (new Date).getFullYear()+':2030'
		});

		$('.scope_select').select2({
			placeholder: ""
		});

		$(document).on('change','.SME_scope_data',function(){
			var scope = $(this).val();
			if(scope == "Any Other Add to the List and the drop down list should reflect the same"){
				$('#other_sme_scope').removeClass();
				$('#other_sme_scope').addClass('col-sm-12');
			}else{
				$('input[name=SME_scope_details]').val(scope.toString());
			}
		});
		$(document).on('change','.CSR_scope_data',function(){
			var scope = $(this).val();
			if(scope == "Any Other Add to the List and the drop down list should reflect the same"){
				$('#other_csr_scope').removeClass();
				$('#other_csr_scope').addClass('col-sm-12');
			}else{
				$('input[name=CSR_scope_details]').val(scope.toString());
			}
		});
		$(document).on('change','.SDS_scope_data',function(){
			var scope = $(this).val();
			$('input[name=SDS_scope_details]').val(scope.toString());
		});
		$(document).on('change','.Prj_Engg_scope_data',function(){
			var scope = $(this).val();
			$('input[name=Prj_Engg_scope_details]').val(scope.toString());
		});
		$(document).on('change','.Prj_Engg_develop_install_method_data',function(){
			var scope = $(this).val();
			$('input[name=Prj_Engg_develop_install_method_details]').val(scope.toString());
		});
		$(document).on('change','.Prj_Engg_develop_mobolisation_plan_data',function(){
			var scope = $(this).val();
			$('input[name=Prj_Engg_develope_mobolisation_plan_details]').val(scope.toString());
		});
		$(document).on('change','.Prj_Engg_strength_data',function(){
			var scope = $(this).val();
			$('input[name=Prj_Engg_strength_details]').val(scope.toString());
		});
		$(document).on('change','.Prj_Engg_specification_area_data',function(){
			var scope = $(this).val();
			$('input[name=Prj_Engg_specification_area_details]').val(scope.toString());
		});
		$(document).on('change','.Prj_Engg_comfort_cycle_data',function(){
			var scope = $(this).val();
			$('input[name=Prj_Engg_comfort_cycle_details]').val(scope.toString());
		});
		$(document).on('change','.field_Engg_scope_data',function(){
			var scope = $(this).val();
			$('input[name=field_Engg_scope_details]').val(scope.toString());
		});
		$(document).on('change','.Field_Engg_develop_install_method_data',function(){
			var scope = $(this).val();
			$('input[name=Field_Engg_develop_install_method_details]').val(scope.toString());
		});
		$(document).on('change','.Field_Engg_develop_mobolisation_plan_data',function(){
			var scope = $(this).val();
			$('input[name=Field_Engg_develope_mobolisation_plan_details]').val(scope.toString());
		});
		$(document).on('change','.Field_Engg_strength_data',function(){
			var scope = $(this).val();
			$('input[name=Field_Engg_strength_details]').val(scope.toString());
		});
		$(document).on('change','.Field_Engg_specification_area_data',function(){
			var scope = $(this).val();
			$('input[name=Field_Engg_specification_area_details]').val(scope.toString());
		});
		$(document).on('change','.Field_Engg_comfort_cycle_data',function(){
			var scope = $(this).val();
			$('input[name=Field_Engg_comfort_cycle_details]').val(scope.toString());
		});
		$(document).on('change','.DP_DSP_scope_data',function(){
			var scope = $(this).val();
			$('input[name=DP_DSP_scope_details]').val(scope.toString());
		});
		$(document).on('change','.ROV_scope_data',function(){
			var scope = $(this).val();
			$('input[name=ROV_scope_details]').val(scope.toString());
		});
		$(document).on('change','.SAT_DIV_scope_data',function(){
			var scope = $(this).val();
			$('input[name=SAT_DIV_scope_details]').val(scope.toString());
		});
		$(document).on('change','.SAT_DIV_SUP_scope_data',function(){
			var scope = $(this).val();
			$('input[name=SAT_DIV_SUP_scope_details]').val(scope.toString());
		});

		var limit = 2;
		$(document).on('change','.single-checkbox', function(evt) {
		   	if($(this).siblings(':checked').length >= limit) {
		       this.checked = false;		       
		   	}else{
		   		var ischecked= $(this).is(':checked');
		   		var position = $(this).val();
		   		if(!ischecked){
		   			switch(position){
		   				case 'Diving SME':
		   					$('#in_visible_SME_data').removeClass()
		   					$('#in_visible_SME_data').addClass('row');
		   					$('#visible_SME_data').removeClass()
		   					$('#visible_SME_data').addClass('row hidden');		   					
		   					break;
		   				case 'Diving CSR':
		   					$('#in_visible_CSR_data').removeClass()
		   					$('#in_visible_CSR_data').addClass('row');
		   					$('#visible_CSR_data').removeClass()
		   					$('#visible_CSR_data').addClass('row hidden');	
		   					break;
		   				case 'Diving Project  Manager':
		   					$('#in_visible_DPM_data').removeClass()
		   					$('#in_visible_DPM_data').addClass('row');
		   					$('#visible_DPM_data').removeClass()
		   					$('#visible_DPM_data').addClass('row hidden');
		   					break;
		   				case 'Diving Operations  Manager':
		   					$('#in_visible_DOM_data').removeClass()
		   					$('#in_visible_DOM_data').addClass('row');
		   					$('#visible_DOM_data').removeClass()
		   					$('#visible_DOM_data').addClass('row hidden');
		   					break;
		   				case 'Saturation Diving Superintendent  (IMCA DIVING SUPERVISOR)':
		   					$('#in_visible_SDS_data').removeClass()
		   					$('#in_visible_SDS_data').addClass('row');
		   					$('#visible_SDS_data').removeClass()
		   					$('#visible_SDS_data').addClass('row hidden');
		   					break;
		   				case 'Subsea Installation Engg SME':
		   					$('#in_visible_SME_data').removeClass()
		   					$('#in_visible_SME_data').addClass('row');
		   					$('#visible_SME_data').removeClass()
		   					$('#visible_SME_data').addClass('row hidden');
		   					break;
		   				case 'Subsea Installation Engg. CSR':
		   					$('#in_visible_CSR_data').removeClass()
		   					$('#in_visible_CSR_data').addClass('row');
		   					$('#visible_CSR_data').removeClass()
		   					$('#visible_CSR_data').addClass('row hidden');
		   					break;
		   				case 'Project Engineer (Subsea : Diving & ROV Ops)':
		   					$('#in_visible_Prj_Engg_data').removeClass()
		   					$('#in_visible_Prj_Engg_data').addClass('row');
		   					$('#visible_Prj_Engg_data').removeClass()
		   					$('#visible_Prj_Engg_data').addClass('row hidden');
		   					break;
		   				case 'Field Engineer (Subsea : Diving & ROV Ops)':
		   					$('#in_visible_Field_Engg_data').removeClass()
		   					$('#in_visible_Field_Engg_data').addClass('row');
		   					$('#visible_Field_Engg_data').removeClass()
		   					$('#visible_Field_Engg_data').addClass('row hidden');
		   					break;
		   				case 'DP 2 DSV Master - MWS Experience':
		   					$('#in_visible_DP_DSV_data').removeClass()
		   					$('#in_visible_DP_DSV_data').addClass('row');
		   					$('#visible_DP_DSV_data').removeClass()
		   					$('#visible_DP_DSV_data').addClass('row hidden');
		   					break;
		   				// case 'Diving SME':
		   				// 	break;
		   			}
		   		}else{
		   			switch(position){
		   				case 'Diving SME':
		   					$('#in_visible_SME_data').removeClass()
		   					$('#in_visible_SME_data').addClass('row hidden');
		   					$('#visible_SME_data').removeClass()
		   					$('#visible_SME_data').addClass('row');
		   					break;
		   				case 'Diving CSR':
		   					$('#in_visible_CSR_data').removeClass()
		   					$('#in_visible_CSR_data').addClass('row hidden');
		   					$('#visible_CSR_data').removeClass()
		   					$('#visible_CSR_data').addClass('row');
		   					break;
		   				case 'Diving Project  Manager':
		   					$('#in_visible_DPM_data').removeClass()
		   					$('#in_visible_DPM_data').addClass('row hidden');
		   					$('#visible_DPM_data').removeClass()
		   					$('#visible_DPM_data').addClass('row');
		   					break;
		   				case 'Diving Operations  Manager':
		   					$('#in_visible_DOM_data').removeClass()
		   					$('#in_visible_DOM_data').addClass('row hidden');
		   					$('#visible_DOM_data').removeClass()
		   					$('#visible_DOM_data').addClass('row');
		   					break;
		   				case 'Saturation Diving Superintendent  (IMCA DIVING SUPERVISOR)':
		   					$('#in_visible_SDS_data').removeClass()
		   					$('#in_visible_SDS_data').addClass('row hidden');
		   					$('#visible_SDS_data').removeClass()
		   					$('#visible_SDS_data').addClass('row');
		   					break;
		   				case 'Subsea Installation Engg SME':
		   					$('#in_visible_SME_data').removeClass()
		   					$('#in_visible_SME_data').addClass('row hidden');
		   					$('#visible_SME_data').removeClass()
		   					$('#visible_SME_data').addClass('row');
		   					break;
		   				case 'Subsea Installation Engg. CSR':
		   					$('#in_visible_CSR_data').removeClass()
		   					$('#in_visible_CSR_data').addClass('row hidden');
		   					$('#visible_CSR_data').removeClass()
		   					$('#visible_CSR_data').addClass('row');
		   					break;
		   				case 'Project Engineer (Subsea : Diving & ROV Ops)':
		   					$('#in_visible_Prj_Engg_data').removeClass()
		   					$('#in_visible_Prj_Engg_data').addClass('row hidden');
		   					$('#visible_Prj_Engg_data').removeClass()
		   					$('#visible_Prj_Engg_data').addClass('row');
		   					break;
		   				case 'Field Engineer (Subsea : Diving & ROV Ops)':
		   					$('#in_visible_Field_Engg_data').removeClass()
		   					$('#in_visible_Field_Engg_data').addClass('row hidden');
		   					$('#visible_Field_Engg_data').removeClass()
		   					$('#visible_Field_Engg_data').addClass('row');
		   					break;
		   				case 'DP 2 DSV Master - MWS Experience':
		   					$('#in_visible_DP_DSV_data').removeClass()
		   					$('#in_visible_DP_DSV_data').addClass('row hidden');
		   					$('#visible_DP_DSV_data').removeClass()
		   					$('#visible_DP_DSV_data').addClass('row');
		   					break;
		   				// case 'Diving SME':
		   				// 	break;
		   				// case 'Diving SME':
		   				// 	break;
		   			}
		   		}
		   	}


		});

		$(document).on('change','#user_DOB',function(){
	        var date = $(this).val();
	        var today = new Date();
	        var d = new Date(date);

	        var year = today.getFullYear() - d.getFullYear();
	        var month = today.getMonth() - d.getMonth();
	        var day = today.getDate() - d.getDate();
	        var carry = 0;

	        if (year < 0)
	            return 0;
	        if (month <= 0 && day <= 0)
	            carry -= 1;

	        var age = parseInt(year);
	        age += carry;
	        $('#age_cal').val(Math.abs(age));			
		});

		$(document).on('change','.SME_datepicker',function(){
			var from_date = new Date($("input[name=SME_working_priod_start]").val());
			var to_date = new Date($("input[name=SME_working_priod_end]").val());
			if(from_date != '' && to_date != ''){
				var diff_date =  to_date - from_date;
				var years = Math.floor(diff_date/31536000000);
				var months = Math.floor((diff_date % 31536000000)/2628000000);
				var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
				$("input[name=SME_no_year]").val(years+" year(s) "+months+" month(s) "+days+" day(s)");
				// alert( years+" year(s) "+months+" month(s) "+days+" day(s)");
			}
		});

		$(document).on('change','.CSR_datepicker',function(){
			var from_date = new Date($("input[name=CSR_working_priod_start]").val());
			var to_date = new Date($("input[name=CSR_working_priod_end]").val());
			if(from_date != '' && to_date != ''){
				var diff_date =  to_date - from_date;
				var years = Math.floor(diff_date/31536000000);
				var months = Math.floor((diff_date % 31536000000)/2628000000);
				var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
				$("input[name=CSR_no_year]").val(years+" year(s) "+months+" month(s) "+days+" day(s)");
			}
		});

		$(document).on('change','.DPM_datepicker',function(){
			var from_date = new Date($("input[name=DPM_working_priod_start]").val());
			var to_date = new Date($("input[name=DPM_working_priod_end]").val());
			if(from_date != '' && to_date != ''){
				var diff_date =  to_date - from_date;
				var years = Math.floor(diff_date/31536000000);
				var months = Math.floor((diff_date % 31536000000)/2628000000);
				var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
				$("input[name=DPM_no_year]").val(years+" year(s) "+months+" month(s) "+days+" day(s)");
			}
		});

		$(document).on('change','.DOM_datepicker',function(){
			var from_date = new Date($("input[name=DOM_working_priod_start]").val());
			var to_date = new Date($("input[name=DOM_working_priod_end]").val());
			if(from_date != '' && to_date != ''){
				var diff_date =  to_date - from_date;
				var years = Math.floor(diff_date/31536000000);
				var months = Math.floor((diff_date % 31536000000)/2628000000);
				var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
				$("input[name=DOM_no_year]").val(years+" year(s) "+months+" month(s) "+days+" day(s)");
			}
		});

		$(document).on('change','.prj_datepicker',function(){
			var from_date = new Date($("input[name=Prj_Engg_working_priod_start]").val());
			var to_date = new Date($("input[name=Prj_Engg_working_priod_end]").val());
			if(from_date != '' && to_date != ''){
				var diff_date =  to_date - from_date;
				var years = Math.floor(diff_date/31536000000);
				var months = Math.floor((diff_date % 31536000000)/2628000000);
				var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
				$("input[name=Prj_Engg_no_year]").val(years+" year(s) "+months+" month(s) "+days+" day(s)");
			}
		});

		$(document).on('change','.field_datepicker',function(){
			var from_date = new Date($("input[name=Field_Engg_working_priod_start]").val());
			var to_date = new Date($("input[name=Field_Engg_working_priod_end]").val());
			if(from_date != '' && to_date != ''){
				var diff_date =  to_date - from_date;
				var years = Math.floor(diff_date/31536000000);
				var months = Math.floor((diff_date % 31536000000)/2628000000);
				var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
				$("input[name=Field_Engg_no_year]").val(years+" year(s) "+months+" month(s) "+days+" day(s)");
			}
		});

		$(document).on('change','.rov_datepicker',function(){
			var from_date = new Date($("input[name=ROV_working_priod_start]").val());
			var to_date = new Date($("input[name=ROV_working_priod_end]").val());
			if(from_date != '' && to_date != ''){
				var diff_date =  to_date - from_date;
				var years = Math.floor(diff_date/31536000000);
				var months = Math.floor((diff_date % 31536000000)/2628000000);
				var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
				$("input[name=ROV_no_year]").val(years+" year(s) "+months+" month(s) "+days+" day(s)");
			}
		});

		$(document).on('change','.lss_datepicker',function(){
			var from_date = new Date($("input[name=LSS_working_priod_start]").val());
			var to_date = new Date($("input[name=LSS_working_priod_end]").val());
			if(from_date != '' && to_date != ''){
				var diff_date =  to_date - from_date;
				var years = Math.floor(diff_date/31536000000);
				var months = Math.floor((diff_date % 31536000000)/2628000000);
				var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
				$("input[name=LSS_no_year]").val(years+" year(s) "+months+" month(s) "+days+" day(s)");
			}
		});
    </script>

</body>

</html>