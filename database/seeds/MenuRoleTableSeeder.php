<?php

use Illuminate\Database\Seeder;

class MenuRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MenuRole::class, 1)->create();
    }
}
