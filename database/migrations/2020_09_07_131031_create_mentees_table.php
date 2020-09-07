<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentees', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('industry',100);
            $table->string('company',100)->nullable();
            $table->string('title',100)->nullable();
            $table->string('location',100)->nullable();
            $table->enum('experience',['junior','mid-level','senior'])->nullable();
            $table->text('bio', 1000)->nullable();
            $table->string('contact_email',100)->nullable();
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
        Schema::dropIfExists('mentees');
    }
}
