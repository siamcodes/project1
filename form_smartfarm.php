<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
    <form action="insert_smartfarm.php" method="POST"  enctype="multipart/form-data">
        Zone : <input type="text" name="zone" /> <br/>
        Board: <input type="text" name="board" />  <br/>
        อุณหภูมิ: <input type="text" name="temp" />  <br/>
        ความชื้น: <input type="text" name="humi" />  <br/>
        <input type="submit" value="บันทึก" />
    </form>

    
</body>
</html>