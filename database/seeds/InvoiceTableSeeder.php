<?php
use App\Invoice;
use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
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
                'user_id' => '1',
                'number_invoice' => '10000',
                'status_id' => '1',
                'subtotal' => '1',
                'iva' => '1',
                'total' => '1'
                //'created_at' => new DateTime,
                //'updated_at' => new DateTime
            ],
            [
                'id'=>2,
                'user_id' => '1',
                'number_invoice' => '20000',
                'status_id' => '1',
                'subtotal' => '1',
                'iva' => '1',
                'total' => '1'
                //'created_at' => new DateTime,
                //'updated_at' => new DateTime
            ],
            [
                'id'=>3,
                'user_id' => '1',
                'number_invoice' => '30000',
                'status_id' => '1',
                'subtotal' => '1',
                'iva' => '1',
                'total' => '1'
                //'created_at' => new DateTime,
                //'updated_at' => new DateTime
            ]

        );
        Invoice::insert($data);
    }
}
