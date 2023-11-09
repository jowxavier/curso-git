<?php

require('../vendor/autoload.php');

use App\Git\Git;

// print name
echo (new Git)->name();
