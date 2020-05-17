<?php

include 'dbconn.php';

$id=$_GET["id"];
$query=" DELETE FROM tasklist
        WHERE id='$id' ";

$result=mysqli_query($connection,$query);

header('Location:index.php');

?>