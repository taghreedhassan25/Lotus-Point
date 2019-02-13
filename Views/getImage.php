<?php
error_reporting(0);

  $id = $_GET['id'];
  $tablename = $_GET['tablename'];
  $extension = 'jpg';

  $id_table = "";

   $con = mysqli_connect("localhost","root","");

    if (!$con)
      die("could not connect".mysqli_connect_error());

    mysqli_select_db($con,"lotus");

    // add here your id_table according to the table
    if ($tablename == "monthly_challenges")
    {
      $id_table = 'challenege_ID';
      $extension = 'jpeg';
    }
    elseif ($tablename == "class_info") {
       $id_table = 'class_ID';
       $extension = 'jpg';
    }
    elseif ($tablename == "coach_info") {
      $id_table = 'coach_ID';
      $extension = 'png';
    }
    elseif ($tablename == "tips") {
      $id_table = 'Tip_ID';
      $extension = 'jpg';
    }
     elseif ($tablename == "workout") {
      $id_table = 'workout_ID';
      $extension = 'jpg';
    }

    $sql_select = "Select * from ".$tablename." where ".$id_table." =".$id;
    $result = mysqli_query($con,$sql_select);
    $row = mysqli_fetch_assoc($result);

    header("Content-type: image/".$extension);
    echo $row['picture'];
?>