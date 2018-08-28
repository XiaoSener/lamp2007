<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MySqlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo 'aaa';
        // $data = DB::table('news')->pluck('username');
        // $res = DB::
        // $data = DB::table('news')->where('id',25)->value('username');
        // $data = DB::table('news')->whereBetween('id', [1, 100])->get();
        // var_dump($data);
        // die;
        $data = DB::table('news')->get();

        return view('mysql/index',['data'=>$data]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('mysql/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $_POST;
        // dd($data);
        $res = DB::table('news')->insert([
            [
            'username'=>$data['username'],
            'password'=>$data['password'],
            'email'=>$data['email'],
            'account'=>$data['account']
            ]
        ]);
        // dd($res);
        // try{
        //     // $res = DB::update('update news sets account = account + 100 where id = 2');
        // }catch(\Exception $e){
        //     //获取异常的信息
        //     // echo $e -> getMessage();
        // }
        if($res){
            return redirect('/mysql');
        }else{
            return back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = DB::table('news')->where('id',$id)->first();
        // var_dump($res);
        // die;
        return view('mysql/edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // var_dump($id);
        // die;
        $data = $_POST;
        // var_dump($data);
        // die;
        $res = DB::table('news')->where('id',$id)->update([
            'username'=>$data['username'],
            'password'=>$data['password'],
            'email'=>$data['email'],
            'account'=>$data['account']
            ]);
        if($res){
            return redirect('/mysql');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // var_dump($id);
        $res = DB::table('news')->where('id','=',$id)->delete();
        if($res){
            return redirect('/mysql');
        }
    }
}
