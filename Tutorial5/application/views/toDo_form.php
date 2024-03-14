<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="ToDo/handleForm" method="post">
  <label for="todo">ToDo action:</label>
  <input type="text" id="todo" name="todo_action">
  <input type="submit" value="Add Action">
</form>
</body>