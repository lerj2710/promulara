<?php

use App\Events;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
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
                'categories_id' => '1',
                'description' => 'eventos',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'=>2,
                'categories_id' => '1',
                'description' => 'geventos infantiles',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        );
        Events::insert($data);
      }

}
