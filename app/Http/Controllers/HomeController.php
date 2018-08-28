<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /*
    cookie设置
     */
    public function set()
    {
        //设置
        //php原生设置cookie的方法
        // setcookie('name','guanhui',time()+3600,'');时间单位是秒钟
        \Cookie::queue('name','zhifeng',10);//时间为分钟
        // return response('<p>我是响应体</p>')->withCookie('class','lamp207',10);
        
        // 读取
        // GET /HTTP/1.1
        // Host:loclahost
        // Cookie:name=haiyan;phone=chuizi
        //.....
        // $name = \Cookie::get('name');
        // dd($name);
    }

    public function flash()
    {
        // \Session::flash('info','恭喜您,添加成功');
        return redirect('/get-flash')->with('info','添加成功');
    }

    public function getFlash()
    {
        // echo \Session::get('info');
        return view('admin');
    }

    public function user()
    {
        return view('user');
    }
    public function insert()
    {
        // echo 'ok';
        //表单验证
        if(empty($_POST['username']) || strlen($_POST['username']) < 6 || strlen($_POST['username']) > 20){
            \Session::flash('error','用户名格式不正确');
            return back()->withInput();
        }
    }

    public function response()
    {
        //普通字符串
        // return 'i love you';
        // return '<span>这就是爱</span>';
        
        //返回json
        // return response()->json(['name'=>'xiaohign','age'=>32]);
        
        //返回模板
        return view('view');
        
        //下载
        // return response()->download('./ai.mini - 遇 - 复制 .mp3');

    }
    /*试图*/
    public function views()
    {
        return view('user.add',[
            'title'=>'第一次接触',
            'content'=>'山东发大水了',
            'username'=>'admin',
            'page'=>'<a href="">1</a><a href="">2</a>'
            ]);
    }
    /*创建页面1*/
    public function page1()
    {
        return view('page1');
    }
    /*创建页面2*/
     public function page2()
    {
        return view('page2');
    }
    /*控制*/
    public function control()
    {
        return view('control',[
            'isVip'=>true,
            'classmates'=>[
                '世显',
                '李阔',
                '姚康'
            ]
        ]);
    }
}
