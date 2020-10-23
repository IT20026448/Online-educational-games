<?php
  session_start();
  require 'config.php';
  if ((isset($_POST['gameID'])) and (!empty($_POST['name'])) and (!empty($_POST['desc']))){
    $gID= $_POST["gameID"];
    $gName = $_POST["name"];
    $gDesc = $_POST["desc"];
    $sql1 = $conn->prepare("UPDATE Games SET gName=? , description=? WHERE gameID=?");
    if ($sql1 === false) {
      trigger_error($conn->error, E_USER_ERROR);
      return;
    }
    $sql1->bind_param("ssi",$gName,$gDesc,$gID);
    if ($sql1->execute() === TRUE){
      echo "<script>alert('updated successfully');</script>";
      echo "<script>window.location.href='./admin.php';</script>";
    }else{
      echo "<script>alert('update failed');</script>";
      echo "<script>window.location.href='./admin.php';</script>";
    }
    $_POST = array();
  }else{
    $_POST = array();
    echo "<script>alert('name or description not set');</script>";
    echo "<script>window.location.href='./admin.php';</script>";
  }
?>
