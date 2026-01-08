<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jtech\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    User::create([
      'name' => 'Admin',
      'email' => 'admin@test.com',
      'password' => Hash::make('admin')
    ]);
  }
}
