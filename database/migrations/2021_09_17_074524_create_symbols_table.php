<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymbolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symbols', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('symbol_name');
            $table->string('symbol_description');
            $table->float('bid');
            $table->integer('quantity1');
            $table->float('ask');
            $table->integer('quantity2');
            $table->float('cost');
            $table->float('strike');
            $table->float('last_trade');
            $table->float('percent');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('symbols');
    }
}
