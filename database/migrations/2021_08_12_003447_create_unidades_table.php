<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unit', 5);
            $table->string('description', 30);
            $table->timestamps();
        });
        // relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table){
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('unidades');
        });

        // relacionamento com a tabela produtos detalhes
        Schema::table('produto_detalhes', function (Blueprint $table){
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover relacionamento com a tabela produtos produtos
        Schema::table('produto_detalhes', function (Blueprint $table){
            //remover a foreign key
            $table->dropForeign('produto_detalhes_unidade_id_foreign'); //tabela_coluna_foreign
            //remover coluna unit_id
            $table->dropColumn('unidade_id');
        });
        // remover relacionamento com a tabela produtos detalhes
        //remover foreign key
        Schema::table('produtos', function (Blueprint $table){
            $table->dropForeign('produto_unidade_id_foreign');
            //remover coluna unit_id
            $table->dropColumn('unidade_id');
        });
        Schema::dropIfExists('unidades');
    }
}
