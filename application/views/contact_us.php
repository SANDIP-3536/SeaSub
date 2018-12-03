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
    <link href="<?=base_url()?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
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
                         <?php if ($admin_details[0]['user_type']==1) { ?>
                         <li class="">
                            <a href="<?=site_url('Welcome/user_admin_details')?>"> User Details</a>
                        </li>
                        <li class="">
                            <a href="<?=site_url('Welcome/survy_admin_details')?>"> Consolated Survey Details</a>
                        </li>
		                <li class="dropdown" id="config">
                            <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <span style="color:#428bca;"><b><?=$admin_details[0]['user_firstname']?></b></span> <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <?php }if ($admin_details[0]['user_type']==2) { ?>
                                    <li><a href="<?=site_url('Welcome/contact_us')?>"> Contact Us</a></li>
                                <?php } ?>
                                <li><a href="<?=site_url('Welcome/reset_password')?>"> Reset Password</a></li>
                                <li><a href="<?=site_url('Welcome/user_logout')?>"> Logout</a></li>
                            </ul>
                        </li>
		            </ul>
		        </nav>
        	</div>
	        <div class="wrapper wrapper-content animated fadeInRight">
	            <div class="row">
	                <div class="col-lg-10 col-lg-offset-1">
	                    <div class="ibox-content" style="border: none;">
	                    	<form method="post" class="form-horizontal" enctype="multipart/form-data" id="contact_us" action="<?=site_url('Welcome/register_contact')?>">
	                            <fieldset>
	                               	<div class="row">
	                               		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>Contact US</h5>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">											 	
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
																<div class="form-group hidden">
																	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																		<label></label>
							                                            <input type="text" placeholder="" name="contact_user_id" class="form-control" value="<?=$admin_details[0]['user_id']?>">
							                                        </div>
																</div>
																<div class="form-group hidden">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                                                        <label></label>
                                                                        <input type="text" placeholder="Please enter Contact number." name="user_name" class="form-control" value="<?=$admin_details[0]['user_firstname']?> <?=$admin_details[0]['user_lastname']?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group hidden">
																	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																		<label></label>
							                                            <input type="text" placeholder="Please enter Contact number." name="contact_mobile_number" class="form-control" value="<?=$admin_details[0]['user_mobile_no']?>">
							                                        </div>
																</div>
																<div class="form-group hidden">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                                                        <label></label>
                                                                        <input type="text" placeholder="Please enter Email ID." name="contact_email_id" class="form-control" value="<?=$admin_details[0]['user_email']?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
																	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																		<label>Subject</label>
							                                            <input type="text" placeholder="Please enter title." name="contact_title" class="form-control">
							                                        </div>
																</div>
																<div class="form-group">
																	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																		<label>Message (200 Words)</label>
							                                            <textarea name="contact_msg" class="form-control"></textarea>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<center><button class="btn btn-primary" type="submit">Submit</button></center>
																</div>
					                                        </div>					                                        
					                                    </div>
				                                    </div>
				                                </div>
				                            </div>
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

    <!-- Jquery Validate -->
    <script src="<?=base_url()?>assets/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>

    <script type="text/javascript">
       $(document).ready(function(){  

             <?php if(isset($flash['active']) && $flash['active'] == 1){ ?>
                swal({
                    title: "<?=$flash['title']?>",
                    text: "<?=$flash['text']?>",
                    type: "<?=$flash['type']?>",
                });
            <?php } ?>     	
       		$('#contact_us').validate({
                rules:{
                    contact_title:{
                        required:true,
                    },
                    contact_msg:{
                        required:true,
                    }
                },
                message:{
                }
            });
       });

		
    </script>

</body>

</html>