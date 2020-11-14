<?php
$conn=mysqli_connect("localhost","root","zz1077","nonwebsite");
mysqli_select_db($conn,'nonwebsite');
$sql="
INSERT INTO member
(id,pw)
VALUES(
  '{$_POST['id']}',
  '{$_POST['pw']}'
  )
  ";
$result=mysqli_query($conn, $sql);
   if($result==false){
     echo '오류가 발생하였습니다.';
   }
   else{
     echo '성공했습니다. <a href="nonindex.html">돌아가기</a>';
   }
 ?>
