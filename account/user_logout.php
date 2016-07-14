<?php 
session_start();
session_destroy();
//header("Location: ../");
echo '<script type="text/javascript">    window.open("", "_self", "");   window.close();    </script>';
?>
