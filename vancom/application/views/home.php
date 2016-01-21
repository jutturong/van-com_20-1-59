    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title><?=$title?></title>
        
        <?=$this->load->view("import_js")?>
        
        
        <script type="text/javascript">
            $(function(){  //แสดงรายการทั้งหมด ประวัติผู้ป่วย/ประวัติการรักษา
                   $('#p_patient').panel('close');
            });
              
            
            
                function  op_addpatien() //เพิ่มประวัติของผู้ป่วย
                {
                       $('#add_patient').window('open');
                }
                
                function  op_diagnosis()//เพิ่มประวัติของการรักษา
                {
                     $('#add_diagnosis').window('open');
                }
        </script>
        
        
    </head>
    <body>
        <?=$this->load->view("topmenu")?>
        
      <!--  ผู้ป่วยทัังหมด/ประวัติการรักษา   -->  
<?=$this->load->view("panel_patient")?>
      <!--  ผู้ป่วยทัังหมด/ประวัติการรักษา   -->  
  
      
      
<!--  เพิ่ม  user ของผู้ใช้งาน ----->      
    <div id="win_user" class="easyui-window" title=" เพิ่ม User ในระบบ " 
        data-options="
        modal:true,
        closed:true,
        iconCls:'icon-man',
        
                    " 
        style="width:450px;height:300px;padding:10px;">
        <table>
            <tr>
                <td>
                     ชื่อ - นามสกุล : 
                </td>
                <td>
                    <input class="easyui-textbox"  style="width:100px;height: 30px" />
                    -
                    <input class="easyui-textbox"  style="width:150px;height: 30px" />
                </td>
               
            </tr>
            <tr>
                <td>
                  UserName :  
                </td>
                <td>
                    <input class="easyui-textbox" style="width: 100px;height: 30px" />
                </td>
            </tr>
            
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input class="easyui-textbox" style="width:100px;height: 30px" />
                </td>
            </tr>
            
            <tr>
                <td>
                    Type User :
                </td>
                <td>
                    <select class="easyui-combobox" style="width:100px;height: 30px" >
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                        
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    อนุญาตการเข้าใช้งาน :
                </td>
                <td>
                    <select class="easyui-combobox" style="width:100px;height: 30px" >
                        <option value="Y">Yes</option>
                        <option value="N">No</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="javascript:void(0);" class="easyui-linkbutton" data-options=" iconCls:'icon-add' " > Insert </a>
                    <a href="javascript:void(0);"  class="easyui-linkbutton" data-options=" 
                       iconCls:'icon-cancel' ,
                      
                       
                       " onclick="$('#win_user').window('close'); "  >Close</a>
                </td>
            </tr>
            
        </table>
    </div>
<!--  เพิ่ม  user ของผู้ใช้งาน -----> 


      
      <!-- ค้นหา ประวัติผู้ป่วย/ประวัติการรักษา  จาก HN -->
      <?=$this->load->view("hn_search")?>
      <!-- ค้นหา ประวัติผู้ป่วย/ประวัติการรักษา  จาก HN -->
      
       <!-- ค้นหา ประวัติผู้ป่วย/ประวัติการรักษา  จาก ชื่อ-นามสกุล -->
      <?=$this->load->view("name_sr")?>
      <!-- ค้นหา ประวัติผู้ป่วย/ประวัติการรักษา  จาก ชื่อ-นามสกุล --> 
      
      
     
      
    
    
        
   <!-- เพิ่มประวัติของผู้ป่วย -->    
       <?=$this->load->view("fr_patient")?> 
    <!-- เพิ่มประวัติของผู้ป่วย -->        
        
    <!-- เพิ่มประวัติการรักษา -->
    <?=$this->load->view("fr_diagnosis")?>
    <!-- เพิ่มประวัติการรักษา -->
    
    
    
   

</body>
    </html>