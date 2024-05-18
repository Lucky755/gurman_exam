<?php
$link = mysqli_connect('db', 'root', 'eve@123');
if (!$link) {
	die('Error:' . mysqli_error());
}
echo 'Good!';
mysqli_close($link);
?>
