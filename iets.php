<?php
require 'config.php';
$sql = "SELECT * FROM getal";
$sql2 = "SELECT * FROM score";
$statement = $conn->query($sql);
$pp = $_COOKIE['profile_viewer_uid'];

if ($statement->num_rows > 0) {
    // output data of each row
    while($row = $statement->fetch_assoc()) {
      $dit =  false;
      if ($dit == false) {
        $number = $row["player"];
        $number++;
        $sql3 = "UPDATE getal SET player=$number WHERE id=1";
        if ($conn->query($sql3) === TRUE) {
            // echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $dit = true;
      }
        $plusses = "Player-" . $number;
        $sql4 = "INSERT INTO score (name, points)
        VALUES ('$plusses', '$pp')";

        if ($conn->query($sql4) === TRUE) {
            // echo "New record created successfully";
            header("Location: players.php");
        } else {
            echo "Error: " . $sql4 . "<br>" . $conn->error;
        }
    }
}

session_start();
   $_SESSION['player'] = $plusses;
 ?>
