<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id'=>1,
            'user' => 'admin',
            'email'=> 'admin@gmail.com',
            'password' =>  Hash::make('123456'),
            'role_id' => '1',
            'status_id' => '1',
            'people_id' => '1',

        ];
        User::insert($data);
    }
}
