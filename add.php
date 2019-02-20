<form action="add.php" method="post" enctype="multipart/form-data">
    <table>
    <tr><td>Firstname:</td><td><input type="text" name="first" value="" placeholder="" size="20"></td></tr>
    <tr><td>Lastname:</td><td><input type="text" name="last" value="" placeholder="" size="20"></td></tr>
    <tr><td>Username:</td><td><input type="text" name="username" value="" placeholder="" size="20"></td></tr>
    </table>
    <input type="submit" value="Create" name="submit">
</form>

<?php
    include_once("includes/config.php");

    if (isset($_POST['first']))
    {
        $firstname = $_POST['first'];
        $lastname = $_POST['last'];
        $username = $_POST['username'];
        $sql = "INSERT INTO users (firstname, lastname, username) VALUES ('$firstname','$lastname','$username')";

        if ($conn->query($sql) === TRUE) {
			echo "New user created!<br />";
		}
		else {
			echo "New user wasn't created!<br />";
		}
    }
    include_once("includes/menu.php");
?>
