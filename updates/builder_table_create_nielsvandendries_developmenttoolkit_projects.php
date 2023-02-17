<?php namespace NielsVanDenDries\Developmenttoolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesDevelopmenttoolkitProjects extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_developmenttoolkit_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('project_owner');
            $table->string('project_employees');
            $table->date('project_start');
            $table->date('project_deadline');
            $table->string('customer_name');
            $table->string('customer_number');
            $table->string('customer_contact');
            $table->text('project_goal');
            $table->text('project_requirements');
            $table->text('project_risks');
            $table->text('project_tasks');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('project_archive');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_developmenttoolkit_projects');
    }
}
