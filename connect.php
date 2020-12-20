<?php
$sqlCon= new mysqli("localhost","test","","test");

if ($sqlCon->connect_error){
    echo $sqlCon->connect_error;
}

?>