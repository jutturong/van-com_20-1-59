 <!--     เพิ่มข้อมูล combobox --->  
       <script type="text/javascript">
           
           function dr_submit()
           {
                 // $.messager.alert("test");
                   $('#fr_drug').form({  
                       url:'<?=base_url()?>index.php/welcome/insert_drug',
                       onSubmit:function(data)
                                 {  
                                         //  alert(data);   
                                 } , 
                      success:function(data)
                                 { 
                                               //     alert(data);                    
                                          var   result=data;       
                                                    
                                         if( result == "success" )   
                                         {
                                                 $ .messager.alert("Status Insert"," บันทึกข้อมูลแล้ว ","Info");
                                                  $('#id_drug').combobox('reload');
                                                 $("#gd_drug").datagrid('reload');
                                                
                                          }else
                                          {
                                                   $ .messager.alert("Status Insert"," ไม่สามารถบันทึกข้อมูลได้ ","Error");
                                                   $('#id_drug').combobox('reload');
                                                   $("#gd_drug").datagrid('reload');
                                                   
                                            }
                                        
                                 }     
                                                     });
           }
           
           
           
       </script>
       
       
       
   <!--     เพิ่มข้อมูล combobox   Drug--->
   <div class="easyui-dialog"   id="dia_drug"   title="เพ่ิมข้อมูลยา  (Drug)  Drug level requested (Vancomycin)   "  style="width:480px;height: 500px"  data-options="
        closed:true,
        modal:true,
        iconCls:'icon-ok',
        
        "   >
       
       
       <div class="easyui-tabs"  id="tab_drug" style="width: 450px;height: 450px;padding: 20px  20">
           <div title="เพิ่มข้อมูล Drug( level requested ) "  data-options=" iconCls:'icon-save'  "  style="padding: 10px"  >
            
               
              
                   <form id="fr_drug" method="post"  >
           <div style="padding: 20px  40 " >
               
               <label for="drug_detail"  >
                   
                ระบุรายละเอียดยา :
                <input class="easyui-textbox"   id="drug_detail"  required="required"  name="drug_detail"  style="width:200px;height: 50px"   data-options=" prompt:' Drug level requested ' "      />
               
                 </label>
               
               
           </div>
           <div style="padding: 5px 20">
               <?=nbs(40)?>
               
               <!--
               <a href="javascript:void(0)"   data-options="iconCls:'icon-ok' "  class="easyui-linkbutton"  style=" height: 40px "   onclick=" dr_submit()  ">Insert</a>
                    -->
                    <input type="submit"    style="height:40px"       value="INSERT"   onclick=" dr_submit()  "     />
                   
                    <a href="javascript:void(0)"   onclick="$('#dia_drug').dialog('close');"     style="height: 40px"  class="easyui-linkbutton"  data-options="  iconCls:'icon-cancel'  "   >Close</a>
                  
                  
                
               
           </div>
       </form>
                   
             
               
               
               
               
           </div>
           <div title="ข้อมูลทั้งหมด Drug Detail "   style="padding: 10px"    >
               <div style="padding: 0px "></div>
               <table class="easyui-datagrid" id="gd_drug"   title="ข้อมูลทั้งหมด Drug "   data-options="  
                      url:'<?=base_url()?>index.php/welcome/tb_drug',
                      rownumbers:true,
                      fitColumns:true,
                      singleSelect:true,
                      columns:[[  
                         {  field:'drug_detail' , title:' Drug Detail '   }
                      ]],
                      toolbar:[
                      {  text:'Delete', iconCls:'icon-cancel',  handler:function(e)
                             {
                                 
                                   var row=$('#gd_drug').datagrid('getSelected');
                                   if( row )
                                   {
                                               var  id_drug=row.id_drug
                                 
                                                   $.post('<?=base_url()?>index.php/welcome/del_drug/'  + id_drug   ,function(data)
                                                                    { 
                                                                          //alert(data.success);
                                                                          var  tt=data.success;
                                                                            if( tt  )
                                                                            {
                                                                                  //alert(tt);
                                                                                  $.messager.alert('Status','  ลบข้อมูลแล้ว  ','Info');
                                                                                  $('#gd_drug').datagrid('reload');
                                                                            }
                                                                            else
                                                                            {
                                                                                  //alert('False');
                                                                                  $.messager.alert('Status',' ไม่สามารถลบข้อมูลได้  ','Error');
                                                                                     $('#gd_drug').datagrid('reload');
                                                                            }
                                                                    } ,'json' );
                                            
                                           
                                              
                                   }
                             }  
                        },
                      ]
                      "   style="width:200px; " >
                   
               </table>
           </div>           
       </div>

   </div>
      <!--     เพิ่มข้อมูล combobox   Drug--->
   