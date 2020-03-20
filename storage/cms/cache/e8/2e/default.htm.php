<?php 
class Cms5e74e7c6cf961722063012_662799b3794ebf7d3e5d9475241a06d3Class extends Cms\Classes\LayoutCode
{
public function onStart()
{
    $this['data'] = [
        'user' => Auth::user()
    ];
}
}
