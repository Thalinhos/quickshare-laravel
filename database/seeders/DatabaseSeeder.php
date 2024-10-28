<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Budget;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@hotmail.com',
            'password' => Hash::make('woodson8-admin')

        ]);

        Customer::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '1234567890',
            'last_job_date' => '2024-01-01',
            'description' => 'Regular customer.',
            'obs' => 'Prefers email contact.',
            'work_count' => 5,
            'is_client' => true,
        ]);

        Budget::create([
        'client_name' => 'John Doe',
        'is_client' => true,
        'address' => 'ernestina amaro torelly, 203',
        'description'=> 'casa em frente a creche',
        'datetime_avaliable' => '28/10 até 31/10, qualquer hora pela manhã',
        'budget_progress' => 'fechado',
        ]);
    }
}
