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
            .input {
                text-align: center;
            }
            .form {
                margin-bottom: 10px;
            }
            .post {
                text-align: center;
            }
            label{
            cursor: pointer;
            display: inline-block;
            padding: 3px 6px;
            text-align: right;
            width: 150px;
            vertical-align: top;
            }
        </style>
    </head>
    <body>
        <div id="title">Register</div>
        <div class="input">
            <form class="form" action="register.php", method="post">
                <div>
                    <label>User :</label>
                    <input type="text" name="userName">
                </div>
                <div>
                    <label>Password :</label>
                    <input type="password" name="userPwd">
                </div>
                <div>
                    <label>Email :</label>
                    <input type="text" name="userEmail">
                </div>
                <div>
                    <input type="submit" name="register" value="Register">
                </div>
            </form>
    </body>
</html>

<?php



?><?php /**PATH C:\guestbook\resources\views/register.blade.php ENDPATH**/ ?>