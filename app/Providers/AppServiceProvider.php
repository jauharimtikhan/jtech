<?php

namespace App\Providers;

use Jtech\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  public function boot()
  {
    date_default_timezone_set('Asia/Jakarta');
  }
}
