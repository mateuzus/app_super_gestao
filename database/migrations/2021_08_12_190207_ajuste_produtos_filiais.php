<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criando a tabela de filiais
        Schema::create('filiais', function (Blueprint $table){
            $table->id();
            $table->string('branch', 30);
            $table->timestamps();
        });

        //criando a table de produtos_filiais
        Schema::create('produto_filiais', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('sale_price', 8,2);
            $table->integer('minimum_stock');
            $table->integer('maximum_stock');
            $table->timestamps();

            //foreign keys muitos para muitos
            $table->foreign('branch_id')->references('id')->on('filiais');
            $table->foreign('product_id')->references('id')->on('produtos');
        });

        Schema::table('produtos', function (Blueprint $table){
            $table->dropColumn(['sale_price', 'minimun_stock', 'maximun_stock']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table){
            $table->decimal('sale_price', 8, 2);
            $table->integer('minimum_stock');
            $table->integer('maximum_stock');
        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');
    }
}
