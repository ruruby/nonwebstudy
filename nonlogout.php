<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['pw']);

if(!isset($_SESSION['id'])){
  ?>
  <script>
    alert("로그아웃 되었습니다.");
    history.back();
    // location.replace("./index.php");
  </script>
  <?php
}
 ?>
