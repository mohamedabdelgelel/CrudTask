<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableDataSeeder::class);

        \App\Models\Image::factory(5)->create();
        \App\Models\Company::factory(5)->create();
        \App\Models\Employee::factory(5)->create();

    }
}
