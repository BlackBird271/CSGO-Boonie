<?php

  session_start();
  unset ($_SESSION['steamid']);
  unset ($_SESSION['steam_update']);

  header("Location: ../index.php");

?>
