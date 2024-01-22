<?php
  include "connect.php";

  $sql = "SELECT * FROM tbl_smartfarm";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
  ?>

<table border="1">
 <?php
    while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " -Zone: " . $row["zone"]. " -Board " . $row["board"]." -Tempolary".$row["temp"] ." - Humidity".$row["humi"]." ". $row["dmy"]. "<br>";
 ?>
    <tr>
        <td> <?php echo $row["id"]; ?></td>
        <td> <?php echo $row["zone"]; ?> </td>
        <td> 3 </td>
        <td> 4 </td>
        <td> 5 </td>
        <td> 6 </td>
    </tr>
 <?php   
    }
 ?>

</table>

<?php
  } else {
    echo "0 results";
  }
$conn->close();

?>