<?php
  session_start();
  require 'config.php';
  if (isset($_POST['gameID'])){
    $gID= $_POST["gameID"];
    $sql1 = $conn->prepare("DELETE FROM Games WHERE gameID = ?");
    if ($sql1 === false) {
      trigger_error($conn->error, E_USER_ERROR);
      return;
    }
    $sql1->bind_param("i",$gID);
    if ($sql1->execute() === TRUE){
      echo "<script>alert('removed successfully');</script>";
      echo "<script>window.location.href='./admin.php';</script>";
    }else{
      echo "<script>alert('remove failed');</script>";
      echo "<script>window.location.href='./admin.php';</script>";
    }
    $_POST = array();
  }
