<?php

session_start();

require "core/functions.php";
require "core/AppServiceProvider.php";
require "core/SecurityService.php";

define('BASE_URL', 'http://localhost:8000');
define('BASE_DIR', __DIR__ . '/../');
