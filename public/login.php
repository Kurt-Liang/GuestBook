<?php

session_start();


if (empty($_POST['userName']) or empty($_POST['userPwd'])) {
    $ans = 'Incomplete information';
    $butt = 'login';
    $href = 'login';
} else {

    $userName = $_POST['userName'];
    $userPwd = $_POST['userPwd'];
    $userPwd = sha1($userPwd);

    $conn = mysqli_connect("localhost","root","","guestbook");

    $result = mysqli_query($conn,"SELECT * FROM users WHERE user_name='$userName'");

    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)){
            if ($row['user_pwd'] == $userPwd) {
                $ans = 'Sign in suceesfully';
                $butt = 'GuestBook';
                $href = '';

                $_SESSION['userName'] = $userName;

            } else {
                $ans = 'Wrong password';
                $butt = 'login';
                $href = 'login';
            }
        }
    } else {
        $ans = "This user does not exist";
        $butt = 'login';
        $href = 'login';
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <style>
            #title {
                font-size: 40px;
                text-align: center;
                margin-bottom: 60px;
            }
            #message {
                font-size: 24px;
                text-align: center;
                margin-bottom: 40px;
            }
            .button {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="title"><?php echo $ans; ?></div>
        <div class="button">
            <a href="/<?php echo $href ?>"><?php echo $butt; ?></a>
        </div>
    </body>
</html>
