<?php
  require_once("../config.php");
  require_once("pdf_class.php"); //class PDF

  require_once("report_case2.php"); // report pdf

#http://localhost/vancom/report_pdf/vancom/report_case2.php
#http://localhost/vancom/report_pdf/vancom/query_diagnosis.php

//echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";

   $id=trim($_GET["id"]);
  if( $id  > 0  )
  {
  		//echo $id;
   


  	  $tb1=" `tb_diagnosis` ";
  	  $tb2=" `tb_patient` ";
      $tb3="`tb_indication`"; //Reason for TDM 1 (Indication)     $tb1.indication1=$tb3.id_indication
      $tb4="`tb_disease`"; //Underllying disease 1 :   $tb1.underllyingdisease1=$tb4.id_disease
      $tb5="`reason_tdm`"; //Reason for TDM :
      $tb6="`tb_drug`";  //Drug level requested (Vancomycin)

  	  $str=" select *  from  $tb1 
                 left  join  $tb2  on  $tb1.id_patient=$tb2.id_patient
                 left  join  $tb3  on  $tb1.indication1=$tb3.id_indication
                
                 left  join  $tb4  on  $tb1.underllyingdisease1=$tb4.id_disease
                 left  join  $tb5  on  $tb1.reason_for_TDM=$tb5.id_reason
                 left  join  $tb6  on   $tb1.vancomycin=$tb6.id_drug

  	              where  id_diagnosis=$id ; ";
  	  $result=mysql_query($str); 
  	  while ($row=mysql_fetch_object($result)) 
  	  {
  	  	  $Name=$row->Name;
  	  	  $ward_ = $row->ward_;
          $HN=$row->HN;
          $bodyweight=$row->bodyweight;
          $Sex=$row->Sex;
          $height=$row->height;
          $indication1=$row->indication1;
          $indication_detail=$row->indication_detail;
          $indication2=$row->indication2;
          //$indication_detail2=$row->indication_detail;
          $underllyingdisease1=$row->underllyingdisease1;
          $disease_detail=$row->disease_detail;
          $underllyingdisease2=$row->underllyingdisease2;
          $underllyingdisease3=$row->underllyingdisease3;
          $underllyingdisease4=$row->underllyingdisease4;
          $underllyingdisease5=$row->underllyingdisease5;

          $underllyingdisease6=$row->underllyingdisease6;
         
          $underllyingdisease7=$row->underllyingdisease7;
          $underllyingdisease8=$row->underllyingdisease8;
          $underllyingdisease9=$row->underllyingdisease9;
          $underllyingdisease10=$row->underllyingdisease10;

          $reason_for_TDM=$row->reason_for_TDM;
          $reason_detail=$row->reason_detail;

          $vancomycin=$row->vancomycin;
          $drug_detail=$row->drug_detail;

          $current_medications=$row->current_medications;
          $current_medications_weight=$row->current_medications_weight;

          $current_medications_date=$row->current_medications_date;

          $laboratorydata5day=$row->laboratorydata5day;
          $laboratory_Data_mg=$row->laboratory_Data_mg;
          $Laboratory_Data_date=$row->Laboratory_Data_date;

          $sampling_time=$row->sampling_time;
          $drugadministrationtime=$row->drugadministrationtime;

          $measured_level=$row->measured_level;
          $measured_level_cmb=$row->measured_level_cmb;

          $vd_index=$row->vd_index;
          $vd=$row->vd;

          $cl=$row->cl;
          $ke=$row->ke;
          $hl=$row->hl;

          $assessment=$row->assessment;
          $Interpretation_Recommendation=$row->Interpretation_Recommendation;

          $Note=$row->Note;

          $pharmacist1=$row->pharmacist1;
          $pharmacist2=$row->pharmacist2;

          $tel=$row->tel;

          $date_record=$row->date_record;



  	  }
  	  


  }
?>