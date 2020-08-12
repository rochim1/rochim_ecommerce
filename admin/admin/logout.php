<?php 
error_reporting(0);
session_destroy('admin');
echo "<script>alert('berhasil logout');</script>";
echo '<meta charset="UTF-8" http-equiv="refresh" content="0;url=login.php">';
exit();
?>