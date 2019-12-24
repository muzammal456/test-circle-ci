<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
    shell_exec( `cd home/lqur9smlfhie/public_html/deploy/ && git reset –hard HEAD && git pull` );
}

?>