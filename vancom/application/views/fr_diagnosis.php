
<!--  dialog  หลังจากเพิ่มประวัติการรักษา -->
<script type="text/javascript">
    function  view_diag(url)
    {
       
        /*
        $('#view_diag').datagrid({
            rownumbers:true,
            url:url,
            singleSelect:true,
            columns:[[
               { field:'',title:'Ward'  },     
               { field:'cb_conts',title:'Conts. (ค่าคงที่)' }
            ]]
        });
        */
        
       // $('#fr_detail_diag').form('load',url);
       // $('#fr_detail_diag').form('load',{ id_1:'test' });
       
       $.post(url,function(row,data)
       {
           alert("" + row["ward_"] );
           
       },'json');
        
    }
</script>

<script type="text/javascript">
    
    /*
 function sub_update()
 {
    //alert('t'); 
     $('#fr_detail_diag').form({ 
         url:'<?=base_url()?>index.php/welcome/update_diagnosis/',
         success:function(data)
         { 
             alert(data);  
            
             //$.messager.alert('แสดงสถานะ','Update ข้อมูลแล้ว','Info');
            // $('#dia_view_diag').dialog('close');
             $('#dg_diagnosis').datagrid('reload');
             
         } 
     });                                           
 }
 */
   
   
    
     
</script>

<script type="text/javascript">
   function  dia_update2()
   {
      // alert('t');
      $('#fr_detail_diag').form({
          url:'http://localhost/vancom/index.php/welcome/update_diagnosis',
          success:function(){  alert('t');    }
          
      });
   }
</script>


<div class="easyui-dialog" 
     data-options="
     closed:true,
     /*
     toolbar:[
     {  text:'Update',iconCls:'icon-edit',handler:function(data){ alert('t');  } },
     {   },
     ]
     */
     buttons:[    
     { text:'Close',iconCls:'icon-cancel',handler:function(data){ $('#dia_view_diag').dialog('close'); } } 
     
    
     ]
     " id="dia_view_diag" iconCls="icon-print" title="   แสดงรายละเอียดของประวัติการรักษา "  style="width:850px;left: 10px;top: 10px;height: 600px;" >
   
   <form id="fr_detail_diag"   method="post"  enctype="multipart/form-data" >
       <div style="padding: 5px 0" >
           <label>
            ID :   
               <input class="easyui-textbox" id="id_diagnosis" name="id_diagnosis"  style="width:50px;height: 30px;"  />
           </label>
       </div>
       <div style="padding: 5px;">
           Age : <input class="easyui-numberbox" id="age_up" name="age_up" style="width:100px;height: 30px;"  />  ปี
       </div>   
       
    <div style="padding: 5px;">
       <label>
           Ward : <input class="easyui-textbox" id="ward_up" name="ward_up" style="width:100px;height: 30px;" /> 
      
       
       </label>
   </div>   
   <div style="padding: 5px;">
       <label>
           Body Weight : <input class="easyui-numberbox" id="W_up" name="W_up" style="width:70px;height: 30px;" /> Kg.
       
        Conts. (ค่าคงที่) <input class="easyui-combobox" id="cb_conts_up" name="cb_conts_up" style="width:70px;height: 30px;"
               data-options=" 
                 valueField:'label',
                 textField:'value',
                 data:[ 
                 { label:0.2,value:0.2 },
                 { label:0.25,value:0.25 },
                 { label:0.65,value:0.65 },
                 { label:0.655,value:0.65 },
                 { label:0.7,value:0.7 },
                 {  label:1.4,value:1.4 },
               ] "                     
                                    
                                    /> 
       </label>
   </div>
       
     
       
       <div style="padding: 5px;">
       <label>
           Height : <input class="easyui-numberbox" id="height_up" name="height_up" style="width:70px;height: 30px;" /> Cm.
       </label>
       </div>
       
       <div style="padding: 5px;">
       <label>
           Reason for TDM 1 (Indication) : <input class="easyui-combobox" id="indication_detail1_up" name="indication_detail1_up" style="  width:150px;height:30px  "
                                             data-options="  url:'<?=base_url()?>index.php/welcome/indication',
                                                               valueField:'id_indication',
                                                              textField:'indication_detail', "     
                                            /> 
             <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-ok '  "   onclick="$('#dia_indication').dialog('open');  "  >Add Indication</a>
             
       </label>
       </div>
       
       <div style="padding: 5px">
           <label>
               Reason for TDM 2 (Indication) :
               <input class="easyui-combobox"   id="indication_detail2_up" name="indication_detail2_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/indication',
                               valueField:'id_indication',
                               textField:'indication_detail',
                               
                               "  />
           </label>
       </div>
       
       
       <div style="padding: 5px">
           <label>
             Underllying disease 1 :  
               <input class="easyui-combobox"  id="disease_detail_1_up" name="disease_detail_1_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
               
               Underllying disease 6 :             
           <input class="easyui-combobox"  id="disease_detail_6_up" name="disease_detail_6_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
               
                 <a href="javascript:void(0)"   class="easyui-linkbutton" data-options=" iconCls:'icon-ok'  "  onclick="$('#dia_disease').dialog('open');   "  >Disease</a>
           </label>
       </div>
       
       <div style="padding: 5px">
           <label>
            Underllying disease 2 :             
           <input class="easyui-combobox"  id="disease_detail_2_up" name="disease_detail_2_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
            Underllying disease 7 :             
           <input class="easyui-combobox"  id="disease_detail_7_up" name="disease_detail_7_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
           </label>
       </div>
       
        <div style="padding: 5px">
           <label>
            Underllying disease 3 :             
           <input class="easyui-combobox"  id="disease_detail_3_up" name="disease_detail_3_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
           
            Underllying disease 8 :             
           <input class="easyui-combobox"  id="disease_detail_8_up" name="disease_detail_8_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
           
           </label>
       </div>
       
        <div style="padding: 5px">
           <label>
            Underllying disease 4 :             
           <input class="easyui-combobox"  id="disease_detail_4_up" name="disease_detail_4_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
           
            Underllying disease 9 :             
           <input class="easyui-combobox"  id="disease_detail_9_up" name="disease_detail_9_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
           
           </label>
       </div>
       
       <div style="padding: 5px">
           <label>
            Underllying disease 5 :             
           <input class="easyui-combobox"  id="disease_detail_5_up" name="disease_detail_5_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
           
            Underllying disease 10 :             
           <input class="easyui-combobox"  id="disease_detail_10_up" name="disease_detail_10_up"  style="width:150px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
           
           </label>
       </div>
       
       <div style="padding: 5px;" >
           Reason for TDM :
         <input class="easyui-combobox" id="reason_for_tdm_up" name="reason_for_tdm_up" style="width:200px;height: 30px;"
                             data-options="
                             url:'<?=base_url()?>index.php/welcome/reason_tdm',
                             valueField:'id_reason',
                             textField:'reason_detail',                                                        
                             "
                             />
                        
                          <a href="javascript:void(0)"  onclick=" $('#dia_reason').dialog('open'); "    class="easyui-linkbutton" data-options="  iconCls:' icon-ok '  " >Add Reason for TDM</a>
       </div> 
       
       <div style="padding: 5px;" >
           <label>
         Drug level requested (Vancomycin)  
       <input class="easyui-combobox"  id="id_drug_up" name="id_drug_up"  style=" width:200;height: 30px "
                               data-options=" 
                                 valueField:'id_drug',
                                 textField:'drug_detail',
                                 url:'<?=base_url()?>index.php/welcome/tb_drug/',
                                 
                               "
                               /> 
                           
                     
         
                         <a href="javascript:void(0)"   class="easyui-linkbutton"   data-options=" iconCls:'icon-ok'   "     onclick="$('#dia_drug').dialog('open'); "  >Add Drug</a>
         </label>
       </div>  
       
       
       <div style="padding: 5px;" >
           <label> 
           Current Medications :
           <input class="easyui-textbox" id="current_medications_up" name="current_medications_up"  style="width:200px;height: 30px;"   />
             <input class="easyui-numberbox"  id="current_medications_weight_up" name="current_medications_weight_up" style="height: 30px;width: 50px" /> g
             <input class="easyui-datebox" style="width:200px;height: 30px" name="current_medications_date_up" id="current_medications_date_up"/>
           
           </label>
       </div>
       
       
       <div style="padding: 5px;">
           
           <label>
              Laboratory Data (within 5 day) : 
            <input class="easyui-textbox"  name="Laboratory_Data_up" id="Laboratory_Data_up"  style="width:200px;height: 30px;" />
                        
                        <input class="easyui-numberbox" id="Laboratory_Data_mg_up" name="Laboratory_Data_mg_up" style="width:60px;height: 30px;"   />
                        mg/dL
                        
                        
                     Date Labotory Data
                        
                     <input class="easyui-datebox" id="Laboratory_Data_date_up" name="Laboratory_Data_date_up"  style="height: 30px;width:180px;"  data-options="required:false" ></input>
           </label>         
       </div>
       
      
      <div style="padding: 5px;" >
           <label>   
             1. Sampling Time
         <input class="easyui-datetimebox"  id="Sampling_Time_up"  name="Sampling_Time_up" style="height: 30px;width: 200px;"  data-options="required:false" ></input>
       </label>
       </div>
       
       
       
      <div style="padding: 5px;" > 
          <label>    
            2. Drug Administration Time
              <input class="easyui-datetimebox" id="DrugAdministrationTime_up" name="DrugAdministrationTime_up" style="height: 30px;width: 200px;"  data-options="required:false" ></input>
     
          </label>   
      </div>                 
     
     <div style="padding: 5px;" > 
         <label>
       3. Measured level
       <input class="easyui-numberbox" id="Measured_level_up" name="Measured_level_up" precision="2"  style="width:70px;height: 30px;" />
    
       <input class="easyui-combobox" name="Measured_level_cmb_up" id="Measured_level_cmb_up" style="width:100px;height: 30px;"
             data-options="
                valueField:'value',
                textField:'text',
               data:[
               { value:'1',text:'ng/mL' },
               { value:'2',text:'mg/mL' }
               ]
             "
              />
         </label>
       <!--
     <select class="easyui-combobox" name="Measured_level_cmb" id="Measured_level_cmb" style="width:100px;height: 30px;">
        <option value="1">ng/mL</option>
         <option value="2">mg/mL</option>
      
                           </select>
       -->
       
     
     </div>  
       
       
       
      <div style="padding: 5px;" >  
          <label>   
          Vd :    
       <input class="easyui-combobox"   id="id_vd_up" name="id_vd_up"   style="width:200px;height: 30px;padding: 10px"  
                               data-options="
                                  url:'<?=base_url()?>index.php/welcome/tb_vd',
                                  valueField:'id_vd',
                                  textField:'vd_detail',
                                  
                               "     />
                        
                        <a href="javascript:void(0)"   class="easyui-linkbutton"   onclick=" $('#dia_vd').dialog('open'); "  data-options=" iconCls:'icon-ok'         ">เพิ่ม Vd</a>
          
          <input class="easyui-numberbox" precision="2" id="vd_up" name="vd_up"  style="width:70px;"></input>
                         L/Kg.
                         <?=nbs(4)?>
                         Cl :
                         <input class="easyui-numberbox" precision="4" id="cl_up" name="cl_up"  style="width:70px;"></input>
                         L/hr
                         <a href="javascript:void(0)"  class="easyui-linkbutton" onclick="cal1_()" >Cal Cl</a>
          
          </label>
      </div>
       
     
        <div style="padding: 5px;" >  
            <label>   
                ke
                <input class="easyui-numberbox" precision="2" id="ke_up" name="ke_up"  style="width:70px;"></input>
                         hr-1
                         <?=nbs(4)?>
                         Half-life :
                         <input class="easyui-numberbox" precision="4"  id="hl_up" name="hl_up"  style="width:100px;"></input>
                         hr
                         <a href="javascript:void(0)" class="easyui-linkbutton"  onclick="half_()" >Cal Half-life</a>
            </label>
      
        </div>
       
      <div style="padding: 5px;" > 
           <label>
               Assessment :
               <input class="easyui-textbox" id="Assessment_up" name="Assessment_up" data-options="iconCls:'icon-add'" style="width:250px;height: 30px" />
           </label>
       </div>
       
     
       <div style="padding: 5px;" > 
           <label>
               Interpretation and Recommendation :
               <input class="easyui-textbox" data-options="iconCls:'icon-add',multiline:true  " id="Interpretation_Recommendation_up"  name="Interpretation_Recommendation_up" style="width:400px;height: 50px" />
           </label>
       </div>    
               
       
        
        <div style="padding: 5px;" > 
             <label>
                    Note :
                    <input class="easyui-textbox" id="Note_up" name="Note_up" data-options="iconCls:'icon-add',multiline:true  " style="width:400px;height: 50px" />
             </label>       
        </div> 
       
       
       
       <div style="padding: 5px;" >
           <label>
                 Pharmacist :
                    
                        <input class="easyui-textbox" data-options="iconCls:'icon-man'  " id="Pharmacist1_up" name="Pharmacist1_up"   style="width:200px;height: 30px" />
                        /
                        <input class="easyui-textbox" data-options="iconCls:'icon-man'  "  id="Pharmacist2_up" name="Pharmacist2_up"   style="width:200px;height: 30px" />
           </label>            
       </div>  
       
       
       
       
       <div style="padding: 5px;" >
           <label>
                     Tel :
                    
                        <input class="easyui-numberbox" id="tel_up" name="tel_up"   style="width:100px;height: 30px" />
           </label>         
       </div>
       
       
       <div style="padding: 5px;" >
        <label>
       Date :
                    
                        <input class="easyui-datebox"id="date_record_up" name="date_record_up" data-options="required:false" style="height: 30px;" />
        </label>             
       </div>             
         
       <div style="padding:10px 100px;">
           
           <!--
           <input type="submit"   onclick="sub_update()" />
           -->
           
           <input type="submit" onclick="
              $('#fr_detail_diag').form({
                  url:'<?=base_url()?>index.php/welcome/update_diagnosis',
                  success:function(data)
                  {  
                      //alert('t'); 
                      //alert(data);
                      if( data == '' )
                      {
                           $('#dg_diagnosis').datagrid('reload');
                           $.messager.alert('สถานะการแก้ไขข้อมูล','แก้ไขข้อมูลสำเร็จ','Info');
                           //$('#add_diagnosis').window('close'); 
                            $('#dia_view_diag').dialog('close');
                      }
                       else
                      {
                           $.messager.alert('สถานะการแก้ไขข้อมูล','ไม่สามารถแก้ไขข้อมูลได้','Error');
                      }
                      
                  }
                  
              });
              
              " />
           
       </div>
       
   </form>
   
</div>  


   <div class="easyui-window" id="window_diagnosis" title=" แสดงประวัติการรักษาทั้งหมด " style="left:10px;top:10px;width:600px;height: 500px;" 
     data-options=" 
      iconCls:'icon-man',
      closed :true,
      
     footer: '#footer_dia'
    
     " >
       <table id="dg_diagnosis"  class="easyui-datagrid" 
              data-options="
              url:'<?=base_url()?>index.php/welcome/tb_diagnosis',
              fitColumns:true,
              singleSelect:true,
              rownumbers:true,
              columns:[[
              { field:'Title',title:'คำนำหน้าชื่อ'  },
              { field:'Name',title:'ชื่อ' },
              { field:'Surname',title:'นามสกุล'  },
              { field:'HN',title:'HN' },
              { field:'Sex',title:'เพศ'  },
              { field:'Status',title:'สถานะ'  },
             
              { field:'BirthDate',title:'วัน-เดือน-ปี เกิด'  },
               { field:'ward_',title:'Ward' },
               { field:'date_record',title:'วัน-เดือน-ปี ที่มา' },
              ]],
              toolbar:[
              { text:'Add',iconCls:'icon-add',handler:function(){ op_diagnosis();  }     },
              { text:'Del',iconCls:'icon-remove',
                 handler:function(){
                    var  row=$('#dg_diagnosis').datagrid('getSelected');
                    if( row )
                    {
                       var  id_diagnosis=row.id_diagnosis
                       
                        $.messager.confirm('สถานะการลบข้อมูล','คุณแน่ใจว่าต้องการลบข้อมูลจริงหรือไม่',function(r)
                        {
                            if(r)
                            {
                               $.post('<?=base_url()?>index.php/welcome/del_diagnosis/' + id_diagnosis ,function(data)
                               { 
                                  //alert(data); 
                                  if( data=='true')
                                  {
                                     $.messager.alert('สถานะการลบข้อมูล','ข้อมูลถูกลบแล้ว','Info');
                                     $('#dg_diagnosis').datagrid('reload');
                                  }
                                  else
                                  {
                                      $.messager.alert('สถานะการลบข้อมูล','ไม่สามารถข้อมูลได้','Error');
                                  }
                                  
                               } );
                                
                            } 
                        } );
                        
                        
                    }
                 }
              },
              { text:'Update/View',iconCls:'icon-ok',handler:function(data)
                {
                  var  row=$('#dg_diagnosis').datagrid('getSelected');
                  if(row)
                  {
                    var  id_diagnosis=row.id_diagnosis;
                      //alert(id_diagnosis);
                      $('#dia_view_diag').dialog('open');
                      $('#ward_up').textbox('setValue',row.ward_ );
                      $('#W_up').numberbox('setValue',row.bodyweight );
                      
                      $('#cb_conts_up').combobox('setValue',row.cb_conts);
                      
                      $('#height_up').numberbox('setValue',row.height);
                      
                      $('#indication_detail1_up').combobox('setValue',row.indication1); 
                     // $('#indication_detail1_up').combobox('setValue',row.indication_detail);  //indication1
                      
                      $('#indication_detail2_up').combobox('setValue',row.indication2); 
                     // $('#indication_detail2_up').combobox('setValue',row.indication_detail);
                     
                     $('#id_diagnosis').textbox('setValue',row.id_diagnosis);
                     
                     $('#disease_detail_1_up').combobox('setValue',row.underllyingdisease1 ); //Underllying disease 1
                     $('#disease_detail_2_up').combobox('setValue',row.underllyingdisease2 );
                     $('#disease_detail_3_up').combobox('setValue',row.underllyingdisease3 );
                     $('#disease_detail_4_up').combobox('setValue',row.underllyingdisease4 );
                     $('#disease_detail_5_up').combobox('setValue',row.underllyingdisease5 );
                     $('#disease_detail_6_up').combobox('setValue',row.underllyingdisease6 );
                     $('#disease_detail_7_up').combobox('setValue',row.underllyingdisease7 );
                     $('#disease_detail_8_up').combobox('setValue',row.underllyingdisease8 );
                     $('#disease_detail_9_up').combobox('setValue',row.underllyingdisease9 );
                     $('#disease_detail_10_up').combobox('setValue',row.underllyingdisease10 );
                     
                     $('#reason_for_tdm_up').combobox('setValue',row.reason_for_TDM);//Reason for TDM
                     
                     $('#id_drug_up').combobox('setValue',row.vancomycin);  // vancomycin  //Drug level requested (Vancomycin)
                    
                     $('#current_medications_up').textbox('setValue',row.current_medications); //Current Medications
                   
                     $('#current_medications_weight_up').textbox('setValue',row.current_medications_weight); //Current Medications
                     
                    // $('#current_medications_date_up').datebox('setValue',row.current_medications_date); //Current Medications
                     
                     
                     $('#Laboratory_Data_up').textbox('setValue',row.laboratorydata5day);
                     $('#Laboratory_Data_mg_up').numberbox('setValue',row.laboratory_Data_mg);
                    // $('#Laboratory_Data_date_up').datebox('setValue',row.Laboratory_Data_date); //Date Labotory Data
                     
                     
                    // $('#Sampling_Time_up').datebox('setValue',row.sampling_time); //Sampling Time
                     
                   //  $('#DrugAdministrationTime_up').datebox('setValue',row.drugadministrationtime ); //Drug Administration Time
                     
                     $('#Measured_level_up').numberbox('setValue',row.measured_level);
                     
                     $('#Measured_level_cmb_up').combobox('setValue',row.measured_level_cmb );
                     
                     $('#id_vd_up').combobox('setValue',row.vd_index);
                     
                     $('#vd_up').numberbox('setValue',row.vd );
                     
                     $('#cl_up').numberbox('setValue',row.cl);
                     
                     $('#ke_up').numberbox('setValue',row.ke);
                     
                     $('#hl_up').numberbox('setValue',row.hl );
                     
                     $('#Assessment_up').textbox('setValue',row.assessment );
                     
                     $('#Interpretation_Recommendation_up').textbox('setValue',row.Interpretation_Recommendation  );
                     
                     $('#Note_up').textbox('setValue',row.Note  );
                     
                     $('#Pharmacist1_up').textbox('setValue',row.pharmacist1 );
                     
                     $('#Pharmacist2_up').textbox('setValue',row.pharmacist2 );
                     
                     $('#tel_up').textbox('setValue',row.tel);
                     
                    // $('#date_record_up').datebox('setValue',row.date_record );  //Date
                     
                  }
                }  
              },
              { text:'Report',iconCls:'icon-print',handler:function()
                {
                    var  row=$('#dg_diagnosis').datagrid('getSelected');
                    var  id=row.id_diagnosis;
                    //alert(id);
                    //http://localhost/vancom/report_pdf/vancom/query_diagnosis.php
                    //http://localhost/vancom/report_pdf/vancom/report_case2.php?id=158
                    window.open('<?=base_url()?>report_pdf/vancom/report_case2.php?id=' + id );
                }   
              },
              { text:'refresh',iconCls:'icon-reload',handler:function(){ $('#dg_diagnosis').datagrid('reload'); }  }
              ]
              " >
           
       </table>   
       
       
    
</div>
<div  id="footer_dia">
    <a href="javascript:void(0)" class="easyui-linkbutton" data-options=" iconCls:'icon-cancel' ,onClick:function(){ $('#window_diagnosis').window('close'); } " > Close </a>
</div>
<!--  dialog  หลังจากเพิ่มประวัติการรักษา --> 

<script type="text/javascript">
    function cal1()
    {
        
        var vd=$('#vd');                
        var  cl=$('#cl');      
        var  ke=$('#ke');   
        var  hl=$('#hl');    
        var   W=$('#W');            
        var cb_conts=$('#cb_conts');  
       
        var  ans1=ke.numberbox('getValue')*vd.numberbox('getValue');
            cl.numberbox('setValue',ans1);
           //$('#cl').numberbox('setValue')
    }
    
     function cal1_()
    {
        
        var vd=$('#vd_up');                
        var  cl=$('#cl_up');      
        var  ke=$('#ke_up');   
        var  hl=$('#hl');    
        var   W=$('#W');            
        var cb_conts=$('#cb_conts');  
       
        var  ans1=ke.numberbox('getValue')*vd.numberbox('getValue');
            cl.numberbox('setValue',ans1);
           //$('#cl').numberbox('setValue')
    }
    
    function half_()
    {
        var  ans2= 0.693/$('#ke_up').numberbox('getValue');
        $('#hl_up').numberbox('setValue',ans2);
    }
    
     function half()
    {
        var  ans2= 0.693/$('#ke').numberbox('getValue');
        $('#hl').numberbox('setValue',ans2);
    }
    
</script>


<script type="text/javascript">
    $(function()
    {
        var vd=$('#vd');                
        var  cl=$('#cl');      
        var  ke=$('#ke');   
        var  hl=$('#hl');    
        var   W=$('#W');            
        var cb_conts=$('#cb_conts');                
        if( W.textbox('getValue') > 0    )
            {
                W.textbox('textbox').bind('keydown',function(e)
                {              
                      var vd_val=W.textbox('getValue')*cb_conts.combobox('getValue');
                     vd.textbox('setText',vd_val);
                });

                cb_conts.combobox({
                 onSelect:function(e)
                 {                            
                    var vd_val=W.textbox('getValue')*cb_conts.combobox('getValue');
                    vd.textbox('setText',vd_val);
                 }
             });                   
            } 
        if( ke.textbox('getValue') > 0 && vd.textbox('getValue') > 0  )
            {           
                ke.textbox('textbox').bind('keydown',function(e)
                {              
                     var  cl_val= ke.textbox('getValue') * vd.textbox('getValue');
                     cl.textbox('setText',cl_val);
                     var  hl_val=(0.693)/ke.textbox('getValue');
                     hl.textbox('setText',hl_val);
                });            
                 vd.textbox('textbox').bind('keydown',function(e)
                {               
                     var  cl_val= ke.textbox('getValue') * vd.textbox('getValue');
                     cl.textbox('setText',cl_val);
                });
            }
</script>

<script type="text/javascript">
$(function()
{
    $('#cb_conts').combobox({
        onSelect:function()
        {
            //alert('t');
            var  val=$('#cb_conts').combobox('getValue');
           // var  cb_id_vd=$('#id_vd').combobox();
            if( val > 0)
            {
                //alert(val);
                if( val == 0.25 )
                {
                    //Aninoglycosides
                    $('#id_vd').combobox('setText','Aninoglycosides');
                    $('#id_vd').combobox('setValue',1);
                    //alert( $('#id_vd').combobox('getValue') );
                }
                if( val == 0.7 )
                {
                    //Aninoglycosides
                    $('#id_vd').combobox('setText','Vancomycin');
                    $('#id_vd').combobox('setValue',2);
                }
                 if( val == 0.65 )
                {
                    //Aninoglycosides
                    $('#id_vd').combobox('setText','Phenobarbital');
                    $('#id_vd').combobox('setValue',3);
                }
                
                if( val == 0.655 )
                {
                    //Aninoglycosides
                    $('#id_vd').combobox('setText','Phenytoin');
                    $('#id_vd').combobox('setValue',4);
                }
                
                if( val == 0.2 )
                {
                    //Aninoglycosides
                    $('#id_vd').combobox('setText','Valproate');
                    $('#id_vd').combobox('setValue',5);
                }
                if( val == 1.4 )
                {
                    //Aninoglycosides
                    $('#id_vd').combobox('setText','Carbamazepine');
                    $('#id_vd').combobox('setValue',6);
                }
            }
        }
        
    });
});
</script>




<!-- เพิ่มประวัติการรักษา -->
        <div id="add_diagnosis" class="easyui-window" title=" เพิ่มประวัติประวัติการรักษา (Therapeutic Drug Monitoring) "    data-options="
                 modal:true,closed:true,
                 iconCls:' icon-large-shapes ',
                 closable:true,
                 resizable:true,
                
                 "
                 style="width:950px;height:600px;padding:10px;top:5px;left:5px;">
            
            
            
            <div style="padding:10px 0px ">
                <form id="fr_diag" action="<?=base_url()?>index.php/welcome/insert_dia"  method="post"  enctype="multipart/form-data" >
                    <table>
                       <tr>
                    <td>HN :</td>
                    <td>
                        
                        <!--<input class="easyui-textbox" type="text" name="name" data-options="required:true,iconCls:'icon-man'  "  style="  width:100px;height:30px  ">-->
                        <select class="easyui-combogrid" id="HN_dia" required="true" name="HN_dia" style="width:150px;height: 40px" data-options="
            panelWidth: 300,
            idField: 'HN',
            textField: 'HN',
            mode:'remote',
            idField:'id_patient',
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
                        <input class="easyui-textbox" type="text" name="name_dia" id="name_dia"  data-options="required:false, iconCls:' icon-lock '   "  style="  width:150px;height:30px  "></input>
                         <input class="easyui-textbox" type="text" name="lastname_dia" id='lastname_dia'  data-options="required:false , iconCls:'icon-lock'  "  style="  width:200px;height:30px  "></input>
                    </td>
                </tr>
                
                <tr>
                    <td>Sex :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="sex_dia"  id="sex_dia"  data-options="required:false,iconCls:'icon-lock '  "  style="  width:100px;height:30px  "></input>
                         
                    </td>
                </tr>
                
                <tr>
                    <td>Age :</td>
                    <td>
                        <input class="easyui-textbox" type="text" id="age" name="age" data-options="required:false,iconCls:'icon-lock '  "  style="  width:100px;height:30px  "></input>
                         
                    </td>
                </tr>
                
                <tr>
                    <td>Ward :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="ward" id="ward" data-options="required:false"  style="  width:100px;height:30px;  "></input>
                  
                    </td>
                </tr>
                
                <tr>
                    <td>Body Weight  :</td>
                    <td>
                        <input class="easyui-numberbox"  type="text" name="W" id="W" data-options="required:false"  style="  width:100px;height:30px  "></input>
                        Kg.
                        /
                        Conts. (ค่าคงที่)
                       <!-- <input class="easyui-numberbox" value="2" name="conts" id="conts" style="width: 60px;height: 30px;" /> -->
                        <select class="easyui-combobox" id="cb_conts" name="cb_conts" style="width:100px;height: 30px" >                               
                            <option value=0> เลือก Conts. </option>
                            <option value=0.2>0.2</option>
                            <option value=0.25>0.25</option>
                            <option value=0.65>0.65</option>
                            <option value=0.655>0.65</option>
                            <option value=0.7>0.7</option>
                             <option value=1.4>1.4</option>
                        </select>
                    </td>
                </tr>
                
                 <tr>
                    <td>Height  :</td>
                    <td>
                        <input class="easyui-numberbox" type="text" name="height" id="height" data-options="required:false"  style="  width:100px;height:30px  "></input>
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
                        
                        <input class="easyui-combobox"   id="indication_detail1" name="indication_detail1" style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/indication',
                               valueField:'id_indication',
                               textField:'indication_detail',
                               
                               "  />
                        
                        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-ok '  "   onclick="$('#dia_indication').dialog('open');  "  >Add Indication</a>
                        
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
                        <input class="easyui-combobox"   id="indication_detail2" name="indication_detail2"  style="width:200px;height: 30px" data-options="
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
                        <input class="easyui-combobox"  id="disease_detail_1" name="disease_detail_1"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                        Underllying disease 6 :
                        
                        <input class="easyui-combobox"  id="disease_detail_6" name="disease_detail_6" style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                         
                         <a href="javascript:void(0)"   class="easyui-linkbutton" data-options=" iconCls:'icon-ok'  "  onclick="$('#dia_disease').dialog('open');   "  >Disease</a>
                        
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                        Underllying disease 2 :
                    </td>
                    <td>
                        <input class="easyui-combobox"  id="disease_detail_2" name="disease_detail_2"  style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                        Underllying disease 7 :
                        
                        <input class="easyui-combobox"  id="disease_detail_7" name="disease_detail_7"  style="width:200px;height: 30px" data-options="
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
                        <input class="easyui-combobox"  id="disease_detail_3" name="disease_detail_3"   style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                        Underllying disease 8 :
                        
                        <input class="easyui-combobox"    id="disease_detail_8" name="disease_detail_8" style="width:200px;height: 30px" data-options="
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
                        <input class="easyui-combobox"    id="disease_detail_4" name="disease_detail_4"   style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                        Underllying disease 9 :
                        
                        <input class="easyui-combobox"   id="disease_detail_9" name="disease_detail_9"   style="width:200px;height: 30px" data-options="
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
                        <input class="easyui-combobox"   id="disease_detail_5"  name="disease_detail_5"    style="width:200px;height: 30px" data-options="
                               url:'<?=base_url()?>index.php/welcome/tb_disease',
                               valueField:'id_disease',
                               textField:'disease_detail',
                               
                               "  />
                        
                        Underllying disease 10 :
                        
                        <input class="easyui-combobox"    id="disease_detail_10" name="disease_detail_10"    style="width:200px;height: 30px" data-options="
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
                        
                        <input class="easyui-combobox" id="reason_for_tdm" name="reason_for_tdm" style="width:200px;height: 30px;"
                             data-options="
                             url:'<?=base_url()?>index.php/welcome/reason_tdm',
                             valueField:'id_reason',
                             textField:'reason_detail',                                                        
                             "
                             />
                        
                   
                          <a href="javascript:void(0)"  onclick=" $('#dia_reason').dialog('open'); "    class="easyui-linkbutton" data-options="  iconCls:' icon-ok '  " >Add Reason for TDM</a>
                        
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
                        <input class="easyui-combobox"  id="id_drug" name="id_drug"  style=" width:200;height: 30px "
                               data-options=" 
                                 valueField:'id_drug',
                                 textField:'drug_detail',
                                 url:'<?=base_url()?>index.php/welcome/tb_drug/',
                                 
                               "
                               /> 
                           
                     
                        <a href="javascript:void(0)"   class="easyui-linkbutton"   data-options=" iconCls:'icon-ok'   "     onclick="$('#dia_drug').dialog('open'); "  >Add Drug</a>
                        
                        
                    </td>
                </tr>
                
                
                
                <tr>
                    <td>
                       Current Medications :
                    </td>
                    <td>
                        
                        <!--
                        <select class="easyui-combobox" name="current_medications" id="current_medications" style="width:200px;height: 30px;">
        <option value=1>ceftazidime </option>
         <option value=2>Vancomycin </option>
       
                           </select>
                        -->
                        
                        <input class="easyui-textbox" id="current_medications" name="current_medications"  style="width:200px;height: 30px;"   />
                        
                        <input class="easyui-numberbox"  id="current_medications_weight" name="current_medications_weight" style="height: 30px;width: 50px" /> g
                        
                        <input class="easyui-datebox" style="width:200px;height: 30px" name="current_medications_date" id="current_medications_date"/>
                        
                        <!--
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-large-shapes '  " >Add Current Medications</a>
                        -->
                        
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                       Laboratory Data (within 5 day) :
                    </td>
                    <td>
                       
                        <!--
                        <select class="easyui-combobox" name="Laboratory_Data" id="Laboratory_Data" style="width:200px;height: 30px;">
        <option value="1">Creatinine</option>
         <option value="2">Creatinine</option>
       <option value="3">Creatinine</option>
                           </select>
                        -->
                        
                        <input class="easyui-textbox"  name="Laboratory_Data" id="Laboratory_Data"  style="width:200px;height: 30px;" />
                        
                        <input class="easyui-numberbox" id="Laboratory_Data_mg" name="Laboratory_Data_mg" style="width:60px;height: 30px;"   />
                        mg/dL
                        
                        
                     Date Labotory Data
                        
                     <input class="easyui-datebox" id="Laboratory_Data_date" name="Laboratory_Data_date"  style="height: 30px;width:180px;"  data-options="required:false" ></input>
                        
                    </td>
                </tr>
                
                 <tr>
                    <td>
                       1. Sampling Time :
                    </td>
                    <td>
                       
                        
                    
                        
                        <input class="easyui-datetimebox"  id="Sampling_Time"  name="Sampling_Time" style="height: 30px;width: 200px;"  data-options="required:false" ></input>
                        
                    </td>
                </tr>
                
                <tr>
                    <td>
                      2. Drug Administration Time :
                    </td>
                    <td>
                       
                        
                    
                        
                        <input class="easyui-datetimebox" id="DrugAdministrationTime" name="DrugAdministrationTime" style="height: 30px;width: 200px;"  data-options="required:false" ></input>
                        
                    </td>
                </tr>
                
                <tr>
                    <td>
                       3. Measured level :
                    </td>
                    <td>

                        <input class="easyui-numberbox" id="Measured_level" name="Measured_level" precision="2"  style="width:70px;height: 30px;" />
                        
                         
                        
                        <select class="easyui-combobox" name="Measured_level_cmb" id="Measured_level_cmb" style="width:100px;height: 30px;">
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
                        
                        <input class="easyui-combobox"   id="id_vd" name="id_vd"   style="width:200px;height: 30px;padding: 10px"  
                               data-options="
                                  url:'<?=base_url()?>index.php/welcome/tb_vd',
                                  valueField:'id_vd',
                                  textField:'vd_detail',
                                  
                               "     />
                        
                        <a href="javascript:void(0)"   class="easyui-linkbutton"   onclick=" $('#dia_vd').dialog('open'); "  data-options=" iconCls:'icon-ok'         ">เพิ่ม Vd</a>
                        
                        <input class="easyui-numberbox" precision="2" id="vd" name="vd"  style="width:70px;"></input>
                         L/Kg.
                         <?=nbs(4)?>
                         Cl :
                         <input class="easyui-numberbox" precision="4" id="cl" name="cl"  style="width:70px;"></input>
                         L/hr
                         <a href="javascript:void(0)" class="easyui-linkbutton" onclick="cal1()" >Cal Cl</a>
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                       ke :
                    </td>
                    <td>
                        <input class="easyui-numberbox" precision="2" id="ke" name="ke" onkeydown="cal1()" style="width:70px;"></input>
                         hr-1
                         <?=nbs(4)?>
                         Half-life :
                         <input class="easyui-numberbox" precision="4"  id="hl" name="hl"  style="width:100px;"></input>
                         hr
                         <a href="javascript:void(0)"  class="easyui-linkbutton" onclick="half()" >Cal Half-life</a>
                    </td>
                </tr>
                
                
                <tr>
                    <td>Assessment :</td>
                    <td><input class="easyui-textbox" id="Assessment" name="Assessment" data-options="iconCls:'icon-add'" style="width:250px;height: 30px"></input></td>
                </tr>
                
                
                <tr>
                    <td>Interpretation and Recommendation :</td>
                    <td><input class="easyui-textbox" data-options="iconCls:'icon-add',multiline:true  " id="Interpretation_Recommendation"  name="Interpretation_Recommendation" style="width:400px;height: 50px"></input></td>
                </tr>
                
                
                 <tr>
                    <td>Note :</td>
                    <td><input class="easyui-textbox" id="Note" name="Note" data-options="iconCls:'icon-add',multiline:true  " style="width:400px;height: 50px"></input></td>
                </tr>
                
                   <tr>
                    <td>Pharmacist :</td>
                    <td>
                        <input class="easyui-textbox" data-options="iconCls:'icon-man'  " id="Pharmacist1" name="Pharmacist1"   style="width:200px;height: 30px" ></input>
                        /
                        <input class="easyui-textbox" data-options="iconCls:'icon-man'  "  id="Pharmacist2" name="Pharmacist2"  style="width:200px;height: 30px" ></input>
                    </td>
                </tr>
                
                <tr>
                    <td>Tel :</td>
                    <td>
                        <input class="easyui-numberbox" id="tel" name="tel" value="48417"  style="width:100px;height: 30px" ></input>
                   
                    </td>
                </tr>
                
                 <tr>
                    <td>Date :</td>
                    <td>
                        <input class="easyui-datebox"id="date_record " name="date_record" data-options="required:false" style="height: 30px;"></input>
                   
                    </td>
                </tr>
                
                
                 <tr>
                    <td colspan="2">
                        
                        
                     <!--   <a href="javascript:void(0)" class="easyui-linkbutton" onclick="   "  data-options=" iconCls:'icon-large-shapes' ," >Insert</a> -->                               
 
                      <?=nbs(60)?>    
                            
                        
                     <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="
                        iconCls:'icon-man',
                        onClick:function()
                        {
                             //alert('t');
                               $('#fr_diag').form('submit',{
                                  //http://127.0.0.1/vancom/index.php/welcome/insert_patient/
                                  url:'<?=base_url()?>index.php/welcome/insert_dia',
                                  success:function(data)
                                  {
                                      //alert(data); 
                                      
                                      if( data == 'true' )
                                      {
                                          $('#dg_diagnosis').datagrid('reload');
                                          $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ','Info');
                                          $('#add_diagnosis').window('close');
                                          
                                      }
                                      else
                                      {
                                           $.messager.alert('สถานะการบันทึกข้อมูล','ไม่สามารถบันทึกข้อมูลได้','Error');
                                      }
                                     
                                     
                                  }
                                  
                              });
                        }
                        "  >บันทึก</a>     
                     
                     <!--
                       <input type="submit" onclick="        
                              $('#fr_diag').form({
                                
                                  url:'<?=base_url()?>index.php/welcome/insert_dia',
                                  success:function(data)
                                  {
                                     
                                     
                                      if( data == 'true' )
                                      {
                                          $('#dg_diagnosis').datagrid('reload');
                                          $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ','Info');
                                          $('#add_diagnosis').window('close');
                                          
                                      }
                                      else
                                      {
                                           $.messager.alert('สถานะการบันทึกข้อมูล','ไม่สามารถบันทึกข้อมูลได้','Error');
                                      }
                                     
                                  }
                                  
                              });
                              "  /> 
                       -->
                       
                        <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel'   "   style="width: 100px;height: 40px;" onclick="$('#add_diagnosis').window('close')   "  >Close</a>  
                       
                       
                    </td>
                </tr>
                
                
                
                    </table>
                </form>
                
            </div>

<!-- เพิ่มประวัติการรักษา -->


<!-- ค้นหาประวัติการรักษา-->
<div class="easyui-dialog" title=" ค้นหาประวัติการรักษา " id="sr_dialog_dia" style="top: 10px;left:10px;width:400px;height: 300px;" 
     data-options=" iconCls:'icon-man',closed:true,  ">
    <div style="padding:10px;">
                <label>
                    ชื่อ-นามสกุล : <input class="easyui-combogrid" id="sr_id_diag" style="height: 40px;width: 200px;" 
                    data-options="
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
                    
                    var  id=$('#sr_id_diag').combogrid('getValue'); //alert(id);
                    
                     
                    
                   //http://127.0.0.1/vancom/index.php/welcome/diag_byid/4 
                   //url:'http://127.0.0.1/vancom/index.php/welcome/diag_byid/' + id ,
                   
                    $('#window_diagnosis').dialog('open'); 
                    
                    
                    $('#dg_diagnosis').datagrid({ 
                        url:'<?=base_url()?>index.php/welcome/diag_byid/' + id ,
                         fitColumns:true,
                        singleSelect:true,
                        rownumbers:true,
                      columns:[[
                         { field:'Name',title:'ชื่อ' },
                         { field:'Surname',title:'นามสกุล'  },
                         { field:'HN',title:'HN' },
                         { field:'Sex',title:'เพศ'  },
                         { field:'Status',title:'สถานะ'  },
                         { field:'BirthDate',title:'วัน-เดือน-ปี เกิด'  },
                         { field:'ward_',title:'Ward' },
                         { field:'date_record',title:'วัน-เดือน-ปี ที่มา' },
                      ]]
                    });
                    
                     
                  
                 }   
                                                           
                                      
                    "                      
                                          />
            </label>  
       </div>
    
    <div>
    <label>
        HN : <input class="easyui-combogrid"  id="sr_hn_diag"  style="height: 40px;width: 200px;padding:10px;"
                    data-options=" 
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
                    
                    var  id=$('#sr_hn_diag').combogrid('getValue'); //alert(id);
                    
                     
                    
                   //http://127.0.0.1/vancom/index.php/welcome/diag_byid/4 
                   //url:'http://127.0.0.1/vancom/index.php/welcome/diag_byid/' + id ,
                   
                   /*
                    $('#window_diagnosis').dialog('open');                   
                    $('#dg_diagnosis').datagrid({ 
                        url:'<?=base_url()?>index.php/welcome/diag_byid/' + id ,
                         fitColumns:true,
                        singleSelect:true,
                        rownumbers:true,
                      columns:[[
                         { field:'Name',title:'ชื่อ' },
                         { field:'Surname',title:'นามสกุล'  },
                         { field:'HN',title:'HN' },
                         { field:'Sex',title:'เพศ'  },
                         { field:'Status',title:'สถานะ'  },
                         { field:'BirthDate',title:'วัน-เดือน-ปี เกิด'  },
                         { field:'ward_',title:'Ward' },
                         { field:'date_record',title:'วัน-เดือน-ปี ที่มา' },
                      ]]
                    });
                    */ 
                  
                 }  
                                      
                    "
                    />  
    </label>
    </div>
</div>

<!-- ค้นหาประวัติการรักษา-->









        
        
        
    
        
        
        
        
        
        
        
        
        
        
        
        