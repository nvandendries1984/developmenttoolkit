<?php namespace NielsVanDenDries\Developmenttoolkit\Models;
// This plugin is made by NvandenDries.nl.
// It is a very simple tracker for Projects, Roadmaps and Bugs.

use Model;

/**
 * Model
 */
class Bug extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_developmenttoolkit_bugs';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'bug_files' => \System\Models\File::class
    ];
}
