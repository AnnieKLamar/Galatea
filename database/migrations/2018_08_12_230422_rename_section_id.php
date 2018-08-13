<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameSectionId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Section', function(Blueprint $table) {
            $table->renameColumn('section_id', 'id');
        });

        Schema::table('Author', function(Blueprint $table) {
            $table->renameColumn('author_id', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Section', function(Blueprint $table) {
            $table->renameColumn('id', 'section_id');
        });

        Schema::table('Author', function(Blueprint $table) {
            $table->renameColumn('id', 'author_id');
        });
    }
}
