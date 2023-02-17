<?php namespace NielsVanDenDries\Developmenttoolkit\Models;
// This plugin is made by NvandenDries.nl.
// It is a very simple tracker for Projects, Roadmaps and Bugs.

use Model;

/**
 * Model
 */
class Roadmap extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_developmenttoolkit_roadmap';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
