<?php 
session_start();
print_r($_SESSION);
session_destroy();
print_r($_SESSION);

echo "<a href='unidad4.php'> Ir a Unidad4</a>";