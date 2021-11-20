<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'username' => 'Admin',
      'email' => 'admin@gmail.com',
      'password' => bcrypt('katalog001'),
      'role' => 'admin'
    ]);
    User::create([
      'username' => 'Damar',
      'email' => 'damar@gmail.com',
      'password' => bcrypt('damar'),
      'role' => 'user'
    ]);
  }
}
