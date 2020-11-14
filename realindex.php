<?php
session_start();

if (isset($_SESSION['id'])){
  echo("<script>location.href='board.html';</script>");
}
else{
  echo("<script>location.href='nonindex.html';</script>");
}
 ?>
