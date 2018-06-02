<?php

use Illuminate\Database\Seeder;
use  App\status;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'id'=>1,
                'status' => 'Activo',

            ]
        );

       status::insert($data);
    }
}
