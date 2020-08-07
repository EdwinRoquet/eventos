<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividads')->insert([
            'nombre' => 'Homenaje cívico',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
       ]);
        DB::table('actividads')->insert([
            'nombre' => 'Actividades Ludicas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
       ]);
        DB::table('actividads')->insert([
            'nombre' => 'Proyección de documentales',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
       ]);
        DB::table('actividads')->insert([
            'nombre' => 'Homenaje Cívico',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
       ]);
        DB::table('actividads')->insert([
            'nombre' => 'Dialogo Juvenil',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
       ]);
    }
}





