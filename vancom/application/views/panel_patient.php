<!--  ผู้ป่วยทัังหมด/ประวัติการรักษา   -->  
     
<div style="padding:10px 60px 20px 60px"></div>
    <div id="p_patient" class="easyui-panel" title=" แสดงรายการทั้งหมด ประวัติผู้ป่วย/ประวัติการรักษา "  
         data-options=" iconCls:'icon-man' ,  
                                     tools:'#t_patient'  ,
                                     closable:true ,
                                     maximizable:true ,
                                     collapsible:true,
                                    "  
         style="width:450px;height:450px;padding:10px;">
        <!-- <p style="font-size:14px">jQuery EasyUI framework helps you build your web pages easily.</p> -->
        
            <table class="easyui-datagrid"  id="dg_patient"   name="dg_patient"  style="width:420px;height:400px"
            data-options="url:'<?=base_url()?>index.php/welcome/dg_patient'
                                      ,fitColumns:true,
                                      singleSelect:true,
                                      pagination: true  ,
                                     rownumbers:true ,    
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

        </thead>
    </table>
        
        
    </div>
            <div id="t_patient">
        <a href="javascript:void(0)" class="icon-add" onclick="op_addpatien()"></a>
        <a href="javascript:void(0)" class="icon-cancel"  onclick="javascript:$('#p_patient').panel('close')" ></a>
        <!-- <a href="javascript:void(0)" class="icon-cut" onclick="javascript:alert('cut')"></a> -->
       <!-- <a href="javascript:void(0)" class="icon-help" onclick="javascript:alert('help')"></a>-->
    </div>

<!--  ผู้ป่วยทัังหมด/ประวัติการรักษา   -->  


