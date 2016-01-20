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
    
    
    
    
    <!-- ผู้ป่วยทั้งหมด/ประวัติการรักษา -->
    

    
        <!-- ผู้ป่วยทั้งหมด/ประวัติการรักษา -->
    

</body>
    </html>