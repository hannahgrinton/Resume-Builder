<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume-items', function (Blueprint $table) {
            $table->bigIncrements('itemId');
            $table->string('name', 150); //name of resume item
            $table->string('description', 250); //description of resume item
            $table->string('category'); //catgory number (1-4, representing skills, work, education, and awards, respectively)
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
        Schema::dropIfExists('resume-items');
    }
}
