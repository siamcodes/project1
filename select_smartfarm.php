<?php
  include "connect.php";

  $sql = "SELECT * FROM tbl_smartfarm";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Zone: " . $row["zone"]. "-Board " . $row["board"]. "<br>";
    }
  } else {
    echo "0 results";
  }
$conn->close();

?>