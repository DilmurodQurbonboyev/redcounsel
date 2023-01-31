<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contact_id');
            $table->string('address')->nullable();
            $table->string('working_time')->nullable();
            $table->string('reception')->nullable();
            $table->string('lunch')->nullable();
            $table->string('landmark')->nullable();
            $table->string('transport')->nullable();
            $table->string('weekend')->nullable();
            $table->text('press_service')->nullable();
            $table->text('support')->nullable();
            $table->string('locale')->index();
            $table->unique(['contact_id', 'locale']);
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_translations');
    }
}
