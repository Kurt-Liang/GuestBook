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
            .input {
                text-align: center;
            }
            .text {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div id="title">GuestBook</div>
        <div class="input">
            <form action="message.php" method="post">
                <div class="text">
                    <textarea name="message" cols="25", rows="10"></textarea>
                </div>
                <div class="text">
                    <input type="submit" name="submit" value="Create">
                </div>
            </form>
        </div>
    </body>
</html>

<?php 



?><?php /**PATH C:\guestbook\resources\views/message.blade.php ENDPATH**/ ?>