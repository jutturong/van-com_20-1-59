<?php
require_once("../config.php");
require_once("pdf_class.php"); //class PDF
require_once("query_diagnosis.php");

##---- PDF ---
$pdf=new PDF('P','mm','A4');  //ของเดิม 
$pdf->SetMargins( 25,25,5 );
$pdf->AddPage();
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวธรรมดา กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','','angsa.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','B','angsab.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','I','angsai.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','BI','angsaz.php');

$x_absolute=25; //พิกัด X
$y_absolute=20; //พิกัด Y
$r=7;  //ระยะห่าง

##-- PAGE 1   
##---- เลขหน้า ----------
    $pdf->SetFont('angsana','',12);
    $pdf->setXY( $x_absolute + 160 , $y_absolute - 10 );
    $pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'Page  1' )  );
##---- เลขหน้า ---------- 

##-- head table -----
$pdf->head_table(70,20,25,'b'); //($x_absolute,$y_absolute,$fontSize,$b)   //หัวโปรแกรม
$pdf->SetFont('angsana','BU',20);
//$pdf->setXY( $x_absolute, $y_absolute +  ($r*1)  );
$pdf->setXY( 60, $y_absolute +  ($r*1)  );
$pdf->SetFont('angsana','B',18);
//$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'คลินิคผู้ป่วยนอกโรคลมชัก โรงพยาบาลศรีนครินทร์' ));
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , "".'Academic service and Research Unit: Pharmaceutical care service' ));

$pdf->setXY( 60, $y_absolute +  ($r*2)  );
$pdf->SetFont('angsana','B',19);
//$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'คลินิคผู้ป่วยนอกโรคลมชัก โรงพยาบาลศรีนครินทร์' ));
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , "                ".'Faculty of Pharmaceutical Sciences KKU' ));

$pdf->setXY( 60, $y_absolute +  ($r*3)  );
$pdf->SetFont('angsana','B',14);
//$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'คลินิคผู้ป่วยนอกโรคลมชัก โรงพยาบาลศรีนครินทร์' ));
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,"".'Laboratory  result: Tel. 11221, 12203-4 (Direct 0-4334-8354), Interpretation: Tel. 11221' ));


$pdf->Image('../icon/px.jpeg',10,12,20,0,'','');//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])

$pdf->setXY( 120 , $y_absolute +  ($r*2)  );
$pdf->SetFont('angsana','',13);

##-- วันที่ วัน เดือน ปี
if( !empty($b)  && !empty($e)   )
{    
     //$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'ระหว่างวันที่ '.$b.' ถึง '.$e ));  ## formate date in table is  yyyy-mm-ddd
      $pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'ระหว่างวันที่ '.$pdf->date_thai_format($b).' ถึง '.$pdf->date_thai_format($e) ));  ## formate date in table is  yyyy-mm-ddd
      // ค่าที่ส่งมา 1-10-2557 
         // $str_query="SELECT * FROM ESN.`04-monitoring`where `MonitoringDate` between '1467-05-04' and '1990-1-1' ;    ";
      //   date_eng_format($begin)
} 

$pdf->setXY( 10 , $y_absolute +  ($r*4)  );
$pdf->SetFont('angsana','B',18);
$pdf->SetFillColor(255,255, 255);
$pdf->Cell( 190  , 7 , iconv( 'UTF-8','cp874' , '' ),T,0,L,true     );


$pdf->setXY( 10 , $y_absolute +  ($r*5)  );
$pdf->SetFont('angsana','',13);
$pdf->SetFillColor(255,255, 255);
//$pdf->Cell( 190  , 7 , iconv( 'UTF-8','cp874' , 'Patient \'s name : '  . $Name  .'                                     HN : '  . $HN  )   . '                           Ward : ' . $ward_  );
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'Patient \'s name : ' . $Name .'                                     HN : '  . $HN  )   . '                           Ward : ' . $ward_  );

$pdf->setXY( 10 , $y_absolute +  ($r*6)  );
$pdf->SetFont('angsana','',13);
$pdf->SetFillColor(255,255, 255);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'Age : ' .' '.'                    years '.'               '.'Sex :  '. $Sex  .'                   Weight : '. $bodyweight . '  Kg. '. '             Height : '.$height. ' cm.  ' )  );


$pdf->setXY( 10 , $y_absolute +  ($r*7)  );
$pdf->SetFont('angsana','',13);
$pdf->SetFillColor(255,255, 255);

$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'Reason for TDM 1 (Indication) : '.$indication_detail )  );

$pdf->setXY( 10 , $y_absolute +  ($r*8)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Reason for TDM 2 (Indication) : '.$indication_detail2  ));

$pdf->setXY( 10 , $y_absolute +  ($r*9)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 1 : '.$disease_detail  ));

$pdf->setXY( 10 , $y_absolute +  ($r*10)  );
//$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 2 : '.$underllyingdisease2 .'  '.$disease_detail2 ));
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 2 : '.$disease_detail2 ));

$pdf->setXY( 10 , $y_absolute +  ($r*11)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 3 : '.$disease_detail3  ));


$pdf->setXY( 10 , $y_absolute +  ($r*12)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 4 : '.$disease_detail4  ));

$pdf->setXY( 10 , $y_absolute +  ($r*13)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 5 : '.$disease_detail5  ));

$pdf->setXY( 10 , $y_absolute +  ($r*14)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 6 : '.$disease_detail6  ));

$pdf->setXY( 10 , $y_absolute +  ($r*15)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 7 : '.$disease_detail7  ));

$pdf->setXY( 10 , $y_absolute +  ($r*16)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 8 : '.$disease_detail8  ));

$pdf->setXY( 10 , $y_absolute +  ($r*17)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 9 : '.$disease_detail9  ));

$pdf->setXY( 10 , $y_absolute +  ($r*18)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Underllying disease 10 : '.$disease_detail10  ));

$pdf->setXY( 10 , $y_absolute +  ($r*19)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Reason for TDM : '.$reason_detail  ));

$pdf->setXY( 10 , $y_absolute +  ($r*20)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Drug level requested (Vancomycin) : '.$drug_detail  ));


$pdf->setXY( 10 , $y_absolute +  ($r*21)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Current Medications : '.$current_medications . '   '.$current_medications_weight.'  g  Current Medications date : '.$current_medications_date ));


$pdf->setXY( 10 , $y_absolute +  ($r*22)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Laboratory Data (within 5 day) : '.$laboratorydata5day . '   '.$laboratory_Data_mg.'  mg/dL Date Labotory Data : '.$Laboratory_Data_date ));

$pdf->setXY( 10 , $y_absolute +  ($r*23)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','1. Sampling Time : '.$sampling_time  ));

$pdf->setXY( 10 , $y_absolute +  ($r*24)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','2. Drug Administration Time : '.$drugadministrationtime  ));

$pdf->setXY( 10 , $y_absolute +  ($r*25)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','3. Measured level : '.$measured_level.' '.$measured_level_cmb  ));

$pdf->setXY( 10 , $y_absolute +  ($r*26)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Vd : '.$vd_index.'          '.$vd.'  L/Kg.  '.'  Cl : '.$cl  ));

$pdf->setXY( 10 , $y_absolute +  ($r*27)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','ke : '.$ke.' hr-1 '.'         Half-life : '.$hl .'  hr ' ));

$pdf->setXY( 10 , $y_absolute +  ($r*28)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Assessment : '.$assessment ));


$pdf->setXY( 10 , $y_absolute +  ($r*29)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Interpretation and Recommendation : '.$Interpretation_Recommendation ));

$pdf->setXY( 10 , $y_absolute +  ($r*30)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Note : '.$Note ));

$pdf->setXY( 10 , $y_absolute +  ($r*31)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Pharmacist : '.$pharmacist1.'  /  '.$pharmacist2 ));

$pdf->setXY( 10 , $y_absolute +  ($r*32)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Tel : '.$tel ));

$pdf->setXY( 10 , $y_absolute +  ($r*33)  );
$pdf->MultiCell(0,0,iconv('UTF-8','cp874','Date : '.$date_record ));

/*
##--หัวตาราง
$pdf->setXY($x_absolute , $y_absolute +  ($r*3.5)  );
$pdf->SetFont('angsana','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'ตารางที่ 2 ปัญหาที่เกี่ยวข้องกับการใช้ยาของผู้ป่วย (Drug Related Problems; DRPs)' ));
$pdf->setXY($x_absolute , $y_absolute +  ($r*4)  );
$pdf->SetFont('angsana','B',14);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , 'ข้อมูล' ) , 1 , 0 , 'C' , true );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , 'จำนวนครั้ง (ครั้ง)' ) , 1 , 0 , 'C' , true );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , 'จำนวนผู้ป่วย (ราย)' ) , 1 , 1 , 'C' , true );

##-- content --PAGE1
$pdf->SetFont('angsana','',13);
$pdf->SetFillColor(255,255, 255);
$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , 'ให้บริการแก่ผู้ป่วย' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_sum ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_patien ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , 'พบ DRPs' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , ''  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , '' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , 'ประเภทการเกิด DRPs' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , ''  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , '' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '    '.'1. Non-compliance' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , ''  ),LR, 0  ,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  '' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '           '.'- Over dosage' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,   $count_over_all.'/'.$cal_over_all.'%'   ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_over.'/'.$cal_over.'%'  ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,'           '.'- Under dosage' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count2_under_all.'/'.$cal_under_all.'%'  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_under.'/'.$cal_under.'%' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '           '.'- Not compliance with the life style' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count3_non_all.'/'.$cal_non_all.'%' ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_non.'/'.$cal_non.'%' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,  '           '.'- Incorrect technique' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_in_all.'/'.$cal_in_all.'%'  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_in.'/'.$cal_in.'%' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- Preparation'  ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,   $count_Preparation_all.'/'.$cal_Preparation_all.'%'  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_Preparation.'2'.$cal_Preparation_.'%' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,  '                 '.'- Inhalation' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_Inhalation_all.'/'.$cal_Inhalation_all.'%' ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_Inhalation.'/'.$cal_Inhalation_.'%' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- Rinse' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_Rinse_all.'/'.$cal_Rinse_all.'%'  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_Rinse.'/'.$cal_Rinse_.'%' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- EmptyTest' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_EmptyTest_all.'/'.$cal_EmptyTest.'%'  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_EmptyTest.'/'.$cal_EmptyTest_.'%' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '           '.'- สาเหตุของปัญหา Non-compliance' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , ''  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , '' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,  '                 '.'- สาเหตุจากตัวผู้ป่วย' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_Cause1_1_all.'/'. $cal_Cause1_1.'%'  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_Cause1_1.'/'.$cal_Cause1_1_.'%'  ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,  '                 '.'- สาเหตุจากโรค' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $cal_Cause1_2.'/'.$cal_Cause1_2.'%'   ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_Cause1_2.'/'.$cal_Cause1_2_.'%' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,'                 '.'- สาเหตุจากยา' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_Cause1_3_all.'/'.$cal_Cause1_3.'%'  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_Cause1_3.'/'.$cal_Cause1_3_.'%'),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- สาเหตุจากผู้ดูแล' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_Cause1_4_all.'/'.$cal_Cause1_4.'%'  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_Cause1_4.'/'.$cal_Cause1_4_.'%' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- สาเหตุอื่น ๆ'  ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $count_Cause1_5_all.'/'.$cal_Cause1_5.'%'  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $count_Cause1_5.'/'.$cal_Cause1_5_.'%'  ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,  '    '.'2. Adverse drug reactions (ADRs)'  ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  ''  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , ''  ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '    '.'3. Medication errors' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , ''   ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , ''  ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- Prescribing  error' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_DRP_all[1]  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_DRP_count[1] ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- Trancribing  error' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_DRP_all[2]  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_DRP_count[2] ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- Dispensing  error' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_DRP_all[3]  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_DRP_count[3] ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,  '                 '.'- Administration  error' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_DRP_all[4]  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_DRP_count[4] ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,  '                 '.'- Unclear order' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_DRP_all[5]  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_DRP_count[5] ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '    '.'4. Other DRPs' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , ''   ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  '' ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,  '                 '.'- Need for additional drug therapy' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $va_other[1]  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $va_other_[1]  ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,  '                 '.'- Improper drug selection' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_other[2]  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $va_other_[2]  ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' ,  '                 '.'- Improper dosage regimen' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_other[3]  ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_other_[3]   ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- Failure to receive medication'),LRB,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_other[4]  ),LRB,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_other_[4] ),LRB,1,C,true     );
*/

//footer
//$pdf->footer_(25,272,'- คณะเภสัชศาสตร์ มข.  ');
$pdf->footer_(80,272,' Page 1 of 1  ');


/*
$pdf->AddPage();
##-- PAGE 2  
##---- เลขหน้า ----------
    $pdf->SetFont('angsana','',12);
    $pdf->setXY( $x_absolute + 160 , $y_absolute - 10 );
    $pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'หน้า  2' )  );
##---- เลขหน้า ---------- 

##-- head table -----
$pdf->head_table(70,20,25,'b'); //($x_absolute,$y_absolute,$fontSize,$b)   //หัวโปรแกรม
$pdf->SetFont('angsana','BU',20);
//$pdf->setXY( $x_absolute, $y_absolute +  ($r*1)  );
$pdf->setXY( 60, $y_absolute +  ($r*1)  );
$pdf->SetFont('angsana','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'คลินิคผู้ป่วยนอกโรคลมชัก โรงพยาบาลศรีนครินทร์' ));

$pdf->Image('../icon/px.jpeg',10,12,20,0,'','');//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])

$pdf->setXY( 120 , $y_absolute +  ($r*2)  );
$pdf->SetFont('angsana','',13);

##-- วันที่ วัน เดือน ปี
if( !empty($b)  && !empty($e)   ) //ให้ convert จาก date thai เป็น Eng ก่อน แล้วค่อย convert กลับเป็น วัน-เดือน-ปี ไทย งงปะ 55555
{    
     //$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'ระหว่างวันที่ '.$b.' ถึง '.$e ));  ## formate date in table is  yyyy-mm-ddd
      $pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'ระหว่างวันที่ '.$pdf->date_thai_format($b).' ถึง '.$pdf->date_thai_format($e) ));  ## formate date in table is  yyyy-mm-ddd
      // ค่าที่ส่งมา 1-10-2557 
         // $str_query="SELECT * FROM ESN.`04-monitoring`where `MonitoringDate` between '1467-05-04' and '1990-1-1' ;    ";
      //   date_eng_format($begin)
} 
##--หัวตาราง
$pdf->setXY($x_absolute , $y_absolute +  ($r*3.5)  );
$pdf->SetFont('angsana','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'ตารางที่ 2 ปัญหาที่เกี่ยวข้องกับการใช้ยาของผู้ป่วย (Drug Related Problems; DRPs)' ));
$pdf->setXY($x_absolute , $y_absolute +  ($r*4)  );
$pdf->SetFont('angsana','B',14);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , 'ข้อมูล' ) , 1 , 0 , 'C' , true );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , 'จำนวนครั้ง (ครั้ง)' ) , 1 , 0 , 'C' , true );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , 'จำนวนผู้ป่วย (ราย)' ) , 1 , 1 , 'C' , true );

##-- content --PAGE2
$pdf->SetFont('angsana','',13);

$pdf->SetFillColor(255,255, 255);
$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- Drug interation' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $va_other[5] ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_other_[5] ),LR,1,C,true     );

$pdf->SetFillColor(255,255, 255);
$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- Unnecessary drug therapy' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $va_other[6] ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_other_[6] ),LR,1,C,true     );

$pdf->SetFillColor(255,255, 255);
$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- Duplication/Repeated' ),LR,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $va_other[7] ),LR,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_other_[7] ),LR,1,C,true     );

$pdf->Cell( 90  , 7 , iconv( 'UTF-8','cp874' , '                 '.'- Other' ),LRB,0,L,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' ,  $va_other[8]  ),LRB,0,C,true     );
$pdf->Cell( 35  , 7 , iconv( 'UTF-8','cp874' , $va_other_[8] ),LRB,1,C,true     );




// footer
$pdf->footer_(25,272,'- คลินิคผู้ป่วยนอกโรคลมชัก คณะเภสัชศาสตร์ มข.');
 * 
 */
     
     $pdf->Output();
     
     ?>