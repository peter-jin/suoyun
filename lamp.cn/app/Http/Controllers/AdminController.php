<?php

namespace App\Http\Controllers;
use DB;
use Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * 后台登录页面
     *
     * @param  int  $id
     * @return Response
     */
    public function login()
    {
        return view('/admin/login');
    } 

    //管理员登陆方法
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
     * 后台主页
     *
     * @param  int  $id
     * @return Response
     */
    public function dashboard()
    {

        return view('/admin/dashboard');
    } 


    

    /**
     * 网站首页引导页面方法
     *
     * @param  int  $id
     * @return Response
     */
    public function tables()
    {
        return view('/admin/tables');
    }


     /**
     * 网站首页引导页面方法
     *
     * @param  int  $id
     * @return Response
     */
    public function settings()
    {
        return view('/admin/settings');
    } 





























}
