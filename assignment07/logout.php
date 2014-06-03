<?php

function deleteCookie($name) {
    setcookie($name, "", 10, "/");
  }

deleteCookie("user");
deleteCookie("preferences");
  
  
header("Location: ../index.html");

?>
