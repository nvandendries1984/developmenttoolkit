<?php namespace NielsVanDenDries\Developmenttoolkit\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Roadmap extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manager', 
        'roadmap' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Developmenttoolkit', 'main-menu-item', 'side-menu-item2');
    }
}
