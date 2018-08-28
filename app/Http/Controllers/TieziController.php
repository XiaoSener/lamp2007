<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TieziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /*
    资源控制器
    GET         /tiezi                index       tiezi.index
    GET         /tiezi/create         create      tiezi.create
    POST        /tiezi                store       tiezi.store
    GET         /tiezi/{id}           show        tiezi.show
    GET         /tiezi/{id}/edit      edit        tiezi.edit
    PUT/PATCH   /tiezi/{id}           update      tiezi.update
    DELETE      /tiezi/{id}           destroy     tiezi.destroy

     */
    public function index()
    {
        echo '帖子列表';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo '添加';
        return view('tiezi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return '这里是数据插入操作';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return '帖子的详情 id为'.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo '帖子的修改页面 id为'.$id;
        return view('tiezi/edit');
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
        return '数据更新';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo '数据删除';
    }

    public function request(Request $request)
    {
        //获取url get参数
        // $name = $request -> get('name');
        $name = $request -> input('name');
        dd($name);
        // dd后的代码不再执行 dd()= echo $name;die;
    }

    public function form()
    {
        return view('tiezi/form');
    }

    public function upload(Request $request)
    {
        $path = $request->img->store('images');
        var_dump($path);
    }
}
