<?php
//display all users
include_once("includes/config.php");

$sql = "SELECT * FROM shoes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    while($row = $result->fetch_assoc()) {
        $brand = $row["brand"];
        echo '<tr><td><a href="/profiler/profiles.php?brand='.$brand.'">'.$brand.'</a><br /></td></tr>';
    }
    echo '</table>';
}
else {
    echo "0 results";
}
include_once("index.php");
?>
