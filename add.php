<?php
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  $post_num = filter_var(trim($_POST['post_num']),
  FILTER_SANITIZE_STRING);

  $mysql = new mysqli('localhost','root','root','register-kurs');

  $status = rand(0,1);

  if ($status < 1){
    $status = "Delivery arrived at ".rand(2,14)." days";
  }
  if ($status > 0) {
    $status = "Delivery arrived at post";
  }

  $mysql->query("INSERT INTO `postamats` (`name`, `postamat_id`,`status`) VALUES('$name','$post_num','$status')");
  $mysql->close();

  header('Location: /test_map.php');
 ?>
