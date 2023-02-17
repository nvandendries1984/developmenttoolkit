<?php namespace NielsVanDenDries\Developmenttoolkit\Models;
// This plugin is made by NvandenDries.nl.
// It is a very simple tracker for Projects, Roadmaps and Bugs.

use Model;

/**
 * Model
 */
class Projects extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_developmenttoolkit_projects';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'project_files' => \System\Models\File::class
    ];
}
