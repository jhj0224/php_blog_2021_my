<?php
$isLogined = $_REQUEST['App__isLogined'];
$loginedMemberId = $_REQUEST['App__loginedMemberId'];
$loginedMember = $_REQUEST['App__loginedMember'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$pageTitle?></title>
  
</head>
<body>
  <h1><?=$pageTitle?></h1>
  <hr>
  <?php if ( $isLogined ) { ?>
    <a href="../member/mypage.php"><input type="button" value="<?=$loginedMember['nickname']?> 마이페이지"></a>
    <a href="../member/doLogout.php"><input type="button" value="로그아웃"></a>
  <!-- unset($_SESSION); -->
  <?php } else { ?>
    <a href="../member/login.php"><input type="button" value="로그인"></a>        
  <?php } ?>