<?php

include 'dbconn.php';

$body=$_POST["body"];
$tag=$_POST["type"];

//INSERT INTO `tasklist` (`id`, `tag`, `body`) VALUES (NULL, 'HEALTH', 'Let\'s skip 100 times every day');

$body = str_replace("'", '', $body);
$tag = str_replace("'", '', $tag);


$query="INSERT INTO tasklist(tag,body)
        VALUE('$tag','$body')";

echo "".$query."<br>";
$result=mysqli_query($connection,$query);

if ($result){
    header('Location:index.php');
}
else{
    echo 'query failed for some reason';
}

?>