<?php
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
                'role' => 'admin',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        );

        Role::insert($data);
    }

}
