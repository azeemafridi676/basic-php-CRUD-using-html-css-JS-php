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
    <h1>ADD A STUDENT</h1>

    <div id="main-content">
        <h1>EDIT THE FOLLOWING AND CLICK ON SUBMIT BUTTON</h1>
        <?php
        $dbservername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "crud";
        $connection = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
        if (!$connection) {
            echo "<h1>error</h1>";
        }
        $sql = "SELECT cname from class";
        $result = $connection->query($sql);
        if ($result->num_rows <= 0) {
            echo "table is empty";
        } else {


        ?>


            <form action="data.php" method="post">
                <input type="text" name="sname" placeholder="student name"><br>
                <input type="text" name="saddress" placeholder="student address">

                <select name="sclass" id="">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $row['cname'] ?>"><?php echo $row['cname'] ?> </option>

                    <?php } ?>
                </select>
            <?php
        } 
        $connection->close();
        ?>
            <input type="text" name="sphone" placeholder="student phone">
            <input type="submit">

            </form>



    </div>
</div>