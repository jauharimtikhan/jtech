<?php

use Jtech\Bootstrap;

return (new Bootstrap())
    ->create() // Load config, DB, View, Session
    ->withRouting(fn() => [
        ROUTESPATH . "/web.php" // Load routes
    ])->run();
