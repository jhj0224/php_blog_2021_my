<?php
$pageTitle = "마이페이지";
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
  
<div>
  <hr>
  <a href="MemberModify.php"><input type="button" value="회원정보수정"></a>
  <a href="MemberDelete.php"><input type="button" value="회원탈퇴"></a>
</div>
<hr>

<?php require_once __DIR__ . "/../foot.php"; ?>