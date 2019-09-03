<?php
require 'config.php';
$sql = "SELECT * FROM score ORDER BY points DESC";
$statement = $conn->query($sql);
$first = false;

if ($statement->num_rows > 0) {
    // output data of each row
    while($row = $statement->fetch_assoc()) {
if ($first == false) {
  echo "<table>
    <tr>
      <th>Players</th>
      <th>Points</th>
    </tr>";
    $first = true;
}

        echo "
          <tr>
            <td>". $row["name"] ."</td>
            <td>". $row["points"] ."</td>
          </tr>
        ";

    }
      echo "</table>";

}




 ?>
