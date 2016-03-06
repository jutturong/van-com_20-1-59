<!--  ผู้ป่วยทัังหมด/ประวัติการรักษา   -->  
     
<div style="padding:10px 60px 20px 60px;"></div>
    <div id="p_patient" class="easyui-window" title=" แสดงรายการทั้งหมด ประวัติผู้ป่วย/ประวัติการรักษา "  
         data-options=" iconCls:'icon-man' ,  
                                    
                                     closed:true,
                                    
                                     
                                    "  
         style="width:450px;height:450px;padding:10px;left:10px;top:10px;">
        <!-- <p style="font-size:14px">jQuery EasyUI framework helps you build your web pages easily.</p> -->
        
            <table class="easyui-datagrid"  id="dg_patient"   name="dg_patient"  style="width:420px;height:400px"
            data-options="url:'<?=base_url()?>index.php/welcome/dg_patient'
                                      ,fitColumns:true,
                                      singleSelect:true,
                                      pagination: true  ,
                                     rownumbers:true ,  
                                     toolbar:[ { text:'Reload',iconCls:'icon-reload',handler:function(){ $('#dg_patient').datagrid('reload'); } }
                                     ,{  text:'Search',iconCls:'icon-search',handler:function(){ $('#sr_patient').window('open'); }  }
                                     ,{ text:'Delete',iconCls:'icon-remove',handler:function()
                                        {
                                                var  row=$('#dg_patient').datagrid('getSelected');
                                               // alert(row.id_patient);
                                               if( row )
                                               {
                                                  id=row.id_patient;
                                                 //alert(id);
                                                 //http://127.0.0.1/vancom/index.php/welcome/del_patient/
                                                 $.post('<?=base_url()?>index.php/welcome/del_patient/'+ id ,function(data)
                                                 { 
                                                    
                                                     $('#dg_patient').datagrid('reload');
                                                     //alert(data);
                                                     if( data='success'  )
                                                     {
                                                        $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ','Info');
                                                     }else
                                                     {
                                                        $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลผิดพลาด','Error');
                                                     }
                                                     
                                                 });
                                                  
                                               }
                                        } 
                                     },
                                     {  text:'เพิ่ม',iconCls:'icon-add',handler:function(){ $('#add_patient').window('open');  }  },
                                     { text:'Update', iconCls:'icon-edit',handler:function()
                                            {
                                                    var  row=$('#dg_patient').datagrid('getSelected');
                                                    if( row )
                                                    {
                                                       //var id=row.id_patient;
                                                       $('#update_patient').window('open');
                                                       
                                                       //http://127.0.0.1/vancom/index.php/welcome/fetch_patient/4758
                                                       $('#Name_up').textbox('setValue',row.Name);
                                                       $('#Surname_up').textbox('setValue',row.Surname);
                                                       $('#HN_up').textbox('setValue',row.HN);
                                                       $('#Sex_up').combobox('setValue',row.Sex);
                                                       $('#id_patient').textbox('setValue',row.id_patient);
                                                       
                                                    }
                                            }   
                                     }
                                     ],
                                      columns:[[
                                          {  field:'Name',title:'Name' },
                                          {  field:'Surname',title:'Lastname' },
                                          {  field:'HN',title:'HN' },
                                          {  field:'BirthDate',title:'Birth Date' },
                                          {  field:'Sex',title:'Sex' },
                                          {field:'id_patient',title:'ID'},
                                      ]]
                                      "
            >

        
    </table>
        
        
    </div>
            <div id="t_patient">
        <a href="javascript:void(0)" class="icon-add" onclick="op_addpatien()"></a>
        <a href="javascript:void(0)" class="icon-cancel"  onclick="javascript:$('#p_patient').panel('close')" ></a>
        <!-- <a href="javascript:void(0)" class="icon-cut" onclick="javascript:alert('cut')"></a> -->
       <!-- <a href="javascript:void(0)" class="icon-help" onclick="javascript:alert('help')"></a>-->
    </div>

<!--  ผู้ป่วยทัังหมด/ประวัติการรักษา   -->  

<!--  Search  ค้นหาประวัติผู้ป่วย -->
<div class="easyui-window" id="sr_patient" title="ค้นหาผู้ป่วย"data-options="
     iconCls:'icon-man', closed:true,
     
     " style="width:400px;height: 200px;padding: 10px;left: 10px;top: 10px;">
    <div style="padding: 10px;">
        <label>
            
            ชื่อ-นามสกุล : <input class="easyui-combogrid" id="sr_id_patient" style="height: 40px;width: 200px;" data-options="
                  url:'<?=base_url()?>index.php/welcome/search_byname',                 
                  method:'post',
                   panelWidth:400,
                  idField:'id_patient',
                  textField:'Name',
                  mode:'remote',
                  fitColumns:true,
                  columns:[[
                                          {  field:'Name',title:'Name' },
                                          {  field:'Surname',title:'Lastname' },
                                          {  field:'HN',title:'HN' },
                                          {  field:'BirthDate',title:'Birth Date' },
                                          {  field:'Sex',title:'Sex' },
                                          {field:'id_patient',title:'ID'},
                                      ]],
                                    
                             
                  onSelect:function()
                  {
                     var  id=$('#sr_id_patient').combogrid('getValue');
                     
                     var  url='http://127.0.0.1/vancom/index.php/welcome/patient_byid/' + id;
                    
                     
                     $('#dg_patient').datagrid({
                         url:'<?=base_url()?>index.php/welcome/patient_byid/' + id  ,
                         fitColumns:true,
                                      singleSelect:true,
                                      pagination: true  ,
                                     rownumbers:true ,  
                                     toolbar:[ 
                                     { text:'Reload',iconCls:'icon-reload',handler:function(){ $('#dg_patient').datagrid('reload'); } },
                                     {  text:'Search',iconCls:'icon-search',handler:function(){ $('#sr_patient').window('open'); }  },
                                     ],
                                      columns:[[
                                          {  field:'Name',title:'Name' },
                                          {  field:'Surname',title:'Lastname' },
                                          {  field:'HN',title:'HN' },
                                          {  field:'BirthDate',title:'Birth Date' },
                                          {  field:'Sex',title:'Sex' },
                                          {field:'id_patient',title:'ID'},
                                      ]]
                                      
                     });
                     
                     $('#p_patient').window('open');
                     
                     //$('#sr_id_patient').combogrid('setValue','clear');
                     $('#sr_patient').window('close');
                  },
                  
                 
                   " />
        </label>
        <div>
            
            <div style="padding: 10px;">
                <label> 
               
            HN : <input class="easyui-combogrid"  id="sr_hn"  style="height: 40px;width: 200px;" data-options="
                         url:'<?=base_url()?>index.php/welcome/search_hn',                 
                  method:'post',
                  idField:'id_patient',
                  textField:'HN',
                  mode:'remote',
                  fitColumns:true,
                  panelWidth:400,
                  columns:[[
                                          {  field:'HN',title:'HN' },                       
                                          {  field:'Name',title:'Name' },
                                          {  field:'Surname',title:'Lastname' },
                                         
                                          {  field:'BirthDate',title:'Birth Date' },
                                          {  field:'Sex',title:'Sex' },
                                          {field:'id_patient',title:'ID'},
                                      ]],
                                      
                                       onSelect:function()
                  {
                     var  id=$('#sr_hn').combogrid('getValue');
                     
                     var  url='http://127.0.0.1/vancom/index.php/welcome/patient_byid/' + id;
                    
                     
                     $('#dg_patient').datagrid({
                         url:'<?=base_url()?>index.php/welcome/patient_byid/' + id  ,
                         fitColumns:true,
                                      singleSelect:true,
                                      pagination: true  ,
                                     rownumbers:true ,  
                                     toolbar:[ 
                                     { text:'Reload',iconCls:'icon-reload',handler:function(){ $('#dg_patient').datagrid('reload'); } },
                                     {  text:'Search',iconCls:'icon-search',handler:function(){ $('#sr_patient').window('open'); }  },
                                     ],
                                      columns:[[
                                          {  field:'Name',title:'Name' },
                                          {  field:'Surname',title:'Lastname' },
                                          {  field:'HN',title:'HN' },
                                          {  field:'BirthDate',title:'Birth Date' },
                                          {  field:'Sex',title:'Sex' },
                                          {field:'id_patient',title:'ID'},
                                      ]]
                                      
                     });
                     
                     $('#p_patient').window('open');
                     
                     //$('#sr_hn').combogrid('clear');
                     $('#sr_patient').window('close');
                  }
                        " />
                </label>
            </div>    
        </div>
    </div>
</div>
<!--  Search  ค้นหาประวัติผู้ป่วย -->


