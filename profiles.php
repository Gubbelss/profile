<?php
    include_once("includes/config.php");

    if (isset($_GET['first']))
    {
        $brand = $_GET['first'];
        $sql = "SELECT * FROM shoes WHERE brand='$brand'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["brand"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["id"].'</td></tr>';
                echo '<tr><td>Brand:</td><td>'.$row["brand"].'</td></tr>';
                echo '<tr><td>Name:</td><td>'.$row["name"].'</td></tr>';
                echo '<tr><td>Specification:</td><td>'.$row["specification"].'</td></tr>';
            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
    else {

        echo '<h2>All our members:</h2>';

        $sql = "SELECT * FROM shoes";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

                echo '<hr />';
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["id"].'</td></tr>';
                echo '<tr><td>Brand:</td><td>'.$row["brand"].'</td></tr>';
                echo '<tr><td>Name:</td><td>'.$row["name"].'</td></tr>';
                echo '<tr><td>Specification:</td><td>'.$row["specification"].'</td></tr>';
                echo '</table>';

            }
        }
        else {
           echo "0 results";
        }
    }

    include_once("index.php");
?>
