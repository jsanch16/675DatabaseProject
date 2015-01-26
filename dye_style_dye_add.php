<?php

  define("HOST", "host=54.84.180.48 ");
  define("USER", "user=qflagg ");
  define("PASSWORD", "password=675775f14 ");
  define("PORT", "port=5432 ");
  define("DBNAME", "dbname=fashion ");

  $ds_id = intval($_POST['ds_id']);
  $d_id = intval($_POST['d_id']);


  $db = pg_connect(HOST . USER . PASSWORD . PORT . DBNAME) or die("Could not connect");
  if(!$db) {
    echo "Error: Cannot open database";
  } else {
    $query = "INSERT INTO dye_style_dye VALUES ($ds_id, $d_id);";

    $result = pg_query($db, $query);

    if(!$result) {
      echo "Something went wrong";
    } else {
      header('Location: https://tranquil-peak-5616.herokuapp.com/dye_style_dye.php');
    }
  }

?>