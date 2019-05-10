<?php

$conn = mysqli_connect('localhost' ,'root','','blakk-paradyse');

if(!$conn){
    die("No connection: ".mysqli_connect_error());
}