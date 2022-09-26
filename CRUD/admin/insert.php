<?php
// include db connection
include 'config.php';


if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $DESCRIPTION = $_POST['description'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadimage/".$img_name;
    move_uploaded_file($img_loc,'uploadimage/'.$img_name);

    // inset data

    mysqli_query($con,"INSERT INTO `tblcard`(`Name`, `Price`, `Description`, `image`) VALUES ('$NAME','$PRICE','$DESCRIPTION','$img_des')");
    header('location: index.php');
    

}

?>