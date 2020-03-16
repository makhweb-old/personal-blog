<?php namespace Makhweb\Lights;

use Backend;
use System\Classes\PluginBase;

/**
 * Lights Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Lights',
            'description' => 'No description provided yet...',
            'author'      => 'Makhweb',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Makhweb\Lights\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'makhweb.lights.some_permission' => [
                'tab' => 'Lights',
                'label' => 'Some permission'
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'readingTime' => [$this, 'readingTime'],
            ]
        ];
    }

    public function readingTime( $content, $wpm = 250 ) 
    {
        $clean_content = strip_tags( $content );
        $word_count = str_word_count( $clean_content );
        $time = ceil( $word_count / $wpm );
        return $time;
    }


    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'lights' => [
                'label'       => 'Lights',
                'url'         => Backend::url('makhweb/lights/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['makhweb.lights.*'],
                'order'       => 500,
            ],
        ];
    }
}
