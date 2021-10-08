<!DOCTYPE html>
<?php 
    session_cache_expire(300);
    session_start(); 
?>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>로그인</h2>
        <?php 
            $ip = $_SERVER['REMOTE_ADDR'];
            echo "<p>접속 IP : ($ip)</p>"
        ?>
        <?php if(!isset($_SESSION['user_id'])) { ?>
        <form method="post" action="login_ok.php">
            <p>아이디: <input type="text" name="user_id" /></p>
            <p>비밀번호: <input type="password" name="user_pw" /></p>
            <p>등급: <input type="text" name="user_level" /></p>
            <p><input type="submit" value="로그인" /></p>
        </form>
        <?php } else{
            $user_id = $_SESSION['user_id'];
            echo "<p>($user_id)님은 이미 로그인하고 있습니다. ";
            echo "<a href=\"index.php\">[돌아가기]</a> ";
            echo "<a href=\"logout.php\">[로그아웃]</a></p>";
        } ?>
    </body>
</html>