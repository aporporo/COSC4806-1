<?php
  $valid_username = "alex";
  $valid_password = "123";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($valid_username == $username && $valid_password == $password) {
    echo "You are logged in";
  } else {
    echo "Invalid username or password";
  }

?>