<?php namespace Makhweb\Lights\Models;

use Model;
use RainLab\User\Models\User;
use RainLab\Blog\Models\Post;

/**
 * Comment Model
 */
class Comment extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'makhweb_lights_comments';

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'id', 'content', 'post_id', 'user_id', 'replied_to'
    ];

    /**
     * @var array Eager loading relationships
     */
    protected $with = [
        'user',
        'post',
        'comments'
    ];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [
        'replied_to'
    ];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

     /*
     * Validation
     */
    public $rules = [];


    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'comments' => [
            self::class, 'key' => 'replied_to'
        ]
    ];
    public $belongsTo = [
        'user' => User::class,
        'post' => Post::class
    ];

    /**
     * Scopes
     */
    public function scopeIsNotNested($query)
    {
        return $query->where('replied_to', '=', '');
    }
}