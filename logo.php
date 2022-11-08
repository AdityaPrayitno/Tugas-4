<?php
include "css.php";
session_start();
  	if ($_SESSION['level']==""){header("location:index.php");}
?>
<div align="center">
  <p><a href="datamahasiswa.php"><img src="LOGO-UNIGA-ONLY.png" width="470" height="490" border="0" /></a></p>
  <p><h1><strong>ADITYA PRAYITNO</strong></h1></p>
  <p><h2><strong>17510021</strong></h2></p>
</div>

<a href="logout.php" class="btn btn-danger">Log Out</a>
