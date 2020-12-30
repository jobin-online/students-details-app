<?php 

include 'db.php';

$idno = $_GET['idno'];
$sql = "delete from data where idno = '$idno'";

$val = $db->query($sql);

if($val){
    header('location: index.php');
}
else{
    header('location: index.php');
}


?>