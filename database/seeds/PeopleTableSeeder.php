<?php
use App\People;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
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
                'id' =>1,
                'identity' => '24549758',
                'name' => 'Luis',
                'last_name' => 'Rodriguez',
                'address' => 'por ahi',
                'phone' => '04245978943',

                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        );

        People::insert($data);
    }
}
