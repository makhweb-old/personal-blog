<?php 
use RainLab\Blog\Models\Post;use Makhweb\Lights\Models\Comment;class Cms5e74f0e446852076140806_5fc20e4ab327d03120ca5545fbfd89f0Class extends Cms\Classes\PageCode
{


public function onStart()
{
    if(request()->isMethod('post')){
        request()->validate([
            'content' => 'required|max:255'
        ]);
        Comment::create([
            'content' => request()->content,
            'post_id' => $this->param('id'),
            'user_id' => Auth::id(),
            'replied_to' => request()->replied_to
        ]);
        
        return redirect()->back();
    }
    
    $this['post'] = Post::findOrFail( $this->param('id') )->load('comments');
}
public function onEnd()
{
    //$this->addJs([
    //    'assets/js/hljs/vendor.js',
    //    'assets/js/hljs/app.js'
    //]);
    
    $this->addJs('assets/js/hljs/vendor.js');
    $this->addJs('assets/js/hljs/app.js');
    
    $this->addCss(
        'assets/css/hljs/monokai-sublime.css'
    );
    
    $this->page->title = $this->post->title;
}
}
