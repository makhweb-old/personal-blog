<?php 
use RainLab\Blog\Models\Post;class Cms5e730879bc7f1680013440_2495a18445afb5b6cb5f22c91912ad1bClass extends Cms\Classes\PageCode
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
