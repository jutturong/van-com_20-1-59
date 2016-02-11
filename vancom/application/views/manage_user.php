 <div id="win_user" class="easyui-window" title=" เพิ่ม User ในระบบ " 
        data-options="
        modal:true,
        closed:true,
        iconCls:'icon-man',
        
                    " 
        style="width:450px;height:300px;padding:10px;">
        <table>
            <tr>
                <td>
                     ชื่อ - นามสกุล : 
                </td>
                <td>
                    <input class="easyui-textbox"  style="width:100px;height: 30px" />
                    -
                    <input class="easyui-textbox"  style="width:150px;height: 30px" />
                </td>
               
            </tr>
            <tr>
                <td>
                  UserName :  
                </td>
                <td>
                    <input class="easyui-textbox" style="width: 100px;height: 30px" />
                </td>
            </tr>
            
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input class="easyui-textbox" style="width:100px;height: 30px" />
                </td>
            </tr>
            
            <tr>
                <td>
                    Type User :
                </td>
                <td>
                    <select class="easyui-combobox" style="width:100px;height: 30px" >
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                        
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    อนุญาตการเข้าใช้งาน :
                </td>
                <td>
                    <select class="easyui-combobox" style="width:100px;height: 30px" >
                        <option value="Y">Yes</option>
                        <option value="N">No</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="javascript:void(0);" class="easyui-linkbutton" data-options=" iconCls:'icon-add' " > Insert </a>
                    <a href="javascript:void(0);"  class="easyui-linkbutton" data-options=" 
                       iconCls:'icon-cancel' ,
                      
                       
                       " onclick="$('#win_user').window('close'); "  >Close</a>
                </td>
            </tr>
            
        </table>
    </div>