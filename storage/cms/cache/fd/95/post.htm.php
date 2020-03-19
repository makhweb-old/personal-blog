<?php 
use RainLab\Blog\Models\Post;class Cms5e7305bb7e28b644233320_f332fd44f232113f50837a5d0bbc6c15Class extends Cms\Classes\PageCode
{

public function onStart()
{
    $this['post'] = Post::find( $this->param('id') );
}
public function onEnd()
{
    $this->page->title = $this->post->title;
}
}
