<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatuIdToWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('websites', function (Blueprint $table) {
            $table->unsignedBigInteger('statu_id')->nullable();
            
            $table->foreign('statu_id')
                ->references('id')
                ->on('status')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('websites', function (Blueprint $table) {
            //
        });
    }
}
