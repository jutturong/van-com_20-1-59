<script type="text/javascript">
    $(function()
    {
        var vd=$('#vd');
        
        /*
        vd.textbox('textbox').bind('keydown',function(e)
        {
            alert('t');
        });
        */
        
        var  cl=$('#cl');
        var  ke=$('#ke');
        var  hl=$('#hl');
        var   W=$('#W');
        //var  conts=$('#conts');
        
        /*
        function calvalue(vd,cl,ke,hl)
        {
            
            
            vd.textbox('textbox').bind('keydown',function(e)
            {
                alert('test keydown');
            });
        }
        
       calvalue(vd,cl,ke,hl);
        */
       
       var cb_conts=$('#cb_conts');
       /*
        cb_conts.combobox({
            onSelect:function(e)
            { 
                //alert('t'); 
               alert( cb_conts.combobox('getValue') );
            }
        });
       */
       
      // if( W.textbox('getValue') > 0  &&  conts.textbox('getValue') > 0 )
       if( W.textbox('getValue') > 0    )
       {
           W.textbox('textbox').bind('keydown',function(e)
           {
                //var vd_val=W.textbox('getValue')*conts.textbox('getValue');
                 var vd_val=W.textbox('getValue')*cb_conts.combobox('getValue');
                vd.textbox('setText',vd_val);
           });
           
           /*
            conts.textbox('textbox').bind('keydown',function(e)
           {
               var vd_val=W.textbox('getValue')*conts.textbox('getValue');
                vd.textbox('setText',vd_val);
           });
           */
           
           cb_conts.combobox({
            onSelect:function(e)
            { 
                
               //alert( cb_conts.combobox('getValue') );
               var vd_val=W.textbox('getValue')*cb_conts.combobox('getValue');
               vd.textbox('setText',vd_val);
            }
        });
           
            /*
            var vd_val=W*conts;
            vd.textbox('setText',vd_val);
            */
       }
       
         if( ke.textbox('getValue') > 0 && vd.textbox('getValue') > 0  )
         {
             //alert('test keydown');
             ke.textbox('textbox').bind('keydown',function(e)
             { 
                 //alert('test ke keydown'); 
                  var  cl_val= ke.textbox('getValue') * vd.textbox('getValue');
                  cl.textbox('setText',cl_val);
                  var  hl_val=(0.693)/ke.textbox('getValue');
                  hl.textbox('setText',hl_val);
             });
             
              vd.textbox('textbox').bind('keydown',function(e)
             { 
                 //alert('test ke keydown'); 
                  var  cl_val= ke.textbox('getValue') * vd.textbox('getValue');
                  cl.textbox('setText',cl_val);
             });
         }
        
        
        
    });
    
    
    
  
    
    
</script>



<!-- เพิ่มข้อมูลยา -->
<div  class="easyui-window" id="win_drug" style="width:280px;height:500px" title=" เพิ่มข้อมูลยา (Vancomycin) "   data-options="
      closed:true,
      iconCls:'icon-add',
      modal:true,
      
      ">
    
    
   
    
    
    
    
   <!-- <div class="easyui-tabs" style="width:500px;height: 600px"   > -->
   <!--     <div title="ข้อมูลทั้งหมด" style="padding:5px;" >  -->
      
   
   <!--  เพิ่ม tb_disease http://127.0.0.1/vancom/index.php/welcome/tb_disease   --->
   <div class="easyui-dialog"    id="dg_disease"  style="width:370px;height: 500px;padding: 10px 5"  title=" เพิ่มข้อมูล  Underllying disease   "   
        data-options=
        "  
               closed:true,
               iconCls:'icon-add',
               modal:true,
               toolbar:[     
                   {   text:'เพิ่ม disease',iconCls:'icon-ok' , handler:function(){  alert('t');  }    }
               ]
        "    >
       <table class="easyui-datagrid"   
              data-options="
                  url:'<?=base_url()?>index.php/welcome/tb_disease/'  ,
                  rownumbers:true,
                  fitColums:true,
                  columns:[[
                      {  field:'disease_detail' , title:'Disease' }
                  ]],
                  "  style="width:300px"   >
           
       </table>
       
   </div>
   
   <!--  เพิ่ม tb_disease http://127.0.0.1/vancom/index.php/welcome/tb_disease   --->
    
   <!--  เพิ่ม indication    http://127.0.0.1/vancom/index.php/welcome/tb_indication --->
   <div   id="dia_indication"  class="easyui-dialog"   style="width:300px;height: 500px;padding: 10px 5"   title="  Reason for TDM  (Indication)  "   data-options=
          "
                 closed:true,
                 iconCls:'icon-man',
                 modal:true,
                 toolbar:[  {  iconCls:'icon-add' , text:' เพิ่มข้อมูล Indication ', 
                                                handler:function(e)
                                                        {  
                                                                   alert('t');  
                                                        }    
                                   }  ],
                 
                 
          "     >
       <table class="easyui-datagrid"   style="width:260px;padding:10px 5"  data-options=
              "  
                   url:'<?=base_url()?>index.php/welcome/indication',
                   fitColumns:true,
                   rownumbers:true,
                   columns:[[     
                   {   field:'indication_detail',title:'indication'      },
                   
                   ]],
                   
              "  >
           
       </table>
   </div>
   
     <!--  เพิ่ม indication    http://127.0.0.1/vancom/index.php/welcome/tb_indication ---> 
   
   
   
   <!-- เพิ่มข้อมูลยา -->
            <table class="easyui-datagrid" title="รายการยาทั้งหมด"  style="width: 250px;height:500px" data-options="
                   iconCls:'icon-Save',
                   url:'<?=base_url()?>index.php/welcome/tb_drug',
                   fitColumns:true,
                   rownumbers:true,
                   singleSelect:true,
                   
                   columns:[[
                  // { field:'id_drug',title:'id_drug' },
                   { field:'drug_detail',title:'ชื่อยา' }
                   ]],
                   
                   /*
                   toolbar:[
                   { iconCls:'icon-add', text:'เพิ่มรายการยา',handler:function()
                            { 
                                // alert('t'); 
                                 $('#dia_drug').dialog('open');
                            }  
                   },
                   { iconCls:'icon-remove', text:'ลบรายการ' ,handler:function() { alert('r'); }  },
                   ]
                   */
                   
                  
                   
                   ">
                
            </table>

    </div>
    
</div>
<!-- เพิ่มข้อมูลยา -->


<!-- เพิ่มประวัติการรักษา -->
        <div id="add_diagnosis" class="easyui-window" title=" เพิ่มประวัติประวัติการรักษา (Therapeutic Drug Monitoring) "    data-options="
                 modal:true,closed:true,
                 iconCls:' icon-large-shapes ',
                 closable:true,
                 resizable:true,
                 "
                 style="width:990px;height:650px;padding:10px;">
            
            
            
            <div style="padding:10px 60px 20px 60px">
                <form id="fr_diagnosis" method="post">
                    <table>
                       <tr>
                    <td>HN :</td>
                    <td>
                        
                        <!--<input class="easyui-textbox" type="text" name="name" data-options="required:true,iconCls:'icon-man'  "  style="  width:100px;height:30px  ">-->
                        <select class="easyui-combogrid" id="HN_dia" name="HN_dia" style="width:150px;height: 40px" data-options="
            panelWidth: 300,
            idField: 'HN',
            textField: 'HN',
            mode:'remote',
            idField:'HN',
            url: '<?=base_url()?>index.php/welcome/cmb_hn/',
            method: 'post',
            columns: [[
                {field:'HN',title:'HN'},
                {field:'Name',title:'Name'},
                {field:'Surname',title:'Lastname'},
                  {field:'Sex',title:'Sex'},
                 
                
            ]],
            fitColumns: true,
            onSelect:function(index,row)
            {   
                   //alert(index + row['HN']   );
                   //alert( row['HN']   );
                    $('#name_dia').textbox({
                               //  value:row.HN,
                                 value:row['Name'] ,
                                 iconCls:'icon-man',
                                 readonly:'true',
                                 
                                                             });
                    $('#lastname_dia').textbox({
                              value:row.Surname,
                              iconCls:'icon-man',
                              readonly:'true',
                                                                    });
                        $('#sex_dia').textbox({
                             value:row.Sex,
                             iconCls:'icon-man',
                             readon:'true',
                             
                        });                                            
             }
           
                              " />
                        
                        </input>
                         
                    </td>
                </tr>
                
                <tr>
                    <td>Patient's Name - Lastname :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="name_dia" id="name_dia"  data-options="required:true, iconCls:' icon-lock '   "  style="  width:150px;height:30px  "></input>
                         <input class="easyui-textbox" type="text" name="lastname_dia" id='lastname_dia'  data-options="required:true , iconCls:'icon-lock'  "  style="  width:200px;height:30px  "></input>
                    </td>
                </tr>
                
                <tr>
                    <td>Sex :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="sex_dia"  id="sex_dia"  data-options="required:true,iconCls:'icon-lock '  "  style="  width:100px;height:30px  "></input>
                         
                    </td>
                </tr>
                
                <tr>
                    <td>Age :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="name" data-options="required:true,iconCls:'icon-lock '  "  style="  width:100px;height:30px  "></input>
                         
                    </td>
                </tr>
                
                <tr>
                    <td>Ward :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="name" data-options="required:false"  style="  width:100px;height:30px;  "></input>
                  
                    </td>
                </tr>
                
                <tr>
                    <td>Body Weight  :</td>
                    <td>
                        <input class="easyui-numberbox" value="55" type="text" name="W" id="W" data-options="required:false"  style="  width:100px;height:30px  "></input>
                        Kg.
                        /
                        Conts. (ค่าคงที่)
                       <!-- <input class="easyui-numberbox" value="2" name="conts" id="conts" style="width: 60px;height: 30px;" /> -->
                        <select class="easyui-combobox" id="cb_conts" name="cb_conts" style="width:100px;height: 30px" data-options="
                                onSelect:function(e)
                                {
                                  //alert('t');
                                }
                                ">
                            <option value="0"> เลือก Conts. </option>
                            <option value="0.2">0.2</option>
                            <option value="0.25">0.25</option>
                            <option value="0.65">0.65</option>
                            <option value="0.7">0.7</option>
                             <option value="1.4">1.4</option>
                        </select>
                    </td>
                </tr>
                
                 <tr>
                    <td>Height  :</td>
                    <td>
                        <input class="easyui-numberbox" type="text" name="name" data-options="required:false"  style="  width:100px;height:30px  "></input>
                        cm.
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Reason for TDM 1 (Indication) :
                    </td>
                    <td>
                        
                        <!--
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        -->
                        
                        <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/indication',
                               valueField:'id_indication',
                               textField:'indication_detail',
                               
                               "  />
                        
                        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-add '  "   onclick=" $('#dia_indication').dialog('open');   "   >Add Indication</a>
                        
                    </td>
                    
                    
                </tr>
                
                <tr>
                    <td>
                        Reason for TDM 2 (Indication) :
                    </td>
                    <td>
                        
                        <!--
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        -->
                        <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/indication',
                               valueField:'id_indication',
                               textField:'indication_detail',
                               
                               "  />
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                        Underllying disease 1 :
                    </td>
                    <td>
                        <!--
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        -->
                        <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                        Underllying disease 6 :
                        
                         <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                      
                         <a  href="javascript:void(0)"   class="easyui-linkbutton"  data-options=" iconCls:'icon-add' , plain:false  "  onclick="$('#dg_disease').dialog('open')   "   style=" height: 30px "  > Disease</a>
                        
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                        Underllying disease 2 :
                    </td>
                    <td>
                        <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                        Underllying disease 7 :
                        
                         <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                        Underllying disease 3 :
                    </td>
                    <td>
                         <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                        Underllying disease 8 :
                        
                         <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                    </td>
                </tr>
                
                 <tr>
                    <td>
                        Underllying disease 4 :
                    </td>
                    <td>
                        <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                        Underllying disease 9 :
                        
                        <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                        Underllying disease 5 :
                    </td>
                    <td>
                         <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                        Underllying disease 10 :
                        
                         <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                       Reason for TDM :
                    </td>
                    <td>
                       
                        <!--
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">Routine Follow up</option>
                           
       
                           </select>
                        -->
                        
                            <input class="easyui-combobox"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                       <!--   <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-large-shapes '  " >Add Reason for TDM</a> -->
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                       Drug level requested (Vancomycin) :
                    </td>
                    <td>
                        
                        
                        <!--
                        <input class="easyui-combobox"  style=" width:200;height: 30px "
                               data-options=" 
                                 valueField:'id_vancomycin',
                                 textField:'vancomycin_detail',
                                 url:'<?=base_url()?>index.php/welcome/vancomycin',
                                 iconCls:'icon-add'
                               "
                               />
                        -->
                        <input class="easyui-combobox"  style=" width:200;height: 30px "
                               data-options=" 
                                 valueField:'id_drug',
                                 textField:'drug_detail',
                                 url:'<?=base_url()?>index.php/welcome/tb_drug/',
                                 
                               "
                               /> 
                           
                        <a href="javascript:void(0)" class="easyui-linkbutton" onclick=" $('#win_drug').window('open') " data-options="  iconCls:' icon-add '  " >Vancomycin</a>
                        
                    </td>
                </tr>
                
                
                
                <tr>
                    <td>
                       Current Medications :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">ceftazidime </option>
         <option value="2">Vancomycin </option>
       
                           </select>
                        
                        <input class="easyui-numberbox" value="2" style="height: 30px;width: 50px" /> g
                        
                        <input class="easyui-datebox" style="width:100px;height: 30px"/>
                        
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-large-shapes '  " >Add Current Medications</a>
                        
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                       Laboratory Data (within 5 day) :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">Creatinine</option>
         <option value="2">Creatinine</option>
       <option value="3">Creatinine</option>
                           </select>
                        
                        <input class="easyui-numberbox" style="width:60px;height: 30px;"   />
                        mg/dL
                        
                        
                     Date Labotory Data
                        
                          <input class="easyui-datebox" style="height: 30px;width:100px;"  data-options="required:true" ></input>
                        
                    </td>
                </tr>
                
                 <tr>
                    <td>
                       1. Sampling Time :
                    </td>
                    <td>
                       
                        
                    
                        
                          <input class="easyui-datetimebox" style="height: 30px"  data-options="required:true" ></input>
                        
                    </td>
                </tr>
                
                <tr>
                    <td>
                      2. Drug Administration Time :
                    </td>
                    <td>
                       
                        
                    
                        
                          <input class="easyui-datetimebox" style="height: 30px"  data-options="required:true" ></input>
                        
                    </td>
                </tr>
                
                <tr>
                    <td>
                       3. Measured level :
                    </td>
                    <td>

                          <input class="easyui-numberbox" precision="2" value="7.96" style="width:70px;height: 30px;" />
                        
                         
                        
                            <select class="easyui-combobox" name="state" style="width:100px;height: 30px;">
        <option value="1">ng/mL</option>
         <option value="2">mg/mL</option>
      
                           </select>
                          
                          
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" >
                         Pharmacokinetic parameters :
                    </td>
                </tr>
                
                <tr>
                    <td>
                       Vd :
                    </td>
                    <td>
                        <input class="easyui-numberbox" precision="2" id="vd" name="vd" value="49.00" style="width:70px;"></input>
                         L/Kg.
                         <?=nbs(4)?>
                         Cl :
                         <input class="easyui-numberbox" precision="4" id="cl" name="cl" value="0.01000" style="width:70px;"></input>
                         L/hr
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                       ke :
                    </td>
                    <td>
                        <input class="easyui-numberbox" precision="2" id="ke" name="ke" value="49.00" style="width:70px;"></input>
                         hr-1
                         <?=nbs(4)?>
                         Half-life :
                         <input class="easyui-numberbox" precision="4"  id="hl" name="hl" value="0.01000" style="width:100px;"></input>
                         hr
                    </td>
                </tr>
                
                
                <tr>
                    <td>Assessment :</td>
                    <td><input class="easyui-textbox" data-options="iconCls:'icon-add'" style="width:250px;height: 30px"></input></td>
                </tr>
                
                
                <tr>
                    <td>Interpretation and Recommendation :</td>
                    <td><input class="easyui-textbox" data-options="iconCls:'icon-add',multiline:true  " style="width:400px;height: 50px"></input></td>
                </tr>
                
                
                 <tr>
                    <td>Note :</td>
                    <td><input class="easyui-textbox" data-options="iconCls:'icon-add',multiline:true  " style="width:400px;height: 50px"></input></td>
                </tr>
                
                   <tr>
                    <td>Pharmacist :</td>
                    <td>
                        <input class="easyui-textbox" data-options="iconCls:'icon-man'  "  value="ภญ.ปฐมา โสภาช"  style="width:200px;height: 30px" ></input>
                        /
                        <input class="easyui-textbox" data-options="iconCls:'icon-man'  "   value="ภญ.ศิริลักษณ์ ใจซื่อ"  style="width:200px;height: 30px" ></input>
                    </td>
                </tr>
                
                <tr>
                    <td>Tel :</td>
                    <td>
                        <input class="easyui-numberbox"  value="11967"  style="width:100px;height: 30px" ></input>
                   
                    </td>
                </tr>
                
                 <tr>
                    <td>Date :</td>
                    <td>
                        <input class="easyui-datebox" data-options="required:true" style="height: 30px;"></input>
                   
                    </td>
                </tr>
                
                
                 <tr>
                    <td colspan="2">
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options=" iconCls:'icon-large-shapes' " >Insert</a>
                          <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel'   "  onclick="$('#add_diagnosis').window('close')   "  >Close</a>
                    </td>
                </tr>
                
                
                
                    </table>
                </form>
                
            </div>

<!-- เพิ่มประวัติการรักษา -->






        
        
        
    
        
        
        
        
        
        
        
        
        
        
        
        