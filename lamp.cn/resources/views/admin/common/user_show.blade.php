  <span class="pagedesc">页面的描述内容</span>              
            <ul class="hornav">
                <li class="current"><a href="#">用户列表</a></li>
                <!-- <li><a href="#activities">消息资料</a></li> -->
            </ul>
        </div><!--pageheader-->
     
        <div id="contentwrapper" class="contentwrapper">
        
            <div id="updates" class="subcontent">
                          
                <div class="contenttitle2">
                    <h3>用户列表</h3>
                </div><!--contenttitle-->
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="head0">UID</th>
                            <th class="head1">用户名</th>
                            <th class="head0">备注</th>
                            <th class="head0">权限</th>
                            <th class="head1">注册时间</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="head0">UID</th>
                            <th class="head1">用户名</th>
                            <th class="head0">备注</th>
                            <th class="head0">权限</th>
                            <th class="head1">注册时间</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($users as $user)
                        <tr class="gradeX">
                            <td><a href="#activities">{{ $user->user_id }}</a></td>
                            <td>{{ $user->user_name }}</td>
                            <td>{{ $user->user_remark }}</td>
                            <td>{{ $user->user_permissions }}</td>
                            <td class="center">{{ $user->user_time }}</td>
                        </tr>
                    @endforeach                     
                    </tbody>
                </table>
            </div><!-- #updates -->  
            <div id="activities" class="subcontent" style="display: none;">
                &nbsp;
            </div><!-- #activities -->