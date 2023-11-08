<?php

require('../vendor/autoload.php');

use App\Git\Git;

echo (new Git)->name();