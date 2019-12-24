<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

    exec("cd /var/www/html/test-circle-ci && git pull origin master");


?>