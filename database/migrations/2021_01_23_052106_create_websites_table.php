<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('domain_authority');
            $table->integer('page_authority');
            $table->double('price');
            $table->unsignedBigInteger('link_type_id')->nullable();
            $table->unsignedBigInteger('post_content_id')->nullable();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('link_type_id')
                    ->references('id')
                    ->on('link_types')
                    ->onDelete('set null')
                    ->onUpdate('cascade');

            $table->foreign('post_content_id')
                    ->references('id')
                    ->on('post_contents')
                    ->onDelete('set null')
                    ->onUpdate('cascade');

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
        Schema::dropIfExists('websites');
    }
}
