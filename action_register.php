<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="siteghaleb.css">
</head>
<body>
    <?php include('header.php'); ?>
    
    <?php
    if (isset($_POST['realname']) && !empty($_POST['realname']) &&
       isset($_POST['username']) && !empty($_POST['username']) &&
       isset($_POST['password']) && !empty($_POST['password']) &&
       isset($_POST['repassword']) && !empty($_POST['repassword']) &&
       isset($_POST['email']) && !empty($_POST['email'])) {

        $realname = $_POST['realname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $email = $_POST['email'];
       } else
       exit("برخی از فیلد ها مقداردهی نشده است");

       if($password != $repassword)
       exit("کلمه عبور و تکرار ان مشابه نیست");

       if(filter_var($email, FILTER_VALIDATE_EMAIL)===false)
       exit("پست الکترونیک وارد شده صحیح نیست");
    ?>

    <div dir="Itr" style="text-align: left;">

    <?php
    echo("realname=".$realname."<br/>");
    echo("username=".$username."<br/>");
    echo("password=".$password."<br/>");
    echo("repassword=".$repassword."<br/>");
    echo("email=".$email."<br/>");
    ?>
    
    </div>
    
    <?php include('footer.php'); ?>
</body>
</html>