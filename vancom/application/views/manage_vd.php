<!--   VD -->
   <script type="text/javascript">
       function submit_vd()
       {
              $('#fr_vd').form({
                  url:'<?=base_url()?>index.php/welcome/insert_vd',
                  success:function(data)
                  {   
                         if( data == "true" )
                         {
                                       $.messager.alert("สถานะการบันทึกข้อมูล   ","   บันทึกสำเร็จ  ","Info");
                                       $('#dg_vd').datagrid('reload');
                                       $('#id_vd').combobox('reload');
                         }
                         else if ( data == "false"  )
                         {
                                   $.messager.alert("สถานะการบันทึกข้อมูล "," บันทึกล้มเหลว  ","Error");
                          }
                          else if( data == "exess"   )
                          {
                                 $.messager.alert("สถานะการบันทึกข้อมูล  ","  บันทึกข้อมูลซ้ำ  ","Error");
                           }
                           
                           
                  }
                  
              });
       }
   </script>
   <div class="easyui-dialog"  id="dia_vd"    title=" เพิ่ม Vd ของยา"  style="width:300px;height: 350;padding: 10px;top: 20px;left: 20px"  
          data-options="  
            modal:true,
            closed:true,
            buttons:[
            {  text:'Close', iconCls:'icon-cancel'  ,handler:function(){  $('#dia_vd').dialog('close');   }    },
            ]
          "
        >
       <div class="easyui-tabs"   >
           <div title="เพิ่ม Vd ของยา"  >
               
               <div style="padding: 10px;">
                   
                   
                   <form id="fr_vd"  method="post"  >
                    <label  for="add_vd_detail" >
                        เพิ่มข้อมูลยา Vd : 
                   <input class="easyui-textbox"   id="add_vd_detail"   name="add_vd_detail"    style="width:220px;height: 40px"   data-options=" iconCls:'icon-lock' ,  prompt:' เพิ่มข้อมูลยา Vd  '   "   />
               </label>
                   
                       <input type="submit"   style="height: 30px;"  onclick="submit_vd()"   />
                   </form>
                   
                   
               </div>
               
               
              
               
           </div>
           <div title="ข้อมุล Vd ของยาทั้งหมด">
               <table  id="dg_vd"  class="easyui-datagrid"  data-options="
                         url:'<?=base_url()?>index.php/welcome/tb_vd ',
                         singleSelect:true,
                         rownumbers:true,
                         fitColumns:true,
                         toolbar:[     
                          {    text:'Del',iconCls:'icon-cancel', 
                                handler:function()
                                {
                                       row=  $('#dg_vd').datagrid('getSelected');
                                       if( row )
                                       {
                                              var   id_vd=row.id_vd;
                                              //alert(row.id_vd);
                                               $.post('<?=base_url()?>index.php/welcome/del_vd/' +  id_vd   ,function(data)
                                               {
                                                       //alert(data.success);
                                                       var   ck=data.success;
                                                        if(ck)
                                                        {
                                                            $.messager.alert('สถานะของการลบข้อมูล','ลบข้อมูลสำเร็จ','Info');
                                                               $('#dg_vd').datagrid('reload');
                                                               $('#id_vd').combobox('reload');
                                                            
                                                        }
                                                        else
                                                        {
                                                            $.messager.alert('สถานะของการลบข้อมูล','ลบข้อมูลล้มเหลว','Error');
                                                            
                                                        }
                                               },'json');
                                       }
                                }
                          }
                           
                         ],
                         columns:[[
                         {   field:'vd_detail' , title:' รายละเอียดยา '    },                         
                         ]]
                      "    >
                   
               </table>
               
           </div>
           
       </div>
   </div>
      <!--   VD -->