<?php


use App\Model\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use \Illuminate\Support\Facades\DB;



class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        //instanciando um objeto
//        $fornecedor = new Fornecedor();
//
//        $fornecedor->name = 'Fornecedor 200';
//        $fornecedor->email = 'Fornecedor@example.com';
//        $fornecedor->site = 'http://example.com';
//        $fornecedor->uf = 'SP';
//
//        Fornecedor::create([
//            'name' => 'Fornecedor 300',
//            'email' => 'fornecedor@example.com',
//            'site' => 'http://example.com',
//            'uf' => 'SP'
//        ]);

        DB::table('fornecedores')->insert([
            'name' => 'Fornecedor 400',
            'email' => 'fornecedor@example.com',
            'site' => 'http://example.com',
            'uf' => 'SP',
            'created_at' => Date::now()
        ]);
    }
}
