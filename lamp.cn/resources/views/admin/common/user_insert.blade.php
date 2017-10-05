
<ul class="hornav">
  <li class="current"><a href="#basicform">添加用户</a></li>
  <!-- <li><a href="#validation">Validation</a></li> -->
</ul>
</div><!--pageheader-->

<div id="contentwrapper" class="contentwrapper">

    <div id="basicform" class="subcontent">
@if (count($errors) > 0)
  <div class="notibar msgerror">
@foreach ($errors->all() as $error)
        <a class="close"></a>
        <p>{{ $error }}</p>
@endforeach
  </div>
@endif
    
@if (session('success'))               
    <div class="notibar msgsuccess">
            <a class="close"></a>
            <p>{{ session('success') }}</p>
    </div><!-- notification msgsuccess -->
@endif



        <div class="contenttitle2">
        <h3>注册信息</h3>
        </div><!--contenttitle-->

   

        <form id="form1" class="stdform" method="post" action="/admin/insert">
             {{csrf_field()}}
            <p>
                <label>用户名</label>
                <span class="field"><input type="text" name="{{'user_name'}}" id="firstname" class="longinput" value=""/></span>
            </p>

            <p>
                <label>密码</label>
                <span class="field"><input type="text" name="{{'user_password'}}" id="lastname" class="longinput" value=""/></span>
            </p>

            <p>
                <label>确认密码</label>
                <span class="field"><input type="text" name="{{'affirm_password'}}" id="lastname" class="longinput" value=""/></span>
            </p>



            <p>
                <label>备注</label>
                <span class="field"><textarea cols="80" rows="5" name="{{'user_remark'}}" class="mediuminput" id="location" value=""></textarea></span> 
            </p>

            <p>
                <label>权限</label>
                <span class="field">
                    <select name="{{'user_permissions'}}" id="selection">
                        <option value="">选择权限</option>
                        <option value="1">超级管理员</option>
                        <option value="2">管理员</option>
                        <option value="3">会员</option>
                        <option value="4">员工</option>
                    </select>
                </span>
            </p>

            <br />

            <p class="stdformbutton">
                <button class="submit radius2">&nbsp; &nbsp;&nbsp; &nbsp;提&nbsp;交&nbsp; &nbsp;&nbsp; &nbsp;</button>
            </p>
        </form>

        <br />



        <br />

    </div><!--subcontent-->



</div><!--contentwrapper-->

