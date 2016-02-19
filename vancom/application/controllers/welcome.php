<?php  ob_start(); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
                var   $Logintitle="Login Faculty of Pharmaceutical Science KKU";
                var  $title="Faculty of Pharmaceutical Science KKU";
              //  var  $head="Therapeutic Drug Monitoring Report";
                 var  $head="รายการหลัก";
                 
                   function __construct()
                    {
                        // Call the Model constructor
                          parent::__construct();
                          $this->load->model('authentication');
                          $this->load->model('date');
                    }
    
    
    
	public function index()
	{
		//$this->load->view('welcome_message');
                                   //  $data["titlelogin"]="Login Faculty of Pharmaceutical Science KKU";
                                      $data["titlelogin"]=$this->Logintitle;
                                      
                                           $arr_login=array(
                                                'sess_UserName'=>"",
                                                'sess_UserSurname'=>"",
                                                'sess_UserType'=>"",
                                                'sess_UserCode'=>"",
                                                'sess_Unused'=>"",
                                                'sess_status_login'=>0,
                                            );
                                       $this->session->set_userdata($arr_login);
                                       
                                         /*
                                           $data['sess_UserName']=$this->session->userdata('sess_UserName');
                                              //echo "<br>";
                                              
                                              $data['sess_UserSurname']=$this->session->userdata('sess_UserSurname');
                                             // echo "<br>";
                                              
                                              $data['sess_UserType']=$this->session->userdata('sess_UserType');
                                             // echo "<br>";
                                              
                                              $data['sess_UserCode']=$this->session->userdata('sess_UserCode');
                                             // echo "<br>";
                                              
                                              $data['sess_Unused']=$this->session->userdata('sess_Unused');
                                             // echo "<br>";
                                              
                                              $this->session->userdata('sess_status_login');  //check  authentication
                                            */  

                                     $this->load->view("login",$data);
	}
                 public function checklogin()
                 {
                     echo'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
                              $data['title']=$this->title;
                              $data['head']=$this->head;
                                               
                                     $tb="user";
                                      $UserName=$this->input->get_post("username");
                                 // echo "<br>";
                                     $Password=$this->input->get_post("password");
                                //  echo "<br>";
                                     //echo "<br>";
                                     /*
                                      SELECT *
SELECT *
FROM `user`
WHERE `Password` = "JUMKKU"
LIMIT 0 , 30
                                      * 
                                      11313 	4 	ศิริลักษณ์ 	ใจซื่อ 	jumkku 	1 	N 	N
                                          UserCode
                                      * Title
                                      * UserName
                                      * UserSurname
                                      * Password
                                      * UserType
                                      * Login
                                      * Unused
                                      */
                                   $query=$this->db->get_where($tb,array("UserName"=>$UserName, "Password"=>$Password ,"Unused"=>"N"  ));
                                    $check=$query->num_rows();
                                  //echo "<br>";
                                   if( $check != 1 )
                                   {
                                       
                                              // $this->load->view("login",$data);
                                            // $this->authentication->check_authentication();
                                       
                                                 $arr_login=array(
                                                'sess_UserName'=>"",
                                                'sess_UserSurname'=>"",
                                                'sess_UserType'=>"",
                                                'sess_UserCode'=>"",
                                                'sess_Unused'=>"",
                                                'sess_status_login'=> "",
                                            );
                                                
                                                     $this->session->set_userdata($arr_login);
                                                     
                                                     
                                               redirect('welcome');
                                               
                                   }
                                  else  if( $check == 1 )
                                   {    
                                            foreach($query->result() as $row )
                                            {
                                                     $UserType=$row->UserType ;  //1=admin
                                                   //echo  "<br>";
                                                     $Unused=$row->Unused;   // 2=บุคคลทั่วไป
                                                   // echo  "<br>";
                                                   $UserSurname=$row->UserSurname;  //นามสกุล
                                                    //echo  "<br>";
                                                   $UserCode=$row->UserCode;  //เลขที่ตำแหน่ง
                                                   // echo  "<br>";

                                            }
                                            
                                            $arr_login=array(
                                                'sess_UserName'=>$UserName,
                                                'sess_UserSurname'=>$UserSurname,
                                                'sess_UserType'=>$UserType,
                                                'sess_UserCode'=>$UserCode,
                                                'sess_Unused'=>$Unused,
                                                'sess_status_login'=> $check,
                                            );
                                            $this->session->set_userdata($arr_login);
                                            
                                             // $data['sess_username']=$this->session->userdata('sess_username'); //ชื่อผู้สัมภาษณ์
                                               $data['sess_UserName']=$this->session->userdata('sess_UserName');
                                              //echo "<br>";
                                              
                                              $data['sess_UserSurname']=$this->session->userdata('sess_UserSurname');
                                             // echo "<br>";
                                              
                                              $data['sess_UserType']=$this->session->userdata('sess_UserType');
                                             // echo "<br>";
                                              
                                              $data['sess_UserCode']=$this->session->userdata('sess_UserCode');
                                             // echo "<br>";
                                              
                                              $data['sess_Unused']=$this->session->userdata('sess_Unused');
                                             // echo "<br>";
                                              
                                              $data['sess_status_login']=$this->session->userdata('sess_status_login');  //check  authentication
                                             // echo "<br>";
                                              
                                            
                                             //  $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม
                                             
                                              $this->load->view("home",$data);
                                                      
                                   }  
            
                                     
                 }
                 
                 
                    public function  dg_patient_sr_HN() //ประวัติของผู้ป่วย จาก HN
                    {
                         # http://127.0.0.1/vancom/index.php/welcome/dg_patient_sr_HN/HS1553
                            $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม
                            
                            
                            $tb="tb_patient";
                            
                               //   $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
                              //    $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
                                  
                                     $hn=$this->uri->segment(3);
                                     $this->db->like("HN",$hn);
                                    $this->db->order_by("id_patient","DESC");
                                   
                                            $query = $this->db->get($tb, 5 );  //100 คือจำนวนข้อมูลทั้้งหมด  



                                        $rows=array();
                                        foreach( $query->result() as $row  )
                                        {
                                                $rows[]=$row;
                                        }
                                         echo json_encode($rows);
                            
                    }
                    
                    
                   public function  sr_NAME() //ประวัติของผู้ป่วย จาก HN
                    {
                         # http://127.0.0.1/vancom/index.php/welcome/dg_patient_sr_NAME/
                       //echo'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';     
                    //   $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม                      
                            $tb="tb_patient";
                            
                               //   $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
                              //    $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;

                                     $id_patient=$this->uri->segment(3);
                                   //  $this->db->like("id_patient", $$id_patient);
                                    $this->db->order_by("id_patient","DESC");
                                   
                                           // $query = $this->db->get_where($tb,array("id_patient",$id_patient) );  //100 คือจำนวนข้อมูลทั้้งหมด  
                                    
                                    $query=$this->db->get_where($tb,array("id_patient"=>$id_patient),5);

                                        $rows=array();
                                        foreach( $query->result() as $row  )
                                        {
                                                $rows[]=$row;
                                        }
                                         echo json_encode($rows);
                            
                    }  
                    
                    
                 
                 
                 
                 
                 public function  dg_patient() //ประวัติของผู้ป่วย
                 {

                     # http://127.0.0.1/vancom/index.php/welcome/dg_patient
                           $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม
                           
                        $tb="tb_patient";
                      
                        /*
                        $page=$this->input->get_post('page');
                        $rows=$this->input->get_post('rows');
                */
                        
                         $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
                         $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;


                        /*
                        if( $page == ""  ||  $rows == ""  )
                        {
                         $query = $this->db->get($tb, 10, 0);
                       //$query = $this->db->get($tb);
                        }
                          elseif( $page > 0  &&  $rows > 0 )
                          {
                                 $query = $this->db->get($tb, 10, $rows );
                              
                          }
                         */
                        
                        $section=$page*10;
                          
                      //$this->db->limit(10, 20);
                      // Produces: LIMIT 20, 10 (in MySQL. Other databases have slightly different syntax)
                        
                         /*
                            $query=$this->db->get_where($tb,array("UserName"=>$UserName, "Password"=>$Password ,"Unused"=>"N"  ));
                            $check=$query->num_rows();
                          */
                          $strmax= $this->db->query("  SELECT   *    FROM    `tb_patient`   ");
                          $max=$strmax->num_rows();
                        
                          $this->db->order_by("id_patient","DESC");
                       //    $query = $this->db->get($tb,   $rows  );
                          /*SELECT *
FROM `tb_patient`
LIMIT 90 , 30   */
                           $query = $this->db->get($tb, 200  ,  $section  );  //100 คือจำนวนข้อมูลทั้้งหมด  
                          
                           
                        
                        $rows=array();
                        foreach( $query->result() as $row  )
                        {
                                $rows[]=$row;
                        }
                         echo json_encode($rows);
                               
                 }
                 public function cmb_hn() //ค้น HN ของ ผู้ป่วย
                 {
                      //  http://127.0.0.1/vancom/index.php/welcome/cmb_hn
                        $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม
                       $q = isset($_POST['q']) ? strval($_POST['q']) : '';
                        $tb="tb_patient";
                        $this->db->like("HN",$q);
                        $query = $this->db->get($tb, 10, 0);
                        $rows=array();
                         foreach( $query->result() as $row  )
                        {
                                $rows[]=$row;
                        }
                         echo json_encode($rows);
                 }
                 public function cmb_name()//ค้น name ของผู้ป่วย
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/cmb_name
                       $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม
                       $q = isset($_POST['q']) ? strval($_POST['q']) : '';
                        $tb="tb_patient";
                        $this->db->like("Name",$q);
                        $query = $this->db->get($tb, 10, 0);
                        $rows=array();
                         foreach( $query->result() as $row  )
                        {
                                $rows[]=$row;
                        }
                         echo json_encode($rows);
                 }
                 
                 public function vancomycin()// combobox vancomycin
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/vancomycin
                     $this->authentication->check_authentication();
                     $tb="tb_vacomycin";
                     $query=$this->db->get($tb);
                     foreach($query->result() as $row )
                     {
                         //echo  $row->vancomycin_detail;
                         //echo  br();
                         $rows[]=$row;
                     }
                     echo json_encode($rows);
                 }
                 
                 public function indication()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/indication
                     $this->authentication->check_authentication();
                     $tb="tb_indication";
                     $query=$this->db->get($tb);
                     foreach($query->result() as $row)
                     {
                         $rows[]=$row;
                     }
                     echo json_encode($rows);
                 }
                 
                 public  function insert_indication()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/insert_indication
                        $tb="tb_indication";
                       $indication_detail=trim($this->input->get_post("indication_detail"));
                       
                       $query=$this->db->query(" select    *   from  $tb  where    indication_detail   = '$indication_detail'   ;      ");
                      
                         $ck=$query->num_rows();
                       
                       if( $ck == 0 )
                       {
                                        $this->db->set("indication_detail",$indication_detail);
                                        $inst=$this->db->insert($tb);
                                        if( $inst )
                                        {
                                               echo "true";
                                        }
                                        else
                                        {
                                               echo "false"; 
                                        }
                       }
                      else 
                          {
                                echo "excess"; 
                          }
                 }
                 
                 public  function  del_indication()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/del_indication/45
                     
                      $tb="tb_indication";
                      $id_indication=$this->uri->segment(3);
                      $this->db->where("id_indication",$id_indication);
                      $del=$this->db->delete($tb);
                      if( $del )
                      {
                          echo  json_encode(array("success"=>true));
                      }
                      else
                      {
                           echo  json_encode(array("success"=>false));
                      }
                 }
                 
                 
                 public function tb_disease()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/tb_disease
                     $tb="tb_disease";
                     $query=$this->db->get($tb);
                     foreach($query->result() as $row)
                     {
                         $rows[]=$row;
                     }
                     echo json_encode($rows);
                 }
                 public function  tb_drug()
                 {
                      //http://127.0.0.1/vancom/index.php/welcome/tb_drug
                     $tb="tb_drug";
                     $query=$this->db->get($tb);
                     foreach($query->result() as $row)
                     {
                         $rows[]=$row;
                     }
                     echo json_encode($rows);
                 }
                 public function insert_drug()
                 {
                         //http://127.0.0.1/vancom/index.php/welcome/insert_drug
                          $tb="tb_drug";
                           $drug_detail=trim($this->input->get_post("drug_detail"));
                          //echo br();
                          
                           $query_num=$this->db->query(" select  *  from  $tb  where    drug_detail='$drug_detail' ;  ");
                           $check_num=$query_num->num_rows();
                           
                          if( strlen( $drug_detail )  >  0   &&     $check_num == 0  )
                          {
                                     // $data=array("drug_detail"=>$drug_detail);
                                      //$ck=$this->db->insert($tb,$data);
                                       $this->db->set("drug_detail",$drug_detail);
                                       $ck=$this->db->insert($tb);
                                      if( $ck )
                                      {
                                           echo  "success";
                                      }
                                      else
                                      {
                                           echo  "false";
                                      }
                          }
                 }
                 public  function  del_drug()
                 {
                       //http://127.0.0.1/vancom/index.php/welcome/del_drug/106
                         $id_drug=$this->uri->segment(3);
                         //echo $id_drug;
                            if( $id_drug > 0 )
                            {
                                
                                 $tb="tb_drug";
                                   /*
                                    $this->db->where('id', '5');
                                    $this->db->delete($tables);
                                    */
                                   $this->db->where("id_drug",$id_drug);
                                   $ck=$this->db->delete($tb);
                                   if( $ck )
                                   {
                                       echo  json_encode(array("success"=>true));
                                   }
                                    else {
                                            echo  json_encode(array("success"=>false));
                                    }
                            }
                 }
                 
                 public  function insert_disease()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/insert_disease
                      //echo "T";
                          $disease_detail=trim($this->input->get_post("disease_detail"));
                          $tb="tb_disease";
                          
                          $query_ck=$this->db->query(" select  *  from  $tb  where   disease_detail='$disease_detail'  ;      ");
                          $ck=  $query_ck->num_rows();
                          
                        if( $ck == 0 )
                        {
                                    $this->db->set("disease_detail",$disease_detail);
                                   $inst= $this->db->insert($tb);
                                   if( $inst )
                                   {
                                       echo "true";
                                   }
                                   else
                                   {
                                       echo "false";
                                   }
                        }
                          
                     
                 }
                 
                 public function del_disease()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/del_disease/56
                       $id_disease=$this->uri->segment(3);
                       if(  $id_disease > 0  )
                       {
                           
                                   $tb="tb_disease";
                                   $this->db->where('id_disease',  $id_disease );
                                   $del=$this->db->delete($tb);
                                   if( $del )
                                   {
                                       echo json_encode(array("success"=>true));
                                   }
                                   else
                                   {
                                       echo json_encode(array("success"=>false));
                                   }
                                   
                       }
                     
                 }
                 
                 public function tb_vd()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/tb_vd
                       $tb="tb_vd";
                       $q=$this->db->get($tb);
                       foreach($q->result() as $row)
                       {
                             $rows[]=$row;
                       }
                         echo  json_encode($rows);
                     
                 }
                 public  function  insert_vd()
                 {
                      //http://127.0.0.1/vancom/index.php/welcome/insert_vd
                        $vd_detail = $this->input->get_post("add_vd_detail");
                       $tb="tb_vd";
                       $qck=$this->db->get_where($tb,array("vd_detail"=>$vd_detail));
                        $ck=$qck->num_rows();
                        if( $ck == 0)
                        {
                              $this->db->set("vd_detail",$vd_detail);
                              $inst=$this->db->insert($tb);
                              if( $inst )
                              {
                                     echo "true";
                              }
                              else
                              {
                                     echo "false";
                              }
                        }else{
                            echo "exess";
                        }                 
                 }
                 
                 public  function  del_vd()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/del_vd/10
                       $tb="tb_vd";
                       $id_vd=$this->uri->segment(3);
                       $this->db->where("id_vd",$id_vd);
                       $del=$this->db->delete($tb);
                       if( $del )
                       {
                             echo  json_encode(array("success"=>true));
                       }
                       else
                       {
                             echo   json_encode(array("success"=>false));
                       }
                     
                 }
                 
                 public function  reason_tdm()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/reason_tdm
                     $tb="reason_tdm";
                     $query=$this->db->get($tb);
                     foreach($query->result() as $row)
                     {
                         $rows[]=$row;
                     }
                     echo json_encode($rows);
                 }
                 public  function insert_reason_tdm()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/insert_reason_tdm
                     $tb="reason_tdm";
                   $reason_detail=trim($this->input->get_post("reason_detail"));
                   $q=$this->db->get_where($tb,array("reason_detail"=>$reason_detail));
                   $ck=$q->num_rows();
                   if($ck == 0)
                   {
                       $this->db->set("reason_detail",$reason_detail);
                       $inst=$this->db->insert($tb);
                       if( $inst )
                       {
                           echo "true";
                       }
                       else
                       {
                           echo "false";
                       }
                   }
                   
                 }
                 
                 public  function  del_reason_tdm()
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/del_reason_tdm/
                     $tb="reason_tdm";
                     $id_reason=$this->input->get_post("id_reason");
                     $this->db->where("id_reason",$id_reason);
                     $del=$this->db->delete($tb);
                     if( $del )
                     {
                         echo json_encode(array("success"=>true));
                     }
                     else
                     {
                         echo json_encode(array("success"=>false));
                     }
                 }
                
              public function insert_dia()//บันทึกประวัติการรักษา
              {
                  //echo "TEST";
                    $id_patient=trim($this->input->get_post("HN_dia"));
                  //echo "<br>";
                   $age=trim($this->input->get_post("age"));
                  //echo "<br>";
                    $ward=trim($this->input->get_post("ward"));
                  //echo "<br>";
                   $W=trim($this->input->get_post("W"));  //body weight
                  //echo "<br>";
                   $cb_conts=trim($this->input->get_post("cb_conts")); //ค่าคงที่ 
                  //echo "<br>";
                   $height=trim($this->input->get_post("height")); //Height
                  //echo  "<br>";                 
                  $indication_detail1=trim($this->input->get_post("indication_detail1"));  // Reason for TDM 1 (Indication) :
                  //echo "<br>";
                  $indication_detail2=trim($this->input->get_post("indication_detail2"));  //Reason for TDM 2 (Indication) :
                  //echo "<br>";
                  
                  $disease_detail_1=trim($this->input->get_post("disease_detail_1")); // Underllying disease 1 :
                  //echo "<br>";
 
                  $disease_detail_6=trim($this->input->get_post("disease_detail_6"));   // Underllying disease 6 :
                 // echo "<br>";
 
                  $disease_detail_2=trim($this->input->get_post("disease_detail_2")); // Underllying disease 2 :
                  //echo "<br>";
                  
                  $disease_detail_7=trim($this->input->get_post("disease_detail_7")); //Underllying disease 7 :
                  //echo "<br>";
                  
                  $disease_detail_3=trim($this->input->get_post("disease_detail_3")); // Underllying disease 3 :
                  //echo "<br>";
                  
                  $disease_detail_8=trim($this->input->get_post("disease_detail_8")); // Underllying disease 8 :
                  //echo "<br>";
                  
                 $disease_detail_4=trim($this->input->get_post("disease_detail_4")); // Underllying disease 4 :
                  //echo "<br>";
                  
                  $disease_detail_9=trim($this->input->get_post("disease_detail_9")); //Underllying disease 9 :
                  //echo "<br>";
                  
                  $disease_detail_5=trim($this->input->get_post("disease_detail_5")); // Underllying disease 5 :
                  //echo "<br>";
                  
                  $disease_detail_10=trim($this->input->get_post("disease_detail_10")); // Underllying disease 10 :
                  //echo "<br>";
                  
                  $reason_for_tdm=trim($this->input->get_post("reason_for_tdm")); // Reason for TDM :
                  //echo "<br>";
                  
                  $id_drug=trim($this->input->get_post("id_drug")); // Drug level requested (Vancomycin) :
                  //echo "<br>";
                   
                  $current_medications=trim($this->input->get_post("current_medications")); // Current Medications :
                  //echo "<br>";
                  
                  $current_medications_weight=trim($this->input->get_post("current_medications_weight")); //Current Medications :  g
                  //echo "<br>";
                  
                   $current_medications_date=trim($this->input->get_post("current_medications_date")); //Current Medications  date
                  //echo "<br>";
                  
                  if(  strlen($current_medications_date) > 0  )
                  {
                      $conv_current_medications_date = $this->date->conv_date($current_medications_date);
                     //echo "<br>";
                  }
                  
                   $Laboratory_Data=trim($this->input->get_post("Laboratory_Data")); //Laboratory Data (within 5 day) :
                  //echo "<br>";
                  
                  $Laboratory_Data_mg=trim($this->input->get_post("Laboratory_Data_mg")); //Laboratory Data (within 5 day)  mg/dL
                  //echo "<br>";
                  
                  $Laboratory_Data_date=trim($this->input->get_post("Laboratory_Data_date")); //Laboratory Data (within 5 day) date
                  if(  strlen( $Laboratory_Data_date ) > 0  )
                  {
                      $conv_Laboratory_Data_date = $this->date->conv_date($Laboratory_Data_date);
                     //echo "<br>";
                  }
                  
                  $Sampling_Time=trim($this->input->get_post("Sampling_Time")); // 1. Sampling Time :
                  //echo "<br>";
                  if( strlen($Sampling_Time) > 0 )
                  {
                      $conv_Sampling_Time=$this->date->conv_date_time($Sampling_Time);
                      
                  }
                  
                  $DrugAdministrationTime=trim($this->input->get_post("DrugAdministrationTime"));// 2. Drug Administration Time :
                   if( strlen($DrugAdministrationTime) > 0 )
                  {
                      $conv_DrugAdministrationTime=$this->date->conv_date_time($DrugAdministrationTime);
                      
                  }
                  
                  $Measured_level=trim($this->input->get_post("Measured_level")); //   3. Measured level :
                 //echo "<br>";
                 
                  $Measured_level_cmb=trim($this->input->get_post("Measured_level_cmb"));  //3. Measured level : combobox
                 //echo "<br>";
                
                 //echo "<hr>";
                  $vd_index=trim($this->input->get_post("id_vd")); //Vd :
                 //echo "<hr>";
                 
                  $vd=trim($this->input->get_post("vd")); //Vd L/Kg.
                 //echo "<br>";
                 
                  $cl=trim($this->input->get_post("cl"));
                 //echo "<br>";
                 
                 $ke=trim($this->input->get_post("ke"));
                //echo "<br>";
                
                 $hl=trim($this->input->get_post("hl"));
                //echo "<br>";
                
                $Assessment=trim($this->input->get_post("Assessment"));
                //echo "<br>"; 
                
                 $Interpretation_Recommendation=trim($this->input->get_post("Interpretation_Recommendation"));//Interpretation and Recommendation
                //echo "<br>"; 
                
                 $Note=trim($this->input->get_post("Note"));
                //echo "<br>"; 
                
                 $Pharmacist1=trim($this->input->get_post("Pharmacist1")); //Pharmacist
                //echo "<br>"; 
                 
                 $Pharmacist2=trim($this->input->get_post("Pharmacist2")); //Pharmacist
                //echo "<br>";
                
                $tel=trim($this->input->get_post("tel"));
                //echo "<br>";
                
                 $date_record=trim($this->input->get_post("date_record")); //วันที่บันทึก
                //echo "<br>";
                 
                if(  strlen($date_record) > 0  )
                  {
                      $conv_date_record = $this->date->conv_date($date_record);
                     //echo "<br>";
                  }
                  
                  
                  $tb="tb_diagnosis";
                  $this->db->set("id_patient",$id_patient);
                  $this->db->set("ward_",$ward);
                  $this->db->set("bodyweight",$W);
                  $this->db->set("cb_conts",$cb_conts);
                  $this->db->set("height",$height);
                  $this->db->set("indication1",$indication_detail1);
                  $this->db->set("indication2",$indication_detail2);
                  $this->db->set("underllyingdisease1",$disease_detail_1 );   //underllyingdisease1
                  $this->db->set("underllyingdisease2",$disease_detail_2);
                  $this->db->set("underllyingdisease3",$disease_detail_3);
                  $this->db->set("underllyingdisease4",$disease_detail_4);
                  $this->db->set("underllyingdisease5",$disease_detail_5);
                  
                  $this->db->set("underllyingdisease6",$disease_detail_6 );   //underllyingdisease1
                  $this->db->set("underllyingdisease7",$disease_detail_7);
                  $this->db->set("underllyingdisease8",$disease_detail_8);
                  $this->db->set("underllyingdisease9",$disease_detail_9);
                  $this->db->set("underllyingdisease10",$disease_detail_10);
                  
                  $this->db->set("reason_for_TDM",$reason_for_tdm);
                  $this->db->set("vancomycin",$id_drug  );  // Drug level requested (Vancomycin)
                  
                  $this->db->set("current_medications",$current_medications  );   //Current Medications
                  $this->db->set("current_medications_weight",$current_medications_weight); //Current Medications เป็น g
                  
                  $this->db->set("current_medications_date", $conv_current_medications_date );  //Current Medications  date
                  
                  $this->db->set("sampling_time", $conv_Sampling_Time );//$Sampling_Time
                  
                   $this->db->set("drugadministrationtime", $conv_DrugAdministrationTime );//$Sampling_Time  //$DrugAdministrationTime
                  
                   $this->db->set("measured_level",$Measured_level); //$Measured_level
                   
                   $this->db->set("measured_level_cmb",$Measured_level_cmb); // 3. Measured level :  combobox (unit)
                   
                   $this->db->set("vd_index",$vd_index);   
                  
                   $this->db->set("vd",$vd);     // L/kg              

                   $this->db->set("cl",$cl);
                   
                   $this->db->set("ke",$ke);
                   
                   $this->db->set("hl",$hl);
                   
                   $this->db->set("assessment",$Assessment);  //Assessment
                  
                   $this->db->set("Interpretation_Recommendation",$Interpretation_Recommendation); //Interpretation_Recommendation  
                   
                   $this->db->set("Note",$Note);
                   
                   $this->db->set("pharmacist1",$Pharmacist1);
                   
                   $this->db->set("pharmacist2",$Pharmacist2);      
                   
                   $this->db->set("tel",$tel);
                   
                   $this->db->set("date_record",$conv_date_record);   //date_record
                   
                  $ck_inst=$this->db->insert($tb);
                  if( $ck_inst )
                  {
                      echo "true";
                  }else
                  {
                      echo "false";
                  }
                  
              }
              
       function  tb_diagnosis() //table datagrid diagnosis
       {
          #http://localhost/vancom/index.php/welcome/tb_diagnosis
           $tb="tb_diagnosis";
           $tbj1="tb_drug";
           $tbj2="tb_patient";
           $tbj3="tb_indication";
           $tbj4="tb_disease"; //underllyingdisease1  id_disease
          // $tbj5="tb_indication"; //Reason for TDM    id_indication   reason_for_TDM
           
           $this->db->join($tbj1,$tb.".vancomycin=".$tbj1.".id_drug"); # Drug level requested (Vancomycin)
           $this->db->join($tbj2,$tb.".id_patient=".$tbj2.".id_patient"); #ชื่อนามสกุล ของคนไข้
           $this->db->join($tbj3,$tb.".indication1=".$tbj3.".id_indication"); #Reason for TDM 1 (Indication) :
           $this->db->join($tbj4,$tb.".underllyingdisease1=".$tbj4.".id_disease"); #Underllying disease 1
          // $this->db->join($tbj5,$tb.".reason_for_TDM=".$tbj5.".id_indication"); //Reason for TDM
           
           $query=$this->db->get($tb,10,0);
           foreach($query->result() as $row )
           {
               $rows[]=$row;
           }
           echo json_encode($rows);
       }
       function fetch_diagnosis()
       {
           #http://localhost/vancom/index.php/welcome/fetch_diagnosis/47 
           $id=$this->uri->segment(3);
           //echo $id;
           $tb="tb_diagnosis";
           $query=$this->db->get_where($tb,array("id_diagnosis"=>$id));
           foreach($query->result() as $row)
           {
               $rows[]=$row;
               
           }
           echo json_encode($rows);
       }
       function  del_diagnosis() //delete  
       {
           #http://localhost/vancom/index.php/welcome/del_diagnosis
           // $id=trim($this->input->get_post("id_drug"));
            $id=$this->uri->segment(3);
           
           
            if( $id > 0 )
            {
                $tb="tb_diagnosis";
                $this->db->where("id_diagnosis",$id);
                $ck=$this->db->delete($tb);
                if($ck)
                {
                    echo "true";
                }else
                {
                    echo "false";
                }
                
            }
            
            
            
            
       }
      function update_diagnosis()
      {
          #http://localhost/vancom/index.php/welcome/update_diagnosis
          $tb="tb_diagnosis";
          //echo  $age_up=trim($this->input->get_post("age_up"));
          //  trim($this->input->get_post('ward_up'));
         
          echo $id_diagnosis = trim($this->input->get_post("id_diagnosis"));
          echo "<br>";
          
          if( $id_diagnosis > 0 )
          {
             echo $ward_up=trim($this->input->get_post("ward_up"));
             echo "<br>";
             if( !empty($ward_up) )
                  {
                     $data1=array("ward_"=>$ward_up);
                     $this->db->where("id_diagnosis",$id_diagnosis);
                     $ck1=$this->db->update($tb,$data1);
                     if($ck1)
                     {
                         echo "T1";
                     }
                  }
             echo $W_up=trim($this->input->get_post("W_up"));  
             echo "<br>";
             if( !empty($W_up)  )
             {
                 $data2=array("bodyweight"=>$W_up);
                 $this->db->where("id_diagnosis",$id_diagnosis);
                 $ck2=$this->db->update($tb,$data2);
                 if($ck2)
                     {
                         echo "T2";
                     }
             }
             
             
                 
              //cb_conts    
                  
        
          }
          
      }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */