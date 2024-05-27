<?php
    include_once("./connect.php");

    $id = $_GET["Id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query_get_data);



    if(isset($_POST["submit"])) {
        $Judul = $_POST["Judul"];
        $Isbn = $_POST["Isbn"];
        $Unit = $_POST["Unit"];

        $query = mysqli_query($db, "UPDATE buku SET Judul='$Judul', Isbn='$Isbn', Unit='$Unit' WHERE id=$id ");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Buku</title>
</head>
<body>
    <h1>Form Edit data buku</h1>

    <form action="" method="POST">

        <label for="Judul">Judul</label>
        <input value="<?php echo $buku['Judul'] ?>" type="text" id="Judul" name="Judul">

        <br>
        <br>

        <label for="Isbn">ISBN</label>
        <input value="<?php echo $buku['Isbn'] ?> "type="text" id="Isbn" name="Isbn">

        <br>
        <br>

        <label for="Unit">Unit</label>
        <input value="<?php echo $buku['Unit'] ?> "type="text" id="Unit" name="Unit">


        <br>
        <br>

        <button type="submit" name="submit">Submit</button>


</form>
    
</body>
</html>