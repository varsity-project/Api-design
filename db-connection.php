<?php 


$con=new mysqli('localhost','root',' ','rickshaw');

if($con){

    echo "connection successful";
}
else{

    die(mysqli_error($con));
}


