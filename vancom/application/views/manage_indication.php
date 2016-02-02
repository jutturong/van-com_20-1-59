   <!--    Reason for TDM 1 (Indication)             -->
   <script type="text/javascript">
           function  submit_indication()
           {
                  $('#fr_indication').form({
                       url:'<?=base_url()?>index.php/welcome/insert_indication',
                       onSubmit:function(data)
                            {
                                    //alert(data);     
                                
                                        
                            },
                       success:function(data)
                            {
                                   // alert(data);  
                                       if( data == "true" )
                                       {
                                              $('#dg_indication').datagrid('reload');
                                              $('#indication_detail1').combobox('reload');
                                              $('#indication_detail2').combobox('reload');
                                              $.messager.alert("สถานะการบันทึกข้อมูล" ,  " สถานะการบันทึกข้อมูลสำเร็จ "  , "Info");
                                        }
                                       else if(  data == "excess" )
                                       {
                                            //  $('#dg_indication').datagrid('reload');
                                             $.messager.alert("สถานะการบันทึกข้อมูล" ,  " สถานะการบันทึกข้อมูลซ้ำ "  , "Error");
                                        }
                                        else if(  data== "false")
                                        {
                                             $.messager.alert("สถานะการบันทึกข้อมูล" ,  " สถานะการบันทึกข้อมูลล้มเหลว "  , "Error");
                                         }
                            }
                  });
               
           }
    </script>
   <div  class="easyui-dialog"  title=" เพิ่ม Reason for TDM  (Indication) : "  id="dia_indication"   style="width:400px;height: 500px;padding: 10px;left:30px;top:20px" 
              data-options="
                                  closed:true,
                                  iconCls:'icon-ok',
                                  modal:true,
                                  buttons:[ { text:'Close',   height:'50px' ,  width:'100px'   ,  iconCls:'icon-cancel',handler:function(e){  $('#dia_indication').dialog('close');   }    }    ]
                                       ">
       
       <div class="easyui-tabs"   >
           <div title=" เพิ่ม Indication (TDM) "   >
               
               <form id="fr_indication"  method="post"  >
               <div style="padding : 10px   10px ;" >
                   <label for="indication_detail">
                       เพิ่ม Indication (TDM) :
                       <input class="easyui-textbox"   id="indication_detail"   name="indication_detail"   required="required"    style="width:200px;height: 30px;padding:10px"   data-options=" prompt:' เพิ่ม Indication (TDM)  ' , iconCls:'icon-lock'   "    />
                   </label>
                   
               </div>
               <div style="padding:10px 100px">
                   <input type="submit"  style="width:100px;height: 40px;"  onclick="submit_indication()"  />
               </div>
               </form>
               
               
           </div>
           <div  title="  ข้อมูลทั้งหมด Indication (TDM)  "  >
               <div  style="padding:5px   " ></div>
               <table class="easyui-datagrid"  id="dg_indication"  style=" width:250px; " 
                      data-options="
                             url:'<?=base_url()?>index.php/welcome/indication',
                             singleSelect:true,
                             fitColumns:true,
                             rownumbers:true,
                             columns:[[
                                  {   field:'indication_detail',title:' Indication Detail  '     },
                                 
                             ]],
                             toolbar:[  
                                {  
                                      text:' Del  ',iconCls:'icon-cancel' ,
                                      handler:function()
                                        {
                                             var  row=$('#dg_indication').datagrid('getSelected');
                                              if( row )
                                              {
                                                     var  id_indication=row.id_indication;
                                                    // alert(id_indication);
                                                    
                                                                   $.post('<?=base_url()?>index.php/welcome/del_indication/' + id_indication   ,function(data)
                                                                   {  
                                                                           //alert( data.success );  
                                                                              if(  data.success   )
                                                                              {
                                                                                  $('#dg_indication').datagrid('reload');
                                                                                  $('#indication_detail1').combobox('reload');
                                                                                  $('#indication_detail2').combobox('reload');
                                                                                  $.messager.alert('สถานะการลบข้อมูล', ' ลบข้อมูลแล้ว ', 'Info');
                                                                                    
                                                                              }
                                                                              else
                                                                              {
                                                                                    $.messager.alert('สถานะการลบข้อมูล', ' ลบข้อมูลล้มเหลว ', 'Error');
                                                                              }
                                                                    },'json');

                                               }      
                                        }
                                }   ]
                      "  >
                   
               </table>
           </div>
           
       </div>
            
   </div>
     <!--    Reason for TDM 1 (Indication)             -->