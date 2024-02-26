<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Student Page</title>
</head>
<body>
    <form action="<?php echo base_url('Student/addStudent');?>" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" value="Submit">
    </form>
</body>
</html>