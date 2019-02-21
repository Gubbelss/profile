<form action="add.php" method="post" enctype="multipart/form-data">
    <table>
    <tr><td>Username:</td><td><input type="text" name="username" value="" placeholder="" size="20"></td></tr>
    </table>
    <input type="submit" value="Delete" name="submit">
</form>

<?php
    include_once("includes/config.php");

    if (isset($_POST['username']))
    {
        $username = $_POST['username'];
        $sqldelete = "DELETE FROM users WHERE id = $result;";
        error_log($sqldlete);

        if ($conn->query($sqldlete) === TRUE) {
			echo "User deleted!<br />";
		}
		else {
			echo "User wasn't deleted!<br />";
		}
    }
    include_once("index.php");
?>
