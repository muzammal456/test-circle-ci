<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.


    echo shell_exec("git pull origin master");

    echo "deploy";


?>