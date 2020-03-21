<?php 
class Cms5e74f6af72aec569653134_7e800450b30a999f53e08ab1e9b612cbClass extends Cms\Classes\PageCode
{
public function onStart()
{
    Auth::logout();
	return Redirect::to('/');
}
}
