<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume-relations', function (Blueprint $table) {
            $table->bigIncrements('relId');
            $table->unsignedBigInteger('genId');
            $table->foreign('genId')->references('genId')->on('generated-resumes');
            $table->unsignedBigInteger('itemId');
            $table->foreign('itemId')->references('itemId')->on('resume-items');
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
        Schema::dropIfExists('resume-relations');
    }
}
