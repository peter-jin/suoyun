<?php

namespace App\Http\Controllers;
use DB;
use Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 后台用户管理页面A
     *
     * @param  int  $id
     * @return Response
     */
    public function user_show()
    {
         $users = DB::table('user_basic')->get();

       
        return view('/admin/user_show',compact('users'));
    } 


    
    //用户修改执行页面
    public function user_edit_add($uid)
    {



        $users = DB::table('user_basic')->where('user_id','=',$uid)->first();
        //dd($users->user_id);
        $users->user_password = Hash::make($users->user_password);
        return view('/admin/user_edit_add')->with('users',$users);
    } 




	//后台用户编辑显示
    public function user_edit_show()
    {
        $users = DB::table('user_basic')->get();
        return view('/admin/user_edit_show',compact('users'));
    } 

    //后台用户编辑执行
    public function user_delete($uid)
    {
        $delete = DB::table('user_basic')->where('user_id','=',$uid)->delete();
        
        $users = DB::table('user_basic')->get();
        return view('/admin/user_edit_show',compact('users'));
       
    } 


 	/**
     * 后台添加用户显示页面
     *
     * @param  int  $id
     * @return Response
     */
    public function user_insert()
    {
        return view('/admin/user_insert');
    } 


	/**
     * 后台添加用户显示页面
     *
     * @param  int  $id
     * @return Response
     */
    public function insert()
    {

        return view('/admin/user_insert');
    } 


     /**
     * 后台用户添加
     */
    public function postInsert(Request $Request){

        //数据验证
        $this->validate($Request, [
            'user_name' => 'required',
            'user_password' => 'required|min:6|max:16',
            'affirm_password' => 'same:user_password',
            'user_permissions' => 'required'
        ],[
            // 'email.required' => '用户邮箱不能为空',
            // 'email.email' => '用户邮箱格式不正确',
            'user_name.required' => '用户名不能为空',
            'user_password.required' => '用户密码不能为空',
            'user_password.min' => '用户密码不能少于6位',
            'user_password.max' => '用户密码不能大于16位',
            'affirm_password.same' => '两次密码不一致'
        ]);
        //数据处理
        // $aaa = $request->all();
        // dd($aaa);
        $data = $Request->only('user_name','user_password','affirm_password','user_remark','user_permissions');
        //dd($data);
        $data['user_password'] = Hash::make($data['user_password']);
        // //用户信息详情表数据
        $data['user_time'] = date('Y-m-d H:i:s',time());

        $data['token'] = str_random(50);


        // $info['rip'] = $_SERVER['REMOTE_ADDR'];
        // $info['pic'] = '/adm/images/my/photo_'.rand(1,2).'.jpg';
       //dd($data);

        DB::beginTransaction();

        //$id = DB::table('user')->insertGetId($data);
        // $info['uid'] = $id;
        $result = DB::table('user_basic')->insertGetId($data);

        //dd($result);
        if($result){
            DB::commit();
        }else{
            DB::rollBack();
            return back()->with('error','用户添加失败');
        }
        return redirect('admin/user_insert')->with('success','用户添加成功');
    }








}
