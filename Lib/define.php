<?php

// 定義專案目錄常數 PATH
$paths = explode('/', __FILE__);
array_pop($paths);
define('PATH', implode('/', $paths) . '/');

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'LeonTest');
define('DB_USER', 'root');
define('DB_PSWD', '1234');

// 起用 Session
session_start();

