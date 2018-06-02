<?php
use App\Category;
use Illuminate\Database\Seeder;
class CategoriesTableSeeder extends Seeder
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
                'category' => 'eventos',
                'description' => 'Eventos infantiles',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        );

        Category::insert($data);
    }
}
