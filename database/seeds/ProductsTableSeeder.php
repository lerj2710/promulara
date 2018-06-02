<?php
use App\products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
                'id' => 1,
                'categories_id' => '1',
                'code' => '1',
                'name_product' => 'brinca,brinca',
                'image' => 'brinca.png',
                'stock' => '100',
                'status_id' => '1',
                'detail' => '1',
                'sale_price' => '10'
            ]
        );

        products::insert($data);
    }
}