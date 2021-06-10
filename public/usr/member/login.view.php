<?php
$pageTitle = "로그인";
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
  
    <div align='center'>
    <span>로그인</span>

    <form action="doLogin.php">
    <p>ID : <input required placeholder="ID" type="text" name="loginId"></p> 
    <p>PW : <input required placeholder="PW" type="password" name="loginPw"></p> 
  
  <div>
    <input type="submit" value="로그인">
    <a href="../member/join.php"><input type="button" value="회원가입"></a>
  </div>
</form>

<?php require_once __DIR__ . "/../foot.php"; ?>