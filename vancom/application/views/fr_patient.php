<!-- เพิ่มประวัติของผู้ป่วย -->  
<script type="text/javascript">
 function sub_insert()
 {
    //alert('t'); 
     $('#fr_insert').form({ 
         url:'<?=base_url()?>index.php/welcome/insert_patient/',
         success:function(data)
         { 
             //alert(data);  
            
             //$.messager.alert('แสดงสถานะ','Update ข้อมูลแล้ว','Info');
            // $('#dia_view_diag').dialog('close');
            // $('#dg_diagnosis').datagrid('reload');
            
            if( data=='success'  )
            {
                    $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ','Info');
                    $('#add_patient').window('close');
                    $('#dg_patient').datagrid('reload');
                     $('#p_patient').window('open');
            }else if( data=='false' )
            {
                  $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลซ้ำ','Error');
             }
                                                     
                                                     
           
             
         } 
     });
          
                                
     
 }
     
</script>

<script type="text/javascript">
    function  sub_update()
    {
        $('#fr_update').form({
            url:'<?=base_url()?>index.php/welcome/update_patient/' ,
            success:function(data){
               // alert(data);
               
              if( data=='success'  )
            {
                    $.messager.alert('สถานะการแก้ไขข้อมูล','แก้ไขข้อมูลสำเร็จ','Info');
                    $('#update_patient').window('close');
                    $('#dg_patient').datagrid('reload');
                    $('#p_patient').window('open');
            }else
            {
                  $.messager.alert('สถานะการแก้ไขข้อมูล','แก้ไขข้อมูลผิดพลาด','Error');
             }
             
             
            }
            
        });
    }
    
</script>

<!-- Update ประวัติของผู้ป่วย   -->
<div id="update_patient" class="easyui-window" title="แก้ไขประวัติของผู้ป่วย  "    data-options="
                 modal:true,closed:true,
                 iconCls:'icon-edit',
                 closable:true,
                 resizable:true,
                 "
    style="width:700px;height:270px;padding:10px;top:10px;left:10px;">
    
    <div style="padding:10px 60px 20px 60px">
              <form id="fr_update"   method="post"  enctype="multipart/form-data" >
            <table cellpadding="1">
                <tr>
                    <td>
                        <input class="easyui-textbox" readonly="true" style="width:100px;height: 20px;" id="id_patient" name="id_patient" />
                    </td>
                </tr>
                <tr>
                    
                    <td>Patient's Name - Lastname :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="Name_up"  id="Name_up" data-options="required:false"  style="  width:150px;height:30px  "></input>
                        <input class="easyui-textbox" type="text" name="Surname_up" id="Surname_up" data-options="required:false"  style="  width:200px;height:30px  "></input>
                    </td>
                </tr>
                <tr>
                    <td>HN :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="HN_up" id="HN_up" data-options="required:false"  style="  width:100px;height:30px  "></input>
                         
                    </td>
                </tr>
                
                <tr>
                    <td>Birth Date :</td>
                    <td> <input class="easyui-datebox" style="height: 30px" id="BirthDate_up" name="BirthDate_up"  data-options="required:false" ></input></td>
                </tr>
                
                 <tr>
                    <td>Sex :</td>
                    <td>
                        
                        
                        <select class="easyui-combobox" name="Sex_up" id="Sex_up" style="width:100px;height: 30px;">
        <option value="1">(ชาย) Male</option>
        <option value="2">(หญิง) Female</option>

                           </select>
                        
                        
                        <!--
                        <input class="easyui-combobox" id="Sex_up" name="Sex_up" data-options="
                               valueField:'label',
                               textField:'value',
                               data:[
                               {
                                 label:'ชาย',value:'1'
                               },
                               { 
                                 label:'หญิง',value:'2'  
                               }
                               ]
                               " />
                         -->
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                   <?=nbs(15)?>
                        <input type="submit" onclick="sub_update()" />
                        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls='icon-remove' onclick="$('#update_patient').window('close');" >close</a>
                   </td>
                </tr>
                
            </table>
              </form>
            </div>
                     
</div>
<!-- Update ประวัติของผู้ป่วย   -->

<!-- เพิ่มประวัติของผู้ป่วย   -->
        <div id="add_patient" class="easyui-window" title="เพิ่มประวัติของผู้ป่วย  "    data-options="
                 modal:true,closed:true,
                 iconCls:'icon-man',
                 closable:true,
                 resizable:true,
                 "
                 style="width:700px;height:270px;padding:10px;top:10px;left:10px;">
            <div style="padding:10px 60px 20px 60px">
              <form id="fr_insert"   method="post"  enctype="multipart/form-data" >
            <table cellpadding="1">
                <tr>
                    <td>Patient's Name - Lastname :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="Name"  id="Name" data-options="required:false"  style="  width:150px;height:30px  "></input>
                        <input class="easyui-textbox" type="text" name="Surname" id="Surname" data-options="required:false"  style="  width:200px;height:30px  "></input>
                    </td>
                </tr>
                <tr>
                    <td>HN :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="HN" id="HN" data-options="required:false"  style="  width:100px;height:30px  "></input>
                         
                    </td>
                </tr>
                
                <tr>
                    <td>Birth Date :</td>
                    <td> <input class="easyui-datebox" style="height: 30px" id="BirthDate" name="BirthDate"  data-options="required:false" ></input></td>
                </tr>
                
                 <tr>
                    <td>Sex :</td>
                    <td>
                        
                        <select class="easyui-combobox" name="Sex" id="Sex" style="width:100px;height: 30px;">
        <option value="1">(ชาย) Male</option>
        <option value="2">(หญิง) Female</option>

                           </select>
                    
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                   <?=nbs(15)?>
                        <input type="submit" onclick="sub_insert()" />
                        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls='icon-remove' onclick="$('#add_patient').window('close');" >close</a>
                   </td>
                </tr>
                
            </table>
              </form>
            </div>
    </div>
   
<!-- เพิ่มประวัติของผู้ป่วย -->      
