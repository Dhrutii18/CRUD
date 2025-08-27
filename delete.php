<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from crud where id=$id";
    $result=mysqli_query($cn,$sql);
    if($result){
        echo "deleted successfully";
    }else{
        echo "DB not connected";
    }
}
?>