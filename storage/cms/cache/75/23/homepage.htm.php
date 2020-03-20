<?php 
use RainLab\Blog\Models\Post;class Cms5e74ea5e9c411406174300_20c2fbe8119e8d1a6476d8b0dd69baa4Class extends Cms\Classes\PageCode
{

public function onStart()
{
    $data = Post::with(['categories'])->withCount('comments')->take(50)->get();

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
