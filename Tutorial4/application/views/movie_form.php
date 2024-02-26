<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="Movies/search" method="post">
  <label for="genre">Genre:</label>
  <input type="text" id="genre" name="genre">
  <input type="submit" value="Search">
</form>

<a href="Movies/allmovies">view all movies</a>
<?php print_r($result) ?>
</body>

