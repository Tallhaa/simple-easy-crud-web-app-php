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
</head>

<body>
    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <label for="">Name</label>
                <input type="text" name="name"><br>
                <label for="">Price</label>
                <input type="text" name="price" id=""><br>
                <label for="">Description</label>
                <input type="text" name="description" id=""><br>
                <label for="">Image</label>
                <input type="file" name="image" id=""><br>
                <button name="upload">Upload</button>
            </form>
        </div>
    </center>

    <!-- fetch data -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>


                </tr>
            </thead>
            <tbody>
                <?php
            include'config.php';
            $pic = mysqli_query($con,"SELECT * FROM `tblcard`");
            while($row = mysqli_fetch_array($pic))
            {
                echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[Name]</td>
                        <td>$row[Price]</td>
                        <td>$row[Description]</td>
                        <td><img src='$row[image]' width='200px' height='70px'></td>
                        <td><a href='delete.php? id= $row[id]' class = 'btn btn-danger'>Delete</a></td>
                        <td><a href='update.php? id= $row[id]' class = 'btn btn-danger'>Update</a></td>
                    </tr>
                ";
            }

            ?>
            </tbody>
        </table>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>