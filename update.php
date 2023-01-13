<?php
  $mysql = new mysqli('localhost','root','root','register-kurs');
  $result0 = $mysql->query("SELECT * FROM `postamats` WHERE `postamat_id`='0'");
  $result1 = $mysql->query("SELECT * FROM `postamats` WHERE `postamat_id`='1'");
  $result2 = $mysql->query("SELECT * FROM `postamats` WHERE `postamat_id`='2'");
  $result3 = $mysql->query("SELECT * FROM `postamats` WHERE `postamat_id`='3'");
  $result4 = $mysql->query("SELECT * FROM `postamats` WHERE `postamat_id`='4'");

  $row_count=mysqli_num_rows($result0);
  $descp_0 = "<b>"."Postamat 0"."</b>"."<br>";
  if ($row_count>0){
    for ($i=0; $i < $row_count; $i++){
      $row_arr=mysqli_fetch_array($result0);
      $id = $row_arr['id'];
      $del = $row_arr['name'];
      $status = $row_arr['status'];
      $descp_0 .= $id." - ";
      $descp_0 .= $del." - ";
      $descp_0 .= $status."<br>";
    }
  }

  $row_count=mysqli_num_rows($result1);
  $descp_1 = "<b>"."Postamat 1"."</b>"."<br>";
  if ($row_count>0){
    for ($i=0; $i < $row_count; $i++){
      $row_arr=mysqli_fetch_array($result1);
      $id = $row_arr['id'];
      $del = $row_arr['name'];
      $status = $row_arr['status'];
      $descp_1 .= $id." - ";
      $descp_1 .= $del." - ";
      $descp_1 .= $status."<br>";
    }
  }

  $row_count=mysqli_num_rows($result2);
  $descp_2 = "<b>"."Postamat 2"."</b>"."<br>";
  if ($row_count>0){
    for ($i=0; $i < $row_count; $i++){
      $row_arr=mysqli_fetch_array($result2);
      $id = $row_arr['id'];
      $del = $row_arr['name'];
      $status = $row_arr['status'];
      $descp_2 .= $id." - ";
      $descp_2 .= $del." - ";
      $descp_2 .= $status."<br>";
    }
  }

  $row_count=mysqli_num_rows($result3);
  $descp_3 = "<b>"."Postamat 3"."</b>"."<br>";
  if ($row_count>0){
    for ($i=0; $i < $row_count; $i++){
      $row_arr=mysqli_fetch_array($result3);
      $id = $row_arr['id'];
      $del = $row_arr['name'];
      $status = $row_arr['status'];
      $descp_3 .= $id." - ";
      $descp_3 .= $del." - ";
      $descp_3 .= $status."<br>";
    }
  }

  $row_count=mysqli_num_rows($result4);
  $descp_4 = "<b>"."Postamat 4"."</b>"."<br>";
  if ($row_count>0){
    for ($i=0; $i < $row_count; $i++){
      $row_arr=mysqli_fetch_array($result4);
      $id = $row_arr['id'];
      $del = $row_arr['name'];
      $status = $row_arr['status'];
      $descp_4 .= $id." - ";
      $descp_4 .= $del." - ";
      $descp_4 .= $status."<br>";
    }
  }

  $mysql->close();
  header('Location: /test_map.php?descp_0='.$descp_0.'&descp_1='.$descp_1.'&descp_2='.$descp_2.'&descp_3='.$descp_3.'&descp_4='.$descp_4);
 ?>
