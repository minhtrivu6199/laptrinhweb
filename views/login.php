<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
                        <input id="login-email" name="email" type="text" placeholder="Email">
                        <input id="login-password" name="password" type="password" placeholder="Password">
                        <button type="submit" value="login">Đăng Nhập</button> 
                    </form>
                    <form id="register-form" class="register-show" action="" method="POST">
                        <input type="hidden" name="action" value="register">
                        <label for="register-form">Đăng Ký</label>
                        <input id="fullname" name="fullname" type="text" placeholder="Họ Và Tên">
                        <input id="birthday" name="birthday" type="date" placeholder="Ngày Sinh">
                        <input id="register-email" name="email" type="text" placeholder="Email">
                        <input id="register-password" name="password" type="password" placeholder="Password">
                        <input type="password" placeholder="Confirm Password">
                        <button type="submit" value="register">Đăng Ký</button>
                    </form>
                </div>
            </div>
        </div>  

        
        
    

        


        <?php include './views/common/footer.php'; ?>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../script/common.js"></script>
        <script src="../script/login.js"></script>

        
    </body>
</html>