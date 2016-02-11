<?php
class  Date  extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function  conv_date($dmy)// change  date format  y-m-d
    {
        if( strlen($dmy) > 0 )
        {
            //echo "T";
            $ex=explode("/",$dmy);
            return  $ex[2]."-".$ex[0]."-".$ex[1]; 
        }
    }
    function conv_date_time($dmy)
    {
        if( strlen($dmy) > 0 )
        {
            $ex1=  explode(" ",$dmy);
            //echo $ex1[0];
            $dmy=explode("/",$ex1[0]);
            $dmy1= $dmy[2]."-".$dmy[0]."-".$dmy[1];
            
            return  $dmy1." ".$ex1[1];
        }
    }
    
    
}
?>