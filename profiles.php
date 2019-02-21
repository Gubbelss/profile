<?php
    include_once("includes/config.php");

    if (isset($_GET['first']))
    {
        $username = $_GET['first'];
        $sql = "SELECT * FROM users WHERE username='$username'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["username"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["id"].'</td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["firstname"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["lastname"].'</td></tr>';
                echo '<tr><td>Country:</td><td>'.$row["username"].'</td></tr>';
            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
    else {

        echo '<h2>All our members:</h2>';

        $sql = "SELECT * FROM users";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

                echo '<hr />';
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["id"].'</td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["firstname"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["lastname"].'</td></tr>';
                echo '<tr><td>Country:</td><td>'.$row["username"].'</td></tr>';
                echo '</table>';

            }
        }
        else {
           echo "0 results";
        }
    }

    include_once("includes/menu.php");
?>
