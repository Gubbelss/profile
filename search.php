<h1>Search by Brand</h1>
<form action="search.php" method="post" enctype="multipart/form-data">
    Brand:  <input type="text" name="brand" value="" placeholder="" size="20">
    <input type="submit" value="Search" name="submit">
</form>

<?php

include_once("includes/config.php");

    if (isset($_POST['brand']))
    {
        $brand = $_POST['brand'];

        $sql = "SELECT * FROM shoes WHERE brand='$brand';";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
   ?>

   <h3>Search results:</h3>

   <?php
            while($row = $result->fetch_assoc()) {
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["id"].'</td></tr>';
                echo '<tr><td>Brand:</td><td>'.$row["brand"].'</td></tr>';
                echo '<tr><td>Name:</td><td>'.$row["name"].'</td></tr>';
                echo '<tr><td>Specification:</td><td>'.$row["specification"].'</td></tr>';
                echo '</table>';
                echo '<hr />';
            }
        }
        else {
           echo "0 results";
        }
    }
    include_once("index.php");

?>
