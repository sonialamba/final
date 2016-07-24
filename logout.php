<?php
session_start(); 

// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
header( "refresh:0 ;url=index.php" );
?>
</body>
</html>