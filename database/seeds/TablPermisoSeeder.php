<?php

use App\Models\Permiso;
use Illuminate\Database\Seeder;

class TablPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permiso::class,50)->create();
    }
}
