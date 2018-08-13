<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetTablesLowercase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('Author', 'authors');
        Schema::rename('Editor', 'editors');
        Schema::rename('Publisher', 'publishers');
        Schema::rename('Translator', 'translators');
        Schema::rename('Section', 'sections');
        Schema::rename('Source', 'sources');
        Schema::rename('Edits_section', 'editor_section');
        Schema::rename('Edits_source', 'editor_source');
        Schema::rename('Authors_section', 'author_section');
        Schema::rename('Authors_source', 'author_source');
        Schema::rename('Publishes_source', 'publisher_source');
        Schema::rename('Translates_source', 'source_translator');
        Schema::rename('Translates_section', 'section_translator');
        Schema::rename('Section_keywords', 'keywords_section');
        Schema::rename('Source_keywords', 'keywords_source');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('authors', 'Author');
        Schema::rename('editors', 'Editor');
        Schema::rename('publishers', 'Publisher');
        Schema::rename('translators', 'Translator');
        Schema::rename('sections', 'Section');
        Schema::rename('sources', 'Source');
        Schema::rename('editor_section', 'Edits_section');
        Schema::rename('editor_source', 'Edits_source');
        Schema::rename('author_section', 'Authors_section');
        Schema::rename('author_source', 'Authors_source');
        Schema::rename('publisher_source', 'Publishes_source');
        Schema::rename('source_translator', 'Translates_source');
        Schema::rename('section_translator', 'Translates_section');
        Schema::rename('keywords_section', 'Section_keywords');
        Schema::rename('keywords_source', 'Source_keywords');
    }
}
