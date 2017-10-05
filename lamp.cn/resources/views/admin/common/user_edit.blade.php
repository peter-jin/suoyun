
    
        
            <ul class="hornav">
    <li class="current"><a href="#basicform">管理</a></li>
    <!-- <li><a href="#validation">Validation</a></li> -->
  </ul>
  </div><!--pageheader-->
        <div id="contentwrapper" class="contentwrapper">    
                <div class="contenttitle2">
                    <h3>编辑用户</h3>
                </div><!--contenttitle-->
                <div class="tableoptions">
                    <button class="deletebutton radius3" title="table2">删除</button> &nbsp;
                    <select class="radius3">
                        <option value="">全部显示</option>
                        <option value="">超级管理员</option>
                        <option value="">管理员</option>
                        <option value="">员工</option>
                        <option value="">会员</option>
                        <option value="">男</option>
                        <option value="">女</option>
                    </select> &nbsp;
                    <button class="radius3">筛选</button>
                </div><!--tableoptions-->   
                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
                    <colgroup>
                        <col class="con0" style="width: 4%" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="head0"><input type="checkbox" class="checkall" /></th>
                            <th class="head1">UID</th>
                            <th class="head0">用户名</th>
                            <th class="head1">备注</th>
                            <th class="head0">权限</th>
                            <th class="head1">注册时间</th>
                            <th class="head0">编辑</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="head0"><input type="checkbox" class="checkall" /></th>
                            <th class="head1">UID</th>
                            <th class="head0">用户名</th>
                            <th class="head1">备注</th>
                            <th class="head0">权限</th>
                            <th class="head1">注册时间</th> 
                            <th class="head0">编辑</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td align="center"><input type="checkbox" /></td>
                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->user_name }}</td>
                            <td>{{ $user->user_remark }}</td>
                            <td class="center">{{ $user->user_permissions }}</td>
                            <td class="center">{{ $user->user_time }}</td>
                            <td class="center"><a href="{{ url('/admin/user_edit_add/'.$user->user_id) }}" class="edit">修改</a> &nbsp; <a href="{{ url('/admin/user_delete/'.$user->user_id) }}" class="delete">删除</a></td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
                
                <br /><br />
        </div><!--contentwrapper-->
        
