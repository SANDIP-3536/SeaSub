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
		                <!-- <li class="dropdown" id="config">
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
		                </li> -->
		            </ul>
		        </nav>
        	</div>
	        <div class="wrapper wrapper-content animated fadeInRight">
	            <div class="row">
	                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
	                    <div class="ibox-content" style="border: 1px solid #e7eaec;">
	                    	<form method="post" class="form-horizontal" enctype="multipart/form-data" id="form" action="<?=site_url('Welcome/register_surve')?>">
	                            <fieldset>
	                               	<div class="row">
	                               		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
	                               			<div class="ibox float-e-margins" style="border: 2px solid #e7eaec;border-radius: 5px;">
		                                        <div class="ibox-title" style="border:none;background: #F5F5F5;">
												    <h5>gr8synergy subsea (India) Survey 001 - Indian Scenario </h5>
												    <div class="pull-right">
												    	<a href="https://gr8synergy.com/subsea/"><span class="btn btn-primary"><i class="fa fa-times"></i></span></a>
												    </div>
												</div>
												<div class="ibox-content" style="background: #f5feff;">
													<div class="row" style="padding-right: 2%;padding-left: 2%;">											 	
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden">
																<div class="form-group">
																	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																		<label></label>
							                                            <input type="text" placeholder="" name="surve_user_id" class="form-control" value="<?php echo $user_id;?>">
							                                            <input type="text" placeholder="" name="surve_type" class="form-control" value="001">
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>1)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree that with respect to the Indian Scenario (Subsea Construction Segment) - There is a need for a meaningful change, re-alignment with Best Industry Practice and adopt an integrated team approach involving all stake holders to improve Business Outcome ?</label> 
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_change_offshore_prjct" class="survy_status"> <i></i> Yes (Agree)</label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_change_offshore_prjct" class="survy_status"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="hidden" id="surve_taken">
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>2)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Should there be an age limit on Diving systems used for Offshore Commercial Diving ?</label> 
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" class="age_limit" value="Agree" name="surve_age_limit"> <i></i> Yes (Agree)</label>
							                                            	<label class="checkbox-inline"> <input type="radio" class="age_limit" value="Disagree" name="surve_age_limit"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden" id="surve_age_details">
																<div class="form-group">
																	<div class="col-lg-10 col-md-10 col-xs-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
																		<!-- <label>Please Enter the age limit on Diving systems used for Offshore Commercial Diving</label> -->
							                                            <input type="text" placeholder="Please Enter the age limit on Diving systems used for Offshore Commercial Diving" name="surve_age_details" class="form-control">
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" id="div_eng_data">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>3)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Should the Diving Systems used for Commercial Diving be designed,built and certified to a recognised Classification Society that has clear rules for the same  ?</label> 
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_comm_diving"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_comm_diving"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>4)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Should there be an age limit on Diving Support Vessel for Offshore Commercial Diving ?<br>* Both Categories Purpose Build as DP2 DSV by Class or a DP2 Vessel of Opportunity with a Modular Diving System installed.</label> 
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" class="age_limit_diving" value="Agree" name="surve_age_limit_diving"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" class="age_limit_diving" value="Disagree" name="surve_age_limit_diving"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-sm-12 hidden" id="surve_age_diving_details">
																<div class="form-group">
																	<div class="col-lg-10 col-md-10 col-xs-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
																		<!-- <label>Please Enter the age limit on Diving Support Vessel for Offshore Commercial Diving</label> -->
							                                            <input type="text" placeholder="Please Enter the age limit on Diving Support Vessel for Offshore Commercial Diving" name="surve_age_diving_details" class="form-control">
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>5)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree DP2 Vessel's designed,built and certified by a recognised Classification Society with a Class Notation "DP (2/3) DSV" are better equipped to handle subsea construction involving diving intevention as compared to a DP2 Vessel of opportunity with a modular diving system installed on it ?</label> 
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_diving_support_vessel"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_diving_support_vessel"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>6)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree that Dynamically Positioned Construction Barges are more effective schedule wise and reduce risk to subsea assets when working in close proximity of Offshore Complex ?</label> 
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_dynamic_position"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_dynamic_position"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>7)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree inconsistent pay scale and delayes salary disbursement is an issue that plagues Indian Diving Industry and negatively impacts the outcome of Subsea Construction Projects?<br>Is it a  DEMOTIVATING FACTOR for Divers and other workforce?</label> 
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_incosistent_pay_scale"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_incosistent_pay_scale"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>8)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Bearing in mind Point No.7. <br>
																		Would you agree that there should be standardisation of rates and a Contractual mechanism built in Oil and Gas Subsea Construction project involving Divers to safeguards Divers (and other professionals) salaries. </label> 
					                                            	</div>
					                                            	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
					                                            		<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_bearing_mind"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_bearing_mind"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>9)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree that Divers Pay should should be secured and not be linked back to back payment from Client based on Project Milestones ?<br>
																Diver's work to the best of their ability in the harshest of the environment to ensure the Nation's subsea infrastructure for Oil and Gas production is operational 24x7 (365 days) , however due to many other reasons as mentioned below Subsea Construction Projects are derailed and the majority of the financial brunt is borne by the Divers / offshore professionals.</label> 
					                                            	</div>
					                                            	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
					                                            		<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_diver_pay"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_diver_pay"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>					                                        
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>10)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree  that Independent INDIAN Professionals having => 3 decades of experience in Offshore Diving and Marine Operations backed with credible experience of major Subsea Construction Projects with global Oil and Gas Operators should be involved in defining the SOW and Diving Contractor evaluation ?<br>
																* Indian National's would be more intune with LOCAL challenges and would be more likely to take ownership in Process Improvement.</label> 
					                                            	</div>
					                                            	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_indian_nationality"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_indian_nationality"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>	
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1" style="padding-top: 1%;">
																		<label>11)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8" style="padding-top: 1%;">
																		<label>Would you agree that Oil and Gas Operators should employ Subject Matter Experts (as described in item 9)?</label>
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_employ_sub_mater"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_employ_sub_mater"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>		
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>12)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Saturation Diving Operations.<br>Would you agree that  a Hyperbaric Reception Facility should be set up , manned and operational at all times when Saturation Diving Operations are being undertaken in an oil field in line with IMCA Guidance / OGP recommendations ?</label> 
					                                            	</div>
					                                            	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;" >
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_SDO_IMCA_OGP"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_SDO_IMCA_OGP"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>	
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>13)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree having National Regulations for Offshore / Commercial Diving will benefit the Indian Diving Industry and establish a STANDARD for planning and executing safe Diving Operations ?</label> 
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"><input type="radio" value="Agree" name="surve_national_regulation" > <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"><input type="radio" value="Disagree" name="surve_national_regulation" > <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group"><div class="col-sm-1 col-lg-1 col-md-1 col-xs-1" style="padding-top: 1%;">
																		<label>14)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8" style="padding-top: 1%;">
																		<label>Would you agree that the UK ACoP for Commerial Diving  would be better suited for INDIA ?</label>
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_UK_ACoP"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_UK_ACoP"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>	
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group"><div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>15)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Indian Engineers are valuable asset in some of the Leading International Subsea Engieering Companies, however in INDIA they start off with handicap wrt to resources, time available for robust engineering evaluation, planning, multi tasking and severe time constraints as such they are constantly fire-fighting when the Project is in execution phase and thus struggle to achieve the desired Project outcomes.<br>
																		Would you agree the statement to be generally correct in most cases ?</label>
																	</div>
																	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_lead_subsea_engg"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_lead_subsea_engg"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>	
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>16)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree that all of the above factors when effectively managed <br>
																		a) would positively affect the safety,  offshore working conditions,  individual health, your psychological well-being & happiness.<br>
																		b) It is likely to improve the  performance of Professional involved in Subsea Construction Projects by reducing the stress whilst you undertake a highly risky Operations at sea. <br>
																		AND<br>
																		c) Therefore more than LIKELY to improve the overall Project Outcome ?</label> 
					                                            	</div>
					                                            	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_agree_factor"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_agree_factor"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>17)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree that ROV intervention should be evaluated as the first Option for subsea intervetion, to mimise the risk to Divers ? <br>
																		Every Dive Spread should have ROV intervention capability to assist the Divers during subsea installation and in an emergency scenario ?</label> 
					                                            	</div>
					                                            	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_rov_intervention"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_rov_intervention"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>18)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree Logistics and Operations Management has a significanat commercial impact on Offshore operations and therefore requires detailed advanced planning ?</label> 
					                                            	</div>
					                                            	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_log_opr_mgnt"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_log_opr_mgnt"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>	
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
																		<label>19)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
																		<label>Would you agree that this survey questionnaire is  "UNBIASED"  with the clear objective to identify the challenges and  areas of improvement for the  Indian Diving Industry that will improve the overall standard of Diving Operations in India and will positively impact business outcomes for all parties involved in Oil and Gas Subsea Projects ?</label> 
					                                            	</div>
					                                            	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_questionnaire"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_questionnaire"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
																</div>
					                                        </div>	
					                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1" style="padding-top: 2%;">
																		<label>20)</label> 
					                                            	</div>
																	<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8" style="padding-top: 2%;">
																		<label>Would you share this Survey Questionnaire with you colleagues ?</label> 
					                                            	</div>
					                                            	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3" style="text-align: right;">
						                                            	<div class="radio i-checks">
							                                            	<label class="checkbox-inline"> <input type="radio" value="Agree" name="surve_share_survy_quest"> <i></i> Yes (Agree) </label>
							                                            	<label class="checkbox-inline"> <input type="radio" value="Disagree" name="surve_share_survy_quest"> <i></i>Disagree </label>
							                                            </div>
							                                        </div>
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

        // Datepicker Function
        $(document).on('change','.age_limit',function(){			
			var age = $(this).val();
			switch(age){
				case 'Agree':
					$('#surve_age_details').removeClass();
					$('#surve_age_details').addClass('col-sm-12');
					break;
				case 'Disagree':
					$('#surve_age_details').removeClass();
					$('#surve_age_details').addClass('col-sm-12 hidden');
					break;
			}
		});

		$(document).on('change','.age_limit_diving',function(){			
			var age = $(this).val();
			switch(age){
				case 'Agree':
					$('#surve_age_diving_details').removeClass();
					$('#surve_age_diving_details').addClass('col-sm-12');
					break;
				case 'Disagree':
					$('#surve_age_diving_details').removeClass();
					$('#surve_age_diving_details').addClass('col-sm-12 hidden');
					break;
			}
		});

		$(document).on('change','.survy_status',function(){
			$("input[name=surve_age_limit]").attr("checked", false);
			$("input[name=surve_age_details]").val('');
			$("input[name=surve_comm_diving]").attr("checked", false);
			$("input[name=surve_age_limit_diving]").attr("checked", false);
			$("input[name=surve_age_diving_details]").val('');
			$("input[name=surve_diving_support_vessel]").attr("checked", false);
			$("input[name=surve_dynamic_position]").attr("checked", false);
			$("input[name=surve_incosistent_pay_scale]").attr("checked", false);
			$("input[name=surve_bearing_mind]").attr("checked", false);
			$("input[name=surve_diver_pay]").attr("checked", false);
			$("input[name=surve_indian_nationality]").attr("checked", false);
			$("input[name=surve_employ_sub_mater]").attr("checked", false);
			$("input[name=surve_SDO_IMCA_OGP]").attr("checked", false);
			$("input[name=surve_national_regulation]").attr("checked", false);
			$("input[name=surve_UK_ACoP]").attr("checked", false);
			$("input[name=surve_lead_subsea_engg]").attr("checked", false);
			$("input[name=surve_agree_factor]").attr("checked", false);
			$("input[name=surve_rov_intervention]").attr("checked", false);
			$("input[name=surve_log_opr_mgnt]").attr("checked", false);
			$("input[name=surve_questionnaire]").attr("checked", false);
			$("input[name=surve_share_survy_quest]").attr("checked", false);
			var status = $(this).val();
			switch(status){
				case 'Agree':
					$('#surve_taken').removeClass();
					$('#surve_taken').addClass('');
					break;
				case 'Disagree':
					$('#surve_taken').removeClass();
					$('#surve_taken').addClass('hidden');
					break;
			}
		});

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


	    $(document).ready(function(){       	
	   		$('#reset_pwd').validate({
                rules:{
                    user_password:{
                        required:true,
                        minlength: 8,
	                    maxlength: 15
                    },
                    confrm_pwd:{
                        required:true,
                        equalTo:"#password"
                    }
                },
                message:{
                }
            });
	    });

		
    </script>

		
    </script>

</body>

</html>