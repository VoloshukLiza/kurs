<?php
  $id = filter_var(trim($_POST['id']),
  FILTER_SANITIZE_STRING);
  $post_num = filter_var(trim($_POST['post_num']),
  FILTER_SANITIZE_STRING);

  $mysql = new mysqli('localhost','root','root','register-kurs');
  $result = $mysql->query("SELECT * FROM `postamats` WHERE `id` = '$id'");
  $data = $result->fetch_assoc();
  $fin = $data['status'];

  if ($fin != "Delivery arrived at post"){
    echo "Not yet, please, turn back";
    $mysql->close();
  }

  $mysql->query("DELETE FROM `postamats` WHERE `id`='$id'");

  $mysql->close();

  header('Location: /test_map.php');
 ?>
