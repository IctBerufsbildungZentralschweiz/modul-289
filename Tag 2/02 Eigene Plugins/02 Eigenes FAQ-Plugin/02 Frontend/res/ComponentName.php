<?php namespace Author\Plugin\Components;

use Cms\Classes\ComponentBase;

class ComponentName extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Bezeichnung der Komponente',
            'description' => 'Beschreibung der Komponente'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
