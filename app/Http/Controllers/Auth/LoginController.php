<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    protected function validator(array $data)
    {
        $messages = [
            'required'=>':attribute不能为空',
            'between' => '密码必须是6~20位之间',
        ];
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'password' => 'required|string|between:6,20',
        ],$messages);
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $account = $request->input('account');
            $password = $request->input('password');
            $remember = $request->input('remember');
            $data = $request->all();
            \Log::info($data);
            if (Auth::attempt(['username' => $account, 'password' => $password], $remember)) {
                User::where('username',$account)->update(['last_login_ip'=>\App\Components\Helper::get_client_ip(),'last_login_at'=>date('Y-m-d H:i:s')]);
                return redirect()->intended('/');
            }else if(Auth::attempt(['email' => $account, 'password' => $password], $remember)){
                User::where('email',$account)->update(['last_login_ip'=>\App\Components\Helper::get_client_ip(),'last_login_at'=>date('Y-m-d H:i:s')]);
                return redirect()->intended('/');
            }
            return redirect('login')->withInput($data)->with('msg', '账户不存在或者密码错误');
        }
        //游客死去登录
        if (Auth::guest()) {
            return view('auth.login');
        }
        //登录了的话跳到首页
        return redirect('/');
    }


    public  function logout()
    {
        if (Auth::check()) {
            Auth::logout();  //退出登录
        }
        return redirect('/login');
    }
}
