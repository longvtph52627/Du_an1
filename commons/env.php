<?php

// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS
// Đường dẫn vào client

define('BASE_URL', 'http://localhost/Du_an_1/Du_an1/');

// Đường dẫn vào admin

define('BASE_URL_ADMIN', 'http://localhost/Du_an_1/Du_an1/admin');

define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'du_an1');  // Tên database

define('PATH_ROOT', __DIR__ . '/../');
