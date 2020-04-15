<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('slug')->unique();
            $table->text('descriptionGlobale');
            $table->string('image')->nullable;
            $table->string('image2')->nullable;            
            $table->decimal('prix6sesionesPesos', 8, 2);
            $table->decimal('prix12sesionesPesos', 8, 2);
            $table->decimal('prix6sesionesEuros', 8, 2);
            $table->decimal('prix12sesionesEuros', 8, 2);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programmes');
    }
}
