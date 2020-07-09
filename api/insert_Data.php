<?php
$conn = mysqli_connect("localhost","root","","ang_post");
$info = (array)json_decode(file_get_contents("php://input"));
if(count($info) > 0)
{   $addItem = mysqli_real_escape_string($conn, $info['addItem']);
    
    $query = "INSERT INTO todo (task) VALUES ('$addItem')";
    if(mysqli_query($conn,$query)) {
        echo "Data inserted succesfully";
       
    }
    else{
        echo "Data not insterted";
    }

}
?>