()<?php

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
            $table->text('descriptionCourte');
            $table->text('descriptionComplete');
            $table->string('photoProgramme')->nullable();
            $table->string('photoProgUrl')->nullable();
            $table->string('image')->nullable();
            $table->string('image2')->nullable();
            $table->string('imageurl')->nullable();
            $table->string('image2url')->nullable();            
            $table->decimal('prixPesos', 8, 2);
            $table->decimal('prixDollar', 8, 2);
            $table->string('lienYoutube')->nullable();            
            $table->string('lienTiendup')->nullable();
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
