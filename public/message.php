<?php
date_default_timezone_set("Asia/Taipei");
session_start();
$conn = mysqli_connect("localhost","root","","guestbook");


if (isset($_SESSION['userName'])) {
    $userName = $_SESSION['userName'];
    if (!empty($_POST['message'])) {
        $result = mysqli_query($conn,"SELECT * FROM users WHERE user_name='$userName'");
        while($row = mysqli_fetch_array($result)){
            $user_id = $row['id'];            
        }

        $message = $_POST['message'];
        $t=time();
        $time = (date("Y-m-d H:i",$t));
            
        $sql = "INSERT INTO messages (user_name, message, time, user_id)
            VALUES ('$userName', '$message', '$time', $user_id)";
        
        $conn->query($sql);
        $ans = "Created successfully";
    } else {
        $ans = "Please, leave a message";
    }

} else {
    $ans = "Please, login";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Message</title>
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
            <a href="/">GuestBook</a>
        </div>
    </body>
</html>
