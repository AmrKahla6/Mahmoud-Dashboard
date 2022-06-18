<?php

use App\Models\Offer;
use App\Models\Provider;
use App\Models\Request;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(AdminDatabaseSeeder::class);
        $this->call(DepartmentSeeder::class);
        factory(User::class, 100)->create();
        factory(Provider::class, 100)->create();
        factory(Offer::class, 100)->create();
//        factory(Request::class, 100)->create();
    }
}
