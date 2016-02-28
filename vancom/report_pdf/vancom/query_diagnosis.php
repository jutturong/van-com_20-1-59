<?php
require_once("../config.php");
require_once("pdf_class.php"); //class PDF

require_once("report_case2.php"); // report pdf

#http://localhost/vancom/report_pdf/vancom/report_case2.php
#http://localhost/vancom/report_pdf/vancom/query_diagnosis.php

echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";

   $id=trim($_GET["id"]);
  if( strlen($id) > 0 && !empty($id) )
  {
  		//echo $id;
  	  $tb1=" `tb_diagnosis` ";
  	  $tb2=" `tb_patient` ";
  	  $str=" select *  from  $tb1 
                 left  join  $tb2  on  $tb1.id_patient=$tb2.id_patient
  	              where  id_diagnosis=$id ; ";
  	  $result=mysql_query($str); 
  	  while ($row=mysql_fetch_object($result)) 
  	  {
  	  	  $Name=$row->Name;
  	  	  $ward_ = $row->ward_;
  	  }
  	  


  }
?>