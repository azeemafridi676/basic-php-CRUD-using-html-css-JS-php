<?php
include "index.php"
?>
<html>
<link rel="stylesheet" href="css/crud.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

</html>
<div class="right">
    <h1>VIEW A STUDENT</h1>

    <div id="main-content">
        <h1>All RECORDS</h1>
        <?php
        $dbservername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "crud";
        $connection = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
        if (!$connection) {
            echo "<h1>error</h1>";
        }
        $sql = "SELECT * from student";
        $result = $connection->query($sql);
        if (!$result) {
            echo "error" . $connection->error;
        }



        ?>
        <table>
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>CLASS</th>
                <th>PHONE</th>
                <th>ACTION</th>
            </thead>



            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['sid'] ?></td>
                        <td><?php echo $row['sname'] ?></td>
                        <td><?php echo $row['saddress'] ?></td>
                        <td><?php echo $row['sclass'] ?></td>
                        <td><?php echo $row['sphone'] ?></td>
                        <td class="flex">
                            <a href='update.php'>Edit</a>
                            <a href='remove.php'>Delete</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>

    </div>
</div>