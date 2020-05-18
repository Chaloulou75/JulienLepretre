->nullable()->change()<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('auteur');
            $table->text('soustitre1')->nullable()->change();            
            $table->text('description')->nullable()->change();
            $table->text('soustitre2')->nullable()->change();
            $table->text('content');
            $table->string('photoPost')->nullable();
            $table->string('photoPostUrl')->nullable();
            $table->string('lienYoutube')->nullable();            
            $table->string('lienInstagram')->nullable();
            $table->string('lienFacebook')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
