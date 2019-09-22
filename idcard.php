


<html>
    <head>
        <title>
           Register form
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
    session_start();
        $dbServername="localhost";
        $dbUsername="root";
        $dbPassword="";
        $dbName="RDBMS";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$idvalue=$_POST['id'];
$namevalue=$_POST['name'];
$deptvalue=$_POST['dept'];
$programvalue=$_POST['program'];
        if($idvalue!="") {$sql="select * from students where stdid='".$idvalue."';"; }
        else if($namevalue!="") {$sql="select * from students where name='".$namevalue."';";}
        else if($deptvalue!="") {$sql="select * from students where dept='".$deptvalue."';";}
        else if($programvalue!="") {$sql="select * from students where program='".$programvalue."';";}

        
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
                {
                    while($row=mysqli_fetch_array($result))
                    {
                        ?>
        <div id="idcard">
            <div id="top">
                <h1>Islamic University of Technology</h1>
                <p>Organization of Islamic Cooperation (OIC)</p>
            </div>
            <div id="left">
                <img id="leftimg" src="<?php echo $row['imagename'] ?>">
            </div>
            <div id="right">
                <h1>IUT</h1>
                <p><?php echo $row['name'] ?></p>
                <p>Student Id:<?php echo $row['stdid'] ?> </p>
                <p>Program:<?php echo $row['program'] ?> </p>
                <p>Country:<?php echo $row['country'] ?> </p>
            </div>
        </div>
        <?php
                    }
                }
        else echo "Not Registered";
                
                ?>
    </body>
</html>


