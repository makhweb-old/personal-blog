<?php 
class Cms5e74f6b2c3d9f397822361_f35412957baab3b664ac52101f8d96afClass extends Cms\Classes\PageCode
{
public function onInit()
{
    if(Auth::check()){
        return redirect('/');
    }
}
public function onStart()
{
    $rules = [
        'username' => 'required|min:5|max:20',
        'password' => 'required|min:8|max:20'
    ];

    if(request()->isMethod('post')){
        $credentials = request()->only('username', 'password');
        $validator = Validator::make($credentials, $rules);
        
        if($validator->fails()){
            $this['errors'] = $validator->errors();
            return false;
        }
        
        try{
            Auth::attempt($credentials, request()->remember);
        }catch(Exception $error){
            $this['errors'] = [
                'username' => ['The given data was invalid!']
            ];
            return false;
        }
        
        return redirect('/');
    }
}
}
