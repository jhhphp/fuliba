<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'required'=>':attribute不能为空',
            'unique'=>'该:attribute已经被注册',
            'email'=>'请填写正确的邮箱',
            'between' => '密码必须是6~20位之间',
            'confirmed' => '新密码和确认密码不匹配'
        ];
        return Validator::make($data, [
            'username' => 'required|string|max:255|unique:users',
            'nickname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|between:6,20|confirmed',
        ],$messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function reg(Request $request)
    {
        if($request->isMethod('post')){
            $username = $request->input('username');
            $nickname = $request->input('nickname');
            $email = $request->input('email');
            $email_public = $request->input('email_public',0);
            $password = $request->input('password');
            $data = $request->all();
            $validator = $this->validator($data);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($data);
            }
            $data = [
                'username'      =>  $username,
                'nickname'      =>  $nickname,
                'email'         =>  $email,
                'email_public'  =>  $email_public,
                'password'      => Hash::make($password),
            ];
            $user = User::create($data);
            Auth::login($user);
            return redirect('/');
        }
        return view('auth.reg');
    }
}
