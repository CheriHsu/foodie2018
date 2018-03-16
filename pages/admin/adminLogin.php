<?php

ob_start();
session_start();
//啟用session
// include '../common/common.php';
include '../../common/connectFoodie.php';



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/memLogin.css">
</head>
<body>

<div class="memLogin">
    <div class="memLogin-container">
        <div class="memLogin-contain">
            <img src="../../assets/images/Searchbox-pon.png">
            <form method="post" action="../../common/adminLogin.php">
                <div class="memLogin-account">
                    帳號： <input type="text" name="member_id">
                </div>
                <div class="memLogin-psw">
                    密碼： <input type="password" name="password">
                </div>
                <div class="memLogin-submit">
                    <input type="submit" name="memSubmit" value="登入">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>



