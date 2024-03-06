<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Ramsey\Uuid\Rfc4122\UuidV4;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::create([
      'id' => UuidV4::uuid4()->toString(),
      'firstname' => 'Nathaniel',
      'lastname' => 'Obeng',
      'role' => 'Developer',
      'title' => 'Mr.',
      'email' => 'nathanielobeng0@gmail.com',
      'contact' => '0503894555',
      'password' => Hash::make('12345678')
    ]);
  }
}
