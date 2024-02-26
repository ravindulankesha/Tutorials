<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="UserDetails/process" method="post">
  <label for="dob">Date of Birth:</label>
  <input type="date" id="dob" name="dob">
  <input type="submit" value="Submit">
</form>
</body>