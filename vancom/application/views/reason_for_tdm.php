 <script type="text/javascript">
        function  sub_reason()
        {
            $('#fr_reason').form({
                url:'<?=base_url()?>index.php/welcome/insert_reason_tdm',
                success:function(data)
                 {
                       // alert(data);
                       
                       if( data ==  "true" )
                       {
                           $.messager.alert("สถานะการบันทึกข้อมูล","บันทึกข้อมูลแล้ว","Info");
                           $('#dg_reason').datalist('reload');
                           $('#reason_for_tdm').combobox('reload');
                       }
                       else
                       {
                           $.messager.alert("สถานะการบันทึกข้อมูล","ไม่สามารถบันทึกได้","Error");
                           
                       }
                       
                 }
                
            });
        }
   </script>
   <div class="easyui-dialog" title="เพิ่ม Reason for TDM" id="dia_reason"  style="width:400px;height: 300px;padding: 10px;" data-options="
       closed:true,
       modal:true,
       buttons:[
       { text:'Close',iconCls:'icon-cancel' ,handler:function(){ $('#dia_reason').dialog('close');  }  }
       ]
        " >
       
       <div class="easyui-tabs"  >
           <div title="เพิ่ม Reason for TDM " >
             
               <form id="fr_reason"  method="post" >  
               <div style="padding: 10px">
                    Reason for TDM :
                    <input class="easyui-textbox" id="reason_detail" name="reason_detail" style="width:200px;height: 30px;padding: 10px;"  required="required"  data-options="
                           prompt:'Reason for TDM'
                           
                           " />
                    
               </div>
               <div style="padding: 10px">
                   <input type="submit" onclick="sub_reason()"  /> 
               </div>
               </form>
               
           </div>
           <div title="ข้อมูลทั้งหมด Reason for TDM ">
               <table class="easyui-datalist" id="dg_reason" data-options="
                      url:'<?=base_url()?>index.php/welcome/reason_tdm',
                      singleSelect:true,
                      rownumbers:true,
                      fitColumns:true,
                      columns:[[
                      { field:'reason_detail', title:'reason_detail'  },
                      ]],
                      toolbar:[
                      {  iconCls:'icon-cancel',handler:function()
                            {   
                               var  rows=$('#dg_reason').datagrid('getSelected');
                               if(rows)
                                  {
                                      //alert(rows.id_reason);
                                      $.post('<?=base_url()?>index.php/welcome/del_reason_tdm/',{ id_reason:rows.id_reason },function(data)
                                       {                                    
                                          //$.messager.alert('สถานะการลบข้อมูล', data.success ,'Info');
                                         if( data.success  )
                                          {
                                              $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลแล้ว','Info');
                                              $('#dg_reason').datalist('reload');
                                             $('#reason_for_tdm').combobox('reload');
                                             
                                          }else
                                          {
                                              $.messager.alert('สถานะการลบข้อมูล','ไม่สามารถลบข้อมูลได้','Error');
                                          }
                                        
                                          
                                       },'json');
                                  }
                            }  },
                      {  iconCls:'icon-reload',handler:function()
                           {
                              $('#dg_reason').datagrid('reload');
                           }   },      
                      ]
                      
                      " >
                   
               </table>
           </div>
                
       </div>
       
   </div>