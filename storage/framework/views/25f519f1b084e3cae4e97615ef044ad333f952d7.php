<?php
session_start();
if (empty($_SESSION['userName'])) {
    $ans = 'please Login';
    $href = 'login';
    $guestbook = '';
    $mes = '';
} else {
    $ans = $_SESSION['userName'];
    $href = 'logout';
    $guestbook = 'leave a message';
    $mes = 'message';
}

$conn = mysqli_connect("localhost","root","","guestbook");
$result = mysqli_query($conn,"SELECT * FROM messages");
while($row = mysqli_fetch_array($result)){
    $message = $row['message'];
    $user_name = $row['user_name'];
    $time = $row['time'];     
}
$conn->close();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>GuestBook</title>
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
            .message {
                text-align: center;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div id="title">GuestBook</div>
        <div id="message">Welcome, <?php echo $ans; ?></div>
        <div class="button">
            <a href="/<?php  echo $mes; ?>"><?php  echo $guestbook; ?> </a>
            <input type="button" onclick="location.href='/<?php echo $href; ?>'" value="<?php echo $href; ?>">
        </div>
    </body>
</html>


<?php
$conn = mysqli_connect("localhost","root","","guestbook");
$result = mysqli_query($conn,"SELECT * FROM messages order by id desc");
while($row = mysqli_fetch_array($result)){
    $message = $row['message'];
    $user_name = $row['user_name'];
    $time = $row['time'];
    
    echo "<div class='message'>
            $user_name<br>$message<br>$time<hr>
        </dib>";
}
$conn->close();
?><?php /**PATH C:\guestbook\resources\views/index.blade.php ENDPATH**/ ?>