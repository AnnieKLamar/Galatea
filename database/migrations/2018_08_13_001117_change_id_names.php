<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeIdNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sources', function (Blueprint $table) {
            $table->renameColumn('source_id', 'id'); // Drops index 'geo_state_index'
        });

        Schema::table('editors', function (Blueprint $table) {
            $table->renameColumn('editor_id', 'id'); // Drops index 'geo_state_index'
        });

        Schema::table('publishers', function (Blueprint $table) {
            $table->renameColumn('publisher_id', 'id'); // Drops index 'geo_state_index'
        });

        Schema::table('translators', function (Blueprint $table) {
            $table->renameColumn('translator_id', 'id'); // Drops index 'geo_state_index'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sources', function (Blueprint $table) {
            $table->renameColumn('id', 'source_id'); // Drops index 'geo_state_index'
        });

        Schema::table('editors', function (Blueprint $table) {
            $table->renameColumn('id', 'editor_id'); // Drops index 'geo_state_index'
        });

        Schema::table('publishers', function (Blueprint $table) {
            $table->renameColumn('id', 'publisher_id'); // Drops index 'geo_state_index'
        });

        Schema::table('translators', function (Blueprint $table) {
            $table->renameColumn('id', 'translator_id'); // Drops index 'geo_state_index'
        });
    }
}
