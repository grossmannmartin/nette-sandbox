<?php

// Uncomment this line if you must temporarily take down your site for maintenance.
// require '.maintenance.php';


define('WWW_DIR', __DIR__);

define('CONFIG_DIR', WWW_DIR . '/../app/config');

define('APP_DIR', WWW_DIR . '/../app');
define('LIBS_DIR', WWW_DIR . '/../libs');

define('LOG_DIR', WWW_DIR . '/../log');
define('TEMP_DIR', WWW_DIR . '/../temp');

define('ASSETS_DIR', WWW_DIR . '/../app/assets');

// Let bootstrap create Dependency Injection container.
$container = require APP_DIR . '/bootstrap.php';

// Run application.
$container->application->run();
