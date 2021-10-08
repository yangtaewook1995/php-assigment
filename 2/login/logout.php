<?php
    session_cache_expire(300);
    session_start();
    session_destroy();
?>
<meta http-equiv="refresh" content="0;url=index.php" />