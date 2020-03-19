<?php 
class Cms5e7320d05f487023514383_fc55acedabb9b01f5a2f0948c663d22dClass extends Cms\Classes\LayoutCode
{
public function onStart()
{
    $this['data'] = [
        'user' => Auth::user()
    ];
}
}
