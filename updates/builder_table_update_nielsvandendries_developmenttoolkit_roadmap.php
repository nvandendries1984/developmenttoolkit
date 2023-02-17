<?php namespace NielsVanDenDries\Developmenttoolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesDevelopmenttoolkitRoadmap extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_developmenttoolkit_roadmap', function($table)
        {
            $table->string('roadmap_name');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_developmenttoolkit_roadmap', function($table)
        {
            $table->dropColumn('roadmap_name');
        });
    }
}
