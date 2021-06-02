<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <link href="../css/changepass.css" rel="stylesheet">

</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="action" value="changepassword">

        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Old Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            
            <label for="newpass1"><b>New Password</b></label>
            <input type="password" placeholder="Enter Password" name="newpass1" required>

            
            <label for="newpass2"><b>Repeat New Password</b></label>
            <input type="password" placeholder="Enter Password" name="newpass2" required>

            <button type="submit">Submit</button>
        
        </div>
    </form>


</body>
</html>