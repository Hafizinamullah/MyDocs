<?php 

    $_connection;
    
$connection = mysqli_connect('localhost', 'root', '', 'batch4'); 

    
    if($connection){

    	echo "Connection successfull";
    } else
    
    echo " Database Connection Failed";

?>
