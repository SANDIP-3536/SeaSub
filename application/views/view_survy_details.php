<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" type="image/png" href="https://gr8synergy.com/subsea/wp-content/uploads/2018/09/gr8-Synergy_Logo-Name-1.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Subsea | View Survy Details</title>

    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="<?=base_url()?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <style type="text/css">
    	#page-wrapper{
    		margin: 0px !important;
    		background-color: #fff;
    	}
    	.ibox{
    		margin-bottom: 0px;
    	}
    	.ibox-title{
    		border-width: 0px 0px 0;
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
		                <!-- <li>
		                	<a href="https://gr8synergy.com/subsea/"> Home</a>
		                </li> -->
		                <li class="">
		                	<a href="<?=site_url('Welcome/user_admin_details')?>"> User Details</a>
		                </li>
		                <li class="">
		                	<a href="<?=site_url('Welcome/surve_admin_details')?>"> Consolated Survey Details</a>
		                </li>
		                <?php if ($admin_details[0]['user_type']==2) { ?>
		                <li class="">
                            <a href="<?=site_url('Welcome/contact_us')?>"> Contact US</a>
                        </li>
                        <?php } ?>
		                <li class="dropdown" id="config">
                            <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <span style="color:#428bca;"><b><?=$admin_details[0]['user_firstname']?></b></span> <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="<?=site_url('Welcome/user_logout')?>"> Logout</a></li>
                                <li><a href="<?=site_url('Welcome/reset_password')?>"> Reset Password</a></li>
                            </ul>
                        </li>
		               <!--  <li>
		                	<a href="https://gr8synergy.com/subsea/account/"> Account</a>
		                </li>
		                <li>
		                	<a href="https://gr8synergy.com/subsea/login/"> Login</a>
		                </li>
		                -->
		            </ul>
		        </nav>
        	</div>
	        <div class="wrapper wrapper-content animated fadeInRight">
	            <div class="row">
	                <div class="col-lg-12">
		                <div class="ibox float-e-margins">
		                    <div class="ibox-title">
		                        <h5> User Survey Details</h5>
		                     </div>
		                </div>		                
                        <div class="ibox-content">
		                    <div class="panel blank-panel">
		                        <div class="panel-heading">
		                            <div class="panel-options">
		                                <ul class="nav nav-tabs">
		                                    <li class="active"><a data-toggle="tab" href="#survy-002">Survey - 001</a></li>
		                                    <!-- <li class=""><a data-toggle="tab" href="#survy-002">Survy - 002</a></li> -->
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="panel-body">
		                            <div class="tab-content">
		                                <div id="survy-002" class="tab-pane active">
		                                    <div class="table-responsive">
				                                <table class="table table-striped table-bordered table-hover dataTables-example">
				                                    <thead>
				                                        <tr>
				                                            <th>Que No.</th>
											                <th>Question</th>
											                <th>Agree</th>
											                <th>Disagree</th>
											                <th>Did not Answer</th>
				                                        </tr>
				                                    </thead>
				                                    <tbody>
				                                    	<tr>
							                                <td>1</td>
							                                <td>Would you agree that with respect to the Indian Scenario (Subsea Construction Segment) - There is a need for a meaningful change, re-alignment with Best Industry Practice and adopt an integrated team approach involving all stake holders to improve Business Outcome ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_change_offshore_prjct','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_change_offshore_prjct','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_change_offshore_prjct','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>2</td>
							                                <td>Should there be an age limit on Diving systems used for Offshore Commercial Diving ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_age_limit','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_age_limit','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_age_limit','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>3</td>
							                                <td>Should the Diving Systems used for Commercial Diving be designed,built and certified to a recognised Classification Society that has clear rules for the same  ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_comm_diving','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_comm_diving','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_comm_diving','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>4</td>
							                                <td>Should there be an age limit on Diving Support Vessel for Offshore Commercial Diving ?<br>* Both Categories Purpose Build as DP2 DSV by Class or a DP2 Vessel of Opportunity with a Modular Diving System installed.</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_age_limit_diving','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_age_limit_diving','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_age_limit_diving','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>5</td>
							                                <td>Would you agree DP2 Vessel's designed,built and certified by a recognised Classification Society with a Class Notation "DP (2/3) DSV" are better equipped to handle subsea construction involving diving intevention as compared to a DP2 Vessel of opportunity with a modular diving system installed on it ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_diving_support_vessel','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_diving_support_vessel','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_diving_support_vessel','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>6</td>
							                                <td>Would you agree that Dynamically Positioned Construction Barges are more effective schedule wise and reduce risk to subsea assets when working in close proximity of Offshore Complex ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_dynamic_position','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_dynamic_position','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_dynamic_position','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>7</td>
							                                <td>Would you agree inconsistent pay scale and delayes salary disbursement is an issue that plagues Indian Diving Industry and negatively impacts the outcome of Subsea Construction Projects?<br>Is it a  DEMOTIVATING FACTOR for Divers and other workforce?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_incosistent_pay_scale','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_incosistent_pay_scale','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_incosistent_pay_scale','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>8</td>
							                                <td>Bearing in mind Point No.7. <br>
															Would you agree that there should be standardisation of rates and a Contractual mechanism built in Oil and Gas Subsea Construction project involving Divers to safeguards Divers (and other professionals) salaries.</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_bearing_mind','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_bearing_mind','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_bearing_mind','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>9</td>
							                                <td>Would you agree that Divers Pay should should be secured and not be linked back to back payment from Client based on Project Milestones ?<br>
															Diver's work to the best of their ability in the harshest of the environment to ensure the Nation's subsea infrastructure for Oil and Gas production is operational 24x7 (365 days) , however due to many other reasons as mentioned below Subsea Construction Projects are derailed and the majority of the financial brunt is borne by the Divers / offshore professionals.</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_diver_pay','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_diver_pay','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_diver_pay','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>10</td>
							                                <td>Would you agree  that Independent INDIAN Professionals having => 3 decades of experience in Offshore Diving and Marine Operations backed with credible experience of major Subsea Construction Projects with global Oil and Gas Operators should be involved in defining the SOW and Diving Contractor evaluation ?<br>
															* Indian National's would be more intune with LOCAL challenges and would be more likely to take ownership in Process Improvement.</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_indian_nationality','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_indian_nationality','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_indian_nationality','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>11</td>
							                                <td>Would you agree that Oil and Gas Operators should employ Subject Matter Experts (as described in item 9)?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_employ_sub_mater','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_employ_sub_mater','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_employ_sub_mater','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>12</td>
							                                <td>Saturation Diving Operations.<br>Would you agree that  a Hyperbaric Reception Facility should be set up , manned and operational at all times when Saturation Diving Operations are being undertaken in an oil field in line with IMCA Guidance / OGP recommendations ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_SDO_IMCA_OGP','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_SDO_IMCA_OGP','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_SDO_IMCA_OGP','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>13</td>
							                                <td>Would you agree having National Regulations for Offshore / Commercial Diving will benefit the Indian Diving Industry and establish a STANDARD for planning and executing safe Diving Operations ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_national_regulation','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_national_regulation','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_national_regulation','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>14</td>
							                                <td>Would you agree that the UK ACoP for Commerial Diving  would be better suited for INDIA ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_UK_ACoP','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_UK_ACoP','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_UK_ACoP','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>15</td>
							                                <td>Indian Engineers are valuable asset in some of the Leading International Subsea Engieering Companies, however in INDIA they start off with handicap wrt to resources, time available for robust engineering evaluation, planning, multi tasking and severe time constraints as such they are constantly fire-fighting when the Project is in execution phase and thus struggle to achieve the desired Project outcomes.<br>
																		Would you agree the statement to be generally correct in most cases ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_lead_subsea_engg','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_lead_subsea_engg','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_lead_subsea_engg','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>16</td>
							                                <td>Would you agree that all of the above factors when effectively managed <br>
															a) would positively affect the safety,  offshore working conditions,  individual health, your psychological well-being & happiness.<br>
															b) It is likely to improve the  performance of Professional involved in Subsea Construction Projects by reducing the stress whilst you undertake a highly risky Operations at sea. <br>
															AND<br>
															c) Therefore more than LIKELY to improve the overall Project Outcome ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_agree_factor','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_agree_factor','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_agree_factor','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>17</td>
							                                <td>Would you agree that ROV intervention should be evaluated as the first Option for subsea intervetion, to mimise the risk to Divers ? <br>
															Every Dive Spread should have ROV intervention capability to assist the Divers during subsea installation and in an emergency scenario ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_rov_intervention','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_rov_intervention','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_rov_intervention','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>18</td>
							                                <td>Would you agree Logistics and Operations Management has a significanat commercial impact on Offshore operations and therefore requires detailed advanced planning ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_log_opr_mgnt','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_log_opr_mgnt','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_log_opr_mgnt','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>19</td>
							                                <td>Would you agree that this survey questionnaire is  "UNBIASED"  with the clear objective to identify the challenges and  areas of improvement for the  Indian Diving Industry that will improve the overall standard of Diving Operations in India and will positively impact business outcomes for all parties involved in Oil and Gas Subsea Projects ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_questionnaire','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_questionnaire','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_questionnaire','') ;?></td>
							                            </tr>
							                            <tr>
							                                <td>20</td>
							                                <td>Would you share this Survey Questionnaire with you colleagues ?</td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_share_survy_quest','Agree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_count_details('001','surve_share_survy_quest','Disagree') ;?></td>
							                                <td><?php $CI =& get_instance();echo $CI->surve_NA_count_details('001','surve_share_survy_quest','') ;?></td>
							                            </tr>							     
				                                    </tbody>
				                                </table>
				                            </div>
		                                </div>
		                                <div id="survy-002" class="tab-pane">
		                                    <div class="table-responsive">
				                                <!-- <table class="table table-striped table-bordered table-hover dataTables-example">
				                                    <thead>
				                                        <tr>
				                                            <th>Que No.</th>
											                <th>Question</th>
											                <th>Agree</th>
											                <th>Disagree</th>
											                <th>Not Applicable</th>
				                                        </tr>
				                                    </thead>
				                                    <tbody>
				                                    	
				                                    </tbody> -->
				                                </table>
				                            </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
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

    <!-- Data Tables -->
    <script src="<?=base_url()?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Steps -->
    <script src="<?=base_url()?>assets/js/plugins/staps/jquery.steps.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Jquery Validate -->
    <script src="<?=base_url()?>assets/js/plugins/validate/jquery.validate.min.js"></script>
     <script src="<?=base_url()?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>

    <script type="text/javascript">
    	$(document).ready(function() {
            $('.dataTables-example').dataTable({
                // responsive: true,
                 "pageLength": 50,
                dom: 'Bfrtip',
                buttons: [
			        'copy', 'excel', 'pdf', 'csv'
			    ]
                
            });

            <?php if(isset($flash['active']) && $flash['active'] == 1){ ?>
                swal({
                    title: "<?=$flash['title']?>",
                    text: "<?=$flash['text']?>",
                    type: "<?=$flash['type']?>",
                });
            <?php } ?>

            $('#viewSurvyDetails').on('show.bs.modal', function(e) {
                var surve_user_id = e.relatedTarget.id;
                $.post('<?=site_url('Welcome/user_survy_details')?>',{surve_user_id:surve_user_id},function(data){
                	console.log(data);
                	$('.quest_1').text(data[0].surve_age_limit);
                	$('.quest_2').text(data[0].surve_comm_diving);
                	$('.quest_3').text(data[0].surve_age_limit_diving);
                	$('.quest_4').text(data[0].surve_diving_support_vessel);
                	$('.quest_5').text(data[0].surve_incosistent_pay_scale);
                	$('.quest_6').text(data[0].surve_diver_pay);
                	$('.quest_7').text(data[0].surve_RERA_act);
                	$('.quest_8').text(data[0].surve_agree_factor);
                	$('.quest_9').text(data[0].surve_indian_nationality);
                	$('.quest_10').text(data[0].surve_SDO_IMCA_OGP);
                	$('.quest_11').text(data[0].surve_national_regulation);
                	$('.quest_12').text(data[0].surve_UK_ACoP);
                	$('.quest_13').text(data[0].surve_questionnaire);
                	// $('#view_DOB').text(data[0].user_DOB);
                	// $('#view_pass').text(data[0].user_passport_no);
                	// $('#view_issue_authority').text(data[0].user_pp_issue_authority);
                	// $('#view_pass_validity').text(data[0].user_passport_validaty);
                	// $('#view_mobile_no').text(data[0].user_mobile_no);
                	// $('#view_whatsapp_no').text(data[0].user_whatsapp_no);
                	// $('#view_director').text(data[0].user_company_director);
                	// $('#view_company').text(data[0].user_company_name);
                	// $('#view_kin_name').text(data[0].kin_name);
                	// $('#view_kin_relationship').text(data[0].kin_relationship);
                	// $('#view_kin_email').text(data[0].kin_email);
                	// $('#view_kin_mobile').text(data[0].kin_mobile_no);
                },'json');
            });
        });
    </script>
    
</body>

</html>
