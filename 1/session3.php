<?php
session_start();
$id = 'hotdog';
$pwd = 'hotcat';
if(!empty($_POST['id']) && !empty($_POST['pwd'])){
    if($_POST['id'] == $id && $_POST['pwd'] == $pwd){
        $_SESSION['is_login'] = true;
        $_SESSION['nickname'] = 'dooooog';
        header('Location: ./session4.php');
        exit;
    }
}
echo '로그인 하지 못했습니다.';
?>
