<?php

// clearing the user cookies and redirecting to login //
setcookie("remember_token", "", time() - 3600,'/');

header("Location: login.php");

?>