<!DOCTYPE html>
<?php include 'db.php';
 $idno = $_GET['idno'];
 $sql = "select * from data where idno = '$idno'";
 $rows = $db->query($sql);
 $row = $rows->fetch_assoc();

 if(isset($_POST['update'])){
    $newidno = $_POST['idno'];
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];
    $phone = $_POST['phone'];

    // To check whether if the 'idno' is updated and if updated 'idno' is already exists before updating

    if($idno != $newidno){
        $sql1 = "select * from data where idno = $newidno";
        $rows = $db->query($sql1);
        $flag=0;
        while($row = $rows->fetch_assoc()){
            if($row['idno'] == $newidno){
                $flag = 1;
            }
        }
        if($flag == 0){
            $sql = "update data set idno='$newidno', name='$name', branch='$branch', semester='$semester', phone='$phone' where idno = '$idno'";
            $val = $db->query($sql);
            header('location: index.php');
        }
        else{
            $sql = "update data set name='$name', branch='$branch', semester='$semester', phone='$phone' where idno = '$idno'";
            $val = $db->query($sql);
            header('location: index.php');
        }
    }
    else{
        $sql = "update data set name='$name', branch='$branch', semester='$semester', phone='$phone' where idno = '$idno'";
        $val = $db->query($sql);
        if($val){
            header('location:index.php');
        
        }else{
            header('location: index.php');
        }
        
    }
 }
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <div class="container">
        <div class="header">
            <img src="https://img.icons8.com/ios-filled/50/000000/student-registration.png" />
            <h1>STUDENTS MANAGEMENT SYSTEM</h1>
            <div style="height:30px"></div>
        </div>
        <div class="update-dialog" id="update-dialog">
            <h1>Update Students Details</h1>


            <form method="post">

                <label>Id no</label>
                </br>
                <input type="number" name="idno" placeholder="Enter Id number" required value="<?php echo $row['idno']; ?>">
                </br></br>

                <label>Name</label>
                </br>
                <input type="text" name="name" placeholder="Enter name" required value="<?php echo $row['name']; ?>">
                </br></br>

                <label>Branch</label>
                </br>
                <select class="input" name="branch" id="branch" required value="<?php echo $row['branch']; ?>">
                <?php
                    if($row['branch']=='CSE'){
                        echo '<option value="CSE" selected>CSE</option>';
                    }
                    else{
                        echo '<option value="CSE">CSE</option>';
                    }
                    if($row['branch']=='ECE'){
                        echo '<option value="ECE" selected>ECE</option>';
                    }
                    else{
                        echo '<option value="ECE">ECE</option>';
                    }
                    if($row['branch']=='EEE'){
                        echo '<option value="EEE" selected>EEE</option>';
                    }
                    else{
                        echo '<option value="EEE">EEE</option>';
                    }
                    if($row['branch']=='MECH'){
                        echo '<option value="MECH" selected>MECH</option>';
                    }
                    else{
                        echo '<option value="MECH">MECH</option>';
                    }
                    if($row['branch']=='CIVIL'){
                        echo '<option value="CIVIL" selected>CIVIL</option>';
                    }
                    else{
                        echo '<option value="CIVIL">CIVIL</option>';
                    }
                ?>
                </select>
                </br></br>
                
                <label>Semester</label>
                </br>
                <select class="input" name="semester" id="semester" required>
                <?php
                    if($row['semester']=='S1'){
                        echo '<option value="S1" selected>S1</option>';
                    }
                    else{
                        echo '<option value="S1">S1</option>';
                    }
                    if($row['semester']=='S2'){
                        echo '<option value="S2" selected>S2</option>';
                    }
                    else{
                        echo '<option value="S2">S2</option>';
                    }
                    if($row['semester']=='S3'){
                        echo '<option value="S3" selected>S3</option>';
                    }
                    else{
                        echo '<option value="S3">S3</option>';
                    }
                    if($row['semester']=='S4'){
                        echo '<option value="S4" selected>S4</option>';
                    }
                    else{
                        echo '<option value="S4">S4</option>';
                    }
                    if($row['semester']=='S5'){
                        echo '<option value="S5" selected>S5</option>';
                    }
                    else{
                        echo '<option value="S5">S5</option>';
                    }
                    if($row['semester']=='S6'){
                        echo '<option value="S6" selected>S6</option>';
                    }
                    else{
                        echo '<option value="S6">S6</option>';
                    }
                    if($row['semester']=='S7'){
                        echo '<option value="S7" selected>S7</option>';
                    }
                    else{
                        echo '<option value="S7">S7</option>';
                    }
                    if($row['semester']=='S8'){
                        echo '<option value="S8" selected>S8</option>';
                    }
                    else{
                        echo '<option value="S8">S8</option>';
                    }
                ?>
                </select>

                </br></br>
                <label>Phone</label>
                </br>
                <input type="number" name="phone" placeholder="Enter pnone no." required value="<?php echo $row['phone']; ?>">
                </br></br>

                <input class="submit" type="submit" name="update" value="update">
            </form>
        </div>
    </div>
    <script rel="text/javascript" src="js/main.js"></script>
</body>

</html>