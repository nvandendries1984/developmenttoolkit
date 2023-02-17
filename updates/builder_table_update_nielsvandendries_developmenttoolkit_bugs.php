<?php namespace NielsVanDenDries\Developmenttoolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesDevelopmenttoolkitBugs extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_developmenttoolkit_bugs', function($table)
        {
            $table->boolean('bug_screenshots')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_developmenttoolkit_bugs', function($table)
        {
            $table->boolean('bug_screenshots')->nullable(false)->change();
        });
    }
}
