<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BankTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(InvoiceTableSeeder::class);
    }
}
