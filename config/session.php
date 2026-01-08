<?php
return [
  'driver'          => env('SESSION_DRIVER', 'file'), // file, database, array
  'lifetime'        => 120, // Menit
  'expire_on_close' => false,
  'encrypt'         => false,
  'files'           => STORAGEPATH . '/sessions', // Pastikan folder ini ada!
  'connection'      => null,
  'table'           => 'sessions',
  'lottery'         => [2, 100],
  'cookie'          => 'jtech_session',
  'path'            => '/',
  'domain'          => null,
  'secure'          => false,
  'http_only'       => true,
  'same_site'       => null,
];
