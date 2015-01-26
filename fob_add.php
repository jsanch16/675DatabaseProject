<?php

  define("HOST", "host=54.84.180.48 ");
  define("USER", "user=qflagg ");
  define("PASSWORD", "password=675775f14 ");
  define("PORT", "port=5432 ");
  define("DBNAME", "dbname=fashion ");

  $sup_id = intval($_POST['sup_id']);
  $man_id = intval($_POST['man_id']);
  $charge = $_POST['charge'];
  $insurance = $_POST['insurance'];

  $db = pg_connect(HOST . USER . PASSWORD . PORT . DBNAME) or die("Could not connect");
  if(!$db) {
    echo "Error: Cannot open database";
  } else {
    $query = "INSERT INTO fob VALUES ($sup_id, $man_id, '$charge', $insurance);";

    $result = pg_query($db, $query);

    if(!$result) {
      echo "Something went wrong";
    } else {
      header('Location: https://tranquil-peak-5616.herokuapp.com/fob.php');
    }
  }

?>