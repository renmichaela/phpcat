<?php

require_once('vendor/autoload.php');

use RenMichaela\PhpCat\PhpCat;

echo PhpCat::status(301)->response();