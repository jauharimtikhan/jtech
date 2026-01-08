<?php

return [
  'default' => env('DB_DRIVER') ?? 'mysql',

  'connections' => [
    'mysql' => [
      'driver' => 'mysql',
      'host' => env('DB_HOST') ?? '127.0.0.1',
      'database' => env('DB_NAME') ?? 'test',
      'username' => env('DB_USER') ?? 'root',
      'password' => env('DB_PASS') ?? '',
      'charset' => 'utf8mb4',
      'collation' => 'utf8mb4_unicode_ci',
      'prefix' => '',
    ],
  ],
];
