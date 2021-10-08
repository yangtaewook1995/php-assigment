<?php
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    $user_level = $_POST['user_level'];

    $members = array(
        'userA' => array('password' => 'userApassword', 'level' => '관리자'),
        'userB' => array('password' => 'userBpassword', 'level' => '중간관리자'),
        'userC' => array('password' => 'userCpassword', 'level' => '사용자')
    );
 
    if( !isset($members[$user_id]) || $members[$user_id]['password'] != $user_pw ||$members[$user_id]['level'] != $user_level) {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호 또는 등급이 잘못되었습니다.');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
    /* If success */
    session_cache_expire(300);
    session_start();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_level'] = $members[$user_id]['level'];
?>
<meta http-equiv="refresh" content="0;url=index.php" />