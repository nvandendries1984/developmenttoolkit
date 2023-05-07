<?php namespace NielsVanDenDries\Developmenttoolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesDevelopmenttoolkitRoadmap extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_developmenttoolkit_roadmap', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('roadmap_phase');
            $table->string('roadmap_milestone');
            $table->string('roadmap_name');
            $table->text('roadmap_tasks');
            $table->text('roadmap_dependencies');
            $table->text('roadmap_keyindividuals');
            $table->date('roadmap_wishdate');
            $table->string('roadmap_archive');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_developmenttoolkit_roadmap');
    }
}
