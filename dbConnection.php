<?php
// mysqli_connect("host","username","password");
$connection =mysqli_connect('localhost','root','admin123');
if($connection){
    echo "Connected";

}else{
    echo "Not Connected";
}
$query ="CREATE DATABASE registration";

$execute = mysqli_query($connection,$query);
if($execute){
    echo "executed";
}else{
    echo " error";
}

?>