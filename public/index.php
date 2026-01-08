<?php

define('BASEPATH', dirname(__DIR__));
define("APPPATH", BASEPATH . "/app");
define("DATABASEPATH", BASEPATH . "/database");
define("CONFIGPATH", BASEPATH . "/config");
define("PUBLICPATH", BASEPATH . "/public");
define("ROUTESPATH", BASEPATH . "/routes");
define("STORAGEPATH", BASEPATH . "/storage");
define('RESOURCEPATH', BASEPATH . "/resources");
define("JTECH_TIMESTAMP", $_SERVER['REQUEST_TIME_FLOAT']);
// 3. Register Composer Autoloader
if (file_exists(BASEPATH . '/vendor/autoload.php')) {
    require_once BASEPATH . '/vendor/autoload.php';
} else {
    die("Vendor folder gak ketemu. Jalanin 'composer install' dulu bre.");
}

set_exception_handler([\Jtech\Debug\ErrorHandler::class, 'handle']);
set_error_handler(function ($level, $message, $file, $line) {
    if (error_reporting() & $level) {
        throw new \ErrorException($message, 0, $level, $file, $line);
    }
});

// 4. Load Global Helpers (Opsional)
// Kalau lo gak load helper lewat composer.json, load manual disini
if (file_exists(BASEPATH . '/core/helpers.php')) {
    require_once BASEPATH . '/core/helpers.php';
}

// 5. Run The Application
// Kita cuma perlu require file bootstrap, karena di dalamnya sudah ada ->run()
// yang otomatis menangkap request, memproses, dan mengirim response lalu exit.
require_once BASEPATH . '/bootstrap/app.php';
