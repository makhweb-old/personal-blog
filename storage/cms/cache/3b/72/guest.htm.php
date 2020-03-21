<?php 
class Cms5e74f6b2c314e703574230_5aeafb27033ec5d741bcf58efdb3e11fClass extends Cms\Classes\LayoutCode
{
public function onStart()
{
    if(Auth::check()){
        return Redirect::to('/400');
    }
    $this['data'] = [
        'user' => []
    ];
}
}
