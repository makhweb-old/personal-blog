<?php 
use RainLab\Blog\Models\Post;class Cms5e6fd242ee9f0083078477_73700a05fc9957cc9b2f7339500bcb51Class extends Cms\Classes\PageCode
{

public function onStart()
{
    $this['post'] = Post::find( $this->param('id') );
}
}
