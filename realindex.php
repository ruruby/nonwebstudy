<?php
session_start();
$user=$_SESSION['id'];

if (isset($_SESSION['id'])){
  echo("<script>location.href='board.html';</script>");
}
else{
  echo("<script>location.href='nonindex.html';</script>");
}
 ?>
