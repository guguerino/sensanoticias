<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Noticias.
 *
 * @author  The scaffold-interface created at 2019-01-07 10:01:31pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Noticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('noticias',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('Titulo');
        
        $table->longText('Conteudo');
        
        $table->date('Noticas');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('noticias');
    }
}
