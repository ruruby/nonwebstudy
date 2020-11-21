<?php
session_start();

$user=$_SESSION['id'];


echo "<p align='center'><font face='고딕' size='4'><b>회원정보</b></font></p><br>";
echo "<font face='고딕' size='3'><b> $user 님</b>의 접속을 환영합니다</font><br>";
echo "아이디 : $user";
?>

<form method="post" enctype="multipart/form-data">
  <input type="button" value="LOGOUT" onclick="location.href='nonlogout.php'" style="float:right;">
  <br>
  <p><input type="text" name="title" placeholder="제목" style="width:510px;"></p>
  <div id="in_file">
      <input type="file" value="1" name="b_file" />
  </div>
  <p><textarea name="text" rows="15" cols="70" placeholder="내용을 입력해주세요."></textarea></p>
  <input type="submit" value="SUBMIT" onclick="javascript: form.action='/write_imsiok.php';" style="float:right;">
  <input type="submit" value="미리보기" onclick="javascript: form.action='/write_miri.php';">
</form>



<? include "mymytemplate.html"; ?>
