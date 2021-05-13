<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/general.css" rel="stylesheet">
        <link href="../css/login.css" rel="stylesheet">
    </head>
    <body>
        <?php include './views/common/header.php';?> 
        
        <div class="main">
            <div class="login-reg-panel">
                <div class="login-info-box">
                    <h2>Đã có tài khoản?</h2>
                    <p>Mời đăng nhập</p>
                    <label id="label-register" for="log-reg-show">Đăng Nhập</label>
                    <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
                </div>
                                
                <div class="register-info-box">
                    <h2>Chưa có tài khoản?</h2>
                    <p>Mời đăng nhấn vào nút đăng ký</p>
                    <label id="label-login" for="log-login-show">Đăng Ký</label>
                    <input type="radio" name="active-log-panel" id="log-login-show">
                </div>
                                
                <div class="white-panel">
                    <form id="login-form" class="login-show" action="" method="POST">
                        <input type="hidden" name="action" value="login">
                        <label for="login-form">Đăng Nhập</label>
                        <input id="login-email" name="email" class="form-control" type="text" placeholder="Email">
                        <input id="login-password" name="password" class="form-control" type="password" placeholder="Password">
                        <button type="submit" value="login">Đăng Nhập</button> 
                    </form>
                    <form id="register-form" class="register-show" action="" method="POST" novalidate onsubmit="return validation()">
                        <input type="hidden" name="action" value="register">
                        <label for="register-form">Đăng Ký</label>
                        <input id="fullname" name="fullname" class="form-control mb-0" type="text" placeholder="Họ Và Tên">
                        <span class="invalid-feedback fullname"></span>
                        <input id="birthday" name="birthday" class="form-control mt-3" type="date" placeholder="Ngày Sinh">
                        <span class="invalid-feedback birthday"></span>
                        <input id="register-email" name="email" class="form-control mb-0" type="text" placeholder="Email">
                        <span class="invalid-feedback email"></span>
                        <input id="register-password" name="password" class="form-control mb-0" type="password" placeholder="Password">
                        <span class="invalid-feedback password"></span>
                        <input id = "confirmPassword" class="form-control mb-0" type="password" placeholder="Confirm Password">
                        <span class="invalid-feedback confirmPassword"></span>
                        <button class="mt-3" type="submit" value="register">Đăng Ký</button>
                    </form>
                </div>
            </div>
        </div>  

        
        
    

        


        <?php include './views/common/footer.php'; ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="../script/common.js"></script>
        <script src="../script/login.js"></script>
        <script src="../script/form-validation.js"></script>

        
    </body>
</html>