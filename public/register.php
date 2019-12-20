<?php

if (empty($_POST['userName']) or empty($_POST['userPwd'])) {
    $ans = 'Incomplete information';
} else {

    $userName = $_POST['userName'];
    $userPwd = $_POST['userPwd'];
    $userEmail = $_POST['userEmail'];


    $conn = mysqli_connect("localhost","root","","guestbook");

    $result = mysqli_query($conn,"SELECT * FROM users WHERE user_name='$userName'");

    if ($result->num_rows > 0) {
            $ans = "$userName is already used";

        } else {
            $userPwd = sha1($userPwd);

            $sql = "INSERT INTO users (user_name, user_pwd, user_email)
                VALUES ('$userName', '$userPwd', '$userEmail')";

            $conn->query($sql);

            $ans = "$userName created successfully";
        }

    $conn->close();

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
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
            <a href="/login">Login</a>
        </div>
    </body>
</html>
