<?php
session_start();
echo '<script language="javascript">alert("Su sesión ha finalizado");</script>';
if(session_destroy())
{
header("Location: index.php");
}
?>
