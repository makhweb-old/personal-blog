<?php 
use RainLab\Blog\Models\Post;class Cms5e703282adbe6289092644_8628b8dfd4563a5f5c5aebd211b019d6Class extends Cms\Classes\PageCode
{

public function onStart()
{
    $data = Post::with('categories')->take(50)->get();

    $this['pinnedPost'] = $data->filter(function($post){
        foreach($post->categories as $category){
            if($category->slug === 'pinned'){
                return true;
            }
        }
        return false;
    })->sortByDesc('published_at')->first();
    
    $skips[] = optional($this['pinnedPost'])->id;

    $posts = $data->filter(function($post) use ($skips){
        foreach($skips as $skip){
            if($post->id === $skip){
                return false;
            }
        }
        return true;
    });

    $this['newPosts'] = $posts->take(4);
    $this['otherPosts'] = $posts->slice(4);
}
}
