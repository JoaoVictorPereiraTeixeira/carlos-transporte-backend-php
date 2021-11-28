<?php

use Illuminate\Database\Seeder;

class CommonFreightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CommonFreight::class, 100)->create();
    }
}
