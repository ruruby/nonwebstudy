<?php
session_start();
$conn=mysqli_connect("localhost","root","zz1077","nonwebsite");
mysqli_select_db($conn,'nonwebsite');
$user=$_SESSION["id"];
 ?>

<!doctype html>
<head>
<meta charset="UTF-8">
<title>My Blog</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
<div id="board_area">

<?php echo "<h1> $user 의 블로그</h1>";
// echo $_COOKIE['id']?>

  <h4>글 목록</h4>
  <FORM action="nonwrite.php" method="post" name="글 작성 페이지">
    <input type="button" value="WRITE" onclick="location.href='nonwrite.php'" style="float:right;">
    </FORM><br>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="200">글쓴이</th>
                <th width="100">작성일</th>
            </tr>
        </thead>
        <?php
        $query="select * from nonboard where id='$user';";
        $result=mysqli_query($conn, $query) or die("query error");
        while($row=mysqli_fetch_array($result)){?>
          <tr>
          <td><?php echo $row['num']; ?></td>
          <td><a href='view.php?num=<?php echo $row['num']?>'><?php echo $row['title'];?></a></td>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['date']; ?></td>
        </tr><?php
      }?>
    </table>
  </div>
</body>
</html>
