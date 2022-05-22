<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'BD_MAIOT'
) or die(mysqli_erro($mysqli));
?>
