<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('cliente', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('id_login', 40);
        //     $table->string('nome', 255);
        //     $table->string('cnpj', 255);
        //     $table->string('cpf', 255);
        //     $table->string('email', 255)->unique();
        //     $table->string('senha', 255);
        //     $table->smallInteger('tp_plan');
        //     $table->smallInteger('tp_fee');
        //     $table->smallInteger('tp_coin');
        //     $table->smallInteger('fl_info_resultados');
        //     $table->timestamp('data_cadastro');
        //     $table->timestamp('data_atualizacao');
        //     $table->string('google_auth_code', 100);
        //     $table->integer('referral_id', 11);
        //     $table->string('nome', 255);
        //     $table->string('nome', 255);
        // });
        
        /*
            DROP COLUMNS
        */
        Schema::table('cliente',function(Blueprint $table){

            $table->dropColumn('tp_pessoa');
            $table->dropColumn('cep');
            $table->dropColumn('endereco');
            $table->dropColumn('numero');
            $table->dropColumn('estado');
            $table->dropColumn('cidade');
            $table->dropColumn('bairro');
            $table->dropColumn('complemento');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente', function (Blueprint $table) {
            //
        });
    }
}
