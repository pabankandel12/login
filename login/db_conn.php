<?php

$conn = mysqli_connect("localhost","root","","webtechs");

if(!$conn){
    die("connection Failed:".mysqli_connect_error());
}

?>