<?php

$conn = mysqli_connect('localhost', 'blakkpar', '', 'blakkpar_web');

if(!$conn){
    die("No connection: ".mysqli_connect_error());
}