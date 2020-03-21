<?php 
class Cms5e74f6b70b1cb695108783_58ec04ed0ffaf8e46bffc7299389adc7Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $rules = [
        'email' => 'required|email|max:30|unique:users,email',
        'username' => 'required|min:5|max:20|unique:users,username',
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
        
        return redirect('/');
    }
}
}
