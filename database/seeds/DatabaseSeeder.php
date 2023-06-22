<?php

use App\Models\Recipienter;
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
        $this->call(AdminTableSeeder::class);
        $this->call(ProductColumnTableSeeder::class);
        $this->call(MasterTableSeeder::class);

        factory(Recipienter::class)->create([
            'email' => 'recipienter@gmail.com'
        ]);
    }
    
}
