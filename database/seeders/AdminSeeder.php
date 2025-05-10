<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}
use App\Models\User;
 
class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create(['is_admin' => true]); 
    }
}