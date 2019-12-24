<?php
exec('git pull 2>&1', $output);
print_r($output);
?>