<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaximilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faximiles', function (Blueprint $table) {
            $table->id();
            $table->string('no_agenda',80);
            $table->string('no_dokumen',80);
            $table->string('asal_dokumen',128);
            $table->string('perihal',255);
            $table->string('file',50);
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');
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
        Schema::dropIfExists('faximiles');
    }
}
