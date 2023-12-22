<?php 
    $sname = $_POST['sname'];
    $saddress = $_POST['saddress'];
    echo $sclass = $_POST['sclass'];
    $sphone = $_POST['sphone'];

    $dbservername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "crud";
        $connection = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
        if (!$connection) {
            echo "<h1>error</h1>";
        }

    // $sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('$sname','$saddress','$sclass','$sphone')";
    // $connection->query($sql) or die("error in query");
    $connection->close();
?>