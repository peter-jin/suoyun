<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    



	/**
     * 网站首页引导页面方法
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
       return view('/home/index');
    } 
    


    /**
     * 会员登录页面
     *
     * @param  int  $id
     * @return Response
     */
    public function login()
    {
        return view('/home/login');
    }

    //会员登录验证方法
    public function postLogin(Request $Request)
    {
         $data = DB::table('user_basic')
            ->where('user_name','=',$Request->input('username'))
            ->where('user_permissions','=',1)
            ->first();
        //$pass = $Request->input('password');
       // dd($pass);   
        if($data){
           if(Hash::check($Request->input('password'),$data->user_password)){
               session(['id'=>$data->user_id]);
               
               return redirect('/admin/dashboard')->with('success','登录成功');;
           }else{
               return back()->with('error','密码错误');
           }
        }else{
            return back()->with('error','用户名不存在');
        }
       
    }

    /**
     * 网站产品中心
     *
     * @param  int  $id
     * @return Response
     */
    public function product()
    {
        return view('/home/product');
    }
	
     /**
     * 网站新闻中心
     *
     * @param  int  $id
     * @return Response
     */
    public function news()
    {
        return view('/home/news');
    }
    
     /**
     * 网站解决方案
     *
     * @param  int  $id
     * @return Response
     */
    public function solution()
    {
        return view('/home/solution');
    }
    
    /**
     * 前台培训中心train
     *
     * @param  int  $id
     * @return Response
     */
    public function train()
    {
        return view('/home/train');
    }

     /**
     * 前台服务与支持
     *
     * @param  int  $id
     * @return Response
     */
    public function service()
    {
        return view('/home/service');
    }


    /**
     * 前台关于我们
     *
     * @param  int  $id
     * @return Response
     */
    public function about()
    {
        return view('/home/about');
    }





 

	   /**
	     * 传值测试
	     *
	     * @param  int  $id
	     * @return Response
	     */
	    public function test()
	    {
            // $pdo = DB::connection()->getPdo();
           
            // dd($pdo);

           
            $users = DB::table('user')->where('user_id',1)->get();
            dd($users);
            //var_dump($users);
            //print $users;
            $title = '神仙';
            return view('test',compact('title'));
           
	    }




 



}
