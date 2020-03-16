<?php 
use RainLab\Blog\Models\Post;class Cms5e6fd2476573c593328238_c75b340b4d3a53b38f95b9154e2a6b38Class extends Cms\Classes\PageCode
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
    
    $skips[] = $this['pinnedPost']->id;

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
public function readingTime( $content, $wpm = 250 ) 
{
    $clean_content = strip_shortcodes( $content );
    $clean_content = strip_tags( $clean_content );
    $word_count = str_word_count( $clean_content );
    $time = ceil( $word_count / $wpm );
    return $time;
}
}
