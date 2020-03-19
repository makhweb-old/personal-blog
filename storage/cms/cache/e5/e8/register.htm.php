<?php 
class Cms5e731fc2ecbcd166667406_76efae100e46b8de730a2b6a67ad428fClass extends Cms\Classes\PageCode
{
public function onInit()
{
    if(Auth::check()){
        abort(400, "You already in the system!");
    }
}
public function onStart()
{
    $rules = [
        'email' => 'required|email|max:30',
        'username' => 'required|min:5|max:20',
        'name' => 'required|min:8|max:30',
        'password' => 'required|min:8|max:20'
    ];

    if(request()->isMethod('post')){
        $validator = Validator::make(Input::all(), $rules);
        
        if($validator->fails()){
            $this['errors'] = $validator->errors();
            $this['input'] = Input::all();
            return false;
        }
        
        $user = Auth::register([
            'email' => Input::get('email'),
            'username' => Input::get('username'),
            'name' => Input::get('name'),
            'password' => Input::get('password'),
            'password_confirmation' => Input::get('password')
        ], true);
        
        Auth::login($user);
        
        redirect('/');
    }
}
}
