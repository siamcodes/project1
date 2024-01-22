<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>

<?php
  include "connect.php";

  $sql = "SELECT * FROM tbl_smartfarm";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  // output data of each row
  ?>
<div class="container"> 
    <table class="table table-hover table-striped">
    <?php
        while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " -Zone: " . $row["zone"]. " -Board " . $row["board"]." -Tempolary".$row["temp"] ." - Humidity".$row["humi"]." ". $row["dmy"]. "<br>";
    ?>
        <tr>
            <td> <?php echo $row["id"]; ?></td>
            <td> <?php echo $row["zone"]; ?> </td>
            <td> <?php echo $row["board"]; ?> </td>
            <td> <?php echo $row["temp"]; ?> </td>
            <td> <?php echo $row["humi"]; ?> </td>
            <td> <?php echo $row["dmy"]; ?> </td>
        </tr>
    <?php   
        }
    ?>
    </table>
</div>
<?php
  } else {
    echo "0 results";
  }
$conn->close();
?>