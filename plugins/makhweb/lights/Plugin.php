<?php namespace Makhweb\Lights;

use Backend;
use System\Classes\PluginBase;
use RainLab\Blog\Models\Post;
use RainLab\User\Models\User;
use Makhweb\Lights\Models\Comment;

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
        Post::extend(function($model){
            $model->hasMany['comments'] = [Comment::class, 'scope' => 'isNotNested'];
        });
        User::extend(function($model){
            $model->hasMany['comments'] = Comment::class;
        });
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
            ],
            'filters' => [
                'icon' => [$this, 'getIconsPath'],
            ],
        ];
    }

    /**
     * Get icons path in theme's folder
     */
    public function getIconsPath( string $icon ) : string
    {
        return url(
            "themes/makhweb/assets/icons/svg/icon-" . $icon . ".svg"
        );
    }

    /**
     * Get estimated reading time
     */
    public function readingTime( string $content, int $wpm = 250 ) : int
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
