<?php

use App\Bank;
use Illuminate\Database\Seeder;
class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array(
            [
                'id'=>1,
                'bank' => 'Banco Venezuela',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'id'=>2,
                'bank' => 'Banesco',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        );

        Bank::insert($data);
    }
}
