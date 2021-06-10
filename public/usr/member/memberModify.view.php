<?php
$pageTitle = "회원정보수정";
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
<form action="doMemberModify.php">
  <div>
    <span>로그인아이디</span>
    <input required placeholder="로그인아이디 입력" type="text" name="loginId"> 
  </div>
  <div>
    <span>로그인비밀번호</span>
    <input required placeholder="로그인비밀번호 입력" type="text" name="loginPw"> 
  </div>  
  <div>
    <span>이름</span>
    <input required placeholder="이름 입력" type="text" name="name"> 
  </div>
  <div>
    <span>별명</span>
    <input required placeholder="별명 입력" type="text" name="nickname"> 
  </div>
  <div>
    <span>휴대 전화번호</span>
    <input required placeholder="휴대 전화번호 입력" type="text" name="cellphoneNo"> 
  </div>
  <div>
    <span>이메일</span>
    <input required placeholder="이메일 입력" type="text" name="email"> 
  </div>  
  <div>
    <input type="submit" value="회원정보수정">
  </div>
</form>

<?php require_once __DIR__ . "/../foot.php"; ?>