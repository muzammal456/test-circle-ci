<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.


//    echo shell_exec('start "" "browser_location" "address"');
    exec('git pull  2>&1');

?>