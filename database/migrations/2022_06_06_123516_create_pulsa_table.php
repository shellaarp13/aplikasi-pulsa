<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pulsa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           // $table->string('Ref_Id');
            $table->float('Nominal');
            $table->string('No_Hp');
            $table->string('Provider');
            //$table->string('Status');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pulsa');
    }
};
