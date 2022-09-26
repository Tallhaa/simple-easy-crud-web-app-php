<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
    input {
        margin: 10px;
    }
    </style>
</head>
<?php
include 'config.php';
$ID = $_GET['id'];
$Record = mysqli_query($con,"SELECT * FROM `tblcard` WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>

<body>
    <center>
        <div class="main">
            <form action="update1.php" method="POST" enctype="multipart/form-data">
                <label for="">Name</label>
                <input type="text" value="<?php echo $data['Name']?>" name="name"><br>
                <label for="">Price</label>
                <input type="text" value="<?php echo $data['Price']?>" name="price" id=""><br>
                <label for="">Description</label>
                <input type="text" value="<?php echo $data['Description']?>" name="description" id=""><br>
                <label for="">Image</label>
                <td><input type="file" name="image" value="<?php echo $data['image']?>"><img
                        src="<?php echo $data['image']?>" alt="" width='200px' height='70px'></td><br>
                <input type="hidden" name="id" value="<?php echo $data['id']?>">
                <button type="submit" name="update" class="btn btn-danger m-2">Update</button>
            </form>
        </div>
    </center>
    <!-- update code -->





</body>

</html>