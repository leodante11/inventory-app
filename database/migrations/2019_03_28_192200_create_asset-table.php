<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('tag', 20);
            $table->int('type', 11);
            $table->int('brand', 11);
            $table->int('status', 11);
            $table->int('model', 11);
            $table->char('serial', 255);
            $table->char('product_no', 100);
            $table->int('os', 11);
            $table->int('quantity', 11);
            $table->date('arrival_date');
            $table->date('arrival_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset');
    }
}
