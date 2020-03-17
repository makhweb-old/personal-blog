<?php 
use RainLab\Blog\Models\Post;class Cms5e70430fad110085848658_e97ce6f969cc186aede4366ba902a1f1Class extends Cms\Classes\PageCode
{

public function onStart()
{
    $this['post'] = Post::find( $this->param('id') );
}
}
