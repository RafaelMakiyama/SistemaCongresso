<?php


use Illuminate\Database\Seeder;

class WorkshopClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\WorkshopClasses::class, 10)->create();
    }
}
