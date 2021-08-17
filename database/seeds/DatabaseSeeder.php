<?php

use App\Fornecedor;
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
         $this->call(FornecedorSeeder::class);
         $this->call(SiteContatoSeeder::class);
    }
}
