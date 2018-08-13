<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePivotTables extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('Author_Section', 'Authors_section');
        Schema::rename('Author_Source', 'Authors_source');

        Schema::rename('Editor_Section', 'Edits_section');
        Schema::rename('Editor_Source', 'Edits_source');

        Schema::rename('Translator_Section', 'Translates_section');
        Schema::rename('Translator_Source', 'Translates_source');

        Schema::rename('Publisher_Source', 'Publishes_source');
    }

}
