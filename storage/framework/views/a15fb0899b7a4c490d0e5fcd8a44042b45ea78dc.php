<?php
session_start();

if (!isset($_SESSION['userName'])){
    $title = 'Please login';
    $userName = '';

} else {
    $title = 'See you again, ';
    $userName = $_SESSION['userName'];
    unset($_SESSION['userName']);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Logout</title>
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
        <div id="title"><?php echo $title; ?><?php echo $userName; ?></div>
        <div class="button">
            <a href="/">GuestBook</a>
        </div>
    </body>
</html>
<?php /**PATH C:\guestbook\resources\views/logout.blade.php ENDPATH**/ ?>