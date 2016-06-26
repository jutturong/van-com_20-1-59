<!-- user ท้งหมด -->
<div class="easyui-dialog" id="dia_alluser" title=" User ทั้งหมด "  data-options="
     closed:true,
     iconCls:'icon-man',
     buttons:[ { text:'Close',iconCls:'icon-cancel',handler:function(){ $('#dia_alluser').dialog('close'); } } ],
     " style="width:600px;height:300px;padding:10px;top: 10px;left: 10px;" >
    
    <div class="easyui-datagrid" id="dg_adduser"
         data-options="
         url:'<?=base_url()?>index.php/welcome/tb_user',
         singleSelect:true,
         rownumbers:true,
         fitColumns:true,
        
          
         toolbar:[
          { text:'Add user',iconCls:'icon-add',handler:function()
              {  
                 //alert('t');  
                 $('#win_user').window('open');
              }   
           },
           {  text:'Edit user',iconCls:'icon-edit',handler:function()
                { 
                    var  row= $('#dg_adduser').datagrid('getSelected');
                       if( row )
                       {
                          //alert('test');
                          var UserCode=row.UserCode;
                           var  id_user=row.id_user;
                          //alert( id_user );                      
                          var  url='<?=base_url()?>index.php/welcome/call_user/' + id_user;                        
                          $.getJSON(url,function(data)
                            {                              
                                 $.each(data,function(v,k)
                                 { 
                                     //alert(k.UserName); 
                                     $('#win_user').window('open');
                                     $('#fr_adduser').form('load',{
                                        UserName:k.UserName,
                                        UserSurname:k.UserSurname,
                                        Password:k.Password,
                                        UserType:k.UserType,
                                        Unused:k.Unused,
                                        id_user:k.id_user,
                                     });
                                 });
                            });
                          
                       }
                }  
           },
           {
               text:'Del',iconCls:'icon-cancel',handler:function()
                 {  
                       var  row= $('#dg_adduser').datagrid('getSelected');
                       if( row )
                       {
                          //alert('test');
                          var  id_user=row.id_user;
                          //var UserCode=row.UserCode;
                          //alert( id_user );
                          var  url='<?=base_url()?>index.php/welcome/del_user/' + id_user;
                          //dg_adduser
                          $.post(url,function(data)
                            {
                               //alert(data);
                                 if( data == '1' )
                                 {
                                     $.messager.alert('สถานะการลบข้อมูล','การลบข้อมูลสำเร็จ','Info');
                                     $('#dg_adduser').datagrid('reload');
                                 }
                                 else if( data == '0' )
                                 {
                                    $.messager.alert('สถานะการลบข้อมูล','การลบข้อมูลผิดพลาด','Err');
                                    $('#dg_adduser').datagrid('reload');
                                 }
                            });
                          
                       }
                 }
           
           },
           {
              text:'Reload',iconCls:'icon-reload',handler:function(){   $('#dg_adduser').datagrid('reload');  }
           },
           {
              text:'Search',iconCls:'icon-search',handler:function(){ $('#dg_sr_user').dialog('open');   }
           }
         ],
         columns:[[
           { field:'id_user',title:'ID' },
          // { field:'UserCode',title:'UserCode'   },
         //  { field:'Title',title:'Title' },
           { field:'UserName',title:'UserName' },
           { field:'UserSurname', title:'UserSurname' },
           { field:'Password', title:'Password' },
           { field:'UserType',title:'UserType' },
          // { field:'Login',title:'Login' },
           { field:'Unused',title:'Block User' },
         ]],
        
         "
         >
        
    </div>
</div>
<!-- user ท้งหมด -->

<!-- search user -->
<div id="dg_sr_user" class="easyui-dialog"  data-options="
     closed:true,
     iconCls:'icon-search',
     title:'ค้นหา User ในระบบ',
     buttons:[
       { text:'Close',iconCls:'icon-cancel',handler:function(){ $('#dg_sr_user').dialog('close'); }    }
     ]
     " style="width:300px;height: 150px;padding: 10px; top: 150px;left: 30px;">
    <div style="padding: 10px 20px;">
        <input class="easyui-combobox" id="cb_id_user" name="cb_id_user" style="widows: 200px;height: 40px;" data-options="
                url:'<?=base_url()?>index.php/welcome/tb_user',
                textField:'UserName',
                valueField:'id_user',
                mode:'remote',
                method:'get',
                onSelect:function()
                {                  
                    var  id_user=$('#cb_id_user').combobox('getValue');
                    //alert(id_user);
                    var  url='<?=base_url()?>index.php/welcome/sr_user/' + id_user 
                   // $('#dg_adduser').datagird('reload');
                   //alert(url);
                   $('#dg_adduser').datagrid({  
                      url:url,
                      
                   });
                    
                },
               " />
    </div>
</div>
<!-- search user -->


<!-- เพิ่ม user -->
<div id="win_user" class="easyui-window" title=" เพิ่ม User ในระบบ " 
        data-options="
        modal:true,
        closed:true,
        iconCls:'icon-man',
        
                    " 
        style="width:550px;height:250px;padding:20px 30px  ;top: 10px;left: 10px;">
    
    <form id="fr_adduser"   method="post"  enctype="multipart/form-data"  novalidate="novalidate" >
        <table>
            <tr>
                <td>
                    <input class="easyui-textbox"  id="id_user" name="id_user"  readonly="true" style="width:50px;height: 30px;"  />
                </td>
            </tr>
            <tr>
                <td>
                    UserName :  <input class="easyui-textbox" id="UserName" name="UserName" style="width:100px;height: 30px" prompt="ชื่อ" required="true"/>                   
                
                 UserSurname :  <input class="easyui-textbox" id="UserSurname" name="UserSurname" style="width:150px;height: 30px" prompt="นามสกุล" />  
                </td>
               
            </tr>
            <tr>
                
                <td>
                    <!-- UserCode : <input class="easyui-textbox" id="UserCode" name="UserCode" style="width: 100px;height: 30px" />  -->
                     
                    Password : <input class="easyui-textbox" id="Password" name="Password" style="width:100px;height: 30px" prompt="รหัสผ่าน" required="true"/>
                              
                
                
                </td>
                
            </tr>
            
            <tr>
                <td>
                   
                
                    
                </td>
            </tr>
            
            <tr>
                <td>
                    Type user : <select class="easyui-combobox" id="UserType" name="UserType" style="width:100px;height: 30px" >
                         <option value="2">(2)User</option>
                        <option value="1">(1)Admin</option>
                       
                        
                    </select>
                
                    Block user :  <select class="easyui-combobox" id="Unused" name="Unused" style="width:100px;height: 30px" >
                       
                        <option value="N">No</option>
                        <option value="Y">Yes</option>
                        
                        
                    </select>
                    
                </td>
            </tr>
            
            
            <tr>
                <td colspan="2">
                    
                   <!-- 
                    <a href="javascript:void(0);" class="easyui-linkbutton" data-options=" iconCls:'icon-add' " onclick="
                          $('#fr_adduser').({
                              success:function(data)
                              {
                                  alert(data);
                              }
                          });
                       " > Insert </a>
                    -->
                     <?=nbs(40)?>
                    
                    <!--
                    <input type="submit"  onclick="
                            $('#fr_adduser').form({
                                
                                success:function(data)
                                { 
                                    //alert(data); 
                                    
                                    
                                    if( data == 'm')
                                    {
                                       $.messager.alert('สถานะการบันทึกข้อมูล','ข้อมูลบันทึกซ้ำ','Err'); 
                                       $('#win_user').window('close');
                                       $('#dg_adduser').datagrid('reload');
                                    }
                                    else if( data == '1' )
                                    {
                                       $.messager.alert('สถานะการบันทึกข้อมูล','ข้อมูลบันทึกสำเร็จ','Info'); 
                                       $('#win_user').window('close');
                                       $('#dg_adduser').datagrid('reload');
                                    }
                                    else if( data == '0')
                                    {
                                       $.messager.alert('สถานะการบันทึกข้อมูล','ข้อมูลบันทึกล้มเหลว','Err');
                                       $('#win_user').window('close');
                                       $('#dg_adduser').datagrid('reload');
                                    }
                                    
                                }
                            });
                           " />
                    -->
                    
                    <a href="javascript:void(0)"  class="easyui-linkbutton"  iconCls='icon-save'  style="width:80px;height: 30px;" onclick="
                         $('#fr_adduser').form('submit',{  
                            url:'<?=base_url()?>index.php/welcome/add_user',
                            success:function(data)
                                {
                                    //alert(data);
                                     if( data == 'm')
                                    {
                                       $.messager.alert('สถานะการบันทึกข้อมูล','ข้อมูลบันทึกซ้ำ','Err'); 
                                       $('#win_user').window('close');
                                       $('#dg_adduser').datagrid('reload');
                                    }
                                    else if( data == '1' )
                                    {
                                       $.messager.alert('สถานะการบันทึกข้อมูล','ข้อมูลบันทึกสำเร็จ','Info'); 
                                       $('#win_user').window('close');
                                       $('#dg_adduser').datagrid('reload');
                                    }
                                    else if( data == '0')
                                    {
                                       $.messager.alert('สถานะการบันทึกข้อมูล','ข้อมูลบันทึกล้มเหลว','Err');
                                       $('#win_user').window('close');
                                       $('#dg_adduser').datagrid('reload');
                                    }
                                }
                          });
                       
                       "   >Insert</a>
                   
                    <a href="javascript:void(0)" class="easyui-linkbutton"  iconCls="icon-edit"  style="width:80px;height: 30px;"  onclick="
                             //alert('t');
                             //http://localhost/vancom/index.php/welcome/update_user 
                             $('#fr_adduser').form('submit',{
                                 url:'<?=base_url()?>index.php/welcome/update_user',
                                 success:function(data)
                                 {
                                    //alert(data);
                                    
                                    
                                    if( data == '1' )
                                    {
                                       $.messager.alert('สถานะการแก้ไขข้อมูล','แก้ไขข้อมูลสำเร็จ','Info'); 
                                       $('#win_user').window('close');
                                       $('#dg_adduser').datagrid('reload');
                                    }
                                    else if( data == '0')
                                    {
                                       $.messager.alert('สถานะการแก้ไขข้อมูล','แก้ไขข้อมูลล้มเหลว','Err');
                                       $('#win_user').window('close');
                                       $('#dg_adduser').datagrid('reload');
                                    }
                                    
                                 },
                                         
                                 
                             });
                             
                           "  > Update </input>
                    
                    <a href="javascript:void(0);"  class="easyui-linkbutton" data-options=" 
                       iconCls:'icon-cancel' ,
                      
                       
                       " onclick="$('#win_user').window('close'); " style="width:80px;height: 30px;" >Close</a>
                    
                    
                </td>
            </tr>
            
        </table>
        </form>
    </div>

<!-- เพิ่ม user -->
