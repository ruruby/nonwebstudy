<?php
session_start();

$user=$_SESSION['id'];
$passwd=$_SESSION['pw'];

echo "<p align='center'><font face='고딕' size='4'><b>회원정보</b></font></p><br>";
echo "<font face='고딕' size='3'><b> $user 님</b>의 접속을 환영합니다</font><br>";
echo "아이디 : $user <br> 비밀번호 : $passwd";
?>
<input type="button" value="LOGOUT" onclick="location.href='nonlogout.php'" style="float:right;">
<br>
<p><input type="text" name="title" placeholder="제목" style="width:510px;"></p>
<p><textarea name="text" rows="25" cols="70" placeholder="내용을 입력해주세요."></textarea></p>
<input type="submit" value="SUBMIT" style="float:right;">
<? include "mymytemplate.html"; ?>
