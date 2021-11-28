<?php

use App\Models\MovingHouse;
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
        $this->call(CommonFreightSeeder::class);
        $this->call(EnterpriseFreightSeeder::class);
        $this->call(MovingHouseSeeder::class);
        $this->call(FeedbackSeeder::class);
    }
}
