<?php

use Illuminate\Database\Seeder;

class EnterpriseFreightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\EnterpriseFreight::class, 100)->create();
    }
}
