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
                
                         
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */