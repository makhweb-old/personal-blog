<?php 
use RainLab\Blog\Models\Category;class Cms5e74eabfd82a7930778320_60eb7648901a38f8e2781b626f3b57a8Class extends Cms\Classes\PageCode
{

public function onStart()
{
    $this['category'] = Category::findOrFail( $this->param('id') )->load('posts.comments');
}
}
