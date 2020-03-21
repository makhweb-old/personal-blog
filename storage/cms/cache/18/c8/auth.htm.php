<?php 
class Cms5e74f6af71d86742510073_9f1ee0d86de889a5d143a7484730fe37Class extends Cms\Classes\LayoutCode
{
public function onStart()
{
    if(!Auth::check()){
        return Redirect::to('/400');
    }
    $this['data'] = [
        'user' => Auth::user()
    ];
}
}
