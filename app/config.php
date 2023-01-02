<?php
// HTTP
define('HTTP_SERVER', 'http://s9e901c42.fastvps-server.com/');

// HTTPS
define('HTTPS_SERVER', 'http://s9e901c42.fastvps-server.com/');

// DIR
define('DIR_APPLICATION', '/var/www/html/catalog/');
define('DIR_SYSTEM', '/var/www/html/system/');
define('DIR_IMAGE', '/var/www/html/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'mysql-server');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'secret');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');