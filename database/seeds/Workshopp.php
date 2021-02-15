<?php

use Illuminate\Database\Seeder;

class Workshopp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Workshop::class, 10)->create();
    }
}
