<?php namespace NielsVanDenDries\Developmenttoolkit\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Bugs extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manager', 
        'Bugs' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Developmenttoolkit', 'main-menu-item', 'side-menu-item3');
    }
}
