<?php

include 'db.php';

if(isset($_POST['create'])){
    $idno = $_POST['idno'];
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];
    $phone = $_POST['phone'];
    // To check whether if the 'idno' is already exists before creating
    $sql1 = "select * from data where idno = $idno";
    $rows = $db->query($sql1);
    $flag=0;
    while($row = $rows->fetch_assoc()){
        if($row['idno'] == $idno){
            $flag = 1;
        }
    }
    if($flag == 0){
        $sql = "insert into data (idno,name,branch,semester,phone) values ('$idno','$name','$branch','$semester','$phone')";
        $val = $db->query($sql);
        if($val){
            header('location: index.php');
        }
    }else{
        header('location: index.php');
    }
}

?>