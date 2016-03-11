<?php

use Illuminate\Database\Seeder;

class InsertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\RioBoatShow\Entities\Insert::class, 10)->create();
    }
}
