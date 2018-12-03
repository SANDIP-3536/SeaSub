<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/png" href="https://gr8synergy.com/subsea/wp-content/uploads/2018/09/gr8-Synergy_Logo-Name-1.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Subsea | Register</title>

    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style type="text/css">
        .form-control{
            border-radius: 5px !important;
        }
        .loginscreen.middle-box{
            /*width: 450px !important;*/
        }
        .middle-box{
            height: 650px !important;
        }
        label.error{
            font-size: smaller;
            margin-bottom:0px;
        }

    </style>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown" style=" background: #ffffff;padding: 20px;border-radius: 20px;border: 1px solid #000;box-shadow: 3px 2px;margin-top: -332px !important;">
        <div>
            <img src="https://gr8synergy.com/subsea/wp-content/uploads/2018/11/Logo-New-Tagline-004.png" style="padding-bottom: 0px;height:10%;width:42%;">
            <form method="post" class="m-t" role="form" id="registerUser" action="<?=site_url('Welcome/register_user_details')?>" style="text-align: left !important;">
                <div class="form-group">
                    <input type="text" class="form-control" name="user_firstname" placeholder="First Name" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="user_lastname" placeholder="Last Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="user_email" placeholder="Email ID (Username)" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="user_mobile_no" placeholder="Country code followed by mobile number." required="">
                </div>
                <!-- <div class="form-group">
                    <div class="input-group m-b">
                        <span class="input-group-addon"><i class="fa fa fa-birthday-cake"></i></span> 
                        <input type="text" placeholder="Date Of Birth" name="user_DOB" class="form-control datepicker">
                    </div>
                </div> -->
                <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="padding-left: 0px !important;">    
                    <div class="form-group">
                        <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4" style="padding-top: 3% !important;">
                            <label>Nationality</label>
                        </div>
                        <div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
                            <div class="radio i-checks">
                                <label class="checkbox-inline"> <input type="radio" value="Indian" name="user_nationality" class="nationality"> Indian </label>
                                <label class="checkbox-inline"> <input type="radio" value="other" name="user_nationality" class="nationality"> Other</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group hidden" id="other_nationality">
                    <input type="text" class="form-control" name="user_other_nationality" placeholder="Please Enter your Nationality." required="">
                </div>
                <!-- <div class="form-group">
                    <div class="col-sm-12">
                        <div class="radio i-checks">
                            <label class="checkbox-inline"> <input type="radio" value="1" name="user_division" class="division_details_data" checked=""> Diving </label>
                            <label class="checkbox-inline"> <input type="radio" value="2" name="user_division" class="division_details_data"> Subsea Inst. Engg. </label>
                            <label class="checkbox-inline"> <input type="radio" value="3" name="user_division" class="division_details_data"> Marine </label>
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                    <select name="user_division" class="form-control" id="division_details">
                        <option value="">Select Division</option>
                        <option value="Oil and Gas Commercial Diving (IMCA Certified)">Oil and Gas Commercial Diving (IMCA Certified)</option>
                        <option value="Marine Ops (DP2 DSV)">Marine Ops (DP2 DSV)</option>
                        <option value="ROV Ops (IMCA Certified)">ROV Ops (IMCA Certified)</option>
                        <option value="Engineering (Subsea)">Engineering (Subsea)</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="user_apply_position" class="form-control" id="position_data">
                        
                    </select>
                </div>
                <!--<div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="padding-left: 0px !important;">    -->
                <!--    <div class="form-group">-->
                <!--        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">-->
                <!--            <div class="radio i-checks">-->
                <!--                <label class="checkbox-inline"> <input type="checkbox" name="agree_status" class="" > I have read and understood the <a href="https://gr8synergy.com/subsea/gr8synergy-subsea-privacy-policy/" target="_blank">Terms & Conditions</a> of this wesites.</a> </label>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="padding: 0px !important;">    
                    <div class="form-group">
                        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" style="padding:0px;">
                            <div class="radio i-checks">
                                <label class="checkbox-inline"> <input type="checkbox" name="agree_status" class="" > I would like to receive the email notification & communication from this website. See our <a href="https://gr8synergy.com/subsea/gr8synergy-subsea-privacy-policy/" target="_blank">Privacy Policy</a>.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <textarea class="form-control" name="user_msg" rows="4">Any Message..</textarea>
                </div> -->
                <!-- <div class="form-group"  id="apply_position">
                    <input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving SME"><b> &nbsp Diving SME</b> &nbsp &nbsp
                    <input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving CSR"><b> &nbsp Diving CSR</b> &nbsp &nbsp
                    <input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving Project  Manager"><b> &nbsp Diving Project  Manager</b> &nbsp &nbsp
                    <input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Diving Operations  Manager"><b> &nbsp Diving Operations  Manager</b> &nbsp &nbsp
                    <input class="single-checkbox" type="checkbox" name="user_apply_position[]" value="Saturation Diving Superintendent  (IMCA DIVING SUPERVISOR)"><b> &nbsp Saturation Diving Superintendent (IMCA DIVING SUPERVISOR)</b> &nbsp &nbsp
                </div> -->
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <!-- <a href="#"><small>Forgot password?</small></a> -->
                <!-- <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="<?=site_url('Welcome')?>">Login</a> -->
            </form>
            <!-- <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p> -->
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

        $( ".datepicker" ).datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            yearRange: '1952:2030'
        });

        $(document).ready(function(){  

            <?php if(isset($flash['active']) && $flash['active'] == 12) {?>
                swal({
                    title: "<?=$flash['title']?>",
                    text: "<?=$flash['text']?>",
                    type: "<?=$flash['type']?>",
                    showCancelButton: true,
                    confirmButtonColor: '#81ccee',
                    confirmButtonText: 'Yes',
                    cancelButtonText: "Later",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm){
                        window.location.href = '<?php  echo site_url('Welcome/subsea_surve'); ?>';
                    }else{
                        swal({
                            title: "Thank You.",
                            text: "Thank you for registering with gr8synergy subsea (India) an email has been sent to your registered account.",
                            type: "success",
                            confirmButtonColor: '#81ccee',
                            confirmButtonText: 'Ok',
                        },
                        function(isConfirm){
                            if (isConfirm){
                                window.location.href = 'https://gr8synergy.com/subsea/';
                            }               
                        });
                    }                
                });
            <?php }if(isset($flash['active']) && $flash['active'] == 1){ ?>
                swal({
                    title: "<?=$flash['title']?>",
                    text: "<?=$flash['text']?>",
                    type: "<?=$flash['type']?>",
                    confirmButtonColor: '#81ccee',
                    confirmButtonText: 'Ok',
                },
                 function(isConfirm){
                    if (isConfirm){
                        window.location.href = 'https://gr8synergy.com/subsea/';
                    }               
                });
            <?php } ?>

            $(document).on('change','#division_details',function(){
                $('#position_data').empty();
                var division = $(this).val();
                switch(division){
                    case 'Oil and Gas Commercial Diving (IMCA Certified)':
                        $('#position_data').append('<option value=""> Select Position</option><option value="Diving Contractor (IMCA Member)">Diving Contractor (IMCA Member)</option><option value="Diving SME (Subject Matter Expert)">Diving SME (Subject Matter Expert)</option><option value="Diving Project Manager (Sat Diving Ops)">Diving Project Manager (Sat Diving Ops)</option><option value="Diving Operations Manager (Sat Diving Ops)">Diving Operations Manager (Sat Diving Ops)</option><option value="Diving CSR (Client Site Representative - Sat Diving Ops)">Diving CSR (Client Site Representative - Sat Diving Ops)</option><option value="Diving Suptd (Sat Diving Ops)">Diving Suptd (Sat Diving Ops)</option><option value="Diving Supervisor (Sat Diving Ops)">Diving Supervisor (Sat Diving Ops)</option><option value="Life Support Supervisor">Life Support Supervisor</option><option value="Saturation Diver (NDT)">Saturation Diver (NDT)</option><option value="Saturation Diver (Const)">Saturation Diver (Const)</option><option value="Mechanical Technicial (Sat Dive Systems)">Mechanical Technicial (Sat Dive Systems)</option><option value="Electrical Technician (Sat Dive Systems)">Electrical Technician (Sat Dive Systems)</option>');
                        break;

                    case 'Marine Ops (DP2 DSV)':
                        $('#position_data').append('<option value="">Select Position</option><option value="Marine Contractor (IMCA Member)">Marine Contractor (IMCA Member)</option><option value="Master (MWS Experience)">Master (MWS Experience)</option><option value="Master (DP2 DSV)">Master (DP2 DSV)</option><option value="Senior DPO (DP2 DSV)">Senior DPO (DP2 DSV)</option><option value="DPO (DP2 DSV)">DPO (DP2 DSV)</option>');
                        break;

                    case 'ROV Ops (IMCA Certified)':
                        $('#position_data').append('<option value="">Select Position</option><option value="ROV Contractor (IMCA Member)">ROV Contractor (IMCA Member)</option><option value="ROV SME (Subject Matter Expert)">ROV SME (Subject Matter Expert)</option><option value="ROV Project Manager">ROV Project Manager</option><option value="ROV Operations Manager">ROV Operations Manager</option><option value="ROV CSR (Client Site Representative)">ROV CSR (Client Site Representative)</option><option value="ROV Supervisor (WROV)">ROV Supervisor (WROV)</option><option value="ROV Pilot (WROV)">ROV Pilot (WROV)</option><option value="ROV Engineer (WROV)">ROV Engineer (WROV)</option>');
                        break;

                    case 'Engineering (Subsea)':
                        $('#position_data').append('<option value="">Select Position</option><option value="Engineering Contractor (Subsea Experience)">Engineering Contractor (Subsea Experience)</option><option value="Construction Manager (Subsea Installation)">Construction Manager (Subsea Installation)</option><option value="Subsea Engineering SME (Subject Matter Expert)">Subsea Engineering SME (Subject Matter Expert)</option><option value="Subsea Engineering Manager">Subsea Engineering Manager</option><option value="Project Engineer (Subsea Installation)">Project Engineer (Subsea Installation)</option><option value="Field Engineer (Subsea Installation)">Field Engineer (Subsea Installation)</option>');
                        break;
                }

            })
        
            $('#registerUser').validate({
                rules:{
                    user_name:{
                        required:true
                    },
                    user_firstname:{
                        required:true
                    },
                    user_lastname:{
                        required:true
                    },
                    user_email:{
                        required:true
                    },
                    user_password:{
                        required:true
                    },
                    'user_apply_position[]':{
                        required:true
                    },
                    CSR_division:{
                        required:true
                    },
                    agree_status:{
                        required:true
                    },
                    user_other_nationality:{
                        required:true
                    },
                    user_mobile_no:{
                        required: true,
	                    digits: true,
	                    minlength: 12,
	                    maxlength: 13
                    }
                },
                message:{
                    user_mobile_no:{
	                    minlength: "Country code followed by mobile number.",
	                    maxlength: "Country code followed by mobile number."
                    }
                }
            });

            var limit = 2;
            $(document).on('change','.single-checkbox', function(evt) {
                if($(this).siblings(':checked').length >= limit) {
                   this.checked = false;               
                }
            });      

            $(document).on('change','.nationality',function(){
                // $("input[name=user_nationality]").val('')
                var nationality = $(this).val();
                switch(nationality){
                    case 'other':
                        $('#other_nationality').removeClass();
                        $('#other_nationality').addClass('form-group');
                        break;
                    case 'Indian':
                        $('#other_nationality').removeClass();
                        $('#other_nationality').addClass('form-group hidden');
                        break;
                }
            });  
        })

    </script>
</body>

</html>
