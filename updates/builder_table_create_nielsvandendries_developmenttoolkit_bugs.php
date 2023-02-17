<?php namespace NielsVanDenDries\Developmenttoolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesDevelopmenttoolkitBugs extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_developmenttoolkit_bugs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('bug_title');
            $table->string('bug_reporter');
            $table->string('bug_location');
            $table->text('bug_summary');
            $table->text('bug_log');
            $table->text('bug_reproduction');
            $table->text('bug_results');
            $table->string('bug_url');
            $table->boolean('bug_screenshots');
            $table->date('bug_duedate');
            $table->string('bug_severity');
            $table->string('bug_priority');
            $table->string('bug_assingnee');
            $table->string('bug_tags');
            $table->string('bug_archive');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_developmenttoolkit_bugs');
    }
}
