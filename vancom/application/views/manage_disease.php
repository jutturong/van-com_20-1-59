 <script type="text/javascript">
             function  submit_disease()
             {
                      //index.php/welcome/insert_disease
                      $('#fr_disease').form({
                          url:'<?=base_url()?>index.php/welcome/insert_disease/',
                          onSubmit:function(data){
                               //$.messager.alert('t');
                             //   alert(data);
                          },
                                  success:function(data)
                                    {  

                                              if( data ==  "true" )
                                              {
                                                   $.messager.alert("สถานะการบันทึก" , "บันทึกสำเร็จ" ,"Info" );
                                                   $('#disease_detail_1').combobox('reload');
                                                                $('#disease_detail_1').combobox('reload');
                                                                $('#disease_detail_2').combobox('reload');
                                                                 $('#disease_detail_3').combobox('reload');
                                                                 $('#disease_detail_4').combobox('reload');
                                                                 $('#disease_detail_5').combobox('reload');
                                                                 $('#disease_detail_6').combobox('reload');
                                                                 $('#disease_detail_7').combobox('reload');
                                                                 $('#disease_detail_8').combobox('reload');
                                                                 $('#disease_detail_9').combobox('reload');
                                                                 $('#disease_detail_10').combobox('reload');  
                                                                                                 
                                                   $('#dg_disease').datagrid('reload');
                                              }
                                              else if( data == "false" )
                                              {
                                                   $.messager.alert("สถานะการบันทึก" , "บันทึกล้มเหลว" ,"Error" );
                                              }
                                    }  
                          
                      });
             }
        </script>
        
        <div class="easyui-dialog"  id="dia_disease"  title=" เพิ่ม  Underlying disease   "  style="width:480px;height: 500px;left:50px;top:10px;"  data-options="  
             closed:true,
             modal:true,
             buttons:[  
              
               {  text:'Close', iconCls:'icon-cancel' , handler:function(){  $('#dia_disease').dialog('close');   }                    }
               
             ]
             
             ">
            
            <div  class="easyui-tabs"   >
                
                 
              
                <div title="เพิ่มข้อมูล  Underlying disease  " >
                    <div style="padding: 10px 10px">
                        
                        <form id="fr_disease"  method="post"  >
                        <label for="disease_detail">
                                 Disease  detail  : 
                            <input class="easyui-textbox"  id="disease_detail"   name="disease_detail"  style="width:300px;height: 40px;"  
                                   data-options="  
                                   prompt:' เพิ่มข้อมูล Underlying disease   '   ,
                                   iconCls:'icon-lock',
                                   
                                   
                                   "
                                   
                                   >
                        </label>
                        
                            
                            <div style=" padding:10px  100px ;">
                           <!-- <a href="javascript:void(0)"   class="easyui-linkbutton"  data-options=" iconCls:'icon-add'    "   onclick=" submit_disease()  "  >Insert</a>-->
                                    <input type="submit"  onclick=" submit_disease() "  style="height: 40px;"  ></input>
                               </div>
                        
                        </form>
                        
                    </div>
                    
                    
                
                </div>
                    
                
               <div title="ข้อมูลทั้งหมด   Underlying disease  "  >
                   <table   id="dg_disease"  class="easyui-datagrid" data-options="  
                                             url:'<?=base_url()?>index.php/welcome/tb_disease',
                                             fitColumns:true,
                                             rownumbers:true,
                                             columns:[[
                                             {  field:'disease_detail',title:'Disease Detail'       },
                                             
                                             ]],
                                             toolbar:[     
                                                { 
                                                    text:'Del',
                                                    iconCls:'icon-cancel',
                                                    singleSelected:true,
                                                    
                                                    handler:function(e)
                                                    {
                                                          var   rows=$('#dg_disease').datagrid('getSelected');
                                                          if(rows)
                                                           {
                                                               
                                                                  var  id_disease=rows.id_disease;
                                                                  var  url =  '<?=base_url()?>index.php/welcome/del_disease/'  +  id_disease;
                                                                     //alert(  url  );
                                                                     $.post(url,function(data)
                                                                                { 
                                                                                     // alert(data.success);
                                                                                     if( data.success )
                                                                                     {
                                                                                                 $('#dg_disease').datagrid('reload');
                                                                                                    $('#disease_detail_1').combobox('reload');
                                                                                                    $('#disease_detail_2').combobox('reload');
                                                                                                     $('#disease_detail_3').combobox('reload');
                                                                                                     $('#disease_detail_4').combobox('reload');
                                                                                                     $('#disease_detail_5').combobox('reload');
                                                                                                     $('#disease_detail_6').combobox('reload');
                                                                                                     $('#disease_detail_7').combobox('reload');
                                                                                                     $('#disease_detail_8').combobox('reload');
                                                                                                     $('#disease_detail_9').combobox('reload');
                                                                                                     $('#disease_detail_10').combobox('reload');                                                                                 
                                                                                              $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ', 'Info' );    
                                                                                     }
                                                                                     else
                                                                                     {
                                                                                               $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลล้มเหลว', 'Error' );
                                                                                     }
                                                                                      
                                                                                },'json');
                                                           }
                                                    }
                                                }
                                             ]
                                             
                                          "  >
                                </table>
                 </div>
            
            
        </div>