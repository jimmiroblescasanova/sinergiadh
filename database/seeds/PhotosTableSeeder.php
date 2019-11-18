<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i<=30; $i++){
            DB::table('photos')->insert([
                'nombre' => 'Evento: '.$i,
                'ruta' => 'sinergiadh-'.$i.'.jpg',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]);
        }

    }
}
