<?php


use App\Model\SiteContato;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('site_contatos')->insert([
//            'name' => 'Sistema SG',
//            'phone' => '(12) 99258-4590',
//            'email' => 'sistema@site_contatos.com',
//            'reason_contact' => 2,
//            'message' => 'Seja bem vindo ao sistema Super Gestão'
//        ]);

        factory(SiteContato::class, 100)->create();
    }
}
