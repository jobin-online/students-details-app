<!DOCTYPE html>
<?php include 'db.php';
 
 $sql = "select * from data order by idno";
 $rows = $db->query($sql);
 $count = 1;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management App</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <div class="container">
        <div class="create-dialog" id="create-dialog">
            <h1>Add new Student</h1>
            <form action="create.php" method="post">
                <label>Id no</label>
                </br>
                <input id="idno" type="number" name="idno" placeholder="Enter Id number (4-digit number)" max="9999" min="1000" required />
                </br></br>
                <label>Name</label>
                </br>
                <input id="name" type="text" name="name" placeholder="Enter name" required />
                </br></br>
                <label>Branch</label>
                </br>
                <select id="branch" class="input" name="branch" id="branch" required>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="MECH">MECH</option>
                    <option value="CIVIL">CIVIL</option>
                </select>
                </br></br>
                <label>Semester</label>
                </br>
                <select id="semester" class="input" name="semester" id="semester" required>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    <option value="S4">S4</option>
                    <option value="S5">S5</option>
                    <option value="S6">S6</option>
                    <option value="S7">S7</option>
                    <option value="S8">S8</option>
                </select>
                </br></br>
                <label>Phone</label>
                </br>
                <input id="phone" type="number" name="phone" placeholder="Enter pnone no." required />
                </br></br>
                <input class="submit" type="submit" name="create" value="create">
            </form>
        </br>
            <button onClick="dialog_close()">Close</button>
        </div>
    <a id="add1" class="new-stud"><i class="fa fa-plus"></i><span class="butt-none" style="width:10px;"></span><span
            class="butt-none">Add Student</span></a>
    <div class="header">
        <img src="https://img.icons8.com/ios-filled/50/000000/student-registration.png" />
        <h1>STUDENTS MANAGEMENT SYSTEM</h1>
        <div style="height:30px"></div>
        <a id="add2"><i class="fa fa-plus"></i><span style="width:10px;"></span>Add Student</a>
    </div>

    <div class="data-table">
        <div class="table-heading">
            <h1 class="head-si">Si.no</h1>
            <h1 class="head-roll">Id No</h1>
            <h1 class="head-name">Name</h1>
            <h1 class="head-br">Branch</h1>
            <h1 class="head-sem">Sem</h1>
            <h1 class="head-ph">Phone</h1>
            <div class="head-oper">
            </div>
        </div>
        <div style="height:25px;"></div>
        <?php while($row = $rows->fetch_assoc()): ?>
            <div class="table-datas">
                <h1 class="head-si"><?php echo $count ?></h1>
                <h1 class="head-roll"><?php echo $row['idno'] ?></h1>
                <h1 class="head-name"><?php echo $row['name'] ?></h1>
                <h1 class="head-br"><?php echo $row['branch'] ?></h1>
                <h1 class="head-sem"><?php echo $row['semester'] ?></h1>
                <h1 class="head-ph"><?php echo $row['phone'] ?></h1>
                <div class="head-oper">
                    <a href="update.php?idno=<?php echo $row['idno'];?>">Edit</a>
                    <a href="delete.php?idno=<?php echo $row['idno'];?>">Delete</a>
                </div>
            </div>
            <?php $count++ ?>
        <?php endwhile; ?>
    </div>
    </div>
    <script rel="text/javascript" src="js/main.js"></script>
</body>

</html>