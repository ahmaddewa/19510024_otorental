<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>concept-master/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="<?php echo base_url(); ?>concept-master/assets/images/favicon.png" width="150px" height="150px" alt="logo"></a><span class="splash-description">Masukkan Data dengan Benar ! </span></div>
            <div class="card-body">
                <form action="<?php echo base_url('login/proses_login'); ?>" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" name="username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" 	 type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <input type="submit" value="Login" class="btn btn-primary">
                </form>
            </div>
           
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/jquery/jquery-3.3.1.min.js>"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>