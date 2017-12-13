<?php
error_reporting(E_ERROR);
// This file allows the administrator to add a specific coffee products.
// This script is created in Chapter 11.

// Require the configuration before any PHP code as configuration controls error reporting.
require ('./includes/config.inc.php');

// Set the page title and include the header:
$page_title = 'Add Videos';
include ('./includes/header.html');
// The header file begins the session.

// Require the database connection:
require(MYSQL);

// Number of possible specific coffees to add at once:

$conn = $dbc;
        if($conn->connect_error){
          die("Connection Failed: " .$conn->connect_error);
          }
          $title = (isset($_POST['vidTitle']) ? $_POST['vidTitle'] : null);
          $link = (isset($_POST['link']) ? $_POST['link'] : null);


  if (!isset($_POST['submit'])) {
          $sql = "INSERT INTO videos (title, link) VALUES ('$title','$link')";

          $conn->query($sql);
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();


?><form action="add_videos.php" method="post" accept-charset="utf-8">

<h3> Add Videos </h3>
	<input type="text" name="vidTitle" placeholder="Video Title"/>
	<input type="text" name="link" placeholder="11 Digit Video Code"/>	

<div class="field"><input type="submit" value="Add This Video" class="button" /></div>
        </fieldset>

</form>

