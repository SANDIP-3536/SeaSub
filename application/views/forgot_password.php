<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/png" href="https://gr8synergy.com/subsea/wp-content/uploads/2018/09/gr8-Synergy_Logo-Name-1.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Subsea | Forgot Password</title>

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
    </style>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown" style=" background: #ffffff;padding: 20px;border-radius: 20px;border: 1px solid #000;box-shadow: 3px 2px;margin-top: -225px !important;">
        <div>
            <img src="https://gr8synergy.com/subsea/wp-content/uploads/2018/11/Logo-New-Tagline-004.png" style="padding-bottom: 20px;height:10%;width:60%;">
            <form method="post" class="m-t" role="form" id="forgot_user" action="<?=site_url('Welcome/resent_forgot_password')?>">
                <div class="form-group">
                    <input type="email" class="form-control" name="user_email" placeholder="Please enter the register email ID." required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Send Password</button>
 
                <!-- <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="<?=site_url('Welcome/registration_detials')?>">Create an account</a> -->
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
        $(document).ready(function(){            

            $('#forgot_user').validate({
                rules:{
                    user_email:{
                        required:true
                    }
                },
                message:{
                }
            });
        });
    </script>

</body>

</html>
