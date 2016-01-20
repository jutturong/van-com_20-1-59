

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
                    <td>Weight  :</td>
                    <td>
                        <input class="easyui-numberbox" type="text" name="name" data-options="required:false"  style="  width:100px;height:30px  "></input>
                        Kg.
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
                        Reason for TDM 1 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-large-shapes '  " >Add Indication</a>
                        
                    </td>
                    
                    
                </tr>
                
                <tr>
                    <td>
                        Reason for TDM 2 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                        Underllying disease 1 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        Underllying disease 6 :
                        
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                        Underllying disease 2 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        Underllying disease 7 :
                        
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                        Underllying disease 3 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        Underllying disease 8 :
                        
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                    </td>
                </tr>
                
                 <tr>
                    <td>
                        Underllying disease 4 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        Underllying disease 9 :
                        
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                        Underllying disease 5 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        Underllying disease 10 :
                        
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                       Reason for TDM :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">Routine Follow up</option>
        
       
                           </select>
                        
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-large-shapes '  " >Add Reason for TDM</a>
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                       Drug level requested :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">Vancomycin</option>
        
       
                           </select>
                        
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-large-shapes '  " >Add Drug level requested</a>
                        
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
                         <input class="easyui-numberbox" precision="2" value="49.00" style="width:70px;"></input>
                         Litre
                         <?=nbs(4)?>
                         Cl :
                         <input class="easyui-numberbox" precision="4" value="0.01000" style="width:70px;"></input>
                         L/hr
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                       ke :
                    </td>
                    <td>
                         <input class="easyui-numberbox" precision="2" value="49.00" style="width:70px;"></input>
                         hr-1
                         <?=nbs(4)?>
                         Half-life :
                         <input class="easyui-numberbox" precision="4" value="0.01000" style="width:70px;"></input>
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
        
        
        
    
        
        
        
        
        
        
        
        
        
        
        
        