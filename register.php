<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لاگین</title>
    <link rel="stylesheet" href="siteghaleb.css">
</head>
<body>
    <?php include('header.php'); ?>
    <script type="text/javascript">
    <!--
        function check_empty()
        {
     var username='';
     username=document.getElementById("username").value;
     if(username=='')
     alert('وارد کردن نام کاربری الزامی است');
     else
     {

    var r = confirm("از صحت اطلاعات وارد شده اطمینان دارید؟")
    if (r == true){
        document.register.submit();
                  }
      }
    }
    -->
    </script>

    </br>
    <form name="register" action="action_register.php" method="post">
    <table style="width: 50%;" border="0" style="margin-left:auto;margin-left:auto;">

    <tr>
        <td style="width: 40%;">نام واقعی<span style="color: red;">*</span></td>
        <td style="width: 60%;"><input type="text" id="realname" name="realname"/></td>
    </tr>

    <tr>
        <td>نام کاربری <span style="color: red;">*</span></td>
        <td><input type="text" style="text-align:left;" id="username" name="username"/></td>
    </tr>

    <tr>
        <td>کلمه عبور<span style="color: red;">*</span></td>
        <td><input type="password" style="text-align:left;" id="password" name="password"/></td>
    </tr>

    <tr>
        <td>تکرار کلمه عبور<span style="color: red;">*</span></td>
        <td><input type="password" style="text-align:left;" id="repassword" name="repassword"/></td>
    </tr>

    <tr>
        <td>پست الکترونیک<span style="color: red;">*</span></td>
        <td><input type="text" style="text-align:left;" id="email" name="email"/></td>
    </tr>

    <tr>
        <td><br/><br/></td>
        <td>
            <input type="button" value="ثبت نام" onclick="check_empty();">
            &nbsp;&nbsp;&nbsp;
            <input type="reset" value="جدید"/>
        </td>
    </tr>

    </table>
    </form>

    <?php include('footer.php'); ?>
</body>
</html>