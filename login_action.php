<?php
session_start();

$conn=mysqli_connect("localhost","root","zz1077","nonwebsite") or die("fail");

$id=$_POST['id'];
$pw=$_POST['pw'];

$sql="select * from member id = '$id'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
  $row=mysqli_fetch_assoc($result);

  if($row['pw']==$pw){
    $_SESSION['id']=$id;
    if(isset($_SESSION['id'])){
      ?>
      <script>
      alert("로그인 성공.");
      location.replace("./nonboard.html")
      </script>
<?php
    }
    else{
      echo "로그인 실패";
    }
  }
  else{
    ?>
    <script>
    alert("아이디 혹은 비밀번호 불일치");
    history.back();
    </script>
  <?php
}
  }
  else{
    ?>
    <script>
    alert("아이디 혹은 비밀번호 불일치");
    history.back();
    </script>
<?php
    }
    ?>