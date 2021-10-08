<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Session Login</h1>
        <?php
            if(!isset($_SESSION['user_id'])) {
                echo "<p><a href=\"login.php\">[로그인]</a></p>";
            } else {
                $user_id = $_SESSION['user_id'];
                $user_level = $_SESSION['user_level'];
                echo "<p>$user_id 님($user_level) 이 로그인 하셨습니다.";
                echo "<a href=\"logout.php\">[로그아웃]</a></p>";
            }
        ?>
    </body>
</html>