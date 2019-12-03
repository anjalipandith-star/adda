<?php

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
        $this->call(UserSeeder::class);
        $this->call(HeadSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(WorkerSeeder::class);
        $this->call(WorkSeeder::class);
    }
}