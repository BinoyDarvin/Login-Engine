<?php

include_once 'includer.php';

if (login_check()) {
  echo "<h1>You are logged in</h1>";
  echo "This is the secret page.";
  echo "<br>";
  $user_id = login_check();
  $user_name = (db_query('SELECT *FROM users WHERE id = :user_id', array(':user_id' => $user_id), true))[0]['username'];
  echo "<h3 style='font-weight=bolder'>Hello Mr.{$user_name}</h3>";
  echo "<br>";
  echo "<a href='logout.php'>Logout</a>";
}

else {
  redirect("login.php");
}





 ?>
