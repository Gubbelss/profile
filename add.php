<form action="add.php" method="post" enctype="multipart/form-data">
    <table>
    <tr><td>Brand:</td><td><input type="text" name="brand" value="" placeholder="" size="20"></td></tr>
    <tr><td>Name:</td><td><input type="text" name="name" value="" placeholder="" size="20"></td></tr>
    <tr><td>Specification:</td><td><input type="text" name="specification" value="" placeholder="" size="20"></td></tr>
    </table>
    <input type="submit" value="Create" name="submit">
</form>

<?php
    include_once("includes/config.php");

    if (isset($_POST['brand']))
    {
        $brand = $_POST['brand'];
        $name = $_POST['name'];
        $specification = $_POST['specification'];
        $sqladd = "INSERT INTO shoes (brand, name, specification) VALUES ('$brand','$name','$specification')";
        error_log($sqladd);

        if ($conn->query($sqladd) === TRUE) {
			echo "New user created!<br />";
		}
		else {
			echo "New user wasn't created!<br />";
		}
    }
include_once("index.php");
?>
