<?php
    include_once("./connect.php");


    if(isset($_POST["submit"])) {
        $Judul = $_POST["Judul"];
        $Isbn = $_POST["Isbn"];
        $Unit = $_POST["Unit"];

        $query = mysqli_query($db, "INSERT INTO buku VALUES (
            NULL, '$Judul', '$Isbn', $Unit
            )");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
</head>
<body>
    <h1>Form tambah data buku</h1>

    <form action="" method="POST">

        <label for="Judul">Judul</label>
        <input type="text" id="Judul" name="Judul">

        <br>
        <br>

        <label for="Isbn">ISBN</label>
        <input type="text" id="Isbn" name="Isbn">

        <br>
        <br>

        <label for="Unit">Unit</label>
        <input type="text" id="Unit" name="Unit">

        <br>
        <br>

        <button type="submit" name="submit">Submit</button>


</form>
    
</body>
</html>