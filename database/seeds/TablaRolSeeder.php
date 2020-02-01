<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class tablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()->format("y-m-d H:i:s")
            ]);    
        }

    }
}