<?php namespace NielsVanDenDries\Developmenttoolkit;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['Inetis.ListSwitch'];

    public function pluginDetails()
    {
        return [
            'name' => 'Development Toolkit',
            'description' => 'This plugin is made by NvandenDries.nl.\nIt is a very simple tracker for Projects, Roadmaps and Bugs.',
            'author' => 'Niels van den Dries',
            'icon' => 'oc-icon-gears',
            'homepage' => 'https://nvandendries.nl'
        ];
    }

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}
