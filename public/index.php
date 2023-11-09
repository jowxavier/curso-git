<?php

require('../vendor/autoload.php');

use App\Git\Git;

exit();

echo (new Git)->name();
