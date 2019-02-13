<?php

  $id = $_GET['id'];
  $tablename = $_GET['tablename'];
  $id_table = "";

   $con = mysqli_connect("localhost","root","");

    if (!$con)
      die("could not connect".mysqli_connect_error());

    mysqli_select_db($con,"lotus");

    // add here your id_table according to the table
    if ($tablename == "monthly_challenges")
    {
      $id_table = 'challenege_ID';
    }
    elseif ($tablename == "class_info") {
       $id_table = 'class_ID';
    }

    $sql_select = "Select * from ".$tablename." where ".$id_table." =".$id;
    $result = mysqli_query($con,$sql_select);
    $row = mysqli_fetch_assoc($result);
     
    header("Content-type: image/png");
    echo $row['picture'];
?>