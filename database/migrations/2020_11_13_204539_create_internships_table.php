<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('category_id');
            $table->string('internship_title');
            $table->string('Vacancy');
            $table->longText('context')->nullable();
            $table->longText('responsibility')->nullable();
            $table->string('status');
            $table->string('workplace');
            $table->longText('requirements');
            $table->longText('arequirements')->nullable();
            $table->string('location');
        $table->string('salary');
            $table->string('dateline');
            $table->string('change_status')->default('pending');
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
        Schema::dropIfExists('internships');
    }
}
