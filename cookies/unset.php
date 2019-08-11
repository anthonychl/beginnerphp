<?php

/*
to unset a cookie you use the same function
used to set it
but subtracting the time you added
when setting it
*/

setcookie('username','anthony',time()-3000);


?>
<br>
<a href="view.php"> view </a>