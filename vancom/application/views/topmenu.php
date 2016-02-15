<script type="text/javascript">
     function   send_report()
     {
         //window.open("<?=base_url()?>report_pdf/vancom/query_case2.php");
          window.open("<?=base_url()?>report_pdf/vancom/report_case2.php");
     }
</script>      

<img src="<?=base_url()?>img/KKU.png" style="width:40px;height:40px">   
       <p style="font-size:14px;color:#444;"><h1><?=$title?></h1></p> 
       
       

<div style="margin:10px 0;"></div>
    <div class="easyui-panel" style="padding:5px;">
        <!--<a href="#" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-large-clipart'  "><?=$head?></a>-->
         <a href="#" class="easyui-menubutton"     data-options="menu:'#mm8'   "    iconCls="icon-large-clipart"   >ประวัติผู้ป่วย/ประวัติการรักษา</a>
         
         <a href="#" class="easyui-menubutton"  data-options=" menu:'#mm7' ,iconCls:'icon-man'   "   >เกี่ยวกับผู้ป่วย</a>
         
         <a href="#" class="easyui-menubutton"  data-options=" menu:'#mm9' ,iconCls:'icon-man'   "   >Administrator</a>
       
         
       <!--  <a href="#" class="easyui-linkbutton" iconCls="icon-large-shapes" onclick="op_diagnosis()">เพิ่มประวัติการรักษา</a> -->
         
         
       <!--  <a href="#" class="easyui-menubutton" data-options="menu:'#mm1',iconCls:'icon-edit'">Tool (ข้อมูลต่างๆ)</a> -->
        
         <a href="#" class="easyui-menubutton" data-options="menu:'#mm5',iconCls:'icon-large-shapes'">Add ComboBox (เพิ่มข้อมูล)</a>
        
        <a href="#" class="easyui-menubutton" data-options="menu:'#mm4',iconCls:'icon-large-picture'">Report</a>
          <a href="#" class="easyui-menubutton" data-options="menu:'#mm6', iconCls:' icon-large-smartart '  ">Graph</a>
        <a href="#" class="easyui-menubutton" data-options="menu:'#mm2',iconCls:'icon-help'">Help</a>
       <!-- <a href="#" class="easyui-menubutton" data-options="menu:'#mm3'">ออกจากระบบ</a> -->
        <a href="<?=base_url()?>index.php/welcome/index/" class="easyui-linkbutton" iconCls="icon-cancel">Sign Out</a>
    </div>
    
   
 <div id="mm8" style="width:150px;">
        <!--<div data-options="iconCls:'icon-add'">เพิ่มชื่อผู้ป่วย</div>-->
       <!--<div data-options="iconCls:'icon-add'">Tool เกี่ยวกับผู้ป่วย</div> -->
       
        <div class="menu-sep"></div>
        <div   onclick="javascript:$('#p_patient').panel('open')"   data-options=" iconCls:'icon-reload'   " >Open </div>
        <div class="menu-sep"></div>
        <div    onclick="javascript:$('#p_patient').panel('close')"  data-options=" iconCls:' icon-remove'   ">Close</div>
        
        
        <div  >
            <span>ค้นหาเพิ่มเติม</span>
            <div>
                <div onclick="$('#win_hn_sr').window('open')">ค้นหาจาก HN </div>
                <!--<div class="menu-sep"></div>-->
                <div onclick="$('#win_name_sr').window('open')">ค้นหาจาก ชื่อ - นามสกุล</div>
               <div class="menu-sep"></div>
               <div>Vancomycin</div>
               <div>Date</div>
                <!--<div>New Toolbar...</div>-->
            </div>
        </div>
        
        
        <!--<div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>-->
    </div>


 <div id="mm7" style="width:150px;">
        <!--<div data-options="iconCls:'icon-add'">เพิ่มชื่อผู้ป่วย</div>-->
       <!--<div data-options="iconCls:'icon-add'">Tool เกี่ยวกับผู้ป่วย</div> -->
       
        <!--<div class="menu-sep"></div>-->
        <div onclick="op_addpatien()" data-options=" iconCls:'icon-man'   " >เพิ่มประวัติผู้ป่วย</div>
        <div class="menu-sep"></div>
        
        <div>
            <span>ประวัติการรักษา</span>
            <div>
                <div onclick="op_diagnosis()"  data-options=" iconCls:' icon-large-shapes'   ">เพิ่มประวัติการรักษา</div>
                <div onclick="$('#window_diagnosis').window('open');"  data-options=" iconCls:' icon-man'   ">แสดงประวัติการรักษา</div>
            </div>
            
            
        </div>
        
        
        <!--
        <div  >
            <span>ลบ/แก้ไข</span>
            <div>
                <div>แก้ไข/ลบ ประวัติผู้ป่วย</div>
                <div class="menu-sep"></div>
                <div>แก้ไข/ลบ ประวัติการรักษา</div>
              
                
                <div>New Toolbar...</div>
            </div>
        </div>
        -->
        
        <!--<div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>-->
    </div>

<div id="mm9" style="width:150px;">
        <!--<div data-options="iconCls:'icon-add'">เพิ่มชื่อผู้ป่วย</div>-->
       <!--<div data-options="iconCls:'icon-add'">Tool เกี่ยวกับผู้ป่วย</div> -->
       
        <div class="menu-sep"></div>
        <div  data-options=" iconCls:'icon-add'   " onclick=" $('#win_user').window('open'); ">เพิ่ม User</div>
       
        <!--
        <div class="menu-sep"></div>
        <div   data-options=" iconCls:' icon-large-shapes'   ">เพิ่มประวัติการรักษา</div>
        -->
        
        <!--
        <div  >
            <span>ลบ/แก้ไข</span>
            <div>
                <div>แก้ไข/ลบ ประวัติผู้ป่วย</div>
                <div class="menu-sep"></div>
                <div>แก้ไข/ลบ ประวัติการรักษา</div>
              
                
                <div>New Toolbar...</div>
            </div>
        </div>
        -->
        
        <!--<div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>-->
    </div>


   <!--
    <div id="mm1" style="width:150px;">
      
        <div data-options="iconCls:'icon-add'">Tool เกี่ยวกับผู้ป่วย</div>
        <div class="menu-sep"></div>
        
      
        <div onclick="op_addpatien()" data-options=" iconCls:'icon-man'   " >เพิ่มประวัติผู้ป่วย</div>
        
        <div onclick="op_diagnosis()"  data-options=" iconCls:' icon-large-shapes'   ">เพิ่มประวัติการรักษา</div>
        
        <div class="menu-sep"></div>
        <div  >
            <span>ลบ/แก้ไข</span>
            <div>
                <div>แก้ไข/ลบ ประวัติผู้ป่วย</div>
                <div class="menu-sep"></div>
                <div>แก้ไข/ลบ ประวัติการรักษา</div>
              
                
                <div>New Toolbar...</div>
            </div>
        </div>
        <div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>
    </div>
  -->
 
 
 
  <div id="mm5" style="width:150px;">
        <!--<div data-options="iconCls:'icon-add'">เพิ่มชื่อผู้ป่วย</div>-->
        <div data-options="iconCls:'icon-large-shapes'   ">เพิ่มข้อมูล</div>
        <div class="menu-sep"></div>
        
      
        <!--
        <div >Indication</div>
        <div>Reason for TDM</div>
        <div>Drug level requested</div>
        <div>Add Current Medications</div>
        -->
        
        <div   data-options=" iconCls:'icon-ok'  "  onclick="$('#dia_drug').dialog('open'); ">Drug level requested (Vancomycin) :</div>
        <div  data-options=" iconCls:'icon-ok'  "  onclick="$('#dia_disease').dialog('open');   ">Underllying disease</div>
        <div  data-options=" iconCls:'icon-ok'  "  onclick="$('#dia_indication').dialog('open');  ">Reason (Indication)</div>
        <div   data-options=" iconCls:'icon-ok'  "   onclick=" $('#dia_vd').dialog('open'); "> เพิ่ม Vd</div>
        <div data-options="iconCls:'icon-ok' "   onclick=" $('#dia_reason').dialog('open'); "    >Add Reason for TDM</div>
        
        
        <!--
        <div>
            <span>Toolbar</span>
            <div>
                <div>Address</div>
                <div>Link</div>
                <div>Navigation Toolbar</div>
                <div>Bookmark Toolbar</div>
                <div class="menu-sep"></div>
                <div>New Toolbar...</div>
            </div>
        </div>
        -->
        
        <!--
        <div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>
        -->
    </div>
 
 <div id="mm6" style="width:150px;">
        <!--<div data-options="iconCls:'icon-add'">เพิ่มชื่อผู้ป่วย</div>-->
        <div data-options="iconCls:'icon-large-shapes'   ">ระบุชนิด graph</div>
        <div class="menu-sep"></div>
        <div>อายุ-น้ำหนัก</div>

        <!--
        <div>
            <span>Toolbar</span>
            <div>
                <div>Address</div>
                <div>Link</div>
                <div>Navigation Toolbar</div>
                <div>Bookmark Toolbar</div>
                <div class="menu-sep"></div>
                <div>New Toolbar...</div>
            </div>
        </div>
        -->
        
        <!--
        <div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>
        -->
    </div>
    
    
     <div id="mm4" style="width:150px;">
        <!--<div data-options="iconCls:'icon-add'">เพิ่มชื่อผู้ป่วย</div>-->
        <div data-options="iconCls:'icon-add'">ระบุการค้นหา</div>
        <div class="menu-sep"></div>
        <div  onclick="send_report()">จาก HN</div>
        <div>จาก ชื่อ - นามสกุล</div>
        <div>จาก  Vancomycin</div>
        <div>Date </div>
        <div>Date Sampling Time </div>
        <div class="menu-sep"></div>
        
        <!--
        <div>
            <span>Toolbar</span>
            <div>
                <div>Address</div>
                <div>Link</div>
                <div>Navigation Toolbar</div>
                <div>Bookmark Toolbar</div>
                <div class="menu-sep"></div>
                <div>New Toolbar...</div>
            </div>
        </div>
        -->
        
        <!--
        <div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>
        -->
    </div>
    
    
    <div id="mm2" style="width:100px;">
        <div>คู่มือการใช้งาน</div>
        <div>Update</div>
        <div>เกี่ยวกับเรา</div>
    </div>
    
  
    <!--
    <div id="mm3" class="menu-content" style="background:#f0f0f0;padding:10px;text-align:left">
        
       <img src="http://www.jeasyui.com/images/logo1.png" style="width:150px;height:50px">
        
       <p style="font-size:14px;color:#444;">Try jQuery EasyUI to build your modern, interactive, javascript applications.</p>
        <div  class="easyui-linkbutton"  data-options=" iconCls:' icon-cancel ' " >Sign out</div>
    </div>
       --> 
       
       
      
       
          
       
       <!--   dialog  Drug   (tb_drug)  -->
       <?=$this->load->view("manage_drug")?>
        <!--   dialog  Drug   (tb_drug)  -->
        
        
        <!-- dialog Underllying disease  -->
        <?=$this->load->view("manage_disease")?>
        <!-- dialog Underllying disease  -->
   
        
   <!--    Reason for TDM  (Indication)             -->
<?=$this->load->view("manage_indication")?>
   <!--    Reason for TDM  (Indication)             -->
   
   
   
   
   <!-- manage   VD -->
     <?=$this->load->view("manage_vd")?>
   <!-- manage  VD -->
   
   
   
   <!-- Add Reason for TDM  -->
  <?=$this->load->view("reason_for_tdm")?>
  <!-- Add Reason for TDM  -->  