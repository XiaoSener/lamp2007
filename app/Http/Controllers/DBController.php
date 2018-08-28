<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    //查询
    public function select()
    {
    	$goods = DB::select('select * from goods_1 limit 10');
    	// dd($goods);
    }

    public function trans()
    {
    	test();
    	DB::transaction(function(){

	    	$res1 = DB::update('update news set account = account - 100 where id = 100');
	    	$res2 = DB::update('update news set account = account + 100 where id = 2');
	    	// dd($res2);
	    	if($res1 && $res2){
	    		DB::commit();
	    	}else{
	    		DB::rollback();
	    	}
    		// try{
	    	// 	$res2 = DB::update('update news sets account = account + 100 where id = 2');
	    	// }catch(\Exception $e){
	    	// 	//获取异常的信息
	    	// 	// echo $e -> getMessage();
	    	// }
	    	// echo 333;
    	});

    	return view('page1');
    }
    //join
    public function join()
    {
    	$res = DB::table('goods')
    		->join('cates','goods.cate_id','=','cates.id')
    		->skip(0)
    		->take(10)
    		->get();
    	dd($res);
    }
    	
}
