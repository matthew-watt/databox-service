<?php

use Illuminate\Database\Seeder;

class ObjectTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ObjectTemplate::class, 30)->create();
    }
}
