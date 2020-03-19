<?php 
class Cms5e73221f7aed9033783056_8fa4e4ca31e79ad8758328fce11bef51Class extends Cms\Classes\PageCode
{
public function onInit()
{
    if(Auth::check()){
        abort(400, "You already in the system!");
    }
}
}
