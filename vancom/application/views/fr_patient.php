<!-- เพิ่มประวัติของผู้ป่วย -->    
        <div id="add_patient" class="easyui-window" title="เพิ่มประวัติของผู้ป่วย  "    data-options="
                 modal:true,closed:true,
                 iconCls:'icon-man',
                 closable:true,
                 resizable:true,
                 "
                 style="width:700px;height:270px;padding:10px;">
            <div style="padding:10px 60px 20px 60px">
                <form id="fr_patient" method="post">
            <table cellpadding="1">
                <tr>
                    <td>Patient's Name - Lastname :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="name" data-options="required:true"  style="  width:150px;height:30px  "></input>
                         <input class="easyui-textbox" type="text" name="name" data-options="required:true"  style="  width:200px;height:30px  "></input>
                    </td>
                </tr>
                <tr>
                    <td>HN :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="name" data-options="required:true"  style="  width:100px;height:30px  "></input>
                         
                    </td>
                </tr>
                
                <tr>
                    <td>Birth Date :</td>
                    <td> <input class="easyui-datebox" style="height: 30px"  data-options="required:true" ></input></td>
                </tr>
                
                 <tr>
                    <td>Sex :</td>
                    <td>
                        
                           <select class="easyui-combobox" name="state" style="width:100px;height: 30px;">
        <option value="1">(ชาย) Male</option>
        <option value="2">(หญิง) Female</option>

                           </select>
                    
                    </td>
                </tr>
                
                
                <tr>
                    <td colspan="2">
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options=" iconCls:'icon-add' " >Insert</a>
                          <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel'   "  onclick="$('#add_patient').window('close')   "  >Close</a>
                    </td>
                </tr>
                
            </table>
            </div>
    </div>
<!-- เพิ่มประวัติของผู้ป่วย -->      
